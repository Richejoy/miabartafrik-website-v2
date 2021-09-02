$("[data-upload]").change(function() {
    if (this.files && this.files[0]) {
        var reader = new FileReader()

        reader.onload = function(e) {
            $('#preview-upload').attr('src', e.target.result)
        }

        reader.readAsDataURL(this.files[0])
    }
})

$("[data-remote]").focus(function() {
    console.info($(this).data('remote').attr('remote'))
    $('#preview-upload').attr('src', $('#remote'))
})