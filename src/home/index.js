/**
 * @file js公共入口模块
 * @author dengxiaohong01(dengxiaohong01@baidu.com)
 */

define(function (require) {

    var dxh = require('./dxh');

    return {
        init: function () {
            dxh.init();
        }
    };
});

