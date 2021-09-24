<template>
    <div>
        <form method="POST" :action="routeName" @submit.prevent="handleSubmit()">
            <div class="write_post_container">
                <div class="media">
                    <div class="media-user mr-2">
                        <div class="main-img-user avatar-md">
                            <img :alt="user.library.description" class="rounded-circle" :src="user.library.remote">
                        </div>
                    </div>
                    <div class="media-body">
                        <h6 class="mb-0 mg-t-2">{{ user.username }}</h6>
                        <span class="post__date">
                          <a href="#">{{ currentDate() }}</a>
                        </span>

                        <span class="post__date-privacy-separator">&nbsp;</span>

                        <i v-if="(publicationState == 3)" class="post__privacy fe fe-users" data-toggle="tooltip" title="" data-original-title="Amis"></i>
                        <i v-else-if="(publicationState == 2)" class="post__privacy si si-lock" data-toggle="tooltip" title="" data-original-title="Privée"></i>
                        <i v-else="(publicationState == 1)" class="post__privacy si si-globe" data-toggle="tooltip" title="" data-original-title="Publique"></i>

                        <span class="dropdown">
                            <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false">
                            <i class="fe fe-chevron-down"></i></a>

                            <div class="dropdown-menu dropdown-menu-left shadow" style=""> 
                                <a class="dropdown-item" href="#" @click.prevent="setPublicationState(1)">Publique</a> 
                                <a class="dropdown-item" href="#" @click.prevent="setPublicationState(2)">Privée</a> 
                                <a class="dropdown-item" href="#" @click.prevent="setPublicationState(3)">Amis</a> 
                            </div>                
                        </span>

                    </div>
                </div>

                <div class="post_input_container">
                    <textarea required class="form-control" :placeholder="'A quoi penses-tu, ' + user.username + ' ?'" id="publicationContent" v-model="publicationContent" rows="3"></textarea>
                    <input type="hidden" v-model="publicationState">
                    <div class="page-header">
                        <div>
                            <label for="media">
                                <i class="fe fe-paperclip" data-toggle="tooltip" title="" data-original-title="Ajouter un média"></i>
                                <input type="file" name="media" id="media" class="sr-only" accept=".jpeg, .jpg, .png, .mp3, .mp4, .pdf, .wav, .gif">
                            </label>
                        </div>
                        <div class="d-flex">
                            <div class="justify-content-center">
                                <button type="submit" class="btn btn-secondary btn-icon-text">
                                  <i class="fe fe-send mr-2"></i> Publier
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: {
            user: {
                type: Object
            }
        },
        methods: {
            currentDate() {
              const current = new Date()
              const date = `${current.getDate()}/${current.getMonth()+1}/${current.getFullYear()}`
              return date
            },
            setPublicationState(state) {
                this.publicationState = state
            },
            handleSubmit() {
                console.log(this.publicationState, this.publicationContent)

                this.publicationState = 1
                this.publicationContent = ''
            }
        },
        data() {
            return {
                routeName: laroute.route('publication.store'),
                publicationState: 1,
                publicationContent: '',
            }
        },
        created() {
            
        }
    }
</script>
