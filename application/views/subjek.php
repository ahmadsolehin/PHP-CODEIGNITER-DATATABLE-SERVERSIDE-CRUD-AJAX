<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"   type="text/javascript"></script>




<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

<script src="<?php echo base_url('assets/highchart.js')?>"></script>
<script src="<?php echo base_url('assets/exporting.js')?>"></script>

<div class="col-md-8">

    <div id="container" style=""></div>



</div>



<div class="col-md-4">
    <div class="box-body">
      <table id="example" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>Subject</th>
              <th>Year</th>
              <th>Percentage</th>
          </tr>
      </thead>
      <tbody>
        <tr>
            <td>Bahasa Melayu</td>
            <td>2016</td>
            <td>0.7%</td>
        </tr>
        <tr>
            <td>English</td>
            <td>2016</td>
            <td>8.5 %</td>
        </tr>
        <tr>
        <td>Mathematics</td>
            <td>2016</td>
            <td>45 %</td>
        </tr>
        <tr>
            <td>Physics</td>
            <td>2016</td>
            <td>6.2 %</td>
        </tr>
        <tr>
            <td>Account</td>
            <td>2016</td>
            <td>12.8 %</td>
        </tr>
        <tr>
            <td>Biology</td>
            <td>2016</td>
            <td>26.8 %</td>
        </tr>
    </table>
</div>
</div>

<script>

    $(function () {
      var chart;
      $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'All of Subject in 2016'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: '',
                data: [
                ['Mathematics',   45.0],
                ['Biology',       26.8],
                {
                    name: 'Account',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['English',    8.5],
                ['Physics',     6.2],
                ['Bahasa Melayu',   0.7]
                ]
            }]
        });
});

});

</script>














