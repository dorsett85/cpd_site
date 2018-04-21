// Initialize animate on scroll
AOS.init();

/**
 * Document ready functions
 */
$(document).ready(function() {

    // Scroll down from top function
    function scroll(start, ...heights) {
        let scrollDown = 0;
        heights.map(function(obj) {
            scrollDown += obj.height()
        });
        start.click(function() {
            $('html, body').animate({scrollTop: scrollDown}, 'slow')
        })
    }

    // Scroll to sections
    scroll($('#visScroll'), $('#headerDiv'));
    scroll($('#webDevScroll'), $('#headerDiv'), $('#visDiv'));
    scroll($('#dataScroll'), $('#headerDiv'), $('#visDiv'), $('#dataDiv'));

    /**
     * Highcharts plugin to defer initial series animation until the element has appeared. Requires
     * jQuery.appear.
     *
     * Updated 2016-01-11
     */
    (function (H) {
        function deferRender (proceed) {
            var series = this,
                $renderTo = $(this.chart.container.parentNode);

            // It is appeared, render it
            if ($renderTo.is(':appeared') || !series.options.animation) {
                proceed.call(series);

                // It is not appeared, halt rendering until appear
            } else  {
                $renderTo.appear(); // Initialize appear plugin
                $renderTo.on('appear', function () {
                    proceed.call(series);
                });
            }
        }

        H.wrap(H.Series.prototype, 'render', deferRender);

    }(Highcharts));

    // Ajax request to get Intrinio chart data
    $.getJSON({
        url: 'ChartController.php',
        success: function(data) {
            console.log(data);

            // Create highchart
            Highcharts.stockChart('stockChart', {
                title: {
                    text: 'Closing Prices'
                },
                subtitle: {
                    text: 'ASMB, BPMC, TSRO'
                },
                tooltip: {
                    xDateFormat: '%Y-%m-%d',
                    shared: true
                },

                series: data.data
            });

        },
        error: function(error) {
            console.log(error)
        }
    });

    // Wind rose Highchart
    Highcharts.chart('windRoseChart', {
        chart: {
            type: 'column',
            polar: true
        },
        title: {
            text: 'Wind Frequency Rose'
        },
        subtitle: {
            text: 'Percentages at Select Tower Heights'
        },
        pane: {
            size: '90%',
            startAngle: -15
        },
        xAxis: {
            categories: [0, 30, 60, 90, 120, 150, 180, 210, 240, 270, 300, 330]
        },
        yAxis: {
            // min: 0,
            tickInterval: 5,
            angle: 300,
            endOnTick: false,
            showLastLabel: true,
            title: {
                text: 'Frequency (%)',
                x: -80,
                y: 25,
                rotation: 0
            },
            labels: {
                formatter: function () {
                    return this.value + '%';
                }
            }
        },
        tooltip: {
            valueSuffix: '%',
            shared: true
        },
        plotOptions: {
            column: {
                groupPadding: 0
            }
        },
        legend: {
            title: {
                text: 'Height'
            },
            align: 'right',
            verticalAlign: 'top',
            margin: 0,
            // x: -25,
            y: 100,
            layout: 'vertical'
        },
        series: [{
            name: '60.0m',
            data: [9.9, 7, 4.7, 4.4, 6.1, 18.8, 18.4, 12.5, 5.3, 2.9, 3.7, 6.2],
            color: '#7798BF'
        }, {
            name: '45.0m',
            data: [9.7, 6.2, 4.2, 4.2, 6.6, 22.6, 19, 10.7, 4, 2.6, 3.4, 6.7],
            color: '#aaeeee'
        }, {
            name: '30.0m',
            data: [9.6, 6.6, 4.1, 4, 7.2, 22.1, 18.2, 11.9, 4.3, 2.7, 3.2, 6.2],
            color: '#ff0066'
        }]
    });

    // Show webDevAnchor blue color on hover
    $('.webDevAnchor').mouseover(function () {
        $(this).children('.webDevImg').css('box-shadow', '0px 0px 5px 5px #0066CC');
    }).mouseout(function () {
        $(this).children('.webDevImg').css('box-shadow', '0px 0px 5px 5px #373737');
    });

});

