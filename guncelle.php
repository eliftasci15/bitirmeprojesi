

<?php
 session_start();
include "baglan.php";
$ihtiyac_id=$_GET['ihtiyac_id'];

include("connect.php"); //INCLUDE CONNECTION
		error_reporting(0); // hide undefine index errors
		if(isset($_SESSION["mail"])&&isset($_SESSION["sifre"]))
            {
				$mail =  $_SESSION['mail'];
            }
	$sql="SELECT * FROM uyeler WHERE mail='$mail'";
$sorgu=mysqli_query($db,$sql);
while( $sonuc=mysqli_fetch_object($sorgu) ){
	$KullaniciId=$sonuc->uyeno;
}
mysqli_close($db);

if(isset($_POST['guncelle'])){
	include("connect.php"); //INCLUDE CONNECTION
	error_reporting(0); // hide undefine index errors
	$sql="SELECT * FROM ihtiyaclar WHERE ihtiyac_id='$ihtiyac_id'";
	$sorgu=mysqli_query($db,$sql);
	$karsilanacakMiktar=$_POST['karsilanan_miktar'];
	while( $sonuc=mysqli_fetch_object($sorgu) ){
		 $okulAd = $sonuc->okul_ad;
		 $okulIL = $sonuc->okul_il;
		 $ihtiyacBaslik = $sonuc->ihtiyac_baslik;
		 $ihtiyacDetay = $sonuc->ihtiyac_detay;
		 $karsilananMiktar = $sonuc->karsilanan_miktar;
		 $miktar = $sonuc->miktar;
		 
	}
	mysqli_close($db);
	$ihtiyacMiktar=$karsilanacakMiktar+$karsilananMiktar;
	if($karsilanacakMiktar<($miktar-$karsilananMiktar) && $karsilanacakMiktar>0)
	{
		include("connect.php"); //INCLUDE CONNECTION
		error_reporting(0); // hide undefine index errors
		$sql="UPDATE ihtiyaclar SET karsilanan_miktar='$ihtiyacMiktar' WHERE ihtiyac_id='$ihtiyac_id'";
		$sorgu=mysqli_query($db,$sql);

    	header("Location:index.php");
	}
	else if($karsilanacakMiktar==($miktar-$karsilananMiktar))
	{
		include("connect.php"); //INCLUDE CONNECTION
		error_reporting(0); // hide undefine index errors
		$sql3="DELETE FROM ihtiyaclar WHERE ihtiyac_id='$ihtiyac_id'";
        $sorgu3=mysqli_query($db,$sql3);
		header("Location:index.php");
	}
	else
	{
		header("Location:guncellehata.php");
	}
    
	if($karsilanacakMiktar<=($miktar-$karsilananMiktar) && $karsilanacakMiktar>0)
	{
		
		include("connect.php"); //INCLUDE CONNECTION
		error_reporting(0); // hide undefine index errors
		
		$sql = "INSERT INTO yardimlar (	okul_ad, okul_il,ihtiyac_baslik,ihtiyac_detay,karsilanan_miktar,kullaniciid) VALUES ('$okulAd', '$okulIL', '$ihtiyacBaslik' , '$ihtiyacDetay', '$karsilanacakMiktar', '$KullaniciId')";
		
			if(mysqli_query($db,$sql))
			{
				
			}
		mysqli_close($db);
	}
	
}
 
$sql ="SELECT * FROM ihtiyaclar WHERE ihtiyac_id = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['ihtiyac_id']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>İhtiyaç Kutusu</title>
<meta name="description" content="Yardım Sitesi">
<meta nam="keyword" content="yardım, sitesi, html, css">
<link href="stylee.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
html{
	width:100%;
	height:100%;
	margin:0;
	padding:0;
	direction:ltr;
	overflow-x:hidden;
	overflow-y:scroll;
}

body{
	width:100%;
	height:100%;
	background-color:#f8f9fa;
	margin:0;
	padding:0;
	border:none;
	outline:none;
	font-family:Arial, "Helvatica Neune", Helvatica, sans-serif;
	color:#646464;
	line-height:1.5;
	font-style:normal;
	font-variant:normal;
	font-weight:normal;
	text-align:center;
	text-decoration:none;

}
.header{
  width:100%;
 height:80px;
  background:#234366;
  display:flex;
  align-items:center;
  box-sizing:border-box;
  color:#FFF;
  justify-content:space-between;
}

.header .baslik{
	font-size:33px;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-style: oblique;
	padding-right:560px;
	
}
.header .info{
	font-size:21px;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	color:#FFF;
}

#altmenu .altbilgi{
	width:100%;
	height:50px;
}

.col-4{
	margin-right:200px;
	margin-left:400px;
	margin-top:10px;
}
.col{
	margin-top:-30px;
	margin-left:550px;
	
}
   a {
        color: #fff;
		text-decoration:none
	
    }
	  a:hover{
        color: #fff;
		text-decoration:none
	
    }
.btn{
	margin-top:50px;
	margin-left:470px;
	width:130px;
	height:40px;
	background-color:#708090;
	color:#fff;
}
.form-label{
	font-size:17px;
	color:#202d54;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;

}
.form-label1{
	margin-top:10px;
	font-size:17px;
	color:#202d54;
	margin-right:20px;
}
.form-label2{
	margin-top:10px;
	font-size:17px;
	color:#202d54;
	margin-right:150px;
}
.form-label3{
	font-size:17px;
	color:#202d54;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	margin-left:30px;
}
.container{
	margin-top:150px;
	margin-left:150px;
	width:800px;
}
</style>
</head>
<body>
    

   <div class="header">
   <div class="info">
  <span><i class="fa-solid fa-chevron-left"></i>
  
   <a href="index.php">Geri</a></span>	
   </div>
   
    <span class="baslik">İhtiyaç Kutusu</span>
     </div>
    <main>
    <div class="container">
        <form action="" method="post" class="row mt-4 g-3">
            <input type="hidden" name="ihtiyac_id" value="<?=$satir['ihtiyac_id']?>">

            <div class="col-4">
                <label for="karsilanan_miktar" class="form-label">Karşılanabilecek Miktar</label>
                <input type="text" class="form-control" name="karsilanan_miktar" value="<?=$satir['karsilanan_miktar']?>">
            </div>
			
            <button type="submit" name="guncelle" class="btn btn-dark">Yardım Et</button>
        </form>
		

		
    </div>
    </main>
    <footer></footer>
</body>
</html>