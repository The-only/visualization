/**
 * @file 左边堆叠柱状图
 * @author sunwei11(sunwei11@baidu.com)
 */

define(
    function (require) {
        var d3 = require('common/d3/d3.min');
        function zhutu(city) {
        var w = 700;                        //width
        var h = 500;                        //height
        var padding = {top: 40, right: 40, bottom: 40, left:40};
        var dataset;
        //Set up stack method
        var stack = d3.layout.stack();

        if (city == "beijing"){
              str = "data/beijing.json";
            }else if (city == "shanghai"){
              str = "data/shanghai.json";
            }else {
              str = "data/guangzhou.json";
            }
        d3.json(str,function(json){
            dataset = json.map(function (table) {
                return table.map(function (row) {
                    row.time = +row.time;
                    row.y = + row.y;
                    return row;
                });
            });

            //Data, stacked
            stack(dataset);

            var color_hash = {
                    0 : ["PM2.5","#4dac26"],
                    1 : ["PM10","#b8e186"],
                    2 : ["co","#ffffbf"],
                    3 : ["No2","#f1b6da"],
                    4 : ["So2","#d01c8b"]

            };


            //Set up scales
            var xScale = d3.scale.linear()
                .domain([1,31])
                .range([0, w-padding.left-padding.right]);

            var yScale = d3.scale.linear()
                .domain([0,
                    d3.max(dataset, function(d) {
                        return d3.max(d, function(d) {
                            return (+d.y0) + (+d.y);
                        });
                    })
                ])
                .range([h-padding.bottom-padding.top,0]);

            var xAxis = d3.svg.axis()
                           .scale(xScale)
                           .orient("bottom")
                           .ticks(31);


            var yAxis = d3.svg.axis()
                           .scale(yScale)
                           .orient("left")
                           .ticks(10);



            //Easy colors accessible via a 10-step ordinal scale
            var colors = d3.scale.category10();

            //Create SVG element
            var svg = d3.select(".zhutu")
                        .append("svg")
                        .attr("width", w)
                        .attr("height", h);

            // Add a group for each row of data
            var groups = svg.selectAll("g")
                .data(dataset)
                .enter()
                .append("g")
                .attr("class","rgroups")
                .attr("transform","translate("+ padding.left + "," + (h - padding.bottom) +")")
                .style("fill", function(d, i) {
                    return color_hash[dataset.indexOf(d)][1];
                });

            // Add a rect for each data value
            var rects = groups.selectAll("rect")
                .data(function(d) { return d; })
                .enter()
                .append("rect")
                .attr("width", 2)
                .style("fill-opacity",1e-6);


            rects.transition()
                 .duration(function(d,i){
                     return 50 * i;
                 })
                 .ease("linear")
                .attr("x", function(d) {
                    return xScale(+d.time);
                })
                .attr("y", function(d) {
                    return -(- yScale(+d.y0) - yScale(+d.y) + (h - padding.top - padding.bottom)*2);
                })
                .attr("height", function(d) {
                    return -yScale(+d.y) + (h - padding.top - padding.bottom);
                })
                .attr("width", 15)
                .style("fill-opacity",1);

                svg.append("g")
                    .attr("class","x axis")
                    .attr("transform","translate(40," + (h - padding.bottom) + ")")
                    .call(xAxis);


                svg.append("g")
                    .attr("class","y axis")
                    .attr("transform","translate(" + padding.left + "," + padding.top + ")")
                    .call(yAxis);


                // adding legend

                var legend = svg.append("g")
                                .attr("class","legend")
                                .attr("x", w/2 - padding.right +125)
                                .attr("y", 25)
                                .attr("height", 100)
                                .attr("width",100);

                legend.selectAll("g").data(dataset)
                      .enter()
                      .append('g')
                      .each(function(d,i){
                        var g = d3.select(this);
                        g.append("rect")
                            .attr("x", w/2 - padding.right +105)
                            .attr("y", i*25 + 10)
                            .attr("width", 10)
                            .attr("height",10)
                            .style("fill",color_hash[String(i)][1]);

                        g.append("text")
                         .attr("x", w /2- padding.right +120)
                         .attr("y", i*25 + 20)
                         .attr("height",30)
                         .attr("width",100)
                         .style("fill",color_hash[String(i)][1])
                         .text(color_hash[String(i)][0]);
                      });

                svg.append("text")
                .attr("transform","rotate(-90)")
                .attr("y", 0 - 5)
                .attr("x", 0-(h/2))
                .attr("dy","1em")
                .text("各成分含量");

            svg.append("text")
               .attr("class","xtext")
               .attr("x",w/2 - padding.left)
               .attr("y",h - 5)
               .attr("text-anchor","middle")
               .text("2014年12月");

            svg.append("text")
            .attr("class","title")
            .attr("x", (w / 4))
            .attr("y", 20)
            .attr("text-anchor", "middle")
            .style("font-size", "16px")
            .style("text-decoration", "underline")
            .text("广州、北京、上海空气质量成分分析");



        });

        }
        return {
            init: function (city) {
                $('.zhutu').html('');
                zhutu(city || 'beijing');
            }
        };
    }
);
