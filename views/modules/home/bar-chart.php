<?php

$answer = PenjualanController::ctrShowPenjualan();

$arrayDates = array();
$arraySales = array();
$addingMonthPayments = array();

foreach ($answer as $key => $value) {

    #We capture only year and month
	$singleDate = substr($value["tanggal_penjualan"],0,10);

    #Introduce dates in arrayDates
	array_push($arrayDates, $singleDate);

	#We capture the sales
	$arrayKomputer = array($singleDate => $value["komputer"]);

    #we add payments made in the same month
	foreach ($arrayKomputer as $key => $value) {
		
		$addingMonthPayments[$key] += $value;
	}

  $arrayHandphone = array($singleDate => $value["handphone"]);

    #we add payments made in the same month
	foreach ($arrayHandphone as $key => $value) {
		
		$addingMonthPayments1[$key] += $value;
	}

}




$noRepeatDates = array_unique($arrayDates);

?>

<div class="card">
  
  <div class="card-header ">
    
      <h3 class="card-title">Customers</h3>    
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
          backgroundColor: '#007bff',
          borderColor    : '#007bff',
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
          backgroundColor: '#ced4da',
          borderColor    : '#ced4da',
          data           : [
            <?php

                if($noRepeatDates != null){

                    foreach($noRepeatDates as $key){

                    echo "".$addingMonthPayments1[$key]." ,";


                    }

                    echo "".$addingMonthPayments1[$key]." ";

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
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
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
              if (value >= 1000) {
                value /= 1000
                value += 'k'
              }
              return '$' + value
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