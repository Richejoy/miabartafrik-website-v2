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

    $("#publicationContent").emojioneArea({
        useInternalCDN: true,
        pickerPosition: 'bottom',
        /*filtersPosition: "bottom",
        searchPosition: "bottom",
        hidePickerOnBlur: true,*/
    })

    /*$('#publication-form').submit(function (e) {
        e.preventDefault()
        const url = $(this).attr('action')
        let data = $(this).serialize()

        $('#btn-submit-publication').attr('disabled', 'disabled')

        $("#publicationContent").data("emojioneArea").hidePicker();

        $('#publicationContent').val('')

        $("#publicationContent").data("emojioneArea").showPicker();

        $.post(url, data)
        .done(function (response) {
            console.log(response)

            callLivewireEvent('publicationCreated')
        }).fail(function (error) {
            console.log(error)
        })

        $('#btn-submit-publication').removeAttr('disabled')
        $('#publication-input').val('')

        $(this).trigger('reset')
    })*/

    $('[data-toggle-publication-state]').click(function (e) {
        e.preventDefault()

        let classAttr;
        let dataAttr;

        $('#publicationStateId').val($(this).data('toggle-publication-state'))

        switch($('#publicationStateId').val()) {
            case '3':
                classAttr = 'post__privacy fe fe-users'
                dataAttr = 'Amis'
                break;

            case '2':
                classAttr = 'post__privacy si si-lock'
                dataAttr = 'Privée'
                break;

            default:
                classAttr = 'post__privacy si si-globe'
                dataAttr = 'Publique'
        }

        $('#publication-state').attr('class', classAttr)
        $('#publication-state').attr('data-original-title', dataAttr)
    })

})

Livewire.on('publicationCreated', () => {
    console.error('okkkk')

    //$('publicationContent').val('')
    //$("#publicationContent").data("emojioneArea").enable()
})

Livewire.on('publicationFormSet', () => {
    console.error('okkkkcsc')
})