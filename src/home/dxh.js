/**
 * @file dxhjs操作文件
 * @author dengxiaohong01(dengxiaohong01@baidu.com)
 */

define(function (require) {

    var $ = require('jquery');
    var d3 = require('d3');
    function demo() {

        var width = 600;
        var height = 600;
        var dataset = [30, 10, 43, 55, 13];
        var svg = d3.select('.container')
                    .append('svg')
                    .attr('width', width)
                    .attr('height', height);
        var pie = d3.layout.pie();
        var outerRadius = width / 2;
        var innerRadius = width / 4;
        var arc = d3.svg.arc()
                    .innerRadius(innerRadius)
                    .outerRadius(outerRadius);
        var color = d3.scale.category10();
        var arcs = svg.selectAll('g')
                      .data(pie(dataset))
                      .enter()
                      .append('g')
                      .attr('transform', 'translate(' + outerRadius + ',' + outerRadius + ')');
        arcs.append('path')
            .attr('fill', function (d, i) {
                return color(i);
            })
            .attr('d', function (d) {
                return arc(d);
            });
        arcs.append('text')
            .attr('transform', function (d) {
                return 'translate(' + arc.centroid(d) + ')';
            })
            .attr('text-anchor', 'middle')
            .text(function (d) {
                return d.value;
            });
    }


    var handler = {
        init: function () {
            // ...
            demo();
            $.get('mock/list.json', function (data) {
                console.log(data);
            });
        }
    };
    return handler;
});
