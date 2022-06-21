<?php

session_start();

include "baglan.php";
 
$sql ="SELECT * FROM ihtiyaclar WHERE ihtiyac_id = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['ihtiyac_id']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
?>
<?php
 
include "baglan.php";
 
if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `ihtiyaclar` WHERE `ihtiyaclar`.`ihtiyac_id` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
 
    header('Location:index.php');
 
}
 
$sql ="SELECT * FROM ihtiyaclar";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();
 
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
	margin-right:550px;
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
						<a href="guncelle.php?ihtiyac_id=<?=$satir['ihtiyac_id']?>" class="btn btn-outline-dark">İhtiyacın Bir Kısmını Karşıla</a>
						<a href="sil.php?ihtiyac_id=<?=$satir['ihtiyac_id']?>" onclick="return confirm('Yardım etme işlemi tamamlansın mı?')" class="btn btn-outline-dark">İhtiyacın Tamamını Karşıla</a>
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
                    <?=$satir["okul_ad"]?></h4>
					<h5 class=""><?=$satir["okul_il"]?></h5>
                    <h6 class=""><?=$satir["adres"]?></h6>		
                    <h6 class=""><?=$satir["tel"]?></h6>	
                    <h6 class=""><?=$satir["ihtiyac_baslik"]?></h6>					
                    <h6 class="card-subtitle mb-2 text-muted"><?=$satir["ihtiyac_detay"]?> ( <?=$satir["miktar"]?>)</h6>
					<h6 class=""><span>Karşılanan Miktar:</span><?=$satir["karsilanan_miktar"]?></h6>
                    
 
                </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    

    <footer></footer>
</body>
</html>