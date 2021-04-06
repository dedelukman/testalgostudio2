 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

      
    <div class="row">

      <div class="col-lg-6">

      <?php

    

          include "home/bar-chart.php";

      

      ?>
      
      </div>

      <div class="col-lg-6">
        
        <?php

       

          include "home/pie-chart.php";

        

        ?>

      </div>

      <div class="col-lg-12">
        
        <?php

       

          include "home/penjualan-terakhir.php";

        

        ?>

      </div>
     



    </div>

  </section>
    <!-- /.content -->
  </div>