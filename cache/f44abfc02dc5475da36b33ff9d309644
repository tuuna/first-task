<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="utf-8">
    <title><?php echo $date;?>曲线图</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/css/bootstrap.css" rel="stylesheet">
    <link href="../resources/css/site.css" rel="stylesheet">
    <link href="../resources/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="https://img.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
    <script src="https://img.hcharts.cn/highcharts/highcharts.js"></script>
    <script src="https://img.hcharts.cn/highcharts/modules/exporting.js"></script>
    <script src="https://img.hcharts.cn/highcharts/modules/data.js"></script>
    <script src="https://img.hcharts.cn/highcharts-plugins/highcharts-zh_CN.js"></script>
</head>
<body>
<div id="container" style="min-width: 400px;height: 400px;"></div>
<div class="message"></div>
<script>
    var chart = new Highcharts.Chart('container', {
        title: {
            text: "当日每小时数据统计",
            x: -20
        },
        subtitle: {
            text: '数据来源: 后台数据库',
            x: -20
        },
        xAxis: {
            categories: <?php echo $xdata;?>,
            title: {
                enabled:true,
                text:'小时'
            }
        },
        yAxis: {
            title: {
                text: '数量'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '数量'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [
            <?php echo $ydata;?>,
            <?php echo $ydata2;?>,
            <?php echo $ydata3;?>,
            <?php echo $ydata4;?>,
        ]
    });
</script>
</body>
</html>
