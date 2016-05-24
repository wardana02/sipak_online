    <!--container start-->
     <div class="container">
       <!--recent work start-->
       <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">

  
  <section class="panel">
                          <header class="panel-heading" align="center">
                              <strong class="color">Daftar</strong>
                              <p>Silahkan mengisikan informasi diri anda di bawah ini. </p>
                          </header>

      <div class="panel-body">
           <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data" id="951190528">        
                     <span class="label label-danger">NOTE! </span>
                      <span> &nbsp;&nbsp;Semua kolom harus diisi </span>

                                <br><br>
                                <div class="form-group">
                                      <label class="col-lg-3 col-sm-3 control-label">Username</label>
                                      <div class="col-lg-9">
                                          <input type="text" class="form-control tooltips" placeholder="" name="username" value="" title="" data-placement="left" data-toggle="tooltip " data-original-title="Username tanpa spasi">
                                          <!--<p class="help-block">Example block-level help text here.</p>-->
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-3 col-sm-3 control-label" name="password">Email</label>
                                      <div class="col-lg-9">
                                          <input type="text" class="form-control tooltips" name="email" placeholder="" value="" title="" data-placement="left" data-toggle="tooltip " data-original-title="Email harus valid">
                                          <!--<p class="help-block">Example block-level help text here.</p>-->
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-3 col-sm-3 control-label">Password</label>
                                      <div class="col-lg-9">
                                          <input class="form-control tooltips" onkeyup="" id="pass" type="password" name="password" placeholder="" title="" data-placement="left" data-toggle="tooltip " data-original-title="Password minimal 6 karakter">
                                          <p class="help-block-danger" id="hasil"></p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-3 col-sm-3 control-label">Konfirm Password</label>
                                      <div class="col-lg-9">
                                          <input class="form-control tooltips" onkeyup="" type="password" name="repassword" placeholder="" title="" data-placement="left" data-toggle="tooltip " data-original-title="Konfirm sesuai password">
                                          <p class="help-block-danger" id="cocok"></p>                                    
                                      </div>
                                  </div>
                                <hr width="100%" align="center">
                                <div class="form-group">
                                      <label class="col-lg-3 col-sm-3 control-label">Nama Lengkap</label>
                                      <div class="col-lg-9">
                                          <input type="text" class="form-control tooltips" placeholder="" name="name" value="" title="" data-placement="left" data-toggle="tooltip " data-original-title="Nama harus diisi">
                                          <!--<p class="help-block">Example block-level help text here.</p>-->
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-lg-3 col-sm-3 control-label">Telepon/ HP</label>
                                      <div class="col-lg-9">
                                          <input type="numeric" class="form-control tooltips" placeholder="" name="phone" value="" title="" data-placement="left" data-toggle="tooltip " data-original-title="Hanya gunakan angka">
                                          <!--<p class="help-block">Example block-level help text here.</p>-->
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-lg-3 col-sm-3 control-label">Tanggal Lahir</label>
                                      <div class="col-lg-4">
                                         <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
                                          <input class="form-control tooltips" type="text" readonly="" size="16" name="birthdate" value="08-05-1990" title="" data-placement="left" data-toggle="tooltip " data-original-title="Tanggal lahir harus diisi">
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-danger" type="button"><i class="icon-calendar"></i></button>
                                              </span>
                                      </div>
                                       
                                      </div>
                                  </div>    
                                   <div class="form-group">
                                      <label class="col-lg-3 col-sm-3 control-label">Jenis Kelamin</label>
                                      <div class="radios col-lg-9">
                                              
                                              <label class="label_radio r_on" for="radio-01">
                                                  <input name="sex" id="radio-01" value="L" type="radio" checked=""> Laki-laki
                                              </label>
                                              <label class="label_radio r_off" for="radio-02">
                                                  <input name="sex" id="radio-02" value="P" type="radio"> Perempuan
                                              </label>
                                              
                                          
                                      </div>
                                  </div>

                                   <div class="form-group">
                                      <label class="col-lg-3 col-sm-3 control-label">Alamat</label>
                                      <div class="col-lg-9">
                                          <textarea type="text" class="form-control tooltips" name="address" rows="5" title="" data-placement="left" data-toggle="tooltip " data-original-title="Alamat harus diisi"></textarea>
                                          <!--<p class="help-block">Example block-level help text here.</p>-->
                                      </div>
                                  </div>
                                   <div class="form-group">
                                          <label class="control-label col-md-3">Foto</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                             
                                                      <img src="img/peserta.png" alt="">
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                   <input type="file" class="default" name="image">
                                                   </span>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                                  </div>
                                              </div>
                                              <span class="label label-danger">NOTE!</span>
                                            <span>
                                             Foto harus berekstensi JPG,JPEG,atau PNG maksimal 1 MB
                                             </span>
                                          </div>
                                      </div>
                                      <!--
                                      <div class="form-group">
                                      <label class="col-lg-3 col-sm-3 control-label">Kode Captcha</label>
                                      <div class="col-lg-9">
                                         <script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6Lc4LAgTAAAAAJ0e9nFGYyqegCfg6scK15q_JDQU"></script>

  <noscript>
      &lt;iframe src="http://www.google.com/recaptcha/api/noscript?k=6Lc4LAgTAAAAAJ0e9nFGYyqegCfg6scK15q_JDQU" height="300" width="500" frameborder="0"&gt;&lt;/iframe&gt;&lt;br/&gt;
      &lt;textarea name="recaptcha_challenge_field" rows="3" cols="40"&gt;&lt;/textarea&gt;
      &lt;input type="hidden" name="recaptcha_response_field" value="manual_challenge"/&gt;
  </noscript>
                                      </div>
                                  </div>
                                 -->
                              

                               <hr width="100%" align="center">
                                  <div class="form-group">
                                      <div class="col-lg-offset-3 col-lg-9">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" checked=""> Saya menerima syarat dan ketentuan
                                          </label></div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-3 col-lg-9">
                                          <button type="submit" class="btn btn-primary btn-shadow">Daftar</button>
                                          <button type="reset" class="btn btn-danger btn-shadow">Reset</button>
                                          
                                      </div>
                                  </div>
                              </form>
                          </div>
        <!--recent work end-->
    </div>
    </section>
    </div>
    </div>


     <div class="container">
         <!--clients start-->
         <div class="clients">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 text-center">
                         <ul class="list-unstyled">
                             <li><a href="#"><img src=<?=base_url("assets/frontend2/img/clients/logo1.png");?> alt=""></a></li>
                             <li><a href="#"><img src=<?=base_url("assets/frontend2/img/clients/logo2.png");?> alt=""></a></li>
                             <li><a href="#"><img src=<?=base_url("assets/frontend2/img/clients/logo3.png");?> alt=""></a></li>
                             <li><a href="#"><img src=<?=base_url("assets/frontend2/img/clients/logo4.png");?> alt=""></a></li>
                             <li><a href="#"><img src=<?=base_url("assets/frontend2/img/clients/logo5.png");?> alt=""></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
         <!--clients end-->
     </div>

     <!--container end-->
