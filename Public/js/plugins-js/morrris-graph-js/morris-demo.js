$(function() {

    Morris.Line({
        element: 'morris-one-line-chart',
            data: [
                { year: '2012', value: 5 },
                { year: '2013', value: 10 },
                { year: '2014', value: 8 },
                { year: '2015', value: 22 },
                { year: '2016', value: 8 },
                { year: '2017', value: 10 },
                { year: '2018', value: 5 }
            ],
        xkey: 'year',
        ykeys: ['value'],
        resize: true,
        lineWidth:4,
        labels: ['Value'],
        lineColors: ['#716aca'],
        pointSize:5,
    });

    Morris.Area({
        element: 'morris-area-chart',
        data: [{ period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647 },
            { period: '2016 Q2', iphone: 2778, ipad: 2294, itouch: 2441 },
            { period: '2016 Q3', iphone: 4912, ipad: 1969, itouch: 2501 },
            { period: '2016 Q4', iphone: 3767, ipad: 3597, itouch: 5689 },
            { period: '2017 Q1', iphone: 6810, ipad: 1914, itouch: 2293 },
            { period: '2017 Q2', iphone: 5670, ipad: 4293, itouch: 1881 },
            { period: '2017 Q3', iphone: 4820, ipad: 3795, itouch: 1588 },
            { period: '2017 Q4', iphone: 15073, ipad: 5967, itouch: 5175 },
            { period: '2018 Q1', iphone: 10687, ipad: 4460, itouch: 2028 },
            { period: '2018 Q2', iphone: 8432, ipad: 5713, itouch: 1791 } ],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        lineColors: ['#716aca', '#5075E4','#ed5565'],
        lineWidth:2,
        pointSize:1,
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{ label: "Download Sales", value: 12 },
            { label: "In-Store Sales", value: 30 },
            { label: "Mail-Order Sales", value: 20 } ],
        resize: true,
        colors: ['#716aca', '#716aca','#716aca'],
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{ y: '2010', a: 60, b: 50 },
            { y: '2011', a: 75, b: 65 },
            { y: '2012', a: 50, b: 40 },
            { y: '2013', a: 75, b: 65 },
            { y: '2014', a: 50, b: 40 },
            { y: '2015', a: 75, b: 65 },
            { y: '2016', a: 100, b: 90 } ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series B', 'Series C'],
        hideHover: 'auto',
        resize: true,
        barColors: ['#716aca', '#cacaca'],
    });

    Morris.Line({
        element: 'morris-line-chart',
        data: [{ y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75, b: 65 },
            { y: '2008', a: 50, b: 40 },
            { y: '2009', a: 75, b: 65 },
            { y: '2010', a: 50, b: 40 },
            { y: '2011', a: 75, b: 65 },
            { y: '2012', a: 100, b: 90 } ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true,
        lineColors: ['#716aca','#716aca'],
    });

});