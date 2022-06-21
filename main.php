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
  position: fixed;
  background:#FFF;
  display:flex;
  align-items:center;
  padding-left:50px;
  box-sizing:border-box;
  color:#234366;
  justify-content:space-between;
}
.header .baslik{
	font-size:30px;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-style: oblique;
	
}
.header .boxes{
  display:flex;
  box-sizing:border-box;
  padding-right:45px;

} 
.header .boxes .box1{
  width:130px;
  height:30px;
  background:#234366 ;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:13px;
  border-radius:10px; 
  transition: all 0.5s;
}
.header .boxes .box1:hover{
  width:140px;
  height:30px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:13px;
  border-radius:10px;
background-color:#24396B;
}

   a {
        color: #fff;
		text-decoration:none
	
    }
.header .boxes .box1 .value .fa-solid{
	padding-right:4px;
	color:#fff;
}

.header .boxes .box2{
  width:140px;
  height:30px;
  background:#234366 ;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:13px;
  border-radius:10px;
  transition: all 0.5s;
}
.header .boxes .box2:hover{
  width:150px;
  height:30px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:13px;
  border-radius:10px;
background-color:#24396B;
}
.header .boxes .box2 .value .fa-solid{
	padding-right:4px;
	color:#fff;
}
.header .boxes .box3{
  width:168px;
  height:30px;
  background:#234366 ;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:13px;
  border-radius:10px;
  transition: all 0.5s;
}
.header .boxes .box3:hover{
  width:175px;
  height:30px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:13px;
  border-radius:10px;
background-color:#24396B;
}
.header .boxes .box3 .value .fa-solid{
	padding-right:2px;
	color:#fff;
}
.header .boxes .box4{
  width:132px;
  height:30px;
  background:#234366 ;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:13px;
  border-radius:10px;
  transition: all 0.5s;
}
.header .boxes .box4:hover{
  width:137px;
  height:30px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:13px;
  border-radius:10px;
background-color: #24396B;
}
.header .boxes .box4 .value .fa-solid{
	padding-right:2px;
	color:#fff;
}
.content .yazi{
	font-size:30px;
	color:#24396B;
	margin-top:30px;
	font-weight: bold;
}
.item{
height:660px;
width:100%;

}
.content{
	background-color:#f4f4f4;
}
.content .kutular{
  display:flex;
  box-sizing:border-box;
  margin-top:40px;
  margin-right:50px;
  
} 
.content .kutular .kutu1{
  width:202px;
  height:400px;
  background:white;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:335px;
  border-radius:10px;
}
.content .kutular .kutu2{
  width:196px;
  height:400px;
  background:white;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:35px;
  border-radius:10px;
}
.content .kutular .kutu3{
  width:205px;
  height:400px;
  background:white;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:35px;
  border-radius:10px;
  
}

.istatistik{
	background-color:#ECF3F8;
}
.yazi1{
	font-size:30px;
	color:#fff;
	margin-top:50px;
	font-weight: bold;
	background-color:#24396B;
	height:100px;
}
.content .kutular1{
  background-color:#24396B;
  display:flex;
  box-sizing:border-box;
  margin-right:50px;
  width:100%;
  height:250px;
  
}
.content .kutular1 .kutua{
  width:200px;
  height:200px;
  background:white;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:200px;
  border-radius:10px;
  background-color:#24396B;
}
.content .kutular1 .kutub{
  width:200px;
  height:200px;
  background:white;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:50px;
  border-radius:10px;
  background-color:#24396B;
}
.content .kutular1 .kutuc{
  width:200px;
  height:200px;
  background:white;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:50px;
  border-radius:10px;
  background-color:#24396B;
}
.content .kutular1 .kutud{
  width:200px;
  height:200px;
  background:white;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-left:50px;
  border-radius:10px;
  background-color:#24396B;
}
#altmenu{
	height:50px;
	background-color:#24396B;
}
.content .kutular1 .kutud .fa-store{
	margin-top:15px;
	font-size:100px;
	color:white;
}
.content .kutular1 .kutua .fa-user{
	margin-top:15px;
	font-size:100px;
	color:white;
}
.content .kutular1 .kutub .fa-school-flag{
	margin-top:15px;
	font-size:100px;
	color:white;
}
.content .kutular1 .kutuc .fa-handshake-angle{
	margin-top:15px;
	font-size:100px;
	color:white;
}
.tedarikyazi{
	font-size:27px;
	color:white;
}
.bilgi1{
	font-size:27px;
	color:white;
	font-weight: bold;
}
.fa-volume-high{
	color:#24396B;
	font-size:50px;
	margin-top:20px;
}
.content .kutular .kutu1 .bil1{
	color:#24396B;
	margin-bottom:20px;
	font-weight: bold;
	font-size:18px;
}
.content .kutular .kutu1 .bil2{
	color:#24396B;
margin-bottom:90px;
font-size:20px;
}
.fa-hand-holding-hand{
	color:#24396B;
	font-size:50px;
	margin-top:20px;
}
.content .kutular .kutu2 .bil1{
	color:#24396B;
	margin-bottom:20px;
	font-weight: bold;
	font-size:18px;
}
.content .kutular .kutu2 .bil3{
	color:#24396B;
    margin-bottom:65px;
    font-size:20px;
}
.fa-shop{
	color:#24396B;
	font-size:50px;
	margin-top:20px;
}
.content .kutular .kutu3 .bil1{
	color:#24396B;
	margin-bottom:10px;
	font-weight: bold;
	font-size:18px;
}
.content .kutular .kutu3 .bil4{
	color:#24396B;
    margin-bottom:48px;
    font-size:19px;
}
</style
</head>
<body>
  
   <div class="header">
    <span class="baslik">İhtiyaç Kutusu</span>
	
