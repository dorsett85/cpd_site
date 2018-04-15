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
    // $.getJSON({
    //     url: 'ChartController.php',
    //     success: function(data) {
    //         console.log(data);
    //
    //         // Create highchart
    //         Highcharts.stockChart('stockChart', {
    //             title: {
    //                 text: 'Closing Prices'
    //             },
    //             tooltip: {
    //                 xDateFormat: '%Y-%m-%d',
    //                 shared: true
    //             },
    //
    //             series: data.data
    //         });
    //
    //     },
    //     error: function(error) {
    //         console.log(error)
    //     }
    // });

    // Show webDevAnchor blue color on hover
    $('.webDevAnchor').mouseover(function () {
        $(this).children('.webDevImg').css('box-shadow', '0px 0px 5px 5px #0066CC');
    }).mouseout(function () {
        $(this).children('.webDevImg').css('box-shadow', '0px 0px 5px 5px #373737');
    });

});

