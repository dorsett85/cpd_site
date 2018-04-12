/**
 * Initialize animate on scroll
 */
AOS.init();


/**
 * Highcharts plugin to defer initial series animation until the element has appeared. Requieres
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

            // It is not appeared, halt renering until appear
        } else  {
            $renderTo.appear(); // Initialize appear plugin
            $renderTo.on('appear', function () {
                proceed.call(series);
            });
        }
    };

    H.wrap(H.Series.prototype, 'render', deferRender);

}(Highcharts));

$('#container1').highcharts({

    chart: {
        type: 'area'
    },

    title: {
        text: 'Area chart'
    },

    xAxis: {
        type: 'category'
    },

    series: [{
        data: [
            ['Jan', 29.9],
            ['Feb', 71.5],
            ['Mar', 106.4],
            ['Apr', 129.2],
            ['May', 144.0],
            ['Jun', 176.0],
            ['Jul', 135.6],
            ['Aug', 148.5],
            ['Sep', 216.4],
            ['Oct', 194.1],
            ['Nov', 95.6],
            ['Dec', 54.4]
        ]
    }]

});

$('#container2').highcharts({

    chart: {
        type: 'pie'
    },

    title: {
        text: 'Pie chart'
    },

    series: [{
        data: [
            ['Jan', 29.9],
            ['Feb', 71.5],
            ['Mar', 106.4],
            ['Apr', 129.2],
            ['May', 144.0],
            ['Jun', 176.0],
            ['Jul', 135.6],
            ['Aug', 148.5],
            ['Sep', 216.4],
            ['Oct', 194.1],
            ['Nov', 95.6],
            ['Dec', 54.4]
        ]
    }]

});

$('#container3').highcharts({

    chart: {
        type: 'column'
    },

    title: {
        text: 'Column chart'
    },

    xAxis: {
        type: 'category'
    },

    series: [{
        data: [
            ['Jan', 29.9],
            ['Feb', 71.5],
            ['Mar', 106.4],
            ['Apr', 129.2],
            ['May', 144.0],
            ['Jun', 176.0],
            ['Jul', 135.6],
            ['Aug', 148.5],
            ['Sep', 216.4],
            ['Oct', 194.1],
            ['Nov', 95.6],
            ['Dec', 54.4]
        ]
    }]

});

$('#container4').highcharts({

    chart: {
        type: 'bubble'
    },

    title: {
        text: 'Bubble chart'
    },

    series: [{
        data: [
            [1,2,3],
            [5,4,3],
            [7,5,4],
            [8,4,5],
            [7,5,4]
        ]
    }]

});
