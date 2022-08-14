(function ($) {
    var RDmain = function (options) {
        this.options = options;
    };

    RDmain.prototype = {
        init: function () {
            var main = this;
            if (main.isMobile()) {
                console.log('is mobile');
                main.redirectToMobileVersion();
            }
            else{
                console.log('not mobile');
            }
        }, isMobile: function () {
            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        }, redirectToMobileVersion: function () {
            location.href = BASE_ROOT + 'm';
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