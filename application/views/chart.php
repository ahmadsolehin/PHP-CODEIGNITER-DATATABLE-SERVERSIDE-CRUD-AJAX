<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"   type="text/javascript"></script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
  <script src="<?php echo base_url('assets/highchart.js')?>"></script>
  <script src="<?php echo base_url('assets/exporting.js')?>"></script>

<div id="container" style=""></div>




         
<script>


$(function () {
  var chart;
  $(document).ready(function() {

var chart = new Highcharts.Chart({
                colors: ["#7cb5ec", "#f7a35c"],
                chart: {
                    type: 'column',
                    renderTo: 'container'
                },
        title: {
            text: 'Total All Student & Teacher'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
        {
            name: 'Student',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        },
        {
            name: 'Teacher',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }
        ]
    });
});

});

</script>




