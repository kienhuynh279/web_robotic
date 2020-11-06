function ckeditorConfig(element) {
    if(document.querySelector(`#${element}`)) {
        CKEDITOR.replace( element, {
            filebrowserBrowseUrl: '/ckfinder/browser',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserWindowWidth: '1000',
            filebrowserWindowHeight: '700',
            height: 500
        });
    }
}
