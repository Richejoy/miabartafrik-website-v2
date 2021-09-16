require('./bootstrap');

require('jquery');

/**/
$('[data-toggle-publication-state]').on('click', function (e) {
    e.preventDefault();

    let classAttr;
    let dataAttr;

    $('#publicationStateId').val($(this).data('toggle-publication-state'));

    switch($('#publicationStateId').val()) {
        case '3':
            classAttr = 'post__privacy fe fe-users';
            dataAttr = 'Amis';
            break;

        case '2':
            classAttr = 'post__privacy si si-lock';
            dataAttr = 'Privée';
            break;

        default:
            classAttr = 'post__privacy si si-globe';
            dataAttr = 'Publique';
    }

    $('#publication-state').attr('class', classAttr);
    $('#publication-state').attr('data-original-title', dataAttr);
});
/**/

/**/
$('#publicationForm').on('submit', function (e) {
	e.preventDefault();

	const url = $(this).attr('action');
	const state = $('#publicationStateId').val();
	const message = $('#publicationContent').val();

	const data = {
		state: state,
		message: message
	}

	$.post(url, data)
    .done(function (response) {
        console.log(response)
     }).fail(function (error) {
        console.log(error)
    })
});
/**/

window.Echo.channel('publication')
.listen('PublicationEvent', (e) => {
	console.log(e);
});