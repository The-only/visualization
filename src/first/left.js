/**
 * @file 左边南丁格尔图
 * @author sunwei11(sunwei11@baidu.com)
 */

define(
    function (require) {
        var test = 0;
        function fn() {
            return test;
        }
        return {
            init: function () {
                fn();
            }
        };
    }
);
