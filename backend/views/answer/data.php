<?php
$con = mysql_connect("localhost","root","apoigaga123");
if (!$con) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db("latest_tot", $con);
$sth = mysql_query("SELECT mark_total FROM mark");
$rows = array();
$rows['Mark'] = 'Total Mark';
while($r = mysql_fetch_array($sth)) {
$rows['data'][] = $r['mark_total'];
}
// $sth = mysql_query("SELECT mark_total FROM mark");
// $rows1 = array();
// $rows1['name'] = 'Overhead';
// while($rr = mysql_fetch_assoc($sth)) {
// $rows1['data'][] = $rr['mark_total'];
// }
$result = array();
array_push($result,$rows);
//array_push($result,$rows1);
print json_encode($result, JSON_NUMERIC_CHECK);
mysql_close($con);
?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">

$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("data.php", function(json) {
        
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'container',
                    type: 'line',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Revenue vs. Overhead',
                    x: -20 //center
                },
                subtitle: {
                    text: '',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Amount'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align:'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                series: json
            });
        });
    
    });
    
});
        </script>
    </head>
    <body>

<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

    </body>
</html>