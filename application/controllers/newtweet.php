<?php
//session_start();
require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "Dispenduk_solo"; //isi dengan username twitter yang akan diambil timelinenya
$notweets = 10; // cumlah timeline yang akan ditampilkan

/* isi sesuai informasi dari https://dev.twitter.com/apps/ dgn membuat aplikasi baru */
$consumerkey = "gh82DP1LRxsU699Qua8ZL8Ba6"; 
$consumersecret = "ggeKoa2pJwyw0Q72aOLo9XKasMKeedsBIuXeZrrZPY41wcy0mj";
$accesstoken = "1378786550-0Nftlgw54kXb4AMQbFBLVxjHUrSQCasfoBACrwl";
$accesstokensecret = "DHExr0hZcIXyawuYrSQrkb5K9516zxN12fn5yQW0yuo42";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
/* disini kita akan mengekstrak data dari variabel $tweets
   silahkan dimodifikasi sesuai keinginan untuk bagian ini.
 */
foreach($tweets as $tweet)
{
	echo "$tweet->text <br>";
} 
?>