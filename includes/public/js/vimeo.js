(function ($) {
    var RDYoutubeBG = function (element, options) {
        this.options = options;
        this.settings = {'contentClass': 'rd-video_cnt', 'wrapClass': 'rd-video', 'overlayClass': 'rd-overlay'}
        this.$wrap = $(element);
        this.player;
    };
    RDYoutubeBG.prototype = {
        init: function () {
            var video = this;
            video.createDOM();
            video.addStyles();
            video.addApi();
        }, createDOM: function () {
            var video = this;
            video.$wrap.wrap($('<div/>', {'class': video.settings.wrapClass})).parent().append($('<div/>', {'class': video.settings.contentClass})).append($('<div/>', {'class': video.settings.overlayClass}));
            $('.' + video.settings.contentClass).prepend(video.$wrap.html());
            video.$wrap.empty();
        }, addStyles: function () {
            var video = this;
            video.$wrap.parent().css({'position': 'relative', 'overflow': 'hidden', 'z-index': video.options.zIndex});
            video.$wrap.css({'position': 'absolute', 'z-index': -2});
            video.$wrap.parent().find('.' + video.settings.overlayClass).css({
                'position': 'absolute',
                'top': 0,
                'left': 0,
                'width': '100%',
                'height': '100%',
                'z-index': -1
            })
        }, createPlayer: function () {
            var video = this;
            video.player = new YT.Player(video.$wrap.attr('id'), {
                height: '1080',
                width: '1920',
                videoId: video.options.videoId,
                playerVars: {controls: 0, showinfo: 0, modestbranding: 1, wmode: 'transparent', iv_load_policy: 3},
                events: {
                    'onReady': function (e) {
                        video.onPlayerReady(e, video);
                    }
                }
            });
        }, addApi: function () {
            var video = this;
            if (!video.options.mobile && video.isMobile()) {
                console.log('mobile');
                video.$wrap.parent().find('.' + video.settings.overlayClass).css({
                    'background-image': 'url(' + video.options.imageUrl + ')',
                    'background-size': 'cover'
                });
            } else {
                if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
                    console.log('yt');
                    var tag = document.createElement('script');
                    tag.src = "https://www.youtube.com/iframe_api";
                    var firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                    window.onYouTubePlayerAPIReady = function () {
                        var player = $('#player');
                        var rd_video = $('.rd-video');

                        var height = rd_video.height();
                        var width = rd_video.width();


                        //player.after('<iframe src="https://player.vimeo.com/video/182418365?background=1&autoplay=1&loop=1" frameborder="0" muted style="position: absolute; z-index: -2; top: 0px;" width="' + width + '" height="' + height + '"></iframe>');
                        player.after('<iframe src="https://www.youtube.com/embed/Bj7Zfs8wZm8?autoplay=1&loop=1&mute=1" frameborder="0" muted style="position: absolute; z-index: -2; top: 0px;" width="' + width + '" height="' + height + '"  "></iframe>');
                        //<iframe width="560" height="315" src="https://www.youtube.com/embed/Bj7Zfs8wZm8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        //video.createPlayer();
                    };
                } else {
                    console.log('yt else');
                    var rd_video = $('.rd-video');

                    var height = rd_video.height();
                    var width = rd_video.width();

                    var player = $('#player');
                    player.after('<iframe src="https://www.youtube.com/embed/Bj7Zfs8wZm8?autoplay=1" frameborder="0" muted style="position: absolute; z-index: -2; top: 0px;" width="' + width + '" height="' + height + '  "></iframe>');
                    //player.after('<iframe src="https://player.vimeo.com/video/182418365?background=1&autoplay=1&loop=1" frameborder="0" muted style="position: absolute; z-index: -2; top: 0px;" width="' + width + '" height="' + height + '"></iframe>');
                    //video.createPlayer();
                }
            }
        }, onPlayerReady: function (e, video) {
            video.player.seekTo(video.options.start);
            if (video.options.mute)video.player.mute();
            video.player.playVideo();
            video.setLoop();
            video.resize();
        }, setLoop: function () {
            var video = this;
            var duration = video.player.getDuration();
            setInterval(function () {
                if (video.player.getCurrentTime() > duration - 1) {
                    video.player.seekTo(video.options.start);
                }
            }, 500)
        }, resize: function () {
            var video = this;
            var $el = $('#' + video.$wrap.attr('id'));
            $el.removeAttr('height').removeAttr('width');
            $(window).resize(function () {
                var width = $el.parent().width(), pWidth, height = $('.' + video.settings.wrapClass).height(), pHeight
                if (width / video.options.ratio < height) {
                    pWidth = Math.ceil(height * video.options.ratio);
                    $el.width(pWidth).height(height).css({left: (width - pWidth) / 2, top: 0});
                } else {
                    pHeight = Math.ceil(width / video.options.ratio);
                    $el.width(width).height(pHeight).css({left: 0, top: (height - pHeight) / 2});
                }
            }).resize();
        }, isMobile: function () {
            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        }, createVimeo: function () {
            var videoUrl = 'http://www.vimeo.com/227856242';

            var endpoint = 'http://www.vimeo.com/api/oembed.json';

            var callback = 'embedVideo';

            var url = endpoint + '?url=' + encodeURIComponent(videoUrl) + '&autoplay=true';


            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            console.log(firstScriptTag);
            console.log(tag);
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        }
    };
    $.fn.rdyoutubebg = function (option) {
        var element = this.each(function () {
            var options = $.extend({}, $.fn.rdyoutubebg.defaults, option);
            new RDYoutubeBG(this, options).init();
        });
        return element;
    };
    $.fn.rdyoutubebg.defaults = {
        ratio: 16 / 9,
        videoId: '',
        mute: true,
        start: 1,
        zIndex: 5,
        mobile: false,
        imageUrl: ''
    };
    window.RDYoutubeBG_autoinit = function (selector) {
        $(selector).each(function () {
            var options = $.extend({}, $.fn.rdyoutubebg.defaults, {
                ratio: $(this).data('ratio'),
                videoId: $(this).data('video-id'),
                mute: $(this).data('mute'),
                start: $(this).data('start'),
                zIndex: $(this).data('z-index'),
                mobile: $(this).data('mobile'),
                imageUrl: $(this).data('image-url')
            });
            if (options.videoId) {
                new RDYoutubeBG(this, options).init();
            } else {
                console.error('RD Youtube BG: data-videoId is not defined');
            }
        });
    };
})(jQuery);

(function ($) {
    $(document).ready(function () {
        RDYoutubeBG_autoinit('.rd-youtube-bg');
    })
})(jQuery);


/*
 (function ($) {
 $(document).ready(function () {

 var videoUrl = 'http://www.vimeo.com/7100569';

 var endpoint = 'http://www.vimeo.com/api/oembed.json';

 var callback = 'embedVideo';

 var url = endpoint + '?url=' + encodeURIComponent(videoUrl) + '&background=1&callback=' + callback + '&autoplay=true';

 // This function loads the data from Vimeo
 function init() {
 var js = document.createElement('script');
 js.setAttribute('type', 'text/javascript');
 js.setAttribute('src', url);
 document.getElementsByTagName('head').item(0).appendChild(js);
 }
 // Call our init function when the page loads
 window.onload = init;
 })
 })(jQuery);

 function embedVideo(video) {
 console.log(video);
 //document.getElementById('embed').innerHTML = unescape(video.html);
 }
 */

/*
 <iframe src="https://player.vimeo.com/video/7100569?background=1" frameborder="0" title="Brad!" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
 */