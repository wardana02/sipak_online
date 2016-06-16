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
      <h2>FORMULIR PENCATATAN PERKAWINAN</h2>
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
          <tr><td>2.</td><td>Nomor KK</td><td>:</td><td><?php echo $suami_data->no_kk; ?></td></tr>
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
                  <td>d.</td><td> Provinsi </td><td>:</td><td> JAWA TENGAH</td>
                </tr>
              </table></td>
          </tr>
          <tr><td>7.</td><td>Pendidikan Terakhir</td><td>:</td><td><?php echo $suami_data->pendidikan_terakhir; ?></td></tr>
          <tr><td>8.</td><td>Agama</td><td>:</td><td><?php echo $suami_data->agama; ?></td></tr>
          <tr><td>9.</td><td>Nama Organisasi / Penghayat</td><td>:</td><td><?php if($suami_data->nm_organisasi!=NULL) echo $suami_data->nm_organisasi;else echo "-"; ?></td></tr>
          <tr><td>10.</td><td>Pekerjaan</td><td>:</td><td><?php echo $suami_data->pekerjaan; ?></td></tr>
          <tr><td>11.</td><td>Anak Ke</td><td>:</td><td><?php echo $suami_data->anak_ke; ?></td></tr>
          <tr><td>12.</td><td>Status Perkawinan Sebelum Nikah</td><td>:</td><td><?php echo $suami_data->status_sebelum_nikah; ?></td></tr>
          <tr><td>13.</td><td>Perkawinan Yang Ke</td><td>:</td><td><?php echo $suami_data->perkawinan_ke; ?></td></tr>
          <tr><td>14.</td><td>Istri Yang Ke</td><td>:</td><td><?php echo $suami_data->istri_ke; ?></td></tr>
      </table>
      <br>
      <b>II. DATA AYAH DARI SUAMI</b>
      <table>
          <tr><td width="30">15.</td><td width="170">NIK</td><td>:</td><td width="600"><?php echo $ayah_s_data->nik; ?></td></tr>
          <tr><td>16.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $ayah_s_data->nama; ?></td></tr>
          <tr><td>17.</td><td>Agama</td><td>:</td><td><?php echo $ayah_s_data->agama; ?></td></tr>
          <tr><td>18.</td><td>Nama Organisasi / Penghayat</td><td>:</td><td><?php if($ayah_s_data->nm_organisasi!=NULL) echo $ayah_s_data->nm_organisasi;else echo "-"; ?></td></tr>
          <tr><td>19.</td><td>Tanggal Lahir</td><td>:</td><td><?php echo $ayah_s_data->tgl_lahir; ?></td></tr>
          <tr><td>20.</td><td>Tempat Lahir</td><td>:</td><td><?php echo $ayah_s_data->tmp_lahir; ?></td></tr>
          <tr><td>21.</td><td>Alamat</td><td>:</td><td> <?php echo $ayah_s_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $ayah_s_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $ayah_s_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $ayah_s_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $ayah_s_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
          <tr><td>22.</td><td>Pekerjaan</td><td>:</td><td><?php echo $ayah_s_data->pekerjaan; ?></td></tr>
        </table>

        <br>
      <b>III. DATA IBU DARI SUAMI</b>
      <table>
          <tr><td width="30">23.</td><td width="170">NIK</td><td>:</td><td width="600"><?php echo $ibu_s_data->nik; ?></td></tr>
          <tr><td>24.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $ibu_s_data->nama; ?></td></tr>
          <tr><td>25.</td><td>Agama</td><td>:</td><td><?php echo $ibu_s_data->agama; ?></td></tr>
          <tr><td>26.</td><td>Nama Organisasi / Penghayat</td><td>:</td><td><?php if($ibu_s_data->nm_organisasi!=NULL) echo $ibu_s_data->nm_organisasi;else echo "-"; ?></td></tr>
          <tr><td>27.</td><td>Tanggal Lahir</td><td>:</td><td><?php echo $ibu_s_data->tgl_lahir; ?></td></tr>
          <tr><td>28.</td><td>Tempat Lahir</td><td>:</td><td><?php echo $ibu_s_data->tmp_lahir; ?></td></tr>
          <tr><td>29.</td><td>Alamat</td><td>:</td><td> <?php echo $ibu_s_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $ibu_s_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $ibu_s_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $ibu_s_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $ibu_s_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
          <tr><td>30.</td><td>Pekerjaan</td><td>:</td><td><?php echo $ibu_s_data->pekerjaan; ?></td></tr>
        </table>
  </td>
