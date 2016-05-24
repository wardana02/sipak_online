     <body class="body-404">

        <div class="container">
          <section class="error-wrapper">
          <div class="col-sm-4">
            <img src=<?=base_url("assets/frontend2/img/icon/upload_ion.png")?>>
          </div>
          <div class="col-sm-8">
            
              
              <h1>Upload Berkas Pendaftaran</h1>
              <p class="page-404">Silahkan Upload Berkas Pendaftaran Dokumen Anda. Pastikan Pendaftaran Berhasil
              dengan ditandai adanya pesan SMS masuk ke nomor Handphone yang anda masukan pada tahap pendaftaran.</p>
              <p class="page-404">Gunakan nomor pendaftaran, tanggal daftar dan kode unik untuk memulai upload berkas pendaftaran.</p>
              <div class="panel-body">
           <form role="form" method="post" action="<?php echo $cek; ?>">      
                                <div class="form-group">
                                                      <label for="exampleInputEmail1">Nomor Pendaftaran</label>
                                                      <input type="text" class="form-control" name="no_pendaftaran" value="PF02170316001" placeholder="Masukan Nomor Pendaftaran Dengan Huruf Kapital">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputPassword1">Tanggal Daftar</label>
                                                      <input name="tgl_daftar" class="form-control form-control-inline input-medium default-date-picker tooltips"  size="16" type="text"  value="" data-toggle="tooltip " data-original-title="Klik Untuk Pilih Tanggal" />
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">Kode Unik</label>
                                                      <input type="text" name="kode_unik" class="form-control" value="VCuOhf" id="exampleInputEmail3" placeholder="Kode Unik Pendaftaran Yang Didapat">
                                                  </div>   


                                  <div class="form-group">
                                      <div class="col-lg-offset-3 col-lg-9">
                                          <button type="submit" class="btn btn-primary btn-shadow">Cari Sekarang !</button>
                                          <button type="reset" class="btn btn-danger btn-shadow">Reset</button>
                                          
                                      </div>
                                  </div>
                              </form>
                          </div>


            </div>
          </section>

          
            <!--recent work end-->
        </div>
       
    </body>

     
     <!--container end-->
