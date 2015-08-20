/**
 * @file 上边气泡图
 * @author zhangxuanjian(zhangxuanjian@baidu.com)
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
