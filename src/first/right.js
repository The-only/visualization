/**
 * @file 右边南丁格尔玫瑰图
 * @author sunwei11(sunwei11@baidu.com)
 */

define(
    function (require) {
        var d3 = require('d3');
        var d3Tip = require('d3-tip');
        function meigui(city) {
          // 定义svg中各元素的大小
            var width = 350,
                height = 500,
                radius = Math.min(width, height) / 2,
                innerRadius = 0.2 * radius;

            var pie = d3.layout.pie()
                .sort(null)
                .value(function(d) { return d.width; });
            // 设置浮层属性
            var tip = d3Tip()
              .attr('class', 'd3-tip')
              .offset([0, 0])
              .html(function(d) {
                return d.data.label + ": <span style='color:yellow'>" + d.data.averageAQI + "</span>";
              });

            var arc = d3.svg.arc()
              .innerRadius(innerRadius)
              .outerRadius(function (d) {
                if (d.data.averageAQI < 100){
                return (radius - innerRadius) * (d.data.averageAQI / 180.0) + innerRadius;
              }else if(d.data.averageAQI>200){
                return (radius - innerRadius) * (d.data.averageAQI / 240.0) + innerRadius;
              }else {
                return (radius - innerRadius) * (d.data.averageAQI / 200.0) + innerRadius;
              }
              });

            var outlineArc = d3.svg.arc()
                    .innerRadius(innerRadius)
                    .outerRadius(radius);

            var svg = d3.select(".meigui").append("svg")
                .attr("width", width)
                .attr("height", height)
                .append("g")
                .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

            svg.call(tip);
            if (city == "beijing"){
              str = "data/beijing_meigui.csv";
            }else if (city == "shanghai"){
              str = "data/shanghai_meigui.csv";
            }else {
              str = "data/guangzhou_meigui.csv";
            }
            d3.csv(str, function(error, data) {

              data.forEach(function(d) {
                d.id     =  d.id;
                d.days  = +d.days;
                d.color  =  d.color;
                d.averageAQI = +d.averageAQI;
                d.width  = +d.days;
                d.label  =  d.label;

              });
              // for (var i = 0; i < data.score; i++) { console.log(data[i].id) }

              var path = svg.selectAll(".solidArc")
                  .data(pie(data))
                .enter().append("path")
                  .attr("fill", function(d) { return d.data.color; })
                  .attr("class", "solidArc")
                  .attr("stroke", "gray")
                  .attr("d", arc)
                  .on('mouseover', tip.show)
                  .on('mouseout', tip.hide);

              var outerPath = svg.selectAll(".outlineArc")
                  .data(pie(data))
                .enter().append("path")
                  .attr("fill", "none")
                  .attr("stroke", "gray")
                  .attr("class", "outlineArc")
                  .attr("d", outlineArc);


              // calculate the weighted mean score
              var score =
                data.reduce(function(a, b) {
                  //console.log('a:' + a + ', b.score: ' + b.score + ', b.weight: ' + b.weight);
                  return a + (b.days * b.averageAQI);
                }, 0) /
                data.reduce(function(a, b) {
                  return a + b.days;
                }, 0);

              svg.append("svg:text")
                .attr("class", "aster-score")
                .attr("dy", ".35em")
                .attr("text-anchor", "middle") // text-align: right
                .text(Math.round(score));

            });
              svg.append("text")
            .attr("class","title")
            .attr("x", -120)
            .attr("y", -200)
            .attr("text-anchor", "top")
            .style("font-size", "16px")
            .style("text-decoration", "underline")
            .text("广州、北京、上海空气质量等级分析");
        }
        return {
            init: function () {
                meigui('beijing');
            }
        };
    }
);
