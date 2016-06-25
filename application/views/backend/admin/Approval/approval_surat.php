 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <h2 style="margin-top:0px">Form Pengambilan Akta Jadi</h2>
            </div>
            <div class="col-md-12 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div><br>
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> </h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <div class="">
                  
                  <!--FRO GENERATE -->

                        <h2 style="margin-top:0px">Verifikasi Bukti Pengambilan Akta</h2>
                        <form method="post" action=<?=base_url("approval/aktajadi"); ?>>
                        <table class="table" width="500">
                        <tr>
                          <td colspan="2">Saya, yang mengisikan kolom identitas dibawah ini, </td>
                        </tr>
                        
                        <tr>
                          <td width="200"> NIK </td><td> <input type="text" class="form-control" name="nik_pengambil" id="nik_pengambil" maxlength="16" onkeypress="return runScript(event)" required> </td>
                        </tr>
                        <tr>
                          <td> Nama Lengkap </td><td> <input type="text" class="form-control" name="nama_pengambil" id="nama_pengambil" required>  </td>
                        </tr>                        
                        </table>
                        <table class="table" width="500">
                        <tr>
                          <td colspan="2"><p> 
                          <?php echo "
                          Dengan ini menyatakan bahwa saya dengan atas nama yang tertera pada kolom diatas,
                          akan mengambil Hasil jadi Akta dengan data Pendaftar, ";?>
                          </p></td>
                        </tr>
                        <tr>
                          <td>Jenis Pendaftaran </td><td><b><?php echo "$jenis";?></b></td>
                        </tr>
                        <tr>
                          <td>Atas Nama </td><td><b><?php echo "$nama";?></b></td>
                        </tr>
                        <tr>
                          <td>Nomor Pendaftaran </td><td><b><?php echo "$s_no_daftar";?></b></td>
                        </tr>
                        <tr>
                          <td>Tanggal Pendaftaran </td><td><b><?php echo "$tgl_daftar";?></b></td>
                        </tr>
                        <tr>
                          <td colspan="2"> Telah menerima Hasil Jadi dari Akta yang saya daftarkan. Dengan memilik Tombol
                          berikut, saya menyatakan ini sebagai bukti tanda terima yang sah. Terimakasih</td>
                        </tr>
                        <tr>
                          <td colspan="2">
                          <input type="hidden" name="id_akta" value="<?= $id_akta; ?>">
                          <button type="submit" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-check"></i> Baik, Saya Setuju dan Diterima</button> 
                          </tr>
                        </table>
                        </form>

                   
                    <!--FRO GENERATE -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


