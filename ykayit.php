	 <?php
 
if(isset($_POST["kaydet"]))
{
    include "baglan.php";
    $sql = "INSERT INTO `uyeler` (`uyeno`, `uyead`, `tc`, `telefon`, `mail`, `sifre`, `cinsiyet`) VALUES (NULL, ?, ?, ?, ?, ?, ?);";
    $dizi =[
        $_POST["uyead"],
        $_POST["tc"],
        $_POST["telefon"],
        $_POST["mail"],
		$_POST["sifre"],
		$_POST["cinsiyet"]
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
	background-image:url(ar.jpg);
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
	margin-top:70px;
	padding-left:15px;
}
.content .girisEkrani{
	width:400px;
	padding-top:20px;
	padding-left:470px;
	align:center;
}
        	
.content .girisEkrani .giris{
	margin-top:30px;
	width:30%;
	height:25px;
	background-color:#3c8dbc;
	color:white;
	border:1;
}

.content .girisEkrani .form-control{
	width:230px;
	height:27px;
	margin-top:20px;
	margin-left:25px;
}

.content .girisEkrani .form-label{
	font-size:20px;
	color:#ec3c33;

}
.content .girisEkrani .form-label1{
	font-size:17px;
	color:#145369;

}
.content .girisEkrani .col{
margin-top:13px;
margin-left:30px;

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
	 <span class="baslik1">Üye Kayıt</span>
	 </div>
	 
        <form action="" method="post">
		      <div class="girisEkrani">
			  
                <div class="float:left;">
                <label for="uyead" class="form-label">*</label>
                <input type="text" class="form-control" name="uyead" placeholder="Ad Soyad" required>
                </div>
				 
				<div class="float:left;">
                <label for="tc" class="form-label">*</label>
                <input type="text" class="form-control" name="tc" placeholder="TC Kimlik" required>
                </div>
           
		        <div class="float:left;">
                <label for="telefon" class="form-label">*</label>
                <input type="text" class="form-control" name="telefon" placeholder="Telefon Numarası" required>
                </div>
				
                <div class="float:left;">
                <label for="mail" class="form-label">*</label>
                <input type="text" class="form-control" name="mail" placeholder="E-posta" required>
                </div>
			   
			    <div class="float:left;">
                <label for="sifre" class="form-label">*</label>
                <input type="password" class="form-control" name="sifre" placeholder="Şifre" required>
                </div>
				
				<div class="col">
                <label for="" class="form-label1">Kadın
                    <input type="radio" name="cinsiyet" value="Kadın">
                </label>
                <label for="" class="form-label1">Erkek
                    <input type="radio" name="cinsiyet" value="Erkek">
                </label>
                </div>
              
            <button type="submit" name="kaydet" class="giris">Kaydet</button>
			</div>
        </form>
	   
	
	 </div>

	 

	  <footer id="altmenu">
	  
	  </footer>
	
</body>
</html>