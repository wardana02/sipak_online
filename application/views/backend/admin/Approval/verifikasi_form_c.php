 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <h2 style="margin-top:0px">Verifikasi Pendaftaran Akta Perceraian</h2>
            </div>
            <div class="col-md-12 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div><br>
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> 
                   </h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <div class="">
                  
                  <!--FRO GENERATE -->

                  <section class="panel">
                          <header class="panel-heading tab-bg-dark-navy-blue">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#Suami">
                                          <i class="fa fa-user"> </i>
                                          Data Suami
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Istri">
                                          <i class="fa  fa-heart"></i>
                                          Data Istri
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Perkawinan">
                                          <i class="fa fa-archive"></i>
                                          Data Perkawinan
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Verifikasi">
                                          <i class="glyphicon glyphicon-ok"></i>
                                          Oke, Verifikasi
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="Suami" class="tab-pane active">
                                      <h2 style="margin-top:0px">Data Suami</h2>
                                        <table class="table">
                                          <tr><td width="350">Nomor KK</td><td><?php echo $suami_data->no_kk; ?></td></tr>
                                          <tr><td>NIK</td><td><?php echo $suami_data->nik; ?></td></tr>
                                          <tr><td>Nama Lengkap</td><td><?php echo $suami_data->nama; ?></td></tr>
                                          <tr><td>Tempat Lahir</td><td><?php echo $suami_data->tmp_lahir; ?></td></tr>
                                          <tr><td>Tanggal Lahir</td><td><?php echo $suami_data->tgl_lahir; ?></td></tr>
                                          <tr><td>Pendidikan Terakhir</td><td><?php echo $suami_data->pendidikan_terakhir; ?></td></tr>
                                          <tr><td>Agama</td><td><?php echo $suami_data->agama; ?></td></tr>
                                          <?php if ($suami_data->nm_organisasi!=NULL) {
                                            echo "<tr><td>Nama Organisasi/Penghayat</td><td>$suami_data->nm_organisasi</td></tr>";
                                          }?>
                                          <tr><td>Pekerjaan</td><td><?php echo $suami_data->pekerjaan; ?></td></tr>
                                          <tr><td>Perceraian Ke</td><td><?php echo $suami_data->perceraian_ke; ?></td></tr>
                                          <tr><td>Alamat</td><td><?php echo $suami_data->a_alamat; ?></td></tr>
                                          <tr><td>Desa</td><td><?php echo $suami_data->a_desa; ?></td></tr>
                                          <tr><td>Kecamatan</td><td><?php echo $suami_data->a_kecamatan; ?></td></tr>
                                          <tr><td>Kab/Kota</td><td><?php echo $suami_data->a_kabkota; ?></td></tr>
                                           </table>

                                        

                                        <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_suami"); ?>
                                           title=" KTP Suami">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_suami"); ?> width="310" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> KTP Suami</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>

                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->kk"); ?>
                                           title=" Kartu Keluarga">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->kk"); ?> width="310" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Kartu Keluarga</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                        </ul>

                                  </div>
                                  <div id="Istri" class="tab-pane">
                                      <h2 style="margin-top:0px">Data Istri</h2>
                                        <table class="table">
                                          <tr><td width="350">Nomor KK</td><td><?php echo $istri_data->no_kk; ?></td></tr>
                                          <tr><td>NIK</td><td><?php echo $istri_data->nik; ?></td></tr>
                                          <tr><td>Nama Lengkap</td><td><?php echo $istri_data->nama; ?></td></tr>
                                          <tr><td>Tempat Lahir</td><td><?php echo $istri_data->tmp_lahir; ?></td></tr>
                                          <tr><td>Tanggal Lahir</td><td><?php echo $istri_data->tgl_lahir; ?></td></tr>
                                          <tr><td>Pendidikan Terakhir</td><td><?php echo $istri_data->pendidikan_terakhir; ?></td></tr>
                                          <tr><td>Agama</td><td><?php echo $istri_data->agama; ?></td></tr>
                                          <?php if ($istri_data->nm_organisasi!=NULL) {
                                            echo "<tr><td>Nama Organisasi/Penghayat</td><td>$istri_data->nm_organisasi</td></tr>";
                                          }?>
                                          <tr><td>Pekerjaan</td><td><?php echo $istri_data->pekerjaan; ?></td></tr>
                                          <tr><td>Alamat</td><td><?php echo $istri_data->a_alamat; ?></td></tr>
                                          <tr><td>Desa</td><td><?php echo $istri_data->a_desa; ?></td></tr>
                                          <tr><td>Kecamatan</td><td><?php echo $istri_data->a_kecamatan; ?></td></tr>
                                          <tr><td>Kab/Kota</td><td><?php echo $istri_data->a_kabkota; ?></td></tr>
                                           </table> 

                                        <ul class="mailbox-attachments clearfix"> 
                                             <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_istri"); ?>
                                           title="Bukti Scan KTP Istri">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_istri"); ?> width="310px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> KTP Istri</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                        </ul>
                                    
                                  </div>


                                  <div id="Perkawinan" class="tab-pane">
                                      <h2 style="margin-top:0px">Data Catatan Perkawinan</h2>
                                          <table class="table">
                                              <tr><td width="350">Yang Mengajukan</td><td><?php echo $perceraian->yang_mengajukan; ?></td></tr>
                                              <tr><td>No Akta Perkawinan</td><td><?php echo $perceraian->no_akta_perkawinan; ?></td></tr>
                                              <tr><td>Tanggal Akta Perkawinan</td><td><?php echo $perceraian->tgl_akta_perkawinan; ?></td></tr>
                                              <tr><td>Tempat Pencatatan</td><td><?php echo $perceraian->tmp_pencatatan; ?></td></tr>
                                              <tr><td>Noor Putusan</td><td><?php echo $perceraian->no_putusan; ?></td></tr>
                                              <tr><td>Tanggal Putusan</td><td><?php echo $perceraian->tgl_putusan; ?></td></tr>
                                              <tr><td>Tingkat Peradilan</td><td><?php echo $perceraian->tkt_peradilan; ?></td></tr>
                                              <tr><td>Tempat Peradilan</td><td><?php echo $perceraian->tmp_peradilan; ?></td></tr>
                                              <tr><td>Nama Lembaga</td><td><?php echo $perceraian->nama_lembaga; ?></td></tr>
                                              <tr><td>Sebab</td><td><?php echo $perceraian->sebab; ?></td></tr>
                                              <tr><td>Tanggal Melapor</td><td><?php echo $perceraian->tgl_melapor; ?></td></tr>
                                          </table>


                                      <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->sk_pengadilan"); ?>
                                           title=" Surat Keterangan Pengadilan">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->sk_pengadilan"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Surat Keterangan Pengadilan</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>

                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->surat_panitera_pn"); ?>
                                           title=" Surat Penitera Pengadilan Negeri">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->surat_panitera_pn"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Surat Panitera Pengadilan Negeri</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                        </ul>
                                  </div>

                                  <div id="Verifikasi" class="tab-pane">
                                      <h2>Oke Verifikasi Sekarang</h2>
                                      <p>Berikan status verifikasi anda, berikan keterangan pada kolom yang disediakan.</p>
                                      <form action="<?php echo $action; ?>" method="post">
                                          <div class="form-group">
                                                <label for="varchar">Status Verifikasi Berkas <?php echo form_error('id_akta') ?></label>
                                                <select class="form-control" name="verifikasi">
                                                  <option value="">Belum Diverifikasi</option>
                                                  <option value="revisi">Terdapat Revisi</option>
                                                  <option value="<?php echo date("Y-m-d")?>">Diverifikasi</option>
                                                </select>
                                           </div>



                                          <div class="form-group">
                                                <label for="varchar">Keterangan <?php echo form_error('progres') ?></label>
                                                <textarea class="form-control" rows="3" name="keterangan" id="keterangan"><?php echo $keterangan; ?></textarea>                                            
                                                </div>
                                          <input type="hidden" name="no_registrasi" value="<?php echo $no_registrasi; ?>" />
                                          <input type="hidden" name="no_hp" value="<?php echo $no_hp; ?>" />
                                          <input type="hidden" name="id_akta" value="<?php echo $suami_data->id_ac; ?>" /> 

                                          <button type="submit" class="btn btn-large btn-primary"> <i class="glyphicon glyphicon-check"></i> Simpan Verifikasi</button> 
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </section>
                   
                    <!--FRO GENERATE -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

c