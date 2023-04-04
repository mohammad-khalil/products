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
    var products_byCategory =  <?php echo json_encode($products_byCategory) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'Products by category'
        },
      
         xAxis: {
            categories: ['shoes','man','women','flo','like','Adedas','Nazi','soes','Nike']
        },
        yAxis: {
            title: {
                text: 'Number of Products'
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
            name: 'Products by category',
            data: products_byCategory
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