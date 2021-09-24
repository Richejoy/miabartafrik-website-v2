<template>
	<div>
		<publication-form :user="user"></publication-form>
		
		<publication-messages :user="user"></publication-messages>
	</div>
</template>

<script>
	import PublicationForm from './PublicationForm.vue'
	import PublicationMessages from './PublicationMessages.vue'

	export default {
		components: {
			PublicationForm,
			PublicationMessages
		},
		props: {
			user: {
				type: Object
			}
		},
		methods: {
			
		},
		data() {
			return {
				
			}
		},
		created() {
			
		}
	}
</script>