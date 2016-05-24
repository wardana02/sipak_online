<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>--</title>
  <link href=<?=base_url("assets/mpdf_css/mpdfstyletables.css");?> rel="stylesheet" type="text/css" />

</head>
<body>
<table width="800" class="ft_11">
  <tr>
    <td>
      <table>
        <tr>
          <td width="300">PEMERINTAH KABUPATEN/KOTA</td> <td width="20">:</td> <td width="170">SURAKARTA</td>
        </tr>
        <tr>
          <td>DINAS/KANTOR</td> <td>:</td> <td>DINAS KEPENDUDUKAN DAN CATATAN SIPIL</td>
        </tr>
        <tr>
        <td>KODE WILAYAH</td> <td>:</td><td> </td>
        </tr>
      </table>
    </td>

    <td>
       
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <br>
      <h2>FORMULIR PENCATATAN PERCERAIAN</h2>
      <br>
    </td>
  </tr>
</table>
  

<table width="749" height="1178" border="2" style="border-collapse:collapse">
<tr>
  <td class="kotak">
  <b>I. DATA SUAMI</b>
      <table>
          <tr><td width="30">1.</td><td width="170">NIK</td><td>:</td><td width="600"><?php echo $suami_data->nik; ?></td></tr>
          <tr><td>2.</td><td>Nomor KK</td><td>:</td><td><?php echo $suami_data->nama; ?></td></tr>
          <tr><td>3.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $suami_data->nama; ?></td></tr>
          <tr><td>4.</td><td>Tanggal Lahir</td><td>:</td><td><?php echo $suami_data->tgl_lahir; ?></td></tr>
          <tr><td>5.</td><td>Tempat Lahir</td><td>:</td><td><?php echo $suami_data->tmp_lahir; ?></td></tr>
          <tr><td>6.</td><td>Alamat</td><td>:</td><td> <?php echo $suami_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $suami_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $suami_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $suami_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $suami_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
          <tr><td>7.</td><td>Pendidikan Terakhir</td><td>:</td><td><?php echo $suami_data->agama; ?></td></tr>
          <tr><td>8.</td><td>Agama</td><td>:</td><td><?php echo $suami_data->agama; ?></td></tr>
          <tr><td>9.</td><td>Nama Organisasi / Penghayat</td><td>:</td><td><?php echo $suami_data->agama; ?></td></tr>
          <tr><td>10.</td><td>Pekerjaan</td><td>:</td><td><?php echo $suami_data->pekerjaan; ?></td></tr>
          <tr><td>11.</td><td>Perceraian Yang Ke</td><td>:</td><td><?php echo $suami_data->anak_ke; ?></td></tr>
          </table>
      <br>
      
  </td>
</tr>

<tr>
  <td class="kotak">
  <b>IV. DATA ISTRI</b>
      <table>
          <tr><td width="30">31.</td><td width="170">NIK</td><td>:</td><td width="600"><?php echo $istri_data->nik; ?></td></tr>
          <tr><td>12.</td><td>Nomor KK</td><td>:</td><td><?php echo $istri_data->nama; ?></td></tr>
          <tr><td>13.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $istri_data->nama; ?></td></tr>
          <tr><td>14.</td><td>Tanggal Lahir</td><td>:</td><td><?php echo $istri_data->tgl_lahir; ?></td></tr>
          <tr><td>15.</td><td>Tempat Lahir</td><td>:</td><td><?php echo $istri_data->tmp_lahir; ?></td></tr>
          <tr><td>16.</td><td>Alamat</td><td>:</td><td> <?php echo $istri_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $istri_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $istri_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $istri_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $istri_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
          <tr><td>17.</td><td>Pendidikan Terakhir</td><td>:</td><td><?php echo $istri_data->agama; ?></td></tr>
          <tr><td>18.</td><td>Agama</td><td>:</td><td><?php echo $istri_data->agama; ?></td></tr>
          <tr><td>19.</td><td>Nama Organisasi / Penghayat</td><td>:</td><td><?php echo $istri_data->agama; ?></td></tr>
          <tr><td>20.</td><td>Pekerjaan</td><td>:</td><td><?php echo $istri_data->pekerjaan; ?></td></tr>
          </table>
      <br>
  </td>
</tr>

<tr>
  <td class="kotak">
  <b>VIII. DATA PERCERAIAN</b>
      <table>
          <tr><td width="30">76.</td><td width="170">Yang Mengajukan Perceraian</td><td>:</td><td width="600"><?php echo $perceraian_data->yang_mengajukan; ?></td></tr>
          <tr><td>77.</td><td>Nomor Akta Perkawinan</td><td>:</td><td><?php echo $perceraian_data->no_akta_perkawinan; ?></td></tr>
          <tr><td>78.</td><td>Tanggal Akta Perkawinan</td><td>:</td><td><?php echo $perceraian_data->tgl_akta_perkawinan; ?></td></tr>
          <tr><td>79.</td><td>Tempat Pencatatan Perkawinan</td><td>:</td><td><?php echo $perceraian_data->tmp_pencatatan; ?></td></tr>
          <tr><td>80.</td><td>Nomor Putusan Pengadilan</td><td>:</td><td><?php echo $perceraian_data->no_putusan; ?></td></tr>
          <tr><td>81.</td><td>Tanggal Putusan Pengadilan</td><td>:</td><td> <?php echo $perceraian_data->tgl_putusan; ?></td></tr>
          <tr><td>82.</td><td>Nama dan Tingkat Peradilan Pemutus Perkara</td><td>:</td><td> <?php echo $perceraian_data->tkt_peradilan; ?></td></tr>
          <tr><td>83.</td><td>Tempat Kedudukan Lembaga Peradilan</td><td>:</td><td><?php echo $perceraian_data->tmp_peradilan; ?></td></tr>
          <tr><td>84.</td><td>Nama lembaga Peradilan yang Menerbitkan Putusan Perceraian
              </td><td>:</td><td><?php echo $perceraian_data->nama_lembaga; ?></td></tr>
          <tr><td>83.</td><td>Sebab Perceraian</td><td>:</td><td><?php echo $perceraian_data->sebab; ?></td></tr>
          <tr><td>83.</td><td>Tanggal Melapor</td><td>:</td><td><?php echo dateindo($perceraian_data->tgl_melapor); ?></td></tr>
  </table>
              </td>
          </tr>
      </table>
  </td>
</tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr>
  <td height="200">

  </td>
</tr>
</table>

<table width="750">
  <tr>
    <td width="220">
      <table align="center">
        <tr><td><b>Mengetahui,</b></td></tr>
        <tr><td>Kepala </td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>(....................................)</td></tr>
      </table>
    </td>
    <td width="220">
      <table align="center">
        <tr><td></td></tr>
        <tr><td>Petugas Pencatat, </td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>(....................................)</td></tr>
      </table>
    </td>
    <td width="220">
      <table align="center">
        <tr><td>Surakarta, <?php echo dateindo(date("Y-m-d"));?> </td></tr>
        <tr><td>Pelapor, </td></tr>
        <tr><td>&nbsp;</td></tr>
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
