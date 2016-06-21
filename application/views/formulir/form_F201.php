<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>--</title>
  <link href=<?=base_url("assets/mpdf_css/mpdfstyletables.css");?> rel="stylesheet" type="text/css" />

</head>
<body>
<table class="ft_11">
  <tr>
    <td>
      <table>
        <tr>
          <td width="200">Pemerintah Desa/Kelurahan</td> <td width="20">:</td> <td width="170"></td>
        </tr>
        <tr>
          <td>Kecamatan</td> <td>:</td> <td></td>
        </tr>
        <tr>
        <td>Kabupaten/Kota</td> <td>:</td><td>Surakarta</td>
        </tr>
      </table>
    </td>

    <td>
      <table>
        <tr>
          <td width="30">Ket</td><td width="5">:</td> <td width="80">Lembar 1</td><td width="10">:</td> <td width="200">UPTD/Instansi Pelaksana</td>
        </tr>
        <tr>
          <td></td><td></td> <td>Lembar 2</td><td width="10">:</td> <td width="100">Untuk Yang Bersangkutan</td>
        </tr>
        <tr>
        <td></td><td></td> <td>Lembar 3</td><td width="10">:</td> <td width="100">Desa/Kelurahan</td>
        </tr>
        <tr>
        <td></td><td></td> <td>Lembar 4</td><td width="10">:</td> <td width="100">Kecamatan</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <h2>SURAT KETERANGAN KELAHIRAN</h2>
    </td>
  </tr>
</table>
   

<table width="749" height="1178" border="2" style="border-collapse:collapse">
<tr>
  <td class="kotak">
  <b>DATA BAYI / ANAK</b>
      <table>
          <tr><td width="30">1.</td><td width="170">Nama</td><td>:</td><td width="500"><?php echo $bayi_data->nama; ?></td></tr>
          <tr><td>2.</td><td>Jenis Kelamin</td><td>:</td><td><?php echo $bayi_data->jk; ?></td></tr>
          <tr><td>3.</td><td>Tempat Dilahirkan</td><td>:</td><td><?php echo $bayi_data->tmp_lahir; ?></td></tr>
          <tr><td>4.</td><td>Tempat Kelahiran</td><td>:</td><td><?php echo $bayi_data->tmp_kelahiran; ?></td></tr>
          <tr><td>5.</td><td>Hari dan Tanggal Lahir</td><td>:</td><td><?php echo $bayi_data->tgl_kelahiran; ?></td></tr>
          <tr><td>6.</td><td>Pukul</td><td>:</td><td><?php echo $bayi_data->hari_kelahiran; ?></td></tr>
          <tr><td>7.</td><td>Jenis Kelahiran</td><td>:</td><td><?php echo $bayi_data->jenis_kelahiran; ?></td></tr>
          <tr><td>8.</td><td>Kelahiran Ke</td><td>:</td><td><?php echo $bayi_data->kelahiran_ke; ?></td></tr>
          <tr><td>9.</td><td>Penolong</td><td>:</td><td><?php echo $bayi_data->penolong; ?></td></tr>
          <tr><td>10.</td><td>Berat Bayi</td><td>:</td><td><?php echo $bayi_data->berat_bayi; ?> Kg</td></tr>
          <tr><td>11.</td><td>Panjang Bayi</td><td>:</td><td><?php echo $bayi_data->panjang_bayi; ?> Cm</td></tr>
      </table>
  </td>
</tr>
<tr border="2">
  <td class="kotak">
  <b>DATA IBU</b>
      <table>
          <tr><td width="30">1.</td><td width="170">NIK</td><td>:</td><td><?php echo $ibu_data->nik; ?></td></tr>
          <tr><td>2.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $ibu_data->nama; ?></td></tr>
          <tr><td>3.</td><td>Tanggal Lahir / Umur</td><td>:</td><td><?php echo $ibu_data->tgl_lahir." / ".$ibu_data->umur." Tahun"; ?></td></tr>
          <tr><td>4.</td><td>Pekerjaan</td><td>:</td><td><?php echo $ibu_data->pekerjaan; ?></td></tr>
          <tr><td>5.</td><td>Alamat</td><td>:</td><td> <?php echo $ibu_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $ibu_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $ibu_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $ibu_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $ibu_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
          <tr><td>6.</td><td>Kewarganegaraan</td><td>:</td><td>WNI</td></tr>
          <tr><td>7.</td><td>Kebangsaan</td><td>:</td><td>INDONESIA</td></tr>
          <tr><td>8.</td><td>Tgl Pencatatan Perkawinan  </td><td>:</td><td><?php echo $ibu_data->tgl_pencatatan_kawin; ?></td></tr>
      </table>
  </td>
