/**
 * Created by mario on 02/oct/2017.
 */
$(document).ready(function () {
    var ratio = 1.33;
    var player = $('#player');
    var width = player.width();
    var height = width / ratio;
    var video_js = $('.video-js');
    video_js.css('width', width + 'px');
    video_js.css('height', height + 'px');
});
