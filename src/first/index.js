/**
 * @file 第一个页面
 * @author dengxiaohong01(dengxiaohong01@baidu.com)
 */

define(
    function (require) {
        // var d3 = require('d3');
        var $ = require('jquery');

        var top = require('./top');
        var left = require('./left');
        var right = require('./right');
        return {
            init: function () {


                top.init();
                left.init();
                right.init();
            }
        };
    }
);

