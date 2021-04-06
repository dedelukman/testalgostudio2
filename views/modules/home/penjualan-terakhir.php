<div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Daftar 10 Penjualan Terakhir</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Customer</th>
                      <th>Alamat</th>
                      <th>Tanggal Penjualan</th>
                      <th>Total Penjualan</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                      $answer = PenjualanController::ctrShowPenjualanTerakhir();
                      foreach ($answer as $key => $value) {           
                      echo '<td>'.($key+1).'</td>
                              <td>'.$value["nama_konsumen"].'</td>
                              <td>'.$value["alamat"].'</td>
                              <td>'.$value["tanggal_penjualan"].'</td>
                              <td>Rp '.$value["total"].'</td>
                            </tr>';
                        }

                      ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
          
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->