</tr>

<tr>
  <td class="kotak">
  <b>IV. DATA ISTRI</b>
      <table>
          <tr><td width="30">31.</td><td width="170">NIK</td><td>:</td><td width="600"><?php echo $istri_data->nik; ?></td></tr>
          <tr><td>32.</td><td>Nomor KK</td><td>:</td><td><?php echo $istri_data->no_kk; ?></td></tr>
          <tr><td>33.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $istri_data->nama; ?></td></tr>
          <tr><td>34.</td><td>Tanggal Lahir</td><td>:</td><td><?php echo $istri_data->tgl_lahir; ?></td></tr>
          <tr><td>35.</td><td>Tempat Lahir</td><td>:</td><td><?php echo $istri_data->tmp_lahir; ?></td></tr>
          <tr><td>36.</td><td>Alamat</td><td>:</td><td> <?php echo $istri_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $istri_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $istri_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $istri_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> JAWA TENGAH</td>
                </tr>
              </table></td>
          </tr>
          <tr><td>37.</td><td>Pendidikan Terakhir</td><td>:</td><td><?php echo $istri_data->agama; ?></td></tr>
          <tr><td>38.</td><td>Agama</td><td>:</td><td><?php echo $istri_data->agama; ?></td></tr>
          <tr><td>39.</td><td>Nama Organisasi / Penghayat</td><td>:</td><td><?php if($istri_data->nm_organisasi!=NULL) echo $istri_data->nm_organisasi;else echo "-"; ?></td></tr>
          <tr><td>40.</td><td>Pekerjaan</td><td>:</td><td><?php echo $istri_data->pekerjaan; ?></td></tr>
          <tr><td>41.</td><td>Anak Ke</td><td>:</td><td><?php echo $istri_data->anak_ke; ?></td></tr>
          <tr><td>42.</td><td>Status Perkawinan Sebelum Nikah</td><td>:</td><td><?php echo $istri_data->status_sebelum_nikah; ?></td></tr>
          <tr><td>43.</td><td>Perkawinan Yang Ke</td><td>:</td><td><?php echo $istri_data->perkawinan_ke; ?></td></tr>
      </table>
      <br>
      <b>V. DATA AYAH DARI ISTRI</b>
      <table>
          <tr><td width="30">44.</td><td width="170">NIK</td><td>:</td><td width="600"><?php echo $ayah_i_data->nik; ?></td></tr>
          <tr><td>45.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $ayah_i_data->nama; ?></td></tr>
          <tr><td>46.</td><td>Agama</td><td>:</td><td><?php echo $ayah_i_data->agama; ?></td></tr>
          <tr><td>47.</td><td>Nama Organisasi / Penghayat</td><td>:</td><td><?php if($ayah_i_data->nm_organisasi!=NULL) echo $ayah_i_data->nm_organisasi;else echo "-"; ?></td></tr>
          <tr><td>48.</td><td>Tanggal Lahir</td><td>:</td><td><?php echo $ayah_i_data->tgl_lahir; ?></td></tr>
          <tr><td>49.</td><td>Tempat Lahir</td><td>:</td><td><?php echo $ayah_i_data->tmp_lahir; ?></td></tr>
          <tr><td>50.</td><td>Alamat</td><td>:</td><td> <?php echo $ayah_i_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $ayah_i_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $ayah_i_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $ayah_i_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $ayah_i_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
          <tr><td>51.</td><td>Pekerjaan</td><td>:</td><td><?php echo $ayah_i_data->pekerjaan; ?></td></tr>
        </table>

        <br>
      <b>VI. DATA IBU DARI ISTRI</b>
      <table>
          <tr><td width="30">52.</td><td width="170">NIK</td><td>:</td><td width="600"><?php echo $ibu_i_data->nik; ?></td></tr>
          <tr><td>53.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $ibu_i_data->nama; ?></td></tr>
          <tr><td>54.</td><td>Agama</td><td>:</td><td><?php echo $ibu_i_data->agama; ?></td></tr>
          <tr><td>55.</td><td>Nama Organisasi / Penghayat</td><td>:</td><td><?php if($ibu_i_data->nm_organisasi!=NULL) echo $ibu_i_data->nm_organisasi;else echo "-"; ?></td></tr>
          <tr><td>56.</td><td>Tanggal Lahir</td><td>:</td><td><?php echo $ibu_i_data->tgl_lahir; ?></td></tr>
          <tr><td>57.</td><td>Tempat Lahir</td><td>:</td><td><?php echo $ibu_i_data->tmp_lahir; ?></td></tr>
          <tr><td>58.</td><td>Alamat</td><td>:</td><td> <?php echo $ibu_i_data->a_alamat; ?></td></tr>
          <tr><td></td><td></td><td> </td>
              <td><table>
                <tr>
                  <td>a.</td><td width="120"> Desa/Kelurahan </td><td>:</td><td width="120"> <?php echo $ibu_i_data->a_desa; ?></td>
                  <td>b.</td><td width="120"> Kecamatan </td><td>:</td><td> <?php echo $ibu_i_data->a_kecamatan; ?></td>
                </tr>
                <tr>
                  <td>c.</td><td> Kab/Kota </td><td>:</td><td> <?php echo $ibu_i_data->a_kabkota; ?></td>
                  <td>d.</td><td> Provinsi </td><td>:</td><td> <?php echo $ibu_i_data->a_provinsi; ?></td>
                </tr>
              </table></td>
          </tr>
          <tr><td>59.</td><td>Pekerjaan</td><td>:</td><td><?php echo $ibu_i_data->pekerjaan; ?></td></tr>
        </table>
  </td>
