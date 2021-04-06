
<div class="content-wrapper">



<section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1>Penjualan</h1>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           
           <li class="breadcrumb-item active">Penjualan</li>
         </ol>
       </div>
     </div>
   </div><!-- /.container-fluid -->
 </section>

<section class="content">

 <div class="card">

   

   <div class="card-body">

     <table class="table table-bordered table-striped dt-responsive productsTable " width="100%">
    
       <thead>
        
        <tr>
          
          <th style="width:10px">#</th>
           <th>Nama Customer</th>
          <th>Alamat </th>
          <th>Tanggal Penjualan</th>             
          <th>Total Penjualan</th>
          <th>Detail Produk</th>
         

        </tr> 

       </thead>

       <?php
          $answer = PenjualanController::ctrShowPenjualan();
          foreach ($answer as $key => $value) {           
            echo '<td>'.($key+1).'</td>
              <td>'.$value["nama_konsumen"].'</td>
              <td>'.$value["alamat"].'</td>
              <td>'.$value["tanggal_penjualan"].'</td>
              <td>Rp '.$value["total"].'</td>
              <td>'.$value["detail"].'</td>
            </tr>';
           }

                                ?>
       

     </table>

   </div>
 
 </div>

</section>

</div>




     

     



</div>

