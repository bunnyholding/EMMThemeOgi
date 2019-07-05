$(document).ready(function() {
    $('body').one('click','#video', function() {
        let video = $(this);
        video.find('.loading, .loader').show();
        setTimeout(function () {
            video.find('.loader').hide();
            video.find('.loaded').show();
        }, 2500);
    });
});