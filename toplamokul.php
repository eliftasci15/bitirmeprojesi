<?php
$baglanti=mysqli_connect("localhost","root","","bitirmeproje");
mysqli_set_charset($baglanti, "UTF8");

if(mysqli_connect_errno($baglanti)){
	echo "Bağlantı Hatası<br />";
	echo "Hata açıklaması : " .mysqli_connect_error();
	die();
}
$sorgu = mysqli_query($baglanti, "SELECT COUNT(okulno) as ToplamSatir FROM okullar");
if($sorgu){
	$okulSayisi=mysqli_num_rows($sorgu);
	if($okulSayisi>0){
		$okullar = mysqli_fetch_assoc($sorgu);
		
		
		echo "" .$okullar["ToplamSatir"]. "<br />";
		
	}else{
		echo "Kayıt Yok";
	}

}else{
	echo "Sorgu Hatası";
}
mysqli_close($baglanti);

?>