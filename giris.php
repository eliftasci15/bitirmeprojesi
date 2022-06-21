<?php
include("connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{
	$mail = $_POST['mail'];  //fetch records from login form
	$sifre = $_POST['sifre'];
	
	if(!empty($_POST["submit"]))   // if records were not empty
     {
	$loginquery ="SELECT * FROM uyeler WHERE mail='$mail' && sifre='$sifre'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                                    	$_SESSION["uyeno"] = $row['u_id']; // put user id into temp session
										 header("refresh:1;url=ana.php"); // redirect to index.php page
	                            } 
							else
							    {
                                      	$message = "Geçersiz E-posta veya Şifre!"; // throw error
                                }
	 }
	
	
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

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
	background-image:url(arkas.jpg);
	font-family:Arial, "Helvatica Neune", Helvatica, sans-serif;
	color:#646464;
	line-height:1.5;
	font-style:normal;
	font-variant:normal;
	font-weight:normal;
	text-align:center;
	text-decoration:none;

}

.content .baslik1{
    font-size:55px;
	font-family: "Times New Roman", Times, serif;
    color:#234366;
}
.content .bilgi{
	margin-top:100px;
	padding-right:770px;
	
}
.content .girisEkrani{
	display:flex;
	flex-direction:column;
	align-items:center;
	justify-content: center;
	background-color:red;
	width:360px;
	display:flex;
	flex-direction:column;
	padding-top:25px;
	padding-left:100px;
	background-color:white;
}

.content .girisEkrani #eposta{
	margin-top:30px;
	width:80%;
	height:25px;
	
}
.content .girisEkrani #sifre{
	margin-top:30px;
	width:80%;
	height:25px;
}
.content .girisEkrani #giris{
	margin-top:30px;
	width:30%;
	height:25px;
	background-color:#234366;
	color:white;
	border:0;
	margin-bottom:15px;
}
.content .girisEkrani .girisYazi{
	margin-top:15px;
}
.content .divler{
	width: 170px;
    height: 50px;
	display: flex;
	justify-content: space-between;
	margin-left:170px;
	margin-top:40px;
	color:#0e3543;
}
.content .divler .okul .a{
	font-size:19px;
	margin-left:25px;
	color:#234366;
	display: inline-block;
	padding-bottom: 0.25rem;
	position: relative;
}
.content .divler .okul .a::before{
	content:"";
	position: absolute;
	left: 0;
	bottom: 0;
	width: 0;
	height: 2px;
	background-color:#234366;
	transition: width 0.25s ease-out;
}
.content .divler .okul .a:hover::before{
	width:100%;
}
.content .divler .yardimci .b{
	margin-right:30px;
	font-size:19px;
	color:#234366;
	display: inline-block;
	padding-bottom: 0.25rem;
	position: relative;
}
.content .divler .yardimci .b::before{
	content:"";
	position: absolute;
	left: 0;
	bottom: 0;
	width: 0;
	height: 2px;
	background-color:#234366;
	transition: width 0.25s ease-out;
}
.content .divler .yardimci .b:hover::before{
	width:100%;
}
.content .divler .yardimci .fa-user{
    color:#234366;	
	font-size:20px;
	margin-right:20px;
}
.content .divler .okul .fa-school-flag{
    color:#234366;	
	font-size:20px;
	margin-left:25px;
}
.content .divler .tedarikci .fa-store{
    color:#3c8dbc;	
	font-size:20px;
	margin-left:25px;
}
.content .divler .tedarikci .c{
	margin-left:30px;
	font-size:17px;
	color:#3c8dbc;
	display: inline-block;
	padding-bottom: 0.25rem;
	position: relative;
}
.content .divler .tedarikci .c::before{
	content:"";
	position: absolute;
	left: 0;
	bottom: 0;
	width: 0;
	height: 2px;
	background-color:#3c8dbc;
	transition: width 0.25s ease-out;
}
.content .divler .tedarikci .c:hover::before{
	width:100%;
}
</style>

</head>
<body>
  

	 <div class="content">
	
	
	 <div class="bilgi">
	 <span class="baslik1">İhtiyaç Kutusu</span>
	 </div>
	 
	 <div class="divler">
    <div class="yardimci">
	 <i class="fa-solid fa-user"></i>
	 <a class="b" href="giris.php">Yardımsever</a></span>
	 </div>
	 <div class="okul">
	 <i class="fa-solid fa-school-flag"></i>
	 <a class="a" href="ogiris.php">Kurum</a></span>
	 </div>
	 </div>
	 

  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<!-- Form Module-->
<div class="module form-module">

  <div class="girisEkrani">
<label class="girisYazi">Hoş Geldiniz</label>

	  <span style="color:blue;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" id="eposta" placeholder="E-posta"  name="mail"/>
      <input type="password" id="sifre" placeholder="Şifre" name="sifre"/>
      <input type="submit" id="giris" name="submit" value="Giriş" />
    </form>
  </div>
  
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

	 
	 </div>
	 

	  <footer id="altmenu">
	  
	  </footer>
	  <?php
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $_SESSION['mail']=$_POST['mail'];

 $_SESSION['sifre']=$_POST['sifre'];

 }
 ?>
</body>
</html>