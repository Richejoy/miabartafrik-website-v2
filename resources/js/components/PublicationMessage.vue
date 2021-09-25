<template>
    <div>
        <div class="card-header">
            <div class="media">
                <div class="media-user mr-2">
                    <div class="main-img-user avatar-md">
                        <img alt=""
                        class="rounded-circle"
                        :src="publication.user.library.remote">
                    </div>
                </div>
                <div class="media-body">
                    <h6 class="mb-0 mg-t-2 ml-2">{{ publication.user.username }}</h6>
                    <span class="text-primary ml-2">{{ publication.created | formatDate('DD/MM/YYYY à hh:mm') }}</span>

                    <span class="post__date-privacy-separator">&nbsp;</span>

                    <i v-if="(publication.publication_state_id == 3)" class="post__privacy fe fe-users" data-toggle="tooltip" title="" data-original-title="Amis"></i>
                    <i v-else-if="(publication.publication_state_id == 2)" class="post__privacy si si-lock" data-toggle="tooltip" title="" data-original-title="Privée"></i>
                </div>
                <div class="ml-auto">
                    <div v-if="(publication.user_id == user.id)" class="dropdown">
                        <a class="new option-dots2" data-toggle="dropdown" href="#" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right shadow">
                            <a class="dropdown-item" href="#" @click.prevent="deletePublication(publication.id)">Supprimer</a>

                            <span v-if="(publication.publication_state_id == 1)">
                                <a class="dropdown-item" href="#" @click.prevent="updatePublicationState(publication.id, 2)">Rendre privée</a>

                                <a class="dropdown-item" href="#" @click.prevent="updatePublicationState(publication.id, 3)">Rendre amical</a>
                            </span>
                            <span v-else-if="(publication.publication_state_id == 2)">
                                <a class="dropdown-item" href="#" @click.prevent="updatePublicationState(publication.id, 1)">Rendre publique</a>

                                <a class="dropdown-item" href="#" @click.prevent="updatePublicationState(publication.id, 3)">Rendre amical</a>
                            </span>
                            <span v-else>
                                <a class="dropdown-item" href="#" @click.prevent="updatePublicationState(publication.id, 1)">Rendre publique</a>

                                <a class="dropdown-item" href="#" @click.prevent="updatePublicationState(publication.id, 2)">Rendre privée</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-body">
            <div class="post_text mg-t-0" v-html="publication.content"></div>

            <div v-if="(library = publication.libraries[0])" class="container">       
                <div v-if="(library.library_type_id == 1)" class="grid-item detail-photo-grid">
                    <a data-fancybox="gallery" :href="library.remote">
                        <img :src="library.remote" class="mCS_img_loaded" :alt="library.description">
                    </a>
                </div>
                <div v-else-if="(library.library_type_id == 3)" class="miabartvideo_mba__row">
                    <div class="videoWrapper_mba">
                        <div class="video-preview-image_mba" :style="'https://miabartafrik.com/public/assets/img/artiste/slim-girl.jpg'"></div>
                        <div class="mbr-figure" style="width: 100%;"><iframe class="mbr-embedded-video" :src="library.remote + '?loop=0&amp;autoplay=1'" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>
                    </div>
                </div>
                <div v-else-if="(library.library_type_id == 4)" class="post_audio">
                    <audio class="audio_player" controls>
                        <source :src="library.remote">
                        Your browser dose not Support the audio Tag
                    </audio>
                </div>
            </div>

            <div class="media mg-t-15 profile-footer">
                <div class="media-user mr-2">
                    <div class="demo-avatar-group">
                        <div class="demo-avatar-group main-avatar-list-stacked">
                            <div v-for="user in publication.users.slice(0,3)" :key="user.id" class="main-img-user">
                                <img :alt="user.library.description"
                                    class="rounded-circle"
                                    :src="user.library.remote">
                            </div>

                            <div class="main-avatar"> +{{ publication.users.slice(0,3).length }}</div>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <h6 class="mb-0 mg-t-10">
                        <span v-if="(publication.users.length > 0)">
                            <span v-if="publication.users.includes(user)">
                            vous et {{ publication.users.length }} {{ 'autre' | pluralize(publication.users.length) }} {{ 'personne' | pluralize(publication.users.length) }}
                                <span v-if="(publication.users.length == 1)">aime</span><span v-else>aiment</span> la publication.
                            </span>
                            <span v-else>
                                {{ publication.users.length }} {{ 'personne' | pluralize(publication.users.length) }}
                                <span v-if="(publication.users.length == 1)">aime</span><span v-else>aiment</span> la publication.
                            </span>
                        </span>
                        <span v-else>Aucun j'aime</span>
                    </h6>
                </div>
                <div class="ml-auto">
                    <div class="dropdown show">
                        <a class="new" href="#" data-toggle="modal" data-target="#publicationViewModal"><i class="far fa-comment mr-3"></i></a>

                        <a class="new" href="#" @click.prevent="toggleLikeUser(publication.id)">
                            <i v-if="publication.users.includes(user)" class="far fa-heart mr-3 text-success"></i>
                            <i v-else class="far fa-heart mr-3"></i>
                        </a>

                        <a class="new" href="#"><i class="far fa-share-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            user: {
                type: Object
            },
            publication: {
                type: Object
            }
        },
        methods: {
            deletePublication(id) {
                console.log(id)
            },
            updatePublicationState(id, state) {
                console.log(id, state)
            },
            toggleLikeUser(id) {
                console.log(id)
            }
        },
        data() {
            return {
                
            }
        }
    }
</script>