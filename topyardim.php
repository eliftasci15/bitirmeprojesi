<?php
$baglanti=mysqli_connect("localhost","root","","bitirmeproje");
mysqli_set_charset($baglanti, "UTF8");

if(mysqli_connect_errno($baglanti)){
	echo "Bağlantı Hatası<br />";
	echo "Hata açıklaması : " .mysqli_connect_error();
	die();
}
$sorgu = mysqli_query($baglanti, "SELECT COUNT(yardim_id) as ToplamYardim FROM yardimlar");
if($sorgu){
	$YardimSayisi=mysqli_num_rows($sorgu);
	if($YardimSayisi>0){
		$yardimlar = mysqli_fetch_assoc($sorgu);
		
		
		echo "" .$yardimlar["ToplamYardim"]. "<br />";
		
	}else{
		echo "Kayıt Yok";
	}

}else{
	echo "Sorgu Hatası";
}
mysqli_close($baglanti);

?>