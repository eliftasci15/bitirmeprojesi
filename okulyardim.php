<?php
 session_start();
include "baglan.php";
 
if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `yardimlar` WHERE `yardimlar`.`yardim_id` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
 
    header('Location:index.php');
 
}
 
$sql ="SELECT * FROM yardimlar";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();

include("connect.php"); //INCLUDE CONNECTION
		error_reporting(0); // hide undefine index errors
		if(isset($_SESSION["mail"])&&isset($_SESSION["sifre"]))
            {
				$mail =  $_SESSION['eposta'];
            }

$sql="SELECT * FROM okullar WHERE eposta='$mail'";
$sorgu2=mysqli_query($db,$sql);
while( $sonuc=mysqli_fetch_object($sorgu2) ){
	$OkulAd=$sonuc->okulad;
}
mysqli_close($db);

?>

<!DOCTYPE html>
<html lang="tr">
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
   a {
        color: #fff;
		text-decoration:none
	
    }
	  a:hover{
        color: #fff;
		text-decoration:none
	
    }
.container .row .col .baslik{
	margin-top:10px;
	font-size:25px;
}

</style>
</head>
<body>
    
<div class="header">
	 <div class="info">
  <span><i class="fa-solid fa-chevron-left"></i>
  
   <a href="ana2.php">Geri</a></span>	
   </div>
   
    <span class="baslik">İhtiyaç Kutusu</span>
     </div>
	 
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="baslik"></h1>
                </div>
            </div>

        </div>
    
</header>
    <main>
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-hover table-light table-striped  table-sm">
                        <thead>
                            <tr>
                                <th>Okulun Adı</th>
                                <th>Okulun İli</th>
                                <th>İhtiyaç Başlığı</th>
								<th>İhtiyaç Detay</th>
                                <th>Yapılan Yardım</th>
								<th>Yardım Yapılan Tarih</th>
                        </thead>
                        <tbody>
                      <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                            
                            <?php if($OkulAd==$satir['okul_ad'])
                                { ?>
                                    <td><?=$satir['okul_ad']?></td>
                                    <td><?=$satir['okul_il']?></td>
								    <td><?=$satir['ihtiyac_baslik']?></td>
								    <td><?=$satir['ihtiyac_detay']?></td>
                                    <td><?=$satir['Karsilanan_miktar']?> adet ihtiyacınız karşılandı.</td>
								    <td><?=$satir['tamam_tarih']?></td>
                            <?php } ?>
                                
                              

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </main>
  	   <footer id="altmenu">
	   <div class="altbilgi">
	   
	   </div>
	  
	  </footer>
</body>
</html>