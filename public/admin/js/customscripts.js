
jQuery(document).ready(function ($) {
    setTimeout(() => {
        $('#status_massege').slideUp('slow');
    }, 2000);
});

$(function () {
    // Multiple images preview in browser
    var imagesPreview = function (input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    $($.parseHTML('<img class="m-5" style="width:150px">')).attr('src', event.target
                        .result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    $('#thumbnail').on('change', function () {
        imagesPreview(this, 'div.upload_image_preview');
    });
});
