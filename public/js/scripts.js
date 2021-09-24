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
})