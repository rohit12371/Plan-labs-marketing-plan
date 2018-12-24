<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-xl-3 col-md-6 col-12">
        <div class="box box-body">
          <h6 class="text-uppercase">Maximum No Of Created Plans</h6>
          <div class="flexbox mt-2"> <span class="fa fa-warning text-danger font-size-40"></span> <span class=" font-size-30">03</span> </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 col-12">
        <div class="box box-body">
          <h6 class="text-uppercase">Current Plan Amount</h6>
          <div class="flexbox mt-2"> <span class="fa fa-picture-o text-info font-size-40"></span> <span class=" font-size-30">$39</span> </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-xl-3 col-md-6 col-12">
        <div class="box box-body">
          <h6 class="text-uppercase">User settings</h6>
          <div class="flexbox mt-2"> <span class="fa fa-user-plus font-size-40 text-primary"></span> <span class=" font-size-30">01</span> </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Graph Type1</h4>
          </div>
          <div class="box-body">
            <div id="container"> </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Graph Type2</h4>
          </div>
          <div class="box-body">
            <div id="container1"> </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Graph Type3</h4>
          </div>
          <div class="box-body">
            <div id="container2"> </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Graph Type4</h4>
          </div>
          <div class="box-body">
            <div id="container3"> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">My Marketing Plan Notes</h4>
          </div>
          <div class="box-body">
            <textarea class="form-control" id="editor"></textarea>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">My To-Do-List</h4>
          </div>
          <div class="box-body">
            <textarea class="form-control" id="editor1"></textarea>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
  var chart= Highcharts.chart('container',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Schools Participation Report'
        },
        xAxis: {
            categories: [
                'North',
                'South',
                'East',
                'West',
                'North East',
                'Central'
            ],
            crosshair: true
        },
		
		legend: {
        enabled: true
    },
        exporting: { enabled: false },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
		
		 series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
		
		
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
			color:'rgb(124, 181, 236)',
            data: [1449,1102,306,183,284,173] //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Started',
			color:'#fcfc00',
            data: [1449,1102,306,183,284,173] //South

        }, {
            name: 'Audit Completed',
			color:'#00ae4f',
            data: [1449,1102,306,183,284,173] //East

        }		
		],
});
</script>
<script type="text/javascript">
         Highcharts.chart('container1',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Assam (AS) Total Registrations 50 Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools ({point.percentage:.1f}%)</b>'
            },
        exporting: { enabled: true },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
						format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',						  
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started' ,color:'#fc3300', y: 40},{name: 'Audit Started' ,color:'#fcfc00', y: 9}, {name: 'Audit Completed' ,color:'#00ae4f', y: 1}]
            }]
        });
		</script>
<script type="text/javascript">
         Highcharts.chart('container2',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'bar'
            },
            title: {
                text: 'Participation Chart for Assam (AS) Total Registrations 50 Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools ({point.percentage:.1f}%)</b>'
            },
        exporting: { enabled: true },
        credits: {enabled: false},    
        plotOptions: {
                bar: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
						format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',						  
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started' ,color:'#fc3300', y: 40},{name: 'Audit Started' ,color:'#fcfc00', y: 9}, {name: 'Audit Completed' ,color:'#00ae4f', y: 1}]
            }]
        });
		</script>
		<script type="text/javascript">
         Highcharts.chart('container3',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'column'
            },
            title: {
                text: 'Participation Chart for Assam (AS) Total Registrations 50 Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools ({point.percentage:.1f}%)</b>'
            },
        exporting: { enabled: true },
        credits: {enabled: false},    
        plotOptions: {
                column: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
						format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',						  
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started' ,color:'#fc3300', y: 40},{name: 'Audit Started' ,color:'#fcfc00', y: 9}, {name: 'Audit Completed' ,color:'#00ae4f', y: 1}]
            }]
        });
		</script>