require('./bootstrap');

require('jquery');

window.Echo.channel('publication')
.listen('PublicationEvent', (e) => {
	console.log(e);
});
