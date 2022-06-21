<?php
 
if(isset($_POST["kaydet"]))
{
    include "baglan.php";
    $sql = "INSERT INTO `ihtiyaclar` (`ihtiyac_id`, `okul_ad`, `okul_il`, `adres`, `tel`, `ihtiyac_baslik`, `ihtiyac_detay`, `miktar`, `durum`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?);";
    $dizi =[
        $_POST["ad"],
        $_POST["il"],
		$_POST["adres"],
		$_POST["telefon"],
        $_POST["baslik"],
        $_POST["detay"],
		$_POST["miktar"],
		$_POST["durum"]
    ];
    $sth = $baglan->prepare($sql);
   $sonuc = $sth->execute($dizi);
   header("Location:index2.php");
}
 
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
	margin-left:175px;
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
	margin-top:40px;
	margin-left:450px;
	width:700px;
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
	 
	     <main>
    <div class="container">
        <form action="" method="post" class="row mt-4 g-2 bg-light">
		
            <div class="col-8">
                <label for="ad" class="form-label">Okulun Adı</label>
                <input type="text" class="form-control" name="ad">
            </div>
            <div class="col-8">
                <label for="il" class="form-label">Okulun İli</label>
                <input type="text" class="form-control" name="il">
            </div>
			 <div class="col-8">
                <label for="adres" class="form-label">Okulun Adresi</label>
                <input type="text" class="form-control" name="adres">
            </div>
			  <div class="col-8">
                <label for="telefon" class="form-label">Telefon Numarası</label>
                <input type="text" class="form-control" name="telefon">
            </div>
            <div class="col-8">
                <label for="baslik" class="form-label">İhtiyaç Başlığı</label>
                <input type="text" class="form-control" name="baslik">
            </div>
            <div class="col-8">
                <label for="detay" class="form-label">İhtiyaç Detayı</label>
                <input type="text" class="form-control" name="detay">
            </div>
			<div class="col-8">
                <label for="miktar" class="form-label">İhtiyaç Duyulan Miktar</label>
                <input type="text" class="form-control" name="miktar">
            </div>
			 
	
          
            <button type="submit" name="kaydet" class="btn">Kaydet</button>
        </form>
    </div>
    </main>
	 

	 
	   <footer id="altmenu">
	   <div class="altbilgi">
	   
	   </div>
	  
	  </footer>
	  	
	
</body>
</html>