</tr>

<tr>
  <td class="kotak">
  <b>VI. DATA SAKSI</b><br><br>
  <b>SAKSI I</b>
      <table>
          <tr><td width="30">60.</td><td width="170">NIK</td><td>:</td><td><?php echo $saksi1_data->nik; ?></td></tr>
          <tr><td>61.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $saksi1_data->nama; ?></td></tr>
          <tr><td>62.</td><td>Tempat Lahir</td><td>:</td><td><?php echo $saksi1_data->tmp_lahir; ?></td></tr>
          <tr><td>63.</td><td>Tanggal Lahir</td><td>:</td><td><?php echo $saksi1_data->tgl_lahir; ?></td></tr>
          <tr><td>64.</td><td>Agama</td><td>:</td><td> <?php echo $saksi1_data->agama; ?></td></tr>
          <tr><td>65.</td><td>Nama Organisasi</td><td>:</td><td><?php if($saksi1_data->nm_organisasi!=NULL) echo $saksi1_data->nm_organisasi;else echo "-"; ?></td></tr>
          <tr><td>66.</td><td>Alamat</td><td>:</td><td> <?php echo $saksi1_data->a_alamat; ?></td></tr>
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
          <tr><td>67.</td><td>Pekerjaan</td><td>:</td><td><?php echo $saksi1_data->pekerjaan; ?></td></tr>
          
      </table>

      <b>SAKSI II</b>
      <table>
          <tr><td width="30">68.</td><td width="170">NIK</td><td>:</td><td><?php echo $saksi2_data->nik; ?></td></tr>
          <tr><td>69.</td><td>Nama Lengkap</td><td>:</td><td><?php echo $saksi2_data->nama; ?></td></tr>
          <tr><td>70.</td><td>Tempat Lahir</td><td>:</td><td><?php echo $saksi2_data->tmp_lahir; ?></td></tr>
          <tr><td>71.</td><td>Tanggal Lahir</td><td>:</td><td><?php echo $saksi3_data->tgl_lahir; ?></td></tr>
          <tr><td>72.</td><td>Agama</td><td>:</td><td> <?php echo $saksi2_data->agama; ?></td></tr>
          <tr><td>73.</td><td>Nama Organisasi</td><td>:</td><td><?php if($saksi2_data->nm_organisasi!=NULL) echo $saksi2_data->nm_organisasi;else echo "-"; ?></td></tr>
          <tr><td>74.</td><td>Alamat</td><td>:</td><td> <?php echo $saksi2_data->a_alamat; ?></td></tr>
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
              </table>
              </td>
          </tr>
          <tr><td>75.</td><td>Pekerjaan</td><td>:</td><td><?php echo $saksi2_data->pekerjaan; ?></td></tr>
          
      </table>
  </td>
