$("[data-upload]").on('change', function() {
    //for local
    if (this.files && this.files[0]) {
        var reader = new FileReader()

        reader.onload = function(e) {
            $('#preview-upload').attr('src', e.target.result)
        }

        reader.readAsDataURL(this.files[0])
    }
}).on('focus', function() {
    //for url
    $('#preview-upload').attr('src', this.value)
})