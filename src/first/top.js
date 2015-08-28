/**
 * @file 地图、日历图
 * @author dengxiaohong01(dengxiaohong01@baidu.com)
 */

define(
    function (require) {
        var d3 = require('d3');
        var $ = require('jquery');
        // var chinamapdata = require('global/chinamapdata');

        // 读取文件并绘制地图
        function renderChinaMap() {
            var width  = 1000;
            var height = 600;

            var svg = d3.select('.chinaMap').append('svg')
                .attr('width', width)
                .attr('height', height)
                .append('g')
                .attr('transform', 'translate(0,0)');

            var projection = d3.geo.mercator()
                                .center([100, 38]) // 设定地图的中心位置，[107,31] 指的是经度和纬度
                                .scale(750) // 设定放大的比例
                                .translate([width / 2, height / 2]); // 设定平移

            // 将投影函数 projection ，作为参数，放入 path 中后，这个 path 函数就能对传入的数据进行投影变换
            var path = d3.geo.path()
                            .projection(projection);


            var color = d3.scale.category20();

            d3.json('data/china.json', function (error, root) {

                if (error) {
                    /*return console.error(error);*/
                    return;
                }
                // console.log(root.features);

                svg.selectAll('path')
                    .data(root.features)
                    .enter()
                    .append('path')
                    .attr('stroke', '#000')
                    .attr('stroke-width', 1)
                    .attr('fill', function (d, i) {
                        return color(i);
                    })
                    .attr('d', path)
                    .on('mouseover', function (d, i) {
                        d3.select(this)
                            .attr('fill', 'yellow');
                    })
                    .on('mouseout', function (d, i) {
                        d3.select(this)
                            .attr('fill', color(i));
                    })
                    // 点击显示弹出层
                    .on('click', function (d, i) {
                        d3.select(this)
                            .attr('fill', color(i));

                        renderCalendar(d.properties.name);
                        $('#follow-dialog').removeClass('hide');
                    });

            });
        }

        function renderCalendar(data) {
            // ...
            var width = 960;
            var height = 136;
            var cellSize = 17; // cell size

            var percent = d3.format('.1%');
            var format = d3.time.format('%Y-%m-%d');

            var color = d3.scale.quantize()
                .domain([-.05, .05])
                .range(d3.range(11).map(function (d) {
                    return 'q' + d + '-11';
                }));

            var svg = d3.select('.calendar').selectAll('svg')
                .data(d3.range(2008, 2009))
                .enter().append('svg')
                .attr('width', width)
                .attr('height', height)
                .attr('class', 'RdYlGn')
                .append('g')
                .attr('transform',
                    'translate(' + ((width - cellSize * 53) / 2) + ',' + (height - cellSize * 7 - 1) + ')'
                );

            svg.append('text')
                .attr('transform', 'translate(-6,' + cellSize * 3.5 + ')rotate(-90)')
                .style('text-anchor', 'middle')
                .text(function (d) {
                    return d;
                });

            var rect = svg.selectAll('.day')
                .data(function (d) {
                    return d3.time.days(new Date(d, 0, 1), new Date(d + 1, 0, 1));
                })
                .enter()
                .append('rect')
                .attr('class', 'day')
                .attr('width', cellSize)
                .attr('height', cellSize)
                .attr('x', function (d) {
                    return d3.time.weekOfYear(d) * cellSize;
                })
                .attr('y', function (d) {
                    return d.getDay() * cellSize;
                })
                .datum(format);

            rect.append('title')
                .text(function (d) {
                    return d;
                });

            svg.selectAll('.month')
                .data(function (d) {
                    return d3.time.months(new Date(d, 0, 1), new Date(d + 1, 0, 1));
                })
                .enter().append('path')
                .attr('class', 'month')
                .attr('d', monthPath);

            d3.csv('data/dji.csv', function (error, csv) {
                if (error) throw error;

                var data = d3.nest()
                .key(function (d) {
                    return d.Date;
                })
                .rollup(function (d) {
                    return (d[0].Close - d[0].Open) / d[0].Open;
                })
                .map(csv);

                rect.filter(function (d) {
                    return d in data;
                })
                .attr('class', function (d) {
                    return 'day ' + color(data[d]);
                })
                .select('title')
                .text(function (d) {
                    return d + ': ' + percent(data[d]);
                });
            });

            function monthPath(t0) {
                var t1 = new Date(t0.getFullYear(), t0.getMonth() + 1, 0);
                var d0 = t0.getDay();
                var w0 = d3.time.weekOfYear(t0);
                var d1 = t1.getDay();
                var w1 = d3.time.weekOfYear(t1);
                return 'M' + (w0 + 1) * cellSize + ',' + d0 * cellSize
                    + 'H' + w0 * cellSize + 'V' + 7 * cellSize
                    + 'H' + w1 * cellSize + 'V' + (d1 + 1) * cellSize
                    + 'H' + (w1 + 1) * cellSize + 'V' + 0
                    + 'H' + (w0 + 1) * cellSize + 'Z';
            }

            d3.select(self.frameElement).style('height', '2910px');
        }

        return {
            init: function () {
                renderChinaMap();

                // 弹出层
                $('#fdialog-wrap').on('click', function (e) {
                    if (e.target === this || e.target === $('#fg-close').get(0)) {
                        $('#follow-dialog').addClass('hide');
                        e.stopPropagation();
                    }
                });
            }
        };
    }
);
