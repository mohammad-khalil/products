<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Highcharts Example - Techsolutionstuff</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="border:1px solid red; margin:20px;">
<div id="container"></div>
</body>
  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var products_totalPrice =  <?php echo json_encode($products_totalPrice) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'Products Total Price by category'
        },
         xAxis: {
            categories: ['shoes','man','women','flo','like','Adedas','Nazi','soes','Nike']
        },
        yAxis: {
            title: {
                text: 'Total Price of Products'
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Products Total Price by category',
            data: products_totalPrice
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>