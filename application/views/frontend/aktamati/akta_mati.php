<section id="">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
              <div class="col-lg-1"></div>
                  <div class="col-lg-10">

                      <section class="panel">
                      <center>
                      <?php echo "
                        <h2>Akta Kematian Online</h2>
                        <h4>Nomor Pendaftaran : $NODAFTAR</h4>
                        <h4>a.n : $PENGAJU | $TELEPON </h4>";
                      ?>
                      </center>
                      <div class="col-md-12 text-center">
                          <div style="margin-top: 4px"  id="message">
                              <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                          </div>
                      </div><br>
                      <div class="col-sm-12">
                          <div class="col-sm-12 alert alert-warning fade in">
                             <center><h4>
                          <?php
                            if ($app->by_rw=='revisi') {
                              echo "<strong>Harap Revisi!</strong> ".$app->status_rw." Kemudian Pilih Tombol Oke, Sudah Selesai";
                            }elseif ($app->by_kelurahan=='revisi') {
                              echo "<strong>Harap Revisi!</strong> ".$app->status_kelurahan;
                            }elseif ($app->by_dukcapil=='revisi') {
                              echo "<strong>Harap Revisi!</strong> ".$app->status_dukcapil;
                            } else{
                              echo "<i class='glyphicon glyphicon-tag'></i><strong> Isi Formulir</strong> ";
                            }
                          ?>
                          </h4></center>
                          </div>
                          </div>

                          <center>
                          <header class="panel-heading btn btn-primary">
                              1. Formulir Akta Kematian
                          </header>
                          <a href="<?php echo site_url('b2_29/berkas/'.$ID_AM) ?>">
                          <header class="panel-heading btn btn-default">
                              2. Berkas Akta Kematian
                          </header></a>
                          <a href="<?php echo "$selesai";?>">
                          <header class="panel-heading btn btn-default">
                              3. Oke, Saya Selesai
                          </header></a>

                          </center>
                          <div class="panel-body">
                              <div class="stepy-tab">
                                  <ul id="default-titles" class="stepy-titles clearfix">
                                      <li id="default-title-0" class="current-step">
                                          <div>Data Jenazah</div>
                                      </li>
                                      <li id="default-title-1" class="">
                                          <div>Data Ibu</div>
                                      </li>
                                      <li id="default-title-2" class="">
                                          <div>Data Ayah</div>
                                      </li>
                                      <li id="default-title-3" class="">
                                          <div>Data Pelapor</div>
                                      </li>
                                      <li id="default-title-4" class="">
                                          <div>Data Saksi 1</div>
                                      </li>
                                      <li id="default-title-5" class="">
                                          <div>Data Saksi 2</div>
                                      </li>
                                      <li id="default-title-6" class="">
                                          <div>Selesai</div>
                                      </li>
                                  </ul>
                              </div>
                              <form class="form-horizontal" method="post" action="<?php echo $action; ?>" id="default">
                                  <fieldset title="Data Jenazah" class="step" id="default-step-0">
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" value="<?php echo $j_nik; ?>" name="j_nik" id="j_nik" class="form-control tooltips" data-toggle="tooltip " data-original-title="NIK Diisikan Tanpa Huruf & Spasi">
                                              <p class="help-block"><?php echo form_error('j_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataJenazah()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" value="<?php echo $j_nama; ?>" readonly name="j_nama" id="j_nama" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Format Penulisan Seperti Contoh">
                                              <p class="help-block"><?php echo form_error('j_nama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Jenis Kelamin</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="j_jk" readonly="" id="j_jk" value="<?php echo $j_jk; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Jenis Kelamin Dari Pelapor" >
                                              <p class="help-block"><?php echo form_error('j_jk') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" value="<?php echo $j_tgl_lahir; ?>" name="j_tgl_lahir" id="j_tgl_lahir" readonly="" size="16" class="form-control">
                                              </div>
                                              <p class="help-block"><?php echo form_error('j_tgl_lahir') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" id="j_umur" name="j_umur" readonly="" value="<?php echo $j_umur; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Klik Tombol Disamping Untuk Menghitung Umur Otomatisr">
                                              <p class="help-block"><?php echo form_error('j_umur') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tempat Lahir</label>
                                          <div class="col-lg-10">
                                              <input type="text" value="<?php echo $j_tmp_lahir; ?>" readonly class="form-control tooltips" name="j_tmp_lahir" id="j_tmp_lahir" data-toggle="tooltip " data-original-title="Isi Dengan Nama Kabupaten / Kota">
                                              <p class="help-block"><?php echo form_error('j_tmp_lahir') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Agama</label>
                                          <div class="col-lg-10">
                                              <input type="text" value="<?php echo $j_agama; ?>" readonly class="form-control tooltips" name="j_agama" id="j_agama" data-toggle="tooltip " data-original-title="Isi Dengan Nama Kabupaten / Kota">
                                              <p class="help-block"><?php echo form_error('j_agama') ?></p>
                                          </div>
                                      </div>

                                      
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" value="<?php echo $j_pekerjaan; ?>" readonly  class="form-control tooltips" name="j_pekerjaan" id="j_pekerjaan" data-toggle="tooltip " data-original-title="Isi Jenis Pekerjaan">
                                              <p class="help-block"><?php echo form_error('j_pekerjaan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" value="<?php echo $j_a_alamat; ?>" readonly class="form-control tooltips" name="j_a_alamat" id="j_a_alamat" data-toggle="tooltip " data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('j_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" value="<?php echo $j_a_desa; ?>" readonly class="form-control tooltips" data-toggle="tooltip " name="j_a_desa" id="j_a_desa" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('j_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" value="<?php echo $j_a_kecamatan; ?>" readonly class="form-control tooltips" data-toggle="tooltip " name="j_a_kecamatan" id="j_a_kecamatan" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('j_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" value="<?php echo $j_a_kabkota; ?>" readonly class="form-control tooltips" data-toggle="tooltip " name="j_a_kabkota" id="j_a_kabkota"  data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('j_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" value="<?php echo $j_a_provinsi; ?>" readonly class="form-control tooltips" data-toggle="tooltip " name="j_a_provinsi" id="j_a_provinsi"  data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('j_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Anak Ke-</label>
                                          <div class="col-lg-10">
                                              <input type="text" onkeypress="return runScript(event)" maxlength="2" value="<?php echo $j_anak_ke; ?>" class="form-control tooltips" name="j_anak_ke" id="j_anak_ke" data-toggle="tooltip " placeholder="" data-original-title="Anak ke, diisi/ditulis angka/kode urutan kelahiran jenazah dari satu ayah dan satu ibu pada kotak yang tersedia" >
                                              <p class="help-block"><?php echo form_error('j_anak_ke') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Kematian</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" value="<?php echo $j_tgl_kematian; ?>" readonly=""  id="j_tgl_kematian" name="j_tgl_kematian" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                              </div>
                                              <p class="help-block"><?php echo form_error('j_tgl_kematian') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Pukul</label>
                                          <div class="col-lg-4">
                                              <input type="text" value="<?php echo $j_pukul; ?>" class="form-control tooltips" name="j_pukul" id="j_pukul" data-toggle="tooltip " placeholder="15:00" data-original-title="Pukul, diisi pukul/waktu peristiwa kematian. Gunakan Format 24Jam">
                                              <p class="help-block"><?php echo form_error('j_pukul') ?></p>
                                          </div>
                                      </div>
  

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Sebab Kematian</label>
                                          <div class="col-lg-4">
                                              <div class="radios">
                                              <label class="label_radio r_on" for="radio-01">
                                                  <input name="j_sebab_kematian" <?php if($j_sebab_kematian=='Sakit Biasa/Tua') echo "checked=''"; ?> id="j_sebab_kematian" value="Sakit Biasa/Tua" type="radio" > Sakit Biasa/Tua
                                              </label>
                                              <label class="label_radio r_off" for="radio-02">
                                                  <input name="j_sebab_kematian" <?php if($j_sebab_kematian=='Wabah Penyakit') echo "checked=''"; ?> id="j_sebab_kematian" value="Wabah Penyakit" type="radio"> Wabah Penyakit
                                              </label>
                                              <label class="label_radio r_off" for="radio-02">
                                                  <input name="j_sebab_kematian" <?php if($j_sebab_kematian=='Kecelakaan') echo "checked=''"; ?> id="j_sebab_kematian" value="Kecelakaan" type="radio"> Kecelakaan
                                              </label>
                                              <label class="label_radio r_off" for="radio-02">
                                                  <input name="j_sebab_kematian" <?php if($j_sebab_kematian=='Kriminalitas') echo "checked=''"; ?> id="j_sebab_kematian" value="Kriminalitas" type="radio"> Kriminalitas
                                              </label>
                                              <label class="label_radio r_off" for="radio-02">
                                                  <input name="j_sebab_kematian" <?php if($j_sebab_kematian=='Bunuh Diri') echo "checked=''"; ?> id="j_sebab_kematian" value="Bunuh Diri" type="radio"> Bunuh Diri
                                              </label>
                                              <label class="label_radio r_off" for="radio-02">
                                                  <input name="j_sebab_kematian" <?php if($j_sebab_kematian=='Lainnya') echo "checked=''"; ?> id="j_sebab_kematian" value="Lainnya" type="radio"> Lainnya
                                              </label>
                                          </div>
                                          <p class="help-block"><?php echo form_error('j_sebab_kematian') ?></p>    
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Tempat Kematian</label>
                                          <div class="col-lg-4">
                                              <input type="text" value="<?php echo $j_tmp_kematian; ?>" class="form-control tooltips" name="j_tmp_kematian" id="j_tmp_kematian" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Kab/Kota Tempat Kematian">
                                              <p class="help-block"><?php echo form_error('j_tmp_kematian') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Yang Menerangkan</label>
                                          <div class="col-lg-10">
                                              <div class="radios">
                                                <label class="label_radio r_on" for="radio-01">
                                                    <input name="j_menerangkan" id="j_menerangkan" <?php if($j_menerangkan=='Dokter') echo "checked=''"; ?> value="Dokter" type="radio" > Dokter
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="j_menerangkan" id="j_menerangkan" <?php if($j_menerangkan=='Tenaga Kesehatan') echo "checked=''"; ?> value="Tenaga Kesehatan" type="radio"> Tenaga Kesehatan
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="j_menerangkan" id="j_menerangkan" <?php if($j_menerangkan=='Kepolisian') echo "checked=''"; ?> value="Kepolisian" type="radio"> Kepolisian
                                                </label>
                                                <label class="label_radio r_off" for="radio-02">
                                                    <input name="j_menerangkan" id="j_menerangkan" <?php if($j_menerangkan=='Lainnya') echo "checked=''"; ?> value="Lainnya" type="radio"> Lainnya
                                                </label>
                                              </div>
                                              <p class="help-block"><?php echo form_error('j_menerangkan') ?></p>    
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                      </div>
                                  </fieldset>

                                  <fieldset title="Data Ibu" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="i_nik" id="i_nik" required value="<?php echo $i_nik; ?>" class="form-control tooltips"data-toggle="tooltip " data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('i_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataIbu()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_nama" id="i_nama" readonly="" value="<?php echo $i_nama; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Nama lengkap, diisi/ditulis nama lengkap dari ibu jenazah (tidak boleh disingkat)." >
                                              <p class="help-block"><?php echo form_error('i_nama') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2012-02-23" class="input-append date dpYears">
                                                  <input type="text" name="i_tgl_lahir" id="i_tgl_lahir" readonly=""  value="<?php echo $i_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                      </span>
                                                  <p class="help-block"><?php echo form_error('i_tgl_lahir') ?></p>
                                              </div>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_umur" id="i_umur" readonly="" value="<?php echo $i_umur; ?>" class="form-control tooltips"  data-toggle="tooltip " placeholder="" data-original-title="Klik Tombol Disamping Untuk Menghitung Umur Otomatis">
                                              <p class="help-block"><?php echo form_error('i_umur') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_pekerjaan" readonly="" id="i_pekerjaan" value="<?php echo $i_pekerjaan; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('i_pekerjaan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="i_a_alamat" readonly="" id="i_a_alamat" value="<?php echo $i_a_alamat; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('i_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_a_desa" readonly="" id="i_a_desa" value="<?php echo $i_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('i_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_a_kecamatan" readonly="" id="i_a_kecamatan" value="<?php echo $i_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('i_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_a_kabkota" readonly="" id="i_a_kabkota" value="<?php echo $i_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('i_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="i_a_provinsi" readonly="" id="i_a_provinsi" value="<?php echo $i_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('i_a_provinsi') ?></p>
                                          </div>
                                      </div>
                                  </fieldset>


                                  <fieldset title="Data Ayah" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="a_nik" id="a_nik" value="<?php echo $a_nik; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('a_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataAyah()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="a_nama" readonly="" id="a_nama" value="<?php echo $a_nama; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('a_nama') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="a_tgl_lahir" readonly="" id="a_tgl_lahir" value="<?php if($a_tgl_lahir=='') echo "0000-00-00"; else echo $a_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                  <p class="help-block"><?php echo form_error('a_tgl_lahir') ?></p>
                                              </div>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="a_umur" readonly="" onkeypress="return runScript(event)" id="a_umur" value="<?php echo $a_umur; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Klik Tombol Disamping Untuk Menghitung Umur Otomatis">
                                              <p class="help-block"><?php echo form_error('a_umur') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="a_pekerjaan" readonly="" id="a_pekerjaan" value="<?php echo $a_pekerjaan; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('a_pekerjaan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="a_a_alamat" readonly="" id="a_a_alamat" value="<?php echo $a_a_alamat; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('a_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="a_a_desa" readonly="" id="a_a_desa" value="<?php echo $a_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('a_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="a_a_kecamatan" readonly="" id="a_a_kecamatan" value="<?php echo $a_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('a_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="a_a_kabkota" readonly="" id="a_a_kabkota" value="<?php echo $a_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('a_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="a_a_provinsi" readonly="" id="a_a_provinsi" value="<?php echo $a_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('a_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                  </fieldset>

                                  <fieldset title="Data Pelapor" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="p_nik" id="p_nik" value="<?php echo $p_nik; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('p_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataPelapor()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="p_nama" readonly="" id="p_nama" value="<?php echo $p_nama; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('p_nama') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="p_pekerjaan" readonly="" id="p_pekerjaan" value="<?php echo $p_pekerjaan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="15:00" data-original-title="Gunakan Format 24Jam">
                                              <p class="help-block"><?php echo form_error('p_pekerjaan') ?></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="p_tgl_lahir" readonly="" id="p_tgl_lahir" value="<?php if($a_tgl_lahir=='') echo "0000-00-00"; else echo $a_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                  <p class="help-block"><?php echo form_error('p_tgl_lahir') ?></p>
                                              </div>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" id="p_umur" name="p_umur" readonly="" value="<?php echo $p_umur; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Klik Tombol Disamping Untuk Menghitung Umur Otomatis">
                                              <p class="help-block"><?php echo form_error('p_umur') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Jenis Kelamin</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="p_jk" readonly="" id="p_jk" value="<?php echo $p_jk; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Jenis Kelamin Dari Pelapor" >
                                              <p class="help-block"><?php echo form_error('p_jk') ?></p>
                                          </div>
                                      </div>



                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="p_a_alamat" readonly="" id="p_a_alamat" value="<?php echo $p_a_alamat; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('p_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="p_a_desa" readonly="" id="p_a_desa" value="<?php echo $p_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('p_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="p_a_kecamatan" readonly="" id="p_a_kecamatan" value="<?php echo $p_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('p_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="p_a_kabkota" readonly="" id="p_a_kabkota" value="<?php echo $p_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('p_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="p_a_provinsi" readonly="" id="p_a_provinsi" value="<?php echo $p_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " placeholder="" data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('p_a_provinsi') ?></p>
                                          </div>
                                      </div>
                                  </fieldset>

                                  <fieldset title="Data Saksi 1" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="s1_nik" id="s1_nik" value="<?php echo $s1_nik; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('s1_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataSaksi1()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s1_nama" readonly="" id="s1_nama" value="<?php echo $s1_nama; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Benar Nama Lengkap" >
                                              <p class="help-block"><?php echo form_error('s1_nama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="s1_tgl_lahir" readonly="" id="s1_tgl_lahir" value="<?php if($s1_tgl_lahir=='') echo "0000-00-00"; else echo $s1_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                  <p class="help-block"><?php echo form_error('s1_tgl_lahir') ?></p>
                                              </div>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" id="s1_umur" name="s1_umur" readonly="" value="<?php echo $s1_umur; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Klik Tombol Disamping Untuk Menghitung Umur Otomatis">
                                              <p class="help-block"><?php echo form_error('p_umur') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s1_pekerjaan" readonly="" id="s1_pekerjaan" value="<?php echo $s1_pekerjaan; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s1_pekerjaan') ?></p>
                                          </div>
                                      </div>
                                 
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s1_a_alamat" readonly="" id="s1_a_alamat" value="<?php echo $s1_a_alamat; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s1_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_a_desa" readonly="" id="s1_a_desa" value="<?php echo $s1_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('s1_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_a_kecamatan" readonly="" id="s1_a_kecamatan" value="<?php echo $s1_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('s1_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_a_kabkota" readonly="" id="s1_a_kabkota" value="<?php echo $s1_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('s1a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s1_a_provinsi" readonly="" id="s1_a_provinsi" value="<?php echo $s1_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('s1_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="Data Saksi 2" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIK</label>
                                          <div class="col-lg-8">
                                              <input type="text" name="s2_nik" id="s2_nik" value="<?php echo $s2_nik; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Benar NIK" >
                                              <p class="help-block"><?php echo form_error('s2_nik') ?></p>
                                          </div>
                                          <div class="col-lg-2">
                                            <a class="btn btn-info" href="javascript:void(0)" onclick="updateDataSaksi2()">Cek NIK !!</a>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s2_nama" readonly="" id="s2_nama" value="<?php echo $s2_nama; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Benar Nama Lengkap" >
                                              <p class="help-block"><?php echo form_error('s2_nama') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tanggal Lahir</label>
                                          <div class="col-lg-4">
                                              <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                                  <input type="text" name="s2_tgl_lahir" readonly="" id="s2_tgl_lahir" value="<?php if($s2_tgl_lahir=='') echo "0000-00-00"; else echo $s2_tgl_lahir; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                  <p class="help-block"><?php echo form_error('s2_tgl_lahir') ?></p>
                                              </div>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Umur</label>
                                          <div class="col-lg-4">
                                              <input type="text" id="s2_umur" name="s2_umur" readonly="" value="<?php echo $s2_umur; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Klik Tombol Disamping Untuk Menghitung Umur Otomatisr">
                                              <p class="help-block"><?php echo form_error('s2_umur') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Pekerjaan</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s2_pekerjaan" readonly="" id="s2_pekerjaan" value="<?php echo $s2_pekerjaan; ?>" class="form-control tooltips" placeholder="" data-toggle="tooltip " placeholder="" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s2_pekerjaan') ?></p>
                                          </div>
                                      </div>
                                 
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Alamat</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="s2_a_alamat" readonly="" id="s2_a_alamat" value="<?php echo $s2_a_alamat; ?>" class="form-control tooltips" data-toggle="tooltip" data-original-title="Isi Dengan Nama Dusun/Jalan" >
                                              <p class="help-block"><?php echo form_error('s2_a_alamat') ?></p>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Desa/Kelurahan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_a_desa" readonly="" id="s2_a_desa" value="<?php echo $s2_a_desa; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Desa Alamat">
                                              <p class="help-block"><?php echo form_error('s2_a_desa') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Kecamatan</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_a_kecamatan" readonly="" id="s2_a_kecamatan" value="<?php echo $s2_a_kecamatan; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Kecamatan Alamat">
                                              <p class="help-block"><?php echo form_error('s2_a_kecamatan') ?></p>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Kabupaten/Kota</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_a_kabkota" readonly="" id="s2_a_kabkota" value="<?php echo $s2_a_kabkota; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Kabupaten/Kota Alamat">
                                              <p class="help-block"><?php echo form_error('s2_a_kabkota') ?></p>
                                          </div>
                                          <div class="col-lg-1 control-label"></div>
                                          <label class="col-lg-1 control-label">Provinsi</label>
                                          <div class="col-lg-4">
                                              <input type="text" name="s2_a_provinsi" readonly="" id="s2_a_provinsi" value="<?php echo $s2_a_provinsi; ?>" class="form-control tooltips" data-toggle="tooltip " data-original-title="Proinsi Alamat">
                                              <p class="help-block"><?php echo form_error('s2_a_provinsi') ?></p>
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="Selesai" class="step" id="default-step-2" >
                                  <center>
                                    <h3>Pastikan Data Yang Anda Isikan Benar, Kemudian Klik Tombol "Simpan Formulir" untuk menyimpan data Kelengkapan formulir
                                  persyaratan pengajuan Akta Kematian.</h3>
                                  </center>
                                  
                                      <legend> </legend>
                                      
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Layanan SMS Tracking Dokumen</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">
                                                  denga format "STATUS_NOMOR PENDAFTARAN" kirim sms ke 0857-25-4858-10 </p>
                                          </div>
                                      </div>
                                  </fieldset>
                                  <input type="hidden" name="j_id_AM" value="<?php echo $ID_AM?>">
                                  <input type="hidden" name="id_jenazah" value="<?php echo $j_id_jenazah?>">
                                  <input type="hidden" name="id_pelapor" value="<?php echo $p_id_pelapor?>">
                                  <input type="hidden" name="id_saksi1" value="<?php echo $s1_id_saksi?>">
                                  <input type="hidden" name="id_saksi2" value="<?php echo $s2_id_saksi?>">
                                  <input type="hidden" name="id_ortu1" value="<?php echo $i_id_ortu?>">
                                  <input type="hidden" name="id_ortu2" value="<?php echo $a_id_ortu?>">

                                  <input type="submit" class="finish btn btn-danger" value="Simpan Data Formulir!"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>