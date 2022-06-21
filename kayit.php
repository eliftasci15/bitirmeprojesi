	 <?php
 
if(isset($_POST["kaydet"]))
{
    include "baglan.php";
    $sql = "INSERT INTO `okullar` (`okulno`, `okulad`, `tip`, `sehir`, `adres`, `yonetad`, `telefon`, `eposta`, `sifre`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?);";
    $dizi =[
        $_POST["okulad"],
		$_POST["tip"],
        $_POST["sehir"],
        $_POST["adres"],
        $_POST["yonetad"],
		$_POST["telefon"],
		$_POST["eposta"],
		$_POST["sifre"]
    ];
 
    $sth = $baglan->prepare($sql);
    $sonuc = $sth->execute($dizi);
	header("Location:main.php");
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
	margin:0;
	padding:0;
	border:none;
	outline:none;
	background-image:url(arkaplan.jpg);
	background-color:#FFF;
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
  height:75px;
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
	
}
.content .baslik1{
    font-size:30px;
	font-family: "Times New Roman", Times, serif;
    color:#145369;
}

.content .bilgi{
	margin-top:45px;
	padding-left:15px;
}
.content .girisEkrani{
	width:400px;
	padding-top:15px;
	padding-left:470px;
	align:center;
}
        	
.content .girisEkrani .giris{
	margin-top:25px;
	width:30%;
	height:25px;
	background-color:#3c8dbc;
	color:white;
	border:1;
}

.content .girisEkrani .form-control{
	width:250px;
	height:27px;
	margin-top:20px;
	margin-left:25px;
}

.content .girisEkrani .form-label{
	font-size:20px;
	color:#ec3c33;
}
.content .girisEkrani .ab{
	font-size:15px;
	color:#b5b5b7;
	font-weight: bold;
	margin-bottom:5px;
    margin-left:30px;
}
.content .girisEkrani .ac{
	font-size:15px;
	color:#b5b5b7;
	font-weight: bold;
	margin-bottom:5px;
    margin-left:30px;
}
.content .girisEkrani .col{
	font-size:15px;
	color:#6f6f6f;
	width:320px;
	height:33px;
	margin-top:20px;
	margin-left:55px;
}




</style>
</head>
<body>
  
   <div class="header">
   <div class="info">
   <i class="fa-solid fa-chevron-left"></i>
   <a href="main.php">Geri</a></span>
			
   </div>
    <span class="baslik">İhtiyaç Kutusu</span>
	
	   
     </div>
		 <div class="content">
	 <div class="bilgi">
	 <span class="baslik1">Okul Kayıt</span>
	 </div>
	 
        <form action="" method="post">
		      <div class="girisEkrani">
			  <span class="ab">Kurum Bilgileri ..................................</span>
                <div class="float:left;">
                <label for="okulad" class="form-label">*</label>
                <input type="text" class="form-control" name="okulad" placeholder="Kurumun Adı" required>
                </div>
				
		        <div class="float:left;">
                <label for="sehir" class="form-label">*</label>
                <input type="text" class="form-control" name="sehir" placeholder="Bulunduğu Şehir" required>
                </div>
				
                <div class="float:left;">
                <label for="adres" class="form-label">*</label>
                <input type="text" class="form-control" name="adres" placeholder="Adres Bilgisi" required>
                </div>
				
				<div class="col">
                <label for="tip" class="form-label1">İlkokul
                    <input type="radio" class="col1" name="tip" value="İlkokul">
                </label>
                <label for="tip" class="form-label1">Ortaokul
                    <input type="radio" class="col1" name="tip" value="Ortaokul">
                </label>
				<label for="tip" class="form-label1">Lise
                    <input type="radio" class="col1" name="tip" value="Lise">
                </label>
				<label for="tip" class="form-label1">Üniversite
                    <input type="radio" class="col1" name="tip" value="Üniversite">
                </label>
                </div>
				<span class="ac">Kurum Yöneticisi Bilgileri ................</span>
				
				<div class="float:left;">
                <label for="yonetad" class="form-label">*</label>
                <input type="text" class="form-control" name="yonetad" placeholder="Kurum Yöneticisinin Adı Soyadı" required>
                </div>
				<div class="float:left;">
                <label for="telefon" class="form-label">*</label>
                <input type="text" class="form-control" name="telefon" placeholder="Telefon Numarası" required>
                </div>
				
			    <div class="float:left;">
                <label for="eposta" class="form-label">*</label>
                <input type="text" class="form-control" name="eposta" placeholder="E-posta" required>
                </div>
				
			    <div class="float:left;">
                <label for="sifre" class="form-label">*</label>
                <input type="password" class="form-control" name="sifre" placeholder="Şifre" required>
                </div>
              
            <button type="submit" name="kaydet" class="giris">Kaydet</button>
			</div>
        </form>
	   
	
	 </div>
	 

	  <footer id="altmenu">
	  
	  </footer>
	
</body>
</html>