<?php
 
include "baglan.php";
 
if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `tedarikciler` WHERE `tedarikciler`.`tedarikcino` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
 
    header('Location:index.php');
 
}
 
$sql ="SELECT * FROM tedarikciler";
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
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
	background-color:#f8f9fa;
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
  position: fixed;
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
	
}
.content .baslik1{
    font-size:30px;
	font-family: "Times New Roman", Times, serif;
    color:#145369;
}

.content .bilgi{
	margin-top:60px;
	padding-left:15px;
}
.content .main{
  width:100%;
  height:45px;
  background:#f1f1f1; 
}
.content .main .nav{
  display:flex;
  width:100%;
  align-items:center;
  justify-content:space-between;
  padding:15px;
  box-sizing:border-box;
}
.content .main .nav .dash{
  font-size:22px;
}
.content .main .nav .navigation{
  font-size:12px;
 }
 
.boxes{
	margin-left:130px;
	margin-top:75px;
	width:100%;
	display:flex;
}

.content .boxes .box3{
	width:214px;
	height:220px;
	background-image: radial-gradient(circle at -11.24% 14.64%, #FFEFEF 0%, #9bb6d8 100%);
	margin-top:20px;
	margin-right:25px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:45px;
	padding-left:35px;
	color: white;
    border-radius:20px;
    transition: all 0.7s;	
	border-style:solid;
	border-width:1px;
    box-shadow: 9px 9px 9px #BDD3DE;
}
.content .boxes .box3:hover{
	width:215px;
	height:225px;
	background-image: radial-gradient(circle at -11.24% 14.64%, #FFEFEF 0%, #9bb6d8 100%);
	margin-top:20px;
	margin-right:25px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:45px;
	padding-left:35px;
	color: white;
    border-radius:20px; 
}
.content .boxes .box1{
	width:210px;
	height:220px;
	background-image: radial-gradient(circle at -11.24% 14.64%, #FFEFEF 0%, #9bb6d8 100%);
	margin-top:20px;
	margin-right:25px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	text-align:center;
	padding-top:30px;
	padding-left:35px;
	color: white;
    border-radius:20px; 
	transition: all 0.7s;
	border-style:solid;
	border-width:1px;
    box-shadow: 9px 9px 9px #BDD3DE;
}
.content .boxes .box1:hover{
	width:213px;
	height:224px;
	background-image: radial-gradient(circle at -11.24% 14.64%, #FFEFEF 0%, #9bb6d8 100%);
	margin-top:20px;
	margin-right:25px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:30px;
	padding-left:35px;
	color: white;
    border-radius:20px; 
}
.content .boxes .box2{
	width:210px;
	height:220px;
	background-image: radial-gradient(circle at -11.24% 14.64%, #FFEFEF 0%, #9bb6d8 100%);
	margin-top:20px;
	margin-right:25px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:45px;
	padding-left:23px;
	color: white;
    border-radius:20px;
    transition: all 0.7s;
	border-style:solid;
	border-width:1px;
    box-shadow: 9px 9px 9px #BDD3DE;	

}
.content .boxes .box2:hover{
	width:213px;
	height:225px;
	background-image: radial-gradient(circle at -11.24% 14.64%, #FFEFEF 0%, #9bb6d8 100%);
	margin-top:20px;
	margin-right:25px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:45px;
	padding-left:23px;
	color: white;
    border-radius:20px; 
}
.content .boxes .box4{
	width:210px;
	height:220px;
	background-image: radial-gradient(circle at -11.24% 14.64%, #FFEFEF 0%, #9bb6d8 100%);
	margin-top:20px;
	margin-right:25px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:45px;
	padding-left:28px;
	color: white;
	border-radius:20px; 
	transition: all 0.7s;
	border-style:solid;
	border-width:1px;
    box-shadow: 9px 9px 9px #BDD3DE;
}
.content .boxes .box4:hover{
	width:213px;
	height:225px;
	background-image: radial-gradient(circle at -11.24% 14.64%, #FFEFEF 0%, #9bb6d8 100%);
	margin-top:20px;
	margin-right:25px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:45px;
	padding-left:28px;
	color: white;
    border-radius:20px; 
}
.fa-user{
	margin-top:10px;
	margin-bottom:7px;
	font-size:110px;
	margin-left:22px;
}
.fa-hand-holding-heart{
	font-size:110px;
	margin-left:23px;
}
.fa-handshake-angle{
	font-size:105px;
	margin-right:30px;
}
.fa-hand-holding-hand{
	font-size:100px;
	margin-right:24px;
}
.boxes1{
	margin-left:120px;
	margin-top:60px;
	width:100%;
	display:flex;
}
.content .veriler .boxes1 .box5{
	width:310px;
	height:240px;
	background: linear-gradient(-180deg, #bec9d3 0%, #8ca8e2 98%), radial-gradient(at top left, rgba(255,255,255,0.30) 0%, rgba(0,0,0,0.30) 100%);
 background-blend-mode: screen;
	margin-top:20px;
	margin-right:30px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:25px;
	padding-left:35px;
	font-size:35px;
	color: white;
    border-radius:12px;
	box-shadow: 5px 10px 15px #444444;
}
.content .veriler .boxes1 .box6{
	width:310px;
	height:240px;
	background: linear-gradient(-180deg, #bec9d3 0%, #8ca8e2 98%), radial-gradient(at top left, rgba(255,255,255,0.30) 0%, rgba(0,0,0,0.30) 100%);
 background-blend-mode: screen;
	margin-top:20px;
	margin-right:30px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:25px;
	padding-left:35px;
	color: white;
    border-radius:12px;
	font-size:35px;
	box-shadow: 5px 10px 15px #444444;
}
.content .veriler .boxes1 .box7{
	width:310px;
	height:240px;
	background: linear-gradient(-180deg, #bec9d3 0%, #8ca8e2 98%), radial-gradient(at top left, rgba(255,255,255,0.30) 0%, rgba(0,0,0,0.30) 100%);
 background-blend-mode: screen;
	margin-top:20px;
	margin-right:30px;
	margin-left:33px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:25px;
	padding-left:35px;
	color: white;
    border-radius:12px;
	font-size:35px;
	box-shadow: 5px 10px 15px #444444;
}
#altmenu .altbilgi{
	width:100%;
	height:60px;
}
.link-tik{
  position:absolute; 
  height:213px;
  width:210px;
  top:130px;
  left:160px;
  z-index: 1;
}
.link-tik1{
  position:absolute; 
  height:213px;
  width:210px;
  top:130px;
  left:430px;
  z-index: 1;
}
.link-tik2{
  position:absolute; 
  height:213px;
  width:210px;
  top:130px;
  left:700px;
  z-index: 1;
}
.link-tik3{
  position:absolute; 
  height:215px;
  width:210px;
  top:130px;
  left:970px;
  z-index: 1;
}
   a {
        color: #fff;
		text-decoration:none
	
    }
   a:hover {
        color: #fff;
		text-decoration:none
	
    }
.h{
	margin-left:20px;
	font-size:25px;
}	
.y{
	margin-top:5px;
	margin-left:20px;
	font-size:25px;
}
.z{
	margin-top:12px;
	margin-right:20px;
	font-size:20px;
}
.o{
	margin-top:7px;
	margin-right:20px;
	font-size:21px;
}
.boxes2{
	margin-left:215px;
	margin-top:85px;
	width:100%;
	display:flex;
}
.content .istatistik .boxes2 .box8{
	width:450px;
	height:200px;
	background-image: linear-gradient(to right, #204561 0%, #517fa4 100%);
	margin-top:20px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:25px;
	padding-left:35px;
	color: white;
	font-size:40px;
	border-radius:5px; 
	box-shadow: 5px 10px 15px #444444;
}
.content .istatistik .boxes2 .box9{
	width: 450px;
	height:200px;
    background-image: linear-gradient(to right, #204561 0%, #517fa4 100%);
	margin-top:20px;
	margin-left:35px;
	box-sizing:border-box;
	display:flex;
	justify-content:space-between;
	font-size:22px;
	padding-top:25px;
	padding-left:35px;
	color: white;
	font-size:40px;
	border-radius:5px;
	box-shadow: 5px 10px 15px #444444;
}
.tedarikci{
	font-size:30px;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-style: oblique;
	margin-top:60px;
	color:#234366;
}
.container{
	margin-top:-10px;
}

   	
</style>
</head>
<body>
  
   <div class="header">
   <div class="info">
  <span><i class="fa-solid fa-chevron-left"></i>
   <a href="main.php">Geri</a></span>
  
			
   </div>
    <span class="baslik">İhtiyaç Kutusu</span>
     </div>
	 	<div class="main">
	      <div class="nav">
        <div>
        <span class="dash">Dashboard</span>
        <span>Gösterge Paneli</span>
        </div>
        <div class="navigation">
        <i class="fas fa-tachometer-alt"></i>
        <span>Gösterge Paneli</span>
        <span>></span>
        <span>Dashboard</span>
        </div>
    </div>
	
	</div>
	 
<div class="content">	 

	
<div class="boxes">

<div id="box1" class="box1">

<span><i class="fa-solid fa-user"></i>
    <div class="h"><a href="hesap.php">Hesabım<span class="link-tik"></span></a></span></div>
	 
	
</div>

<div id="box2" class="box2">
<span><i class="fa-solid fa-hand-holding-heart"></i>
    <div class="y"><a href="index.php">Yardım Et<span class="link-tik1"></a></span></div>
         
    </div>

<div id="box3" class="box3">
<span><i class="fa-solid fa-handshake-angle"></i>
    <div class="z"><a href="yardim.php">Yaptığım Yardımlar<span class="link-tik2"></a></span></div>

</div>
<div id="box4" class="box4">
<span><i class="fa-solid fa-hand-holding-hand"></i>
   <div class="o"><a href="tümyardım.php">Yapılan Tüm Yardımlar<span class="link-tik3"></a></span></div>

</div>
</div>
<div class="tedarikci"><span>Önerilen Pazaryerleri</span></div>
   <main>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <table class="table table-hover table-secondary table-striped  table-sm">
                        <thead>
                            <tr>
                                <th>İşletmenin Adı</th>
                                <th>Bulunduğu İl</th>
                                <th>Adresi</th>
								<th>Telefonu</th>
                            </tr>
                        </thead>
                        <tbody>
                      <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><?=$satir['tedarikciad']?></td>
                                <td><?=$satir['sehir']?></td>
								<td><?=$satir['adres']?></td>
								<td><?=$satir['telefon']?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </main>
	
<div class="veriler">
<div class="boxes1">
	<div id="box5" class="box5">

</div>
<div id="box6" class="box6">

       </div>

<div id="box7" class="box7">

</div>
	</div>
	</div>
	
<div class="istatistik">
<div class="boxes2">
	<div id="box8" class="box8">

</div>
<div id="box9" class="box9">

       </div>


	</div>
	</div>
	
</div>
  
	   <footer id="altmenu">
	   <div class="altbilgi">
	   
	   </div>
	  
	  </footer>
	  	
	
</body>
<script>
$(document).ready(function(){
	$.post("topihtiyac.php",
	function(data,status){
		$("#box5").html("Karşılanmayı Bekleyen İhtiyaç Sayısı: "+data);
	});
	
	$.post("topyardim.php",
	function(data,status){
		//console.log("Bounce rate:"+data);
		$("#box6").html("Toplam Karşılanan İhtiyaç Sayısı: "+data);
	});
	$.post("toptedarikci.php",
	function(data,status){
		//console.log("Bounce rate:"+data);
		$("#box7").html("Toplam Önerilen Tedarikçi Sayısı: "+data);
	});
$("#ara").click(function(){
	$.post("ara.php",{
		kelime:$(".arama").val()
	},
	function(data,status){
		console.log(data);
	}
	)
});
});
</script>
<script>
$(document).ready(function(){
	$.post("toplamuye.php",
	function(data,status){
		$("#box8").html("Toplam Yardımsever Sayımız: "+data);
	});
	
	$.post("toplamokul.php",
	function(data,status){
		//console.log("Bounce rate:"+data);
		$("#box9").html("Toplam Üye Okul Sayımız: "+data);
	});
$("#ara").click(function(){
	$.post("ara.php",{
		kelime:$(".arama").val()
	},
	function(data,status){
		console.log(data);
	}
	)
});
});
</script>


</html>