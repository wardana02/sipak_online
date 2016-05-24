      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pesan Masal SMS Gateway
            <small></small>
          </h1>
          
        </section>

<!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Buat Baru</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <form action=<?=base_url("mail/do_broadcast");?> method="post">
                  <div class="form-group">
                    <label class="label-control">Kepada : </label>
                    <select name="kepada" class="form-control">
                      <option value="0">Masyarakat</option>
                      <option value="1">Ketua RW</option>
                      <option value="2">Kelurahan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="label-control">Jumlah Pesan Masal : </label>
                    <input class="form-control" name="banyak" required placeholder="Masukan Angka Banyaknya Pesan Yang Akan Dikirim"/>
                  </div>

                  <div class="form-group">
                    <textarea name="TextDecoded" required class="form-control" style="height: 150px"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Kirim Pesan Masal !!</button>
                  
                  </form>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    </div>
                  
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?= $a ?><sup style="font-size: 20px"> data</sup></h3>
                  <p>Kontak Masyarakat</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?= $b ?><sup style="font-size: 20px"> data</sup></h3>
                  <p>Kontak Ketua RW</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?= $c ?><sup style="font-size: 20px"> data</sup></h3>
                  <p> Kontak Kelurahan</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                </div>
            </div><!-- ./col -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


    </div><!-- ./wrapper -->
                                     