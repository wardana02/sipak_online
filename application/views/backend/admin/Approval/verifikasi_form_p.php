 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <h2 style="margin-top:0px">Verifikasi Pendaftaran Akta Kematian</h2>
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
                                          Data Suami & Orang Tua
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Istri">
                                          <i class="fa  fa-heart"></i>
                                          Data Istri & Orang Tua
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Saksi">
                                          <i class="fa  fa-heart-o"></i>
                                          Data Saksi
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Perkawinan">
                                          <i class="fa fa-archive"></i>
                                          Data Perkawinan
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Anak">
                                          <i class="fa fa-leaf"></i>
                                          Pengakuan Anak
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
                                          <tr><td>Anak Ke</td><td><?php echo $suami_data->anak_ke; ?></td></tr>
                                          <tr><td>Status Sebelum Nikah</td><td><?php echo $suami_data->status_sebelum_nikah; ?></td></tr>
                                          <tr><td>Perkawinan Ke</td><td><?php echo $suami_data->perkawinan_ke; ?></td></tr>
                                          <tr><td>Istri Ke (Poligami)</td><td><?php echo $suami_data->istri_ke; ?></td></tr>
                                          <tr><td>Alamat</td><td><?php echo $suami_data->a_alamat; ?></td></tr>
                                          <tr><td>Desa</td><td><?php echo $suami_data->a_desa; ?></td></tr>
                                          <tr><td>Kecamatan</td><td><?php echo $suami_data->a_kecamatan; ?></td></tr>
                                          <tr><td>Kab/Kota</td><td><?php echo $suami_data->a_kabkota; ?></td></tr>
                                           </table> 

                                        <h2 style="margin-top:0px">Data Ayah Suami</h2>
                                        <table class="table">
                                            <tr><td width="350">NIK</td><td><?php echo $ayah_data_s->nik; ?></td></tr>
                                            <tr><td>Nama Lengkap</td><td><?php echo $ayah_data_s->nama; ?></td></tr>
                                            <tr><td>Agama</td><td><?php echo $ayah_data_s->agama; ?></td></tr>
                                              <?php if ($ayah_data_s->nm_organisasi!=NULL) {
                                              echo "<tr><td>Nama Organisasi/Penghayat</td><td>$ayah_data_s->nm_organisasi</td></tr>";
                                            }?>
                                            <tr><td>Tempat Lahir</td><td><?php echo $ayah_data_s->tmp_lahir; ?></td></tr>
                                            <tr><td>Tanggal Lahir</td><td><?php echo $ayah_data_s->tgl_lahir; ?></td></tr>
                                            <tr><td>Desa</td><td><?php echo $ayah_data_s->a_desa; ?></td></tr>
                                            <tr><td>Kecamatan</td><td><?php echo $ayah_data_s->a_kecamatan; ?></td></tr>
                                            <tr><td>Kab/Kota</td><td><?php echo $ayah_data_s->a_kabkota; ?></td></tr>
                                            <tr><td>Provinsi</td><td><?php echo $ayah_data_s->a_provinsi; ?></td></tr>
                                            <tr><td>Pekerjaan</td><td><?php echo $ayah_data_s->pekerjaan; ?></td></tr>
                                        </table>

                                        <h2 style="margin-top:0px">Data Ibu Suami</h2>
                                        <table class="table">
                                            <tr><td width="350">NIK</td><td><?php echo $ibu_data_s->nik; ?></td></tr>
                                            <tr><td>Nama Lengkap</td><td><?php echo $ibu_data_s->nama; ?></td></tr>
                                            <tr><td>Agama</td><td><?php echo $ibu_data_s->agama; ?></td></tr>
                                              <?php if ($ibu_data_s->nm_organisasi!=NULL) {
                                              echo "<tr><td>Nama Organisasi/Penghayat</td><td>$ibu_data_s->nm_organisasi</td></tr>";
                                            }?>
                                            <tr><td>Tempat Lahir</td><td><?php echo $ibu_data_s->tmp_lahir; ?></td></tr>
                                            <tr><td>Tanggal Lahir</td><td><?php echo $ibu_data_s->tgl_lahir; ?></td></tr>
                                            <tr><td>Desa</td><td><?php echo $ibu_data_s->a_desa; ?></td></tr>
                                            <tr><td>Kecamatan</td><td><?php echo $ibu_data_s->a_kecamatan; ?></td></tr>
                                            <tr><td>Kab/Kota</td><td><?php echo $ibu_data_s->a_kabkota; ?></td></tr>
                                            <tr><td>Provinsi</td><td><?php echo $ibu_data_s->a_provinsi; ?></td></tr>
                                            <tr><td>Pekerjaan</td><td><?php echo $ibu_data_s->pekerjaan; ?></td></tr>
                                        </table>

                                        <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->pasfoto"); ?>
                                           title=" Pas Foto Berdampingan">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->pasfoto"); ?> width="310px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Pas Foto Berdampingan</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                        </ul>
                              

                                        <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->kk_suami"); ?>
                                           title="Bukti Scan Surat Keterangan Kematian">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->kk_suami"); ?> width="310px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Kartu Keluarga Suami</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>

                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_suami"); ?>
                                           title="Bukti Scan Akta Kelahiran">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_suami"); ?> width="310px" alt="" />
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
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->al_suami"); ?>
                                           title=" Akta Kelahiran Suami">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->al_suami"); ?> width="310px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Akta Kelahiran Suami</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>

                                        <?php if($berkas_data->am_ayah_suami != ''){?>
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->am_ayah_suami"); ?>
                                           title="Bukti Scan Akta Perkawinan (Bila Sudah Menikah)">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->am_ayah_suami"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Bukti Scan Akta Perkawinan (Bila Sudah Menikah</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                        <?php } ?>

                                        <?php if($berkas_data->am_ibu_suami != ''){?>
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->am_ibu_suami"); ?>
                                           title="Bukti Scan Akta Perkawinan (Bila Sudah Menikah)">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->am_ibu_suami"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Bukti Scan Akta Perkawinan (Bila Sudah Menikah</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                        <?php } ?>
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
                                          <tr><td>Anak Ke</td><td><?php echo $istri_data->anak_ke; ?></td></tr>
                                          <tr><td>Status Sebelum Nikah</td><td><?php echo $istri_data->status_sebelum_nikah; ?></td></tr>
                                          <tr><td>Perkawinan Ke</td><td><?php echo $istri_data->perkawinan_ke; ?></td></tr>
                                          <tr><td>Istri Ke (Poligami)</td><td><?php echo $istri_data->istri_ke; ?></td></tr>
                                          <tr><td>Alamat</td><td><?php echo $istri_data->a_alamat; ?></td></tr>
                                          <tr><td>Desa</td><td><?php echo $istri_data->a_desa; ?></td></tr>
                                          <tr><td>Kecamatan</td><td><?php echo $istri_data->a_kecamatan; ?></td></tr>
                                          <tr><td>Kab/Kota</td><td><?php echo $istri_data->a_kabkota; ?></td></tr>
                                           </table> 

                                        <h2 style="margin-top:0px">Data Ayah Istri</h2>
                                        <table class="table">
                                            <tr><td width="350">NIK</td><td><?php echo $ayah_data_i->nik; ?></td></tr>
                                            <tr><td>Nama Lengkap</td><td><?php echo $ayah_data_i->nama; ?></td></tr>
                                            <tr><td>Agama</td><td><?php echo $ayah_data_i->agama; ?></td></tr>
                                              <?php if ($ayah_data_i->nm_organisasi!=NULL) {
                                              echo "<tr><td>Nama Organisasi/Penghayat</td><td>$ayah_data_i->nm_organisasi</td></tr>";
                                            }?>
                                            <tr><td>Tempat Lahir</td><td><?php echo $ayah_data_i->tmp_lahir; ?></td></tr>
                                            <tr><td>Tanggal Lahir</td><td><?php echo $ayah_data_i->tgl_lahir; ?></td></tr>
                                            <tr><td>Desa</td><td><?php echo $ayah_data_i->a_desa; ?></td></tr>
                                            <tr><td>Kecamatan</td><td><?php echo $ayah_data_i->a_kecamatan; ?></td></tr>
                                            <tr><td>Kab/Kota</td><td><?php echo $ayah_data_i->a_kabkota; ?></td></tr>
                                            <tr><td>Provinsi</td><td><?php echo $ayah_data_i->a_provinsi; ?></td></tr>
                                            <tr><td>Pekerjaan</td><td><?php echo $ayah_data_i->pekerjaan; ?></td></tr>
                                        </table>

                                        <h2 style="margin-top:0px">Data Ibu Istri</h2>
                                        <table class="table">
                                            <tr><td width="350">NIK</td><td><?php echo $ibu_data_i->nik; ?></td></tr>
                                            <tr><td>Nama Lengkap</td><td><?php echo $ibu_data_i->nama; ?></td></tr>
                                            <tr><td>Agama</td><td><?php echo $ibu_data_i->agama; ?></td></tr>
                                              <?php if ($ibu_data_i->nm_organisasi!=NULL) {
                                              echo "<tr><td>Nama Organisasi/Penghayat</td><td>$ibu_data_i->nm_organisasi</td></tr>";
                                            }?>
                                            <tr><td>Tempat Lahir</td><td><?php echo $ibu_data_i->tmp_lahir; ?></td></tr>
                                            <tr><td>Tanggal Lahir</td><td><?php echo $ibu_data_i->tgl_lahir; ?></td></tr>
                                            <tr><td>Desa</td><td><?php echo $ibu_data_i->a_desa; ?></td></tr>
                                            <tr><td>Kecamatan</td><td><?php echo $ibu_data_i->a_kecamatan; ?></td></tr>
                                            <tr><td>Kab/Kota</td><td><?php echo $ibu_data_i->a_kabkota; ?></td></tr>
                                            <tr><td>Provinsi</td><td><?php echo $ibu_data_i->a_provinsi; ?></td></tr>
                                            <tr><td>Pekerjaan</td><td><?php echo $ibu_data_i->pekerjaan; ?></td></tr>
                                        </table>

                                        <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->kk_istri"); ?>
                                           title=" Kartu Keluarga Istri">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->kk_istri"); ?> width="310px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Kartu Keluarga Istri</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>

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

                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->al_istri"); ?>
                                           title=" Akta Kelahiran Istri">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->al_istri"); ?> width="310px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Akta Kelahiran Istri</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>

                                        <?php if($berkas_data->am_ayah_istri != ''){?>
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->am_ayah_istri"); ?>
                                           title=" Akta Kematian Ayah (Istri))">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->am_ayah_istri"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Akta Kematian Ayah (Istri)</a>
                                            <span class="mailbox-attachment-size"> 
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                        <?php } ?>

                                        <?php if($berkas_data->am_ibu_istri != ''){?>
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->am_ibu_istri"); ?>
                                           title=" Akta Kematian Ibu (Istri)">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->am_ibu_istri"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Akta Kematian Ibu (Istri)</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                        <?php } ?>
                                        </ul>
                                    
                                  </div>

                                  <div id="Saksi" class="tab-pane">
                                      <h2 style="margin-top:0px">Data Saksi 1</h2>
                                      <table class="table">
                                          <tr><td width="350">NIK</td><td><?php echo $saksi1_data->nik; ?></td></tr>
                                          <tr><td>Nama Lengkap</td><td><?php echo $saksi1_data->nama; ?></td></tr>
                                          <tr><td>Tempat Lahir</td><td><?php echo $saksi1_data->tmp_lahir; ?></td></tr>
                                          <tr><td>Tanggal Lahir</td><td><?php echo $saksi1_data->tgl_lahir; ?></td></tr>
                                          <tr><td>Agama</td><td><?php echo $saksi1_data->agama; ?></td></tr>
                                              <?php if ($saksi1_data->nm_organisasi!=NULL) {
                                              echo "<tr><td>Nama Organisasi/Penghayat</td><td>$saksi1_data->nm_organisasi</td></tr>";
                                            }?>
                                          <tr><td>Alamat</td><td><?php echo $saksi1_data->a_alamat; ?></td></tr>
                                          <tr><td>Desa</td><td><?php echo $saksi1_data->a_desa; ?></td></tr>
                                          <tr><td>Kecamatan</td><td><?php echo $saksi1_data->a_kecamatan; ?></td></tr>
                                          <tr><td>Kabkota</td><td><?php echo $saksi1_data->a_kabkota; ?></td></tr>
                                          <tr><td>Provinsi</td><td><?php echo $saksi1_data->a_provinsi; ?></td></tr>
                                          <tr><td>Pekerjaan</td><td><?php echo $saksi1_data->pekerjaan; ?></td></tr>
                                      </table>

                                      <h2 style="margin-top:0px">Data Saksi 2</h2>
                                      <table class="table">
                                          <tr><td width="350">NIK</td><td><?php echo $saksi2_data->nik; ?></td></tr>
                                          <tr><td>Nama Lengkap</td><td><?php echo $saksi2_data->nama; ?></td></tr>
                                          <tr><td>Tempat Lahir</td><td><?php echo $saksi2_data->tmp_lahir; ?></td></tr>
                                          <tr><td>Tanggal Lahir</td><td><?php echo $saksi2_data->tgl_lahir; ?></td></tr>
                                          <tr><td>Agama</td><td><?php echo $saksi2_data->agama; ?></td></tr>
                                              <?php if ($saksi2_data->nm_organisasi!=NULL) {
                                              echo "<tr><td>Nama Organisasi/Penghayat</td><td>$saksi2_data->nm_organisasi</td></tr>";
                                            }?>
                                          <tr><td>Alamat</td><td><?php echo $saksi2_data->a_alamat; ?></td></tr>
                                          <tr><td>Desa</td><td><?php echo $saksi2_data->a_desa; ?></td></tr>
                                          <tr><td>Kecamatan</td><td><?php echo $saksi2_data->a_kecamatan; ?></td></tr>
                                          <tr><td>Kabkota</td><td><?php echo $saksi2_data->a_kabkota; ?></td></tr>
                                          <tr><td>Provinsi</td><td><?php echo $saksi2_data->a_provinsi; ?></td></tr>
                                          <tr><td>Pekerjaan</td><td><?php echo $saksi2_data->pekerjaan; ?></td></tr>
                                      </table>

                                      <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_saksi1"); ?>
                                           title="Bukti Scan KTP Saksi 1">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_saksi1"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Bukti Scan KTP Saksi 1</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                      </ul>
                                      
                                      <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_saksi2"); ?>
                                           title="Bukti Scan KTP Saksi 2">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_saksi2"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Bukti Scan KTP Saksi 2</a>
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
                                            <tr><td width="350">Tanggal Pemberkatan</td><td><?php echo $perkawinan->tgl_pemberkatan; ?></td></tr>
                                            <tr><td>Hari Lapor</td><td><?php echo $perkawinan->hari_lapor; ?></td></tr>
                                            <tr><td>Tanggal Lapor</td><td><?php echo $perkawinan->tgl_lapor; ?></td></tr>
                                            <tr><td>Pukul</td><td><?php echo $perkawinan->pukul; ?></td></tr>
                                            <tr><td>Agama</td><td><?php echo $perkawinan->agama; ?></td></tr>
                                            <tr><td>Nama Organisasi</td><td><?php echo $perkawinan->nama_organisasi; ?></td></tr>
                                            <tr><td>Nama Peradilan</td><td><?php echo $perkawinan->nama_peradilan; ?></td></tr>
                                            <tr><td>Nomor Putusan</td><td><?php echo $perkawinan->nomor_putusan; ?></td></tr>
                                            <tr><td>Tanggal Putusan</td><td><?php echo $perkawinan->tgl_putusan; ?></td></tr>
                                            <tr><td>Nama Pemuka</td><td><?php echo $perkawinan->nama_pemuka; ?></td></tr>
                                          </table>


                                      <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->sk_pernikahan"); ?>
                                           title=" Surat Keterangan Pernikahan">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->sk_pernikahan"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Surat Keterangan Pernikahan</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>

                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox"  data-fancybox-group="gallery" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->sk_kelurahan"); ?>
                                           title=" Surat Keterangan Kelurahan">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->sk_kelurahan"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Surat Keterangan Kelurahan</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                        </ul>
                                  </div>

                                  <div id="Anak" class="tab-pane">

                                  <table class="table table-striped table-advance table-hover">
                                          <thead>
                                          <tr>
                                              <th><i class="fa fa-bullhorn"></i> Nomor</th>
                                              <th><i class="fa fa-bullhorn"></i> Nama Anak</th>
                                              <th><i class="fa fa-bullhorn"></i> Nomor Akta</th>
                                              <th class="hidden-phone"> Tanggal Akta</th>

                                              <th></th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <?php $i=1; foreach ($anak_data as $key) { ?> 
                                          <tr>
                                              <td><a href="#"><?php echo $i++ ;?></a></td>
                                              <td class="hidden-phone"><?php echo $key->nama_anak;?></td>
                                              <td><?php echo $key->nomor_akta;?></td>
                                              <td><?php echo dateindo($key->tgl_akta);?></td>
                                         </tr>
                                          <?php } ?>
                                          </tbody>
                                     </table>
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
                                          <input type="hidden" name="id_akta" value="<?php echo $suami_data->id_ap; ?>" /> 

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

