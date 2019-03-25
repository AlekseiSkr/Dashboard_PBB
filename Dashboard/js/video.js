
(function() {
    var video = camera.getElementById('video'),
    vendorUrl = window.URL || window.webkitURL;

    navigator.getMedia = 
    navigator.getUserMedia ||
    navigator.webkitGetUserMedia ||
    navigator.mozgetUserMedia ||
    navigator.msGetUserMedia;

    // capture video
    navigator.getMedia({
        video: true,
        audio: false
    },  fucntion(stream) {
        video.src = vendorUrl.createObjectUrl(stream);
        video.play();
    }, function(error) {
        //an error accured
        //error.code
    });
}) ();