    <script>
        var ayah = getHTTPObject();
        var ibu = getHTTPObject();
        var pelapor = getHTTPObject();
        var saksi1 = getHTTPObject();
        var saksi2 = getHTTPObject();
        var jenazah = getHTTPObject();
        var pendaftar = getHTTPObject();
        var suami = getHTTPObject();
        var istri = getHTTPObject();
        var ayah_s = getHTTPObject();
        var ibu_s = getHTTPObject();
        var ayah_i = getHTTPObject();
        var ibu_i = getHTTPObject();



        function getHTTPObject()
        {
          var xmlhttp;
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else if (window.ActiveXObject) {
            // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          } else {
            //alert("Your browser does not support XMLHTTP!");
          }
          return xmlhttp;
        }

        function updateDataJenazah()
        {
          if (jenazah)
          {
            var Value = document.getElementById("j_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              jenazah.open("GET", url + param, true);
              jenazah.onreadystatechange = handleAjaxJenazah;
              jenazah.send(null);
            }else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxJenazah()
        {
          if (jenazah.readyState == 4)
          {

            valBack = jenazah.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('j_nama');
            var date = document.getElementById('j_tgl_lahir');
            var place = document.getElementById('j_a_alamat');
            var desa = document.getElementById('j_a_desa');
            var kecamatan = document.getElementById('j_a_kecamatan');
            var kabkota = document.getElementById('j_a_kabkota');
            var provinsi = document.getElementById('j_a_provinsi');
            var pekerjaan = document.getElementById('j_pekerjaan');
            var jk = document.getElementById('j_jk');
            var tmp = document.getElementById('j_tmp_lahir');
            var agama = document.getElementById('j_agama');
            

            fullname.value = valBack[0];
            date.value = valBack[1];
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            pekerjaan.value = valBack[7];
            jk.value = valBack[8];
            tmp.value = valBack[9];
            agama.value = valBack[10];
          }
        }

        function updateDataAyah()
        {
          if (ayah)
          {
            var Value = document.getElementById("a_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              ayah.open("GET", url + param, true);
              ayah.onreadystatechange = handleAjaxAyah;
              ayah.send(null);
            }
            else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxAyah()
        {
          if (ayah.readyState == 4)
          {
            valBack = ayah.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('a_nama');
            var date = document.getElementById('a_tgl_lahir');
            var place = document.getElementById('aa_alamat');
            var desa = document.getElementById('aa_desa');
            var kecamatan = document.getElementById('aa_kecamatan');
            var kabkota = document.getElementById('aa_kabkota');
            var provinsi = document.getElementById('aa_provinsi');
            var pekerjaan = document.getElementById('a_pekerjaan');
            

            fullname.value = valBack[0];
            date.value = valBack[1];
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            pekerjaan.value = valBack[7];
          }
        }

        function updateDataIbu()
        {
          if (ibu)
          {
            var Value = document.getElementById("i_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              ibu.open("GET", url + param, true);
              ibu.onreadystatechange = handleAjaxIbu;
              ibu.send(null);
            }
            else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxIbu()
        {
          if (ibu.readyState == 4)
          {
            valBack = ibu.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('i_nama');
            var date = document.getElementById('i_tgl_lahir');
            var place = document.getElementById('ia_alamat');
            var desa = document.getElementById('ia_desa');
            var kecamatan = document.getElementById('ia_kecamatan');
            var kabkota = document.getElementById('ia_kabkota');
            var provinsi = document.getElementById('ia_provinsi');
            var pekerjaan = document.getElementById('i_pekerjaan');
            

            fullname.value = valBack[0];
            date.value = valBack[1];
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            pekerjaan.value = valBack[7];
          }
        }

        function updateDataPelapor()
        {
          if (pelapor)
          {
            var Value = document.getElementById("p_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              pelapor.open("GET", url + param, true);
              pelapor.onreadystatechange = handleAjaxPelapor;
              pelapor.send(null);
            }
            else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxPelapor()
        {
          if (pelapor.readyState == 4)
          {
            valBack = pelapor.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('p_nama');

            var place = document.getElementById('pa_alamat');
            var desa = document.getElementById('pa_desa');
            var kecamatan = document.getElementById('pa_kecamatan');
            var kabkota = document.getElementById('pa_kabkota');
            var provinsi = document.getElementById('pa_provinsi');

            var job = document.getElementById('p_pekerjaan');
            

            fullname.value = valBack[0];
            
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];

            job.value = valBack[7];
          }
        }

        function updateDataSaksi1()
        {
          if (saksi1)
          {
            var Value = document.getElementById("s1_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              saksi1.open("GET", url + param, true);
              saksi1.onreadystatechange = handleAjaxSaksi1;
              saksi1.send(null);
            }else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxSaksi1()
        {
          if (saksi1.readyState == 4)
          {
            valBack = saksi1.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('s1_nama');

            var place = document.getElementById('s1a_alamat');
            var desa = document.getElementById('s1a_desa');
            var kecamatan = document.getElementById('s1a_kecamatan');
            var kabkota = document.getElementById('s1a_kabkota');
            var provinsi = document.getElementById('s1a_provinsi');
            var job = document.getElementById('s1_pekerjaan');
            var tlahir = document.getElementById('s1_tmp_lahir');
            var dlahir = document.getElementById('s1_tgl_lahir');
            

            fullname.value = valBack[0];
            
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            job.value = valBack[7];
            dlahir.value = valBack[1];
            tlahir.value = valBack[9];
          }
        }

        function updateDataSaksi2()
        {
          if (saksi2)
          {
            var Value = document.getElementById("s2_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              saksi2.open("GET", url + param, true);
              saksi2.onreadystatechange = handleAjaxSaksi2;
              saksi2.send(null);
            }
            else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxSaksi2()
        {
          if (saksi2.readyState == 4)
          {
            valBack = saksi2.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('s2_nama');

            var place = document.getElementById('s2a_alamat');
            var desa = document.getElementById('s2a_desa');
            var kecamatan = document.getElementById('s2a_kecamatan');
            var kabkota = document.getElementById('s2a_kabkota');
            var provinsi = document.getElementById('s2a_provinsi');
            var job = document.getElementById('s2_pekerjaan');
            var tlahir = document.getElementById('s2_tmp_lahir');
            var dlahir = document.getElementById('s2_tgl_lahir');
            

            fullname.value = valBack[0];
            
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            job.value = valBack[7];
            dlahir.value = valBack[1];
            tlahir.value = valBack[9];
          }
        }

        function getPendaftar()
        {
          if (pendaftar)
          {
            var Value = document.getElementById("nik_pengaju").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              pendaftar.open("GET", url + param, true);
              pendaftar.onreadystatechange = handlePendaftar;
              pendaftar.send(null);
            }
            else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handlePendaftar()
        {
          if (pendaftar.readyState == 4)
          {
            valBack = pendaftar.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('nama');
            

            fullname.value = valBack[0];
          }
        }

        function updateDataSuami()
        {
          if (suami)
          {
            var Value = document.getElementById("s_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              suami.open("GET", url + param, true);
              suami.onreadystatechange = handleAjaxSuami;
              suami.send(null);
            }
            else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxSuami()
        {
          if (suami.readyState == 4)
          {
            valBack = suami.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            
            var fullname = document.getElementById('s_nama');
            var date = document.getElementById('s_tgl_lahir');
            var place = document.getElementById('s_a_alamat'); 
            var desa = document.getElementById('s_a_desa');
            var kecamatan = document.getElementById('s_a_kecamatan');
            var kabkota = document.getElementById('s_a_kabkota');
            var provinsi = document.getElementById('s_a_provinsi');
            var pekerjaan = document.getElementById('s_pekerjaan');
            var pbirth = document.getElementById('s_tmp_lahir');
            

            fullname.value = valBack[0];
            date.value = valBack[1];
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            pekerjaan.value = valBack[7];
            pbirth.value = valBack[9];
          }
        }

        function updateDataIstri()
        {
          if (istri)
          {
            var Value = document.getElementById("i_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              istri.open("GET", url + param, true);
              istri.onreadystatechange = handleAjaxIstri;
              istri.send(null);
            }else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxIstri()
        {
          if (istri.readyState == 4)
          {
            valBack = istri.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            
            var fullname = document.getElementById('i_nama');
            var date = document.getElementById('i_tgl_lahir');
            var place = document.getElementById('i_a_alamat'); 
            var desa = document.getElementById('i_a_desa');
            var kecamatan = document.getElementById('i_a_kecamatan');
            var kabkota = document.getElementById('i_a_kabkota');
            var provinsi = document.getElementById('i_a_provinsi');
            var pekerjaan = document.getElementById('i_pekerjaan');
            var pbirth = document.getElementById('i_tmp_lahir');
            

            fullname.value = valBack[0];
            date.value = valBack[1];
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            pekerjaan.value = valBack[7];
            pbirth.value = valBack[9];
          }
        }


        function updateAyahSuami()
        {
          if (ayah_s)
          {
            var Value = document.getElementById("as_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              ayah_s.open("GET", url + param, true);
              ayah_s.onreadystatechange = handleAjaxAS;
              ayah_s.send(null);
            }else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxAS()
        {
          if (ayah_s.readyState == 4)
          {
            valBack = ayah_s.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('as_nama');
            var place = document.getElementById('as_a_alamat');
            var desa = document.getElementById('as_a_desa');
            var kecamatan = document.getElementById('as_a_kecamatan');
            var kabkota = document.getElementById('as_a_kabkota');
            var provinsi = document.getElementById('as_a_provinsi');
            var job = document.getElementById('as_pekerjaan');
            var tlahir = document.getElementById('as_tmp_lahir');
            var dlahir = document.getElementById('as_tgl_lahir');

            fullname.value = valBack[0];
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            job.value = valBack[7];
            tlahir.value = valBack[9];
            dlahir.value = valBack[1];

          }
        }

       function updateIbuSuami()
        {
          if (ibu_s)
          {
            var Value = document.getElementById("is_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              ibu_s.open("GET", url + param, true);
              ibu_s.onreadystatechange = handleAjaxIS;
              ibu_s.send(null);
            }else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxIS()
        {
          if (ibu_s.readyState == 4)
          {
            valBack = ibu_s.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('is_nama');
            var place = document.getElementById('is_a_alamat');
            var desa = document.getElementById('is_a_desa');
            var kecamatan = document.getElementById('is_a_kecamatan');
            var kabkota = document.getElementById('is_a_kabkota');
            var provinsi = document.getElementById('is_a_provinsi');
            var job = document.getElementById('is_pekerjaan');
            var tlahir = document.getElementById('is_tmp_lahir');
            var dlahir = document.getElementById('is_tgl_lahir');

            fullname.value = valBack[0];
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            job.value = valBack[7];
            tlahir.value = valBack[9];
            dlahir.value = valBack[1];
          }
        }

        function updateAyahIstri()
        {
          if (ayah_i)
          {
            var Value = document.getElementById("ai_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              ayah_i.open("GET", url + param, true);
              ayah_i.onreadystatechange = handleAjaxAI;
              ayah_i.send(null);
            }else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxAI()
        {
          if (ayah_i.readyState == 4)
          {
            valBack = ayah_i.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('ai_nama');
            var place = document.getElementById('ai_a_alamat');
            var desa = document.getElementById('ai_a_desa');
            var kecamatan = document.getElementById('ai_a_kecamatan');
            var kabkota = document.getElementById('ai_a_kabkota');
            var provinsi = document.getElementById('ai_a_provinsi');
            var job = document.getElementById('ai_pekerjaan');
            var tlahir = document.getElementById('ai_tmp_lahir');
            var dlahir = document.getElementById('ai_tgl_lahir');

            fullname.value = valBack[0];
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            job.value = valBack[7];
            tlahir.value = valBack[9];
            dlahir.value = valBack[1];

          }
        }

       function updateIbuIstri()
        {
          if (ibu_i)
          {
            var Value = document.getElementById("ii_nik").value;
            if(Value)
            {
              var url = "<?=base_url('assets/Q.php');?>";
              var param = "?q=" + escape(Value);

              ibu_i.open("GET", url + param, true);
              ibu_i.onreadystatechange = handleAjaxII;
              ibu_i.send(null);
            }else{
              window.alert('Masukan NIK Terlebih Dahulu');
          }
          }
        }
        function handleAjaxII()
        {
          if (ibu_i.readyState == 4)
          {
            valBack = ibu_i.responseText.split("|");
            if (valBack[0]=='') {
              window.alert('Data NIK Tidak Ditemukan');
            }

            var fullname = document.getElementById('ii_nama');
            var place = document.getElementById('ii_a_alamat');
            var desa = document.getElementById('ii_a_desa');
            var kecamatan = document.getElementById('ii_a_kecamatan');
            var kabkota = document.getElementById('ii_a_kabkota');
            var provinsi = document.getElementById('ii_a_provinsi');
            var job = document.getElementById('ii_pekerjaan');
            var tlahir = document.getElementById('ii_tmp_lahir');
            var dlahir = document.getElementById('ii_tgl_lahir');

            fullname.value = valBack[0];
            place.value = valBack[2];
            desa.value = valBack[3];
            kecamatan.value = valBack[4];
            kabkota.value = valBack[5];
            provinsi.value = valBack[6];
            job.value = valBack[7];
            tlahir.value = valBack[9];
            dlahir.value = valBack[1];
          }
        }

        </script>