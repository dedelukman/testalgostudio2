<?php


$kategori = BarangController::ctrShowBarangKategori();

$colours = array("danger","success");




?>

<div class="card">
	
	<div class="card-header">
  
      <h3 class="card-title">Kategori Barang</h3>
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
	            
	            	<canvas id="pieChart"></canvas>
	          
	          	</div>

	        </div>

		   

		</div>

    </div>

  

</div>

<script>


  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
        labels: [
          <?php

            for($i = 0; $i < 2; $i++){

              echo "
                '".$kategori[$i]["kategori"]."'
              ,";

            }
    
          ?>
      ],
      datasets: [
        {
          data: [
            <?php

              for($i = 0; $i < 2; $i++){

                echo "
                  '".$kategori[$i]["total"]."'
                ,";

              }

            ?>
            ],
          backgroundColor : ['#f56954', '#00a65a'],
        }
      ]
    }
    var pieOptions     = {
      legend: {
        display: false
      }
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'doughnut',
      data: pieData,
      options: pieOptions      
    })

  //-----------------
  //- END PIE CHART -
  //-----------------

	

  

</script>