</tr>
<tr>
  <td class="kotak">
  <b>DATA AYAH</b>
      <table>
          <tr><td width="30">1.</td><td width="170">NIK</td><td>:</td><td><?php echo $ayah_data->nik; ?></td></tr>
          <tr><td>2.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $ayah_data->nama; ?></td></tr>
          <tr><td>3.</td><td>Tanggal Lahir / Umur</td><td>:</td><td><?php echo $ayah_data->tgl_lahir." / ".$ayah_data->umur." Tahun"; ?></td></tr>
          <tr><td>4.</td><td>Pekerjaan</td><td>:</td><td><?php echo $ayah_data->pekerjaan; ?></td></tr>
          <tr><td>5.</td><td>Alamat</td><td>:</td><td> <?php echo $ayah_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $ayah_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $ayah_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $ayah_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $ayah_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
          <tr><td>6.</td><td>Kewarganegaraan</td><td>:</td><td>WNI</td></tr>
          <tr><td>7.</td><td>Kebangsaan</td><td>:</td><td>INDONESIA</td></tr>
          
      </table>
  </td>
</tr>

<tr>
  <td class="kotak">
  <b>PELAPOR</b>
      <table>
          <tr><td width="30">1.</td><td width="170">NIK</td><td>:</td><td><?php echo $pelapor_data->nik; ?></td></tr>
          <tr><td>2.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $pelapor_data->nama; ?></td></tr>
          <tr><td>3.</td><td>Umur</td><td>:</td><td><?php echo $pelapor_data->umur; ?> Tahun</td></tr>
          <tr><td>4.</td><td>Jenis Kelamin</td><td>:</td><td><?php echo $pelapor_data->jk; ?></td></tr>
          <tr><td>5.</td><td>Pekerjaan</td><td>:</td><td><?php echo $pelapor_data->pekerjaan; ?></td></tr>
          <tr><td>6.</td><td>Alamat</td><td>:</td><td> <?php echo $pelapor_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $pelapor_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $pelapor_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $pelapor_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $pelapor_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
      </table>
  </td>
</tr>

<tr>
  <td class="kotak">
  <b>SAKSI I</b>
      <table>
          <tr><td width="30">1.</td><td width="170">NIK</td><td>:</td><td><?php echo $saksi1_data->nik; ?></td></tr>
          <tr><td>2.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $saksi1_data->nama; ?></td></tr>
          <tr><td>3.</td><td>Umur</td><td>:</td><td><?php echo $saksi1_data->umur; ?> Tahun</td></tr>
          <tr><td>4.</td><td>Pekerjaan</td><td>:</td><td><?php echo $saksi1_data->pekerjaan; ?></td></tr>
          <tr><td>5.</td><td>Alamat</td><td>:</td><td> <?php echo $saksi1_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $saksi1_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $saksi1_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $saksi1_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $saksi1_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
      </table>
  </td>
</tr>

<tr>
  <td class="kotak">
  <b>SAKSI II</b>
      <table>
          <tr><td width="30">1.</td><td width="170">NIK</td><td>:</td><td><?php echo $saksi2_data->nik; ?></td></tr>
          <tr><td>2.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $saksi2_data->nama; ?></td></tr>
          <tr><td>3.</td><td>Umur</td><td>:</td><td><?php echo $saksi2_data->umur; ?> Tahun</td></tr>
          <tr><td>4.</td><td>Pekerjaan</td><td>:</td><td><?php echo $saksi2_data->pekerjaan; ?></td></tr>
          <tr><td>5.</td><td>Alamat</td><td>:</td><td> <?php echo $saksi2_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $saksi2_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $saksi2_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $saksi2_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $saksi2_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
      </table>
  </td>
</tr>
</table>

<table width="750">
  <tr>
    <td>
      <table align="center">
        <tr><td>Mengetahui :</td></tr>
        <tr><td>Kepala Desa/Lurah</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>(....................................)</td></tr>
      </table>
    </td>

    <td>
      <table align="center">
        <tr><td>Surakarta, <?php echo dateindo(date("Y-m-d"));?> </td></tr>
        <tr><td>Pelapor, </td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>(....................................)</td></tr>
      </table>
    </td>
  </tr>
</table>
<br><br>
<b>
<table width="750">
    <tr>
      <td width="500">
        <table>
          <tr>
            <td width="50">*.</td><td>Formulir Online Dinas Kependudukan dan Catatan Sipil Kota Surakarta</td>
          </tr> 
          <tr>
            <td width="50">**.</td><td>Formulir Online ini digunakan sebagaimana mestinya, dan dapat digunakan sebagai pengganti formulir
          dengan pengisian data secara manual.</td>
          </tr>
          <tr>
            <td width="50">***.</td><td>Konten dalam formulir online ini disamakan dengan Formulir Manual.
            </td>
            </tr>
        </table>
      </td>
      <td><img width="200px" src=<?php echo $qr;?>> </td>
    </tr>

</table>

</b>




</body>
</html>
