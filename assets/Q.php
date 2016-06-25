<?php
//you'll have to replace your credentials here
$mysqldatabase="db_sipcapil";
$mysqluser="root";
$mysqlpassword="";

//connect to db
$DBCONN=mysql_connect("localhost",$mysqluser,$mysqlpassword);
if(!$DBCONN) die("Couldn't connect to MySQL Server.");

$id = mysql_real_escape_string($_GET['q']);

//perform lookup
$query = "SELECT * FROM DPS WHERE NIK='$id'";
$result=mysql_db_query($mysqldatabase, $query) or die(mysql_error());

//print out results
if(mysql_num_rows($result)==0){
    echo "| | | | | | | | | |";
}else{
	$row = mysql_fetch_array($result);
	echo $row['nama_lengkap']."|".$row['tgl_lahir']."|".$row['ps_alamat'].
	"|".$row['ps_kelurahan']."|".$row['ps_kecamatan']."|SURAKARTA|JAWA TENGAH|".$row['pekerjaan'].
	"|".$row['jk']."|".$row['tmp_lahir']."|".$row['agama']."|".$row['status'];
}

?>