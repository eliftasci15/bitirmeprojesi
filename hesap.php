
<?php
session_start();
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
	background-image:url(hesap.jpg);
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

 table,td{
            border:1px solid #282830;
        }
table{
	
	margin-top:40px;
	margin-left:450px;
    border: 1.5px solid black;
}		
.hesap{
	margin-left:20px;
	margin-top:90px;
	font-size:30px;
	font-weight:bold;
	color:#24396B;
}
.btn-group{
	margin-top:20px;
}
</style>
</head>
<body>
    
<?php if(isset($_SESSION["mail"])&&isset($_SESSION["sifre"]))
            {
				$mail =  $_SESSION['mail'];
            }
?>
<?php 
		include("connect.php"); //INCLUDE CONNECTION
		error_reporting(0); // hide undefine index errors
	$sql="SELECT * FROM uyeler WHERE mail='$mail'";
$sorgu=mysqli_query($db,$sql);
while( $sonuc=mysqli_fetch_object($sorgu) ){
	$uyeno = $sonuc->uyeno;
	$ad=$sonuc->uyead;
	$tc=$sonuc->tc;
	$tel=$sonuc->telefon;
	$email=$sonuc->mail;
	$cinsiyet=$sonuc->cinsiyet;
   // echo 'UyeNO:', $sonuc->uyeno.'<br>','Ad:', $sonuc->uyead.'<br>','TC:', $sonuc->tc.'<br>','Telefon:', $sonuc->telefon.'<br>','Mail:', $sonuc->mail.'<br>','Cinsiyet:', $sonuc->cinsiyet.'<br>'; 
}

?>
<?php 
//if(isset($_GET["islem"]) && $_GET["islem"] == "cikis") {
//	session_destroy();
	// çıkış yap index sayfasına yeniden yönlendir.
//	header("Location: main.php");
//}




?>

   <div class="header">
   <div class="info">
  <span><i class="fa-solid fa-chevron-left"></i>
  
   <a href="ana.php">Geri</a></span>	
   </div>
   
    <span class="baslik">İhtiyaç Kutusu</span>
     </div>
	 <content>
	<div class="hesap"><span>Hesap Bilgilerim</span></div>
	  <table>
        <tr>
            <td style="width: 150px; height: 50px; background-color:#b0c4de;">Üye No</td>
            <td style="width: 300px; height: 50px; background-color:#e6e6fa;"><?php echo $uyeno  ?></td>
        </tr>
        <tr>
            <td style="width: 150px; height: 50px; background-color:#b0c4de;">Adı</td>
            <td style="width: 150px; height: 50px; background-color:#e6e6fa;"><?php echo  $ad;  ?></td>
        </tr>
        <tr>
            <td style="width: 150px; height: 50px; background-color:#b0c4de;">TC</td>
            <td style="width: 150px; height: 50px; background-color:#e6e6fa;"><?php echo  $tc;  ?></td>
        </tr>
		  <tr>
            <td style="width: 150px; height: 50px; background-color:#b0c4de;">Telefon</td>
            <td style="width: 150px; height: 50px; background-color:#e6e6fa;"><?php echo  $tel;  ?></td>
        </tr>
		  <tr>
            <td style="width: 150px; height: 50px; background-color:#b0c4de;">E-posta</td>
            <td style="width: 150px; height: 50px; background-color:#e6e6fa;"><?php echo  $email;  ?></td>
        </tr>
		  <tr>
            <td style="width: 150px; height: 50px; background-color:#b0c4de;">Cinsiyet</td>
            <td style="width: 150px; height: 50px; background-color:#e6e6fa;"><?php echo  $cinsiyet;  ?></td>
        </tr>
    </table>
	 <div class="btn-group">
                        
						<a href="main.php" class="btn btn-danger"> Çıkış Yap</a>
                    </div>
	 </content>

    <footer></footer>
</body>
</html>