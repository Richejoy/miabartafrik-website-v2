<template>
    <form method="POST" @submit.prevent="handleSubmit()">
        <div class="write_post_container">
            <div class="media">
                <div class="media-user mr-2">
                    <div class="main-img-user avatar-md">
                        <img :alt="user.library.description" class="rounded-circle" :src="user.library.remote">
                    </div>
                </div>
                <div class="media-body">
                    <h6 class="mb-0 mg-t-2">{{ 'A quoi penses-tu, ' + user.username + ' ?' }}</h6>
                    <span class="post__date">
                      <a href="#">{{ currentDate() }}</a>
                    </span>

                    <span class="post__date-privacy-separator">&nbsp;</span>

                    <i v-if="(publication.stateId == 3)" class="post__privacy fe fe-users" data-toggle="tooltip" title="" data-original-title="Amis"></i>
                    <i v-else-if="(publication.stateId == 2)" class="post__privacy si si-lock" data-toggle="tooltip" title="" data-original-title="Privée"></i>
                    <i v-else="(publication.stateId == 1)" class="post__privacy si si-globe" data-toggle="tooltip" title="" data-original-title="Publique"></i>

                    <span class="dropdown">
                        <a class="new option-dots2" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fe fe-chevron-down"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-left shadow" style=""> 
                            <a class="dropdown-item" href="#" @click.prevent="setPublicationState(1)">Publique</a> 
                            <a class="dropdown-item" href="#" @click.prevent="setPublicationState(2)">Privée</a> 
                            <a class="dropdown-item" href="#" @click.prevent="setPublicationState(3)">Amis</a> 
                        </div>                
                    </span>

                </div>
            </div>

            <div class="post_input_container">

                <ckeditor tag-name="textarea" :config="ckeditor.config" :editor-url="ckeditor.url" v-model.lazy="publication.content" @namespaceloaded="onNamespaceLoaded"></ckeditor>
                <input type="hidden" v-model="publication.stateId">

                <div class="page-header py-0 pt-0 m-0">
                    <div> 
                        <ul class="icons-list">
                            <li @click="toggleEmojiBox" class="icons-list-item icons_recharge" data-toggle="tooltip" title="" data-original-title="Ajouter emoji">
                                <i class="si si-emotsmile"></i>
                            </li>

                            <li class="icons-list-item icons_recharge" data-toggle="tooltip" title="" data-original-title="Ajouter une photo">
                                <vue-upload-component
                                    v-model="publication.image"
                                    :size="1024 * 1024"
                                    accept="image/*"
                                    :headers="{'X-Token-CSRF': csrf}"
                                >
                                <i class="si si-camera"></i>
                                </vue-upload-component>
                            </li>

                            <li class="icons-list-item icons_recharge" data-toggle="tooltip" title="" data-original-title="Ajouter une vidéo">
                                <vue-upload-component
                                    v-model="publication.video"
                                    :size="1024 * 1024"
                                    accept="video/*"
                                    :headers="{'X-Token-CSRF': csrf}"
                                >
                                <i class="si si-social-youtube"></i>
                                </vue-upload-component>
                            </li>

                            <li class="icons-list-item icons_recharge" data-toggle="tooltip" title="" data-original-title="Ajouter un audio">
                                <vue-upload-component
                                    v-model="publication.audio"
                                    :size="1024 * 1024"
                                    accept="audio/*"
                                    :headers="{'X-Token-CSRF': csrf}"
                                >
                                <i class="si si-music-tone-alt"></i>
                                </vue-upload-component>
                            </li>
                        </ul>   
                    </div>

                    <div class="" v-if="emojiBox">
                        <picker set="emojione" @select="addEmojiToTextarea" title="Select your emoji" />
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
</template>

<script>
    import '@uscreentv/emoji-mart-vue/css/emoji-mart.css'
    import { Picker } from '@uscreentv/emoji-mart-vue'

    export default {
        components: {
            Picker
        },
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
            setPublicationState(stateId) {
                this.publication.stateId = stateId
                console.log(this.publication.stateId)
            },
            handleSubmit() {
                if ((this.publication.content == null) || (this.publication.content == '') || (this.publication.stateId == null) || (this.publication.stateId == 0)) {
                    return
                }

                axios.post(laroute.route('publication.store'), this.publication)
                .then((response) => {
                    //console.log(response.data)
                })
                .catch((error) => {
                    console.log(error)
                })

                this.publication.stateId = 1
                this.publication.content = null
            },
            toggleEmojiBox() {
                this.emojiBox = !this.emojiBox
            },
            addEmojiToTextarea( emoji ) {
                if(!emoji) {
                    return false
                }
                if (this.publication.content == null) {
                    this.publication.content = emoji.native
                } else {
                    this.publication.content.concat(emoji.native)
                }
            },
            onNamespaceLoaded( CKEDITOR ) {
                //CKEDITOR.plugins.addExternal( 'emojione', '/path/to/the/emojione/plugin', 'plugin.js' )
            }
        },
        data() {
            return {
                csrf: document.head.querySelector('meta[name="csrf-token"]').content,
                emojiBox: false,
                publication: {
                    stateId: 1,
                    content: null,
                    image: null,
                    audio: null,
                    video: null
                },
                ckeditor: {
                    config: {

                    },
                    url: 'https://cdn.ckeditor.com/4.16.2/basic/ckeditor.js'
                }
            }
        },
        mounted() {
            
        }
    }
</script>
