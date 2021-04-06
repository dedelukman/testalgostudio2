<?php

$answer = PenjualanController::ctrShowPenjualanBarChart();

$arrayDates = array();
$arraySales = array();
$addingMonthPayments = array();
$addingMonthPayment = array();

foreach ($answer as $key => $value) {

    #We capture date
	$singleDate = $value["tanggal_penjualan"];
  

    #Introduce dates in arrayDates
	array_push($arrayDates, $singleDate);

	#We capture the sales
	$arrayKomputer = array($singleDate => $value["komputer"]);

    #we add payments made in the same month
	foreach ($arrayKomputer as $key => $value) {
		
		$addingMonthPayments[$key] += $value;
	}

  
}

foreach ($answer as $keys => $values) {

  #We capture date
$singleDates = $values["tanggal_penjualan"];

  #Introduce dates in arrayDates
array_push($arrayDates, $singleDates);


$arrayHandphone = array($singleDates => $values["handphone"]);


  #we add payments made in the same month
foreach ($arrayHandphone as $keys => $values) {
  
  $addingMonthPayment[$keys] += $values;
}

}


$noRepeatDates = array_unique($arrayDates);

?>

<div class="card">
  
  <div class="card-header ">
    
      <h3 class="card-title">Penjualan</h3>    
      <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
  
    </div>

    <div class="card-body">

    <div class="row">

      <div class="col-md-12">
      
        <div class="chart-responsive">
      
           <canvas id="bar-chart2" style="height: 300px;"></canvas>

        </div>

      </div>

    </div>

  </div>

</div>

<script>
  
 var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }


  var mode      = 'index'
  var intersect = true

  var $salesChart = $('#bar-chart2')
  var salesChart  = new Chart($salesChart, {
    
    type   : 'bar',
    data   : {
        labels  : [
          <?php

              if($noRepeatDates != null){

                  foreach($noRepeatDates as $key){

                  echo "'".$key."',";


                  }

                  echo "'".$key."' ";

              }else{

                echo "0";

              }

              ?>
        ],
      datasets: [
        {
          label:'Komputer',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data           : [
            <?php

              if($noRepeatDates != null){

                  foreach($noRepeatDates as $key){

                  echo "".$addingMonthPayments[$key]." ,";


                  }

                  echo "".$addingMonthPayments[$key]." ";

              }else{

                echo "0";

              }

              ?>
          ]
        },
        {
          label:'Handphone',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data           : [
            <?php

                if($noRepeatDates != null){

                    foreach($noRepeatDates as $key){

                    echo "".$addingMonthPayment[$key]." ,";


                    }

                    echo "".$addingMonthPayment[$key]." ";

                }else{

                  echo "0";

                }

                ?>
          ]
        }
      ]
    },
    
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect,
        displayColors: true,
        
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: true
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value, index, values) {
               value = value.toString();
                value = value.split(/(?=(?:...)*$)/);
                // Convert the array to a string and format the output
                value = value.join('.');
                return 'Rp ' + value;
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  });

</script>