<div class="boxes">
  <div class="box1">
          <div class="value">
		  <span><i class="fa-solid fa-arrow-right-to-bracket"></i>
          <a href="giris.php">Giriş Yap</a></span>
          </div> 
       </div>
  <div class="box2">
          <div class="value">
		  <span><i class="fa-solid fa-school-flag"></i>
          <a href="kayit.php">Okul Kaydı</a></span>
          </div> 
       </div>
 <div class="box3">
          <div class="value">
		  <span><i class="fa-solid fa-user"></i>
          <a href="ykayit.php">Yardımsever Kaydı</a></span>
          </div> 
   </div>
    <div class="box4">
          <div class="value">
		  <span><i class="fa-solid fa-store"></i>
          <a href="tkayit.php">Tedarikçi Ol</a></span>
          </div> 
   </div>
</div>
	   
     </div>
	 <div class="content">
	 <div class="item" style="background-image: url(mainn.jpg);">
	 </div>
	 <div class="yazi"><span>Neler Yapılabilir?</span></div>
	 <div class="kutular">
	 
	   <div class="kutu1">
<i class="fa-solid fa-volume-high"></i>
<span class="bil1">İhtiyaç Duyuruları</span>
<span class="bil2">İhtiyacı olan tüm okullar tek bir platformdan ihtiyaçlarını kolay bir şekilde duyurabilir.</span>
          </div>
       <div class="kutu2">
<i class="fa-solid fa-hand-holding-hand"></i>
<span class="bil1">Yardım Etme</span>
<span class="bil3">Yardım etmek isteyenler ihtiyacı olan tüm okullara tek bir platformdan ulaşarak yardım edebilir.</span>
          </div> 	
       <div class="kutu3">
<i class="fa-solid fa-shop"></i>
<span class="bil1">Önerilen Tedarikçilere Ulaşma</span>
<span class="bil4">İhtiyacı olan yerel kırtasiyeler tedarikçi ol kısmından kayıt olabilir ve yardım etmek isteyen kişiler önerilen tedarikçilerden ihtiyaçları karşılayabilir.</span>
          </div> 	
		  
		  
       </div>
	   <div class="yazi1"><span>İstatistikler</span></div>
	   <div class="kutular1">
	   
	   <div class="kutua">
<i class="fa-solid fa-user"></i>
         <span class="bilgi1">100+</span>
          <span class="tedarikyazi">Üye</span>
          </div>
       <div class="kutub">
<i class="fa-solid fa-school-flag"></i>
         <span class="bilgi1">100+</span>
          <span class="tedarikyazi">Okul</span>
          </div> 	
       <div class="kutuc">
<i class="fa-solid fa-handshake-angle"></i>
         <span class="bilgi1">150+</span>
          <span class="tedarikyazi">Yardımlar</span>
          </div> 	
   <div class="kutud">
   		  
<i class="fa-solid fa-store"></i>
         <span class="bilgi1">50+</span>
          <span class="tedarikyazi">Tedarikçiler</span>
          </div> 		  
</div>
	 
</div>

	
	 
	  <nav id="anamenu">
	  
	  </nav>
	  <article id="icerik">
	  
	  </article>
	  <footer id="altmenu">
	  
	  </footer>
	
</body>
</html>