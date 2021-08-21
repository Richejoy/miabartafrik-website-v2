$(function() {
	'use strict'
	
	$('.select2').select2({
		placeholder: '',
		width: '100%'
	});
	$('#selectForm').parsley();
	$('#selectForm2').parsley();
});