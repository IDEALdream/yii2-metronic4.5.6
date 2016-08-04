/**
 * Created by Administrator on 2016/8/4.
 */

var Custom = function () {

    // Handles custom checkboxes & radios using jQuery Uniform plugin
    var handleUniform = function() {
        if (!$().uniform) {
            return;
        }
        var test = $("input[type=checkbox]:not(.toggle, .md-check, .md-radiobtn, .make-switch, .icheck), input[type=radio]:not(.toggle, .md-check, .md-radiobtn, .star, .make-switch, .icheck)");
        if (test.size() > 0) {
            test.each(function() {
                if ($(this).parents(".checker").size() === 0) {
                    $(this).show();
                    $(this).uniform();
                }
            });
        }
    };

    return {
        init: function () {
            handleUniform();
        }
    }
}();

if (App.isAngularJsApp() === false) {
    jQuery(document).ready(function () {
        Custom.init();
    });
}
