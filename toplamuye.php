<?php
$baglanti=mysqli_connect("localhost","root","","bitirmeproje");
mysqli_set_charset($baglanti, "UTF8");

if(mysqli_connect_errno($baglanti)){
	echo "Bağlantı Hatası<br />";
	echo "Hata açıklaması : " .mysqli_connect_error();
	die();
}
$sorgu = mysqli_query($baglanti, "SELECT COUNT(uyeno) as ToplamSatir FROM uyeler");
if($sorgu){
	$uyeSayisi=mysqli_num_rows($sorgu);
	if($uyeSayisi>0){
		$uyeler = mysqli_fetch_assoc($sorgu);
		
		
		echo "" .$uyeler["ToplamSatir"]. "<br />";
		
	}else{
		echo "Kayıt Yok";
	}

}else{
	echo "Sorgu Hatası";
}
mysqli_close($baglanti);

?>