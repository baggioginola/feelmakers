(function ($) {
    var RDmain = function (options) {
        this.options = options;
    };

    RDmain.prototype = {
        init: function () {
            var main = this;
            if (!main.isMobile()) {
                console.log('not mobile');
                main.redirectToNormalVersion();
            }
            else {
                console.log('is mobile');
            }
        }, isMobile: function () {
            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        }, redirectToNormalVersion: function () {
            location.href = BASE_ROOT;
        }
    };

    $.fn.rdmain = function () {
    };
    $.fn.rdmain.defaults = {};

    window.RDmain_autoinit = function () {
        var options = $.extend({}, $.fn.rdmain.defaults, {
            run: true
        });
        if (options.run) {
            new RDmain(this, options).init();
        } else {
            console.error('cannot start application');
        }
    };
})(jQuery);


(function ($) {
    $(document).ready(function () {
        RDmain_autoinit();
    })
})(jQuery);