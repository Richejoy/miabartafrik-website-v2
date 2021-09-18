"use strict"

$(function () {

    [].slice.call(document.querySelectorAll('.tabs_miabartafrik')).forEach(function(el) {
        new CBPFWTabs(el);
    });

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
    })

    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $('span.share-artist').click(function(e) {
        let div = $(this).data('show')
        $('#' + div).slideToggle()
    });

    $('span.share-photographer').click(function(e) {
        let div = $(this).data('show')
        $('#' + div).slideToggle()
    });

    $('span.share-partner').click(function(e) {
        let div = $(this).data('show')
        $('#' + div).slideToggle()
    })

    $('a.avantage').click(function(e) {
        e.preventDefault()
        var div = $(this).data('show')
        $('#' + div).slideToggle()
    })

    /*$("#publicationContent").emojioneArea({
        useInternalCDN: true,
        pickerPosition: 'bottom',
    })*/

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

    $('#publicationForm').submit(function () {
        $(this).ajaxSubmit({ success: showPublicationResponse, clearForm: true, resetForm: true });
        
        return false;
    });

})

//Publication ajax callback
function showPublicationResponse(responseText, statusText, xhr, $form) {
    console.log(responseText);
}