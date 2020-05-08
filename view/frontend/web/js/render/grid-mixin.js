// Funami/FuSetup/view/frontend/web/js/render/grid-mixin.js
define(function () {
    'use strict';

    var mixin = {
        defaults: {
            tracks: {
                label: true
            }
        },

        initialize: function () {
            this._super();

            this.modifyLabel();

            return this;
        },

        modifyLabel: function () {
            this.label = 'Fu ' + this.label;
        }
    };

    return function (target) {          // target == Result that Funami_FuSetup/.../grid returns.
        return target.extend(mixin);    // new result that all other modules receive
    };
});
