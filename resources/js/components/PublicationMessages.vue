<template>
    <div class="main-content-body tab-pane border-top-0 active" id="timeline">
        <div class="post_news">
            <div class="main-content-body main-content-body-profile">
                <div class="main-profile-body p-0">
                    <div class="row row-sm">
                        <div class="col-12" v-if="(publications.length > 0)">
                            <table class="table table-bordered text-center">
                                <tr>
                                    <th class="bg-white">Vous : {{ userPublications.length }}</th>
                                    <th class="bg-white">Les autres : {{ (publications.length - userPublications.length) }}</th>
                                    <th class="bg-white">Total : {{ publications.length }}</th>
                                </tr>
                            </table>

                            <div class="card mg-b-20 border" v-for="publication in publications" :key="publication.id">

                                <publication-message :user="user" :publication="publication"></publication-message>

                            </div>
                        </div>
                        <div class="page_miabartAfrik_not_found" v-else>  
                            <div class="content_miabartAfrik_not_found"> 
                                <h2>Aucune donnée trouver</h2>
                                <p>Revenez plus tard</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PublicationMessage from './PublicationMessage.vue'

    export default {
        components: {
            PublicationMessage
        },
        props: {
            user: {
                type: Object
            }
        },
        methods: {
            getUserPublications() {
                axios.get(laroute.route('publication.user_messages'))
                .then((response) => {
                    this.userPublications = response.data
                    console.log(this.userPublications)
                })
                .catch((error) => {
                    console.error(error)
                })
            },
            getPublications() {
                axios.get(laroute.route('publication.messages'))
                .then((response) => {
                    this.publications = response.data
                    console.log(this.publications)
                })
                .catch((error) => {
                    console.error(error)
                })
            }
        },
        data() {
            return {
                userPublications: [],
                publications: []
            }
        },
        created() {
            this.getUserPublications()
            this.getPublications()
        },
        mounted() {
            Echo.channel('publication')
            .listen('PublicationEvent', (e) => {
                this.publications.unshift(e.publication)
            })
        }
    }
</script>