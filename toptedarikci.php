<?php
$baglanti=mysqli_connect("localhost","root","","bitirmeproje");
mysqli_set_charset($baglanti, "UTF8");

if(mysqli_connect_errno($baglanti)){
	echo "Bağlantı Hatası<br />";
	echo "Hata açıklaması : " .mysqli_connect_error();
	die();
}
$sorgu = mysqli_query($baglanti, "SELECT COUNT(tedarikcino) as ToplamTedarikci FROM tedarikciler");
if($sorgu){
	$TedarikciSayisi=mysqli_num_rows($sorgu);
	if($TedarikciSayisi>0){
		$tedarikciler = mysqli_fetch_assoc($sorgu);
		
		
		echo "" .$tedarikciler["ToplamTedarikci"]. "<br />";
		
	}else{
		echo "Kayıt Yok";
	}

}else{
	echo "Sorgu Hatası";
}
mysqli_close($baglanti);

?>