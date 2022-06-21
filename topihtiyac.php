<?php
$baglanti=mysqli_connect("localhost","root","","bitirmeproje");
mysqli_set_charset($baglanti, "UTF8");

if(mysqli_connect_errno($baglanti)){
	echo "Bağlantı Hatası<br />";
	echo "Hata açıklaması : " .mysqli_connect_error();
	die();
}
$sorgu = mysqli_query($baglanti, "SELECT COUNT(ihtiyac_id) as ToplamSatir FROM ihtiyaclar");
if($sorgu){
	$İhtiyacSayisi=mysqli_num_rows($sorgu);
	if($İhtiyacSayisi>0){
		$ihtiyaclar = mysqli_fetch_assoc($sorgu);
		
		
		echo "" .$ihtiyaclar["ToplamSatir"]. "<br />";
		
	}else{
		echo "Kayıt Yok";
	}

}else{
	echo "Sorgu Hatası";
}
mysqli_close($baglanti);

?>