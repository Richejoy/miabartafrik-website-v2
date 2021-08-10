$(function() {
	'use strict'
	
	$('.select2').select2({
		placeholder: 'Sélectionner',
		width: '100%'
	});
	$('#selectForm').parsley();
	$('#selectForm2').parsley();
});