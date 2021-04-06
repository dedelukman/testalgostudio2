<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Algostudio</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="views/img/template/icon-black.png">

<!--=================================
  =            Plugins CSS            =
  ==================================-->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="views/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="views/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- daterange picker -->
  <link rel="stylesheet" href="views/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="views/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="views/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="views/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/dist/css/adminlte.css">


 <!--====  End of Plugins CSS  ====-->
  
  <!--========================================
  =            plugins javascript            =
  =========================================-->

  <!-- jQuery -->
<script src="views/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- ChartJS -->
<script src="views/plugins/chart.js/Chart.min.js"></script>

 
<!-- DataTables -->
<script src="views/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="views/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


  <!-- FastClick -->
<script src="views/plugins/fastclick/fastclick.js"></script>

  <!-- SweetAlert2 -->
<script src="views/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- InputMask -->
<script src="views/plugins/moment/moment.min.js"></script>
<script src="views/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>

 <!-- date-range-picker -->
<script src="views/plugins/daterangepicker/daterangepicker.js"></script>


<!-- Tempusdominus Bootstrap 4 -->
<script src="views/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.min.js"></script>




</head>


  <?php

   

      echo '<body class="hold-transition sidebar-mini sidebar-collapse text-sm"> <div class="wrapper">';

  include "modules/header.php";
 
  include "modules/sidebar.php";

   if(isset($_GET["route"])){

        if ($_GET["route"] == 'home' ||
            $_GET["route"] == 'penjualan'

          ){

          include "modules/".$_GET["route"].".php";

        }else{

           include "modules/404.php";
        
        }
    }else{

        include "modules/home.php";
      
    }


  include "modules/footer.php";
  
  echo '</div>';

   
    

  ?>


<!-- <script type="text/javascript" src="views/js/template.js"></script> -->



</body>
</html>