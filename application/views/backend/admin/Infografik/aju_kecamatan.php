      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Sistem Informasi Pelayanan Akta Online Kota Surakarta
            <small> Infografik Data</small>
          </h1>
        
        </section>

        <!-- Main content -->
        <section class="content">

          <!--ISINE -->
        

          <div class="row" data-find="_4">
            <div class="col-md-12">
              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs-custom" data-find="_11">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#tab_1-1" data-toggle="tab"> Grafik Data</a></li>
                  <!--<li><a href="#tab_2-2" data-toggle="tab"> Tabel Data</a></li>-->
                  <li class="pull-left header"><i class="fa fa-th"></i> Infografik Pengajuan Per Kecamatan</li>
                </ul>
                <div class="tab-content" data-find="_10">
                  <div class="tab-pane active" id="tab_1-1">
                  <form action=<?=base_url("ig/ig4")?> method="post">
                    <div class="col-sm-2">
                      <label class="label-form pull-right"> Periode : </label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control pull-right" name="tanggal" id="reservation">
                    </div>
                    <div class="col-sm-1">
                      <input type="submit" class="btn btn-primary" value="Tampilkan Data">
                    </div>
                    
                  </form>
                    <hr />
                    
                    <div id="g4" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2-2">
                   
                    <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>Elemen Data</th>
                      <th>Data Total Kelahiran</th>
                      <?php if($status!='ADMIN') { 
                          echo "<th>Data Kelahiran Per Wilayah</th>";
                        }?>
                      
                    </tr>
                    <tr>
                      <td>Total Jumlah Kelahiran Bayi</td>
                       <td> <?php echo $total['jml'];?> Bayi</td>
                       <?php if($status!='ADMIN') { 
                          echo "<td>$kel[jml] Bayi</td>";
                        }?>
                    </tr>
                    
                    <tr>
                      <td>Bayi_Laki-Laki</td>
                       <td> <?php echo $total['laki']?>  Bayi</td>
                       <?php if($status!='ADMIN') { 
                          echo "<td>$kel[laki] Bayi</td>";
                        }?>
                    </tr>

                    <tr>
                      <td>Bayi Perempuan</td>
                       <td> <?php echo $total['wanita'];?> Bayi</td>
                       <?php if($status!='ADMIN') { 
                          echo "<td>$kel[wanita] Bayi</td>";
                        }?>
                       
                    </tr>
                  </tbody></table>
                </div>

                   
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->