</tr>

<tr>
  <td class="kotak">
  <b>VIII. DATA PERKAWINAN</b>
      <table>
          <tr><td width="30">76.</td><td width="170">Tanggal Pemberkatan Perkawinan</td><td>:</td><td width="600"><?php echo dateindo($perkawinan_data->tgl_pemberkatan); ?></td></tr>
          <tr><td>77.</td><td>Tanggal Melapor</td><td>:</td><td><?php echo dateindo($perkawinan_data->tgl_lapor); ?></td></tr>
          <tr><td>78.</td><td>Pukul</td><td>:</td><td><?php echo $perkawinan_data->pukul; ?></td></tr>
          <tr><td>79.</td><td>Agama/Penghayat Kepercayaan</td><td>:</td><td><?php echo $perkawinan_data->agama; ?></td></tr>
          <tr><td>80.</td><td>Nama Organisasi Penghayat Kepercayaan</td><td>:</td><td><?php if($perkawinan_data->nm_organisasi!=NULL) echo $perkawinan_data->nm_organisasi;else echo "-"; ?></td></tr>
          <tr><td>81.</td><td>Nama Badan Peradilan</td><td>:</td><td> <?php echo $perkawinan_data->nama_peradilan; ?></td></tr>
          <tr><td>82.</td><td>Nomor Putusan Penetapan Pengadilan</td><td>:</td><td> <?php echo $perkawinan_data->nomor_putusan; ?></td></tr>
          <tr><td>83.</td><td>Nama Pemuka Agama/Pghyt Kepercayaan</td><td>:</td><td><?php echo $perkawinan_data->nama_pemuka; ?></td></tr>
          <tr><td>84.</td><td>Jumlah Anak Yang Diakui dan Disahkan</td><td>:</td><td><?php echo count($anak); ?></td></tr>
          <tr><td>85.</td><td>Nama Anak</td> <td></td>
              <td><table>
              <?php $i=0; foreach ($anak as $anaka) {
                $i++;
                echo "
                  <tr>
                  <td width='30'> $i.</td><td width='320'> $anaka->nama_anak </td>
                  </tr>
                ";
              }?>
                
              </table>
              </td>
          </tr>
          <tr><td>86.</td><td>No, Tgl. Akta Kelahiran</td><td> </td>
              <td><table>
              <?php $i=0; foreach ($anak as $anaks) {
                $i++;
                $dt = dateindo($anaks->tgl_akta);
                echo "
                  <tr>
                  <td>$i.</td><td width='60'> No</td><td>:</td><td width='180'> $anaks->nomor_akta</td>
                  <td></td><td width='60'> Tgl. </td><td>:</td><td> $dt </td>
                </tr>
                ";
              }?>
                
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
