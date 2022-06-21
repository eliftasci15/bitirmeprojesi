<?php

session_start();
 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<title>İhtiyaç Kutusu</title>
<meta name="description" content="Yardım Sitesi">
<meta nam="keyword" content="yardım, sitesi, html, css">
<link href="stylee.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
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
   a {
        color: #fff;
		text-decoration:none
	
    }
	  a:hover{
        color: #fff;
		text-decoration:none
	
    }
.btn-group{
	margin-top:50px;
	margin-right:980px;
}
.container .row .col .card .card-body{
	background-color:#e9ecef;
	
}
</style>
<body>
  <div class="header">
   <div class="info">
  <span><i class="fa-solid fa-chevron-left"></i>
  
   <a href="index.php">Geri</a></span>	
   </div>
   
    <span class="baslik">İhtiyaç Kutusu</span>
     </div>
    
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-outline-dark">Tüm İhtiyaçlar</a>
						
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    <main>    
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <?php
                            include("connect.php"); //INCLUDE CONNECTION
                            error_reporting(0); // hide undefine index errors
                            $ihtiyac_id = $_GET['ihtiyac_id'];
                            if(isset($_SESSION["mail"])&&isset($_SESSION["sifre"]))
                            {
				                $mail =  $_SESSION['mail'];
                            }
	                        $sql4="SELECT * FROM uyeler WHERE mail='$mail'";
                            $sorgu4=mysqli_query($db,$sql4);
                            while( $sonuc=mysqli_fetch_object($sorgu4) ){
	                            $KullaniciId=$sonuc->uyeno;
                            }
	                        
                            $sql2="SELECT * FROM ihtiyaclar WHERE ihtiyac_id='$ihtiyac_id'";
	                        $sorgu2=mysqli_query($db,$sql2);
                            while( $sonuc=mysqli_fetch_object($sorgu2) ){
                                $okulAd = $sonuc->okul_ad;
                                $okulIL = $sonuc->okul_il;
                                $ihtiyacBaslik = $sonuc->ihtiyac_baslik;
                                $ihtiyacDetay = $sonuc->ihtiyac_detay;
                                $karsilananMiktar = $sonuc->karsilanan_miktar;
                                $miktar = $sonuc->miktar;
                                
                           }
                           mysqli_close($db);
                            $ihtiyacMiktar = $miktar-$karsilananMiktar;
                            include("connect.php"); //INCLUDE CONNECTION
		                    error_reporting(0); // hide undefine index errors
		
		                    $sql = "INSERT INTO yardimlar (	okul_ad, okul_il,ihtiyac_baslik,ihtiyac_detay,karsilanan_miktar,kullaniciid) VALUES ('$okulAd', '$okulIL', '$ihtiyacBaslik' , '$ihtiyacDetay', '$ihtiyacMiktar', '$KullaniciId')";
		
			                if(mysqli_query($db,$sql))
			                {
				
			                }
                            $sql3="DELETE FROM ihtiyaclar WHERE ihtiyac_id='$ihtiyac_id'";
                            $sorgu3=mysqli_query($db,$sql3);
		                    mysqli_close($db);
                            echo "İşem başarıyla tamamlandı.";  
                            
                        ?>
                    </h4>
                </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    

    <footer></footer>
</body>
</html>