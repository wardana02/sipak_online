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
                                      <a data-toggle="tab" href="#Bayi">
                                          <i class="fa fa-user"> </i>
                                          Data Jenazah
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Ibu">
                                          <i class="fa  fa-heart"></i>
                                          Data Ibu
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Ayah">
                                          <i class="fa  fa-heart-o"></i>
                                          Data Ayah
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Pelapor">
                                          <i class="fa fa-archive"></i>
                                          Data Pelapor
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Saksi-1">
                                          <i class="fa fa-leaf"></i>
                                          Data Saksi 1
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Saksi-2">
                                          <i class="fa fa-leaf"></i>
                                          Data Saksi 2
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
                                  <div id="Bayi" class="tab-pane active">
                                      <h2 style="margin-top:0px">Data Jenazah</h2>
                                        <table class="table">
                                            <tr><td>Nama</td><td><?php echo $jenazah_data->nama; ?></td></tr>
                                            <tr><td>Jk</td><td><?php echo $jenazah_data->jk; ?></td></tr>
                                            <tr><td>Tmp Lahir</td><td><?php echo $jenazah_data->tmp_lahir; ?></td></tr>
                                            <tr><td>Umur</td><td><?php echo $jenazah_data->umur; ?></td></tr>
                                            <tr><td>Tgl Lahir</td><td><?php echo $jenazah_data->tgl_lahir; ?></td></tr>
                                            <tr><td>Agama</td><td><?php echo $jenazah_data->agama; ?></td></tr>
                                            <tr><td>Pekerjaan</td><td><?php echo $jenazah_data->pekerjaan; ?></td></tr>
                                            <tr><td>Tgl Kematian</td><td><?php echo $jenazah_data->tgl_kematian; ?></td></tr>
                                            <tr><td>Menerangkan</td><td><?php echo $jenazah_data->menerangkan; ?></td></tr>
                                            <tr><td>Anak Ke</td><td><?php echo $jenazah_data->anak_ke; ?></td></tr>
                                            <tr><td>Sebab Kematian</td><td><?php echo $jenazah_data->sebab_kematian; ?></td></tr>
                                            <tr><td>Tmp Kematian</td><td><?php echo $jenazah_data->tmp_kematian; ?></td></tr>
                                            <tr><td>A Alamat</td><td><?php echo $jenazah_data->a_alamat; ?></td></tr>
                                            <tr><td>A Desa</td><td><?php echo $jenazah_data->a_desa; ?></td></tr>
                                            <tr><td>A Kecamatan</td><td><?php echo $jenazah_data->a_kecamatan; ?></td></tr>
                                            <tr><td>A Kabkota</td><td><?php echo $jenazah_data->a_kabkota; ?></td></tr>
                                        </table>

                                        <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox-effects-b" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->sk_kematian"); ?>
                                           title="Bukti Scan Surat Keterangan Kematian">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->sk_kematian"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Bukti Scan Surat Keterangan Kematian</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>

                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox-effects-b" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->akta_lahir"); ?>
                                           title="Bukti Scan Akta Kelahiran">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->akta_lahir"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Bukti Scan Akta Kelahiran</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>

                                        <?php if($berkas_data->akta_nikah != ''){?>
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox-effects-b" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->akta_nikah"); ?>
                                           title="Bukti Scan Akta Perkawinan (Bila Sudah Menikah)">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->akta_nikah"); ?> width="320px" alt="" />
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
                                  <div id="Ibu" class="tab-pane">
                                      <h2 style="margin-top:0px">Data Ibu</h2>
                                         <table class="table">
                                        <tr><td>NIK</td><td><?php echo $ibu_data->nik; ?></td></tr>
                                        <tr><td>Nama Ibu</td><td><?php echo $ibu_data->nama; ?></td></tr>
                                        <tr><td>Tanggal Lahir Ibu</td><td><?php echo $ibu_data->tgl_lahir; ?></td></tr>
                                        <tr><td>Umur</td><td><?php echo $ibu_data->umur; ?></td></tr>
                                        <tr><td>Pekerjaan</td><td><?php echo $ibu_data->pekerjaan; ?></td></tr>
                                        <tr><td>Alamat</td><td><?php echo $ibu_data->a_alamat; ?></td></tr>
                                        <tr><td>Desa</td><td><?php echo $ibu_data->a_desa; ?></td></tr>
                                        <tr><td>Kecamatan</td><td><?php echo $ibu_data->a_kecamatan; ?></td></tr>
                                        <tr><td>Kabkota</td><td><?php echo $ibu_data->a_kabkota; ?></td></tr>
                                        <tr><td>Provinsi</td><td><?php echo $ibu_data->a_provinsi; ?></td></tr>
                                        <tr><td>Tanggal Pencatatan Kawin</td><td><?php echo $ibu_data->tgl_pencatatan_kawin; ?></td></tr>
                                    </table>
                                    
                                  </div>

                                  <div id="Ayah" class="tab-pane">
                                      <h2 style="margin-top:0px">Data Ayah</h2>
                                        <table class="table">
                                        <tr><td>NIK</td><td><?php echo $ayah_data->nik; ?></td></tr>
                                        <tr><td>Nama Ibu</td><td><?php echo $ayah_data->nama; ?></td></tr>
                                        <tr><td>Tanggal Lahir Ibu</td><td><?php echo $ayah_data->tgl_lahir; ?></td></tr>
                                        <tr><td>Umur</td><td><?php echo $ayah_data->umur; ?></td></tr>
                                        <tr><td>Pekerjaan</td><td><?php echo $ayah_data->pekerjaan; ?></td></tr>
                                        <tr><td>Alamat</td><td><?php echo $ayah_data->a_alamat; ?></td></tr>
                                        <tr><td>Desa</td><td><?php echo $ayah_data->a_desa; ?></td></tr>
                                        <tr><td>Kecamatan</td><td><?php echo $ayah_data->a_kecamatan; ?></td></tr>
                                        <tr><td>Kabkota</td><td><?php echo $ayah_data->a_kabkota; ?></td></tr>
                                        <tr><td>Provinsi</td><td><?php echo $ayah_data->a_provinsi; ?></td></tr>
                                    </table>  
                                </div>

                                  <div id="Pelapor" class="tab-pane">
                                      <h2 style="margin-top:0px">Data Pelapor Read</h2>
                                          <table class="table">
                                          <tr><td>NIK</td><td><?php echo $pelapor_data->nik; ?></td></tr>
                                          <tr><td>Nama</td><td><?php echo $pelapor_data->nama; ?></td></tr>
                                          <tr><td>Umur</td><td><?php echo $pelapor_data->umur; ?></td></tr>
                                          <tr><td>Desa</td><td><?php echo $pelapor_data->a_desa; ?></td></tr>
                                          <tr><td>Kecamatan</td><td><?php echo $pelapor_data->a_kecamatan; ?></td></tr>
                                          <tr><td>Kabkota</td><td><?php echo $pelapor_data->a_kabkota; ?></td></tr>
                                          <tr><td>Provinsi</td><td><?php echo $pelapor_data->a_provinsi; ?></td></tr>
                                          <tr><td>Jenis Kelamin</td><td><?php echo $pelapor_data->jk; ?></td></tr>
                                          <tr><td>Pekerjaan</td><td><?php echo $pelapor_data->pekerjaan; ?></td></tr>
                                          </table>

                                      <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox-effects-b" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_pelapor"); ?>
                                           title="Bukti Scan KTP Pelapor">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_pelapor"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Bukti Scan KTP Pelapor/a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>

                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox-effects-b" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->kk_pelapor"); ?>
                                           title="Bukti Scan KK Pelapor">
                                           <img src=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->kk_pelapor"); ?> width="320px" alt="" />
                                        </a> 
                                          </span>
                                          <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Bukti Scan KK Pelapor</a>
                                            <span class="mailbox-attachment-size">
                                              
                                              <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                          </div>
                                        </li>
                                        </ul>
                                  </div>

                                  <div id="Saksi-1" class="tab-pane">
                                      <h2 style="margin-top:0px">Data Saksi 1</h2>
                                      <table class="table">
                                          <tr><td>Nik</td><td><?php echo $saksi1_data->nik; ?></td></tr>
                                          <tr><td>Nama</td><td><?php echo $saksi1_data->nama; ?></td></tr>
                                          <tr><td>Umur</td><td><?php echo $saksi1_data->umur; ?></td></tr>
                                          <tr><td>A Alamat</td><td><?php echo $saksi1_data->a_alamat; ?></td></tr>
                                          <tr><td>A Desa</td><td><?php echo $saksi1_data->a_desa; ?></td></tr>
                                          <tr><td>A Kecamatan</td><td><?php echo $saksi1_data->a_kecamatan; ?></td></tr>
                                          <tr><td>A Kabkota</td><td><?php echo $saksi1_data->a_kabkota; ?></td></tr>
                                          <tr><td>A Provinsi</td><td><?php echo $saksi1_data->a_provinsi; ?></td></tr>
                                          <tr><td>Pekerjaan</td><td><?php echo $saksi1_data->pekerjaan; ?></td></tr>
                                      </table>
                                      <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox-effects-b" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_saksi1"); ?>
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
                                  </div>

                                  <div id="Saksi-2" class="tab-pane">
                                      <h2 style="margin-top:0px">Data Saksi 2</h2>
                                      <table class="table">
                                          <tr><td>Nik</td><td><?php echo $saksi2_data->nik; ?></td></tr>
                                          <tr><td>Nama</td><td><?php echo $saksi2_data->nama; ?></td></tr>
                                          <tr><td>Umur</td><td><?php echo $saksi2_data->umur; ?></td></tr>
                                          <tr><td>A Alamat</td><td><?php echo $saksi2_data->a_alamat; ?></td></tr>
                                          <tr><td>A Desa</td><td><?php echo $saksi2_data->a_desa; ?></td></tr>
                                          <tr><td>A Kecamatan</td><td><?php echo $saksi2_data->a_kecamatan; ?></td></tr>
                                          <tr><td>A Kabkota</td><td><?php echo $saksi2_data->a_kabkota; ?></td></tr>
                                          <tr><td>A Provinsi</td><td><?php echo $saksi2_data->a_provinsi; ?></td></tr>
                                          <tr><td>Pekerjaan</td><td><?php echo $saksi2_data->pekerjaan; ?></td></tr>
                                      </table>
                                      <ul class="mailbox-attachments clearfix"> 
                                        <li>
                                          <span class="mailbox-attachment-icon has-img">
                                          <a class="fancybox-effects-b" href=<?php echo base_url("assets/uploads/$no_registrasi/$berkas_data->ktp_saksi2"); ?>
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
                                          <input type="hidden" name="id_akta" value="<?php echo $jenazah_data->id_AM; ?>" /> 

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

