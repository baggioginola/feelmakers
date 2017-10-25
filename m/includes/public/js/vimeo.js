/**
 * Created by mario on 02/oct/2017.
 */
$(document).ready(function () {
    var player = $('#player_banner');
    var rd_video = $('#mobile_video_banner');

    var videoId = rd_video.data('video-id');

    console.log(videoId);
    var height = rd_video.height();
    var width = rd_video.width();

    console.log(width);
    player.after('<iframe src="https://player.vimeo.com/video/' + videoId + '?&title=0&byline=0&portrait=0" frameborder="0" style="position: absolute; top: 0px;" width="' + width + '" height="' + height + '"></iframe>');
});
