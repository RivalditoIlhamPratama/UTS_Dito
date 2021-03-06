<!--Rivaldito Ilham Pratama -->
<!--MI-1F-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CAFE MANG OTID</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style media="screen">
		  *{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	body{
		background="cafe.jpg";
	}
	.carosel{
		width: 700px;
		position: absolute;
		transform: translate(-50%,-50%);
		top: 53%;
		left: 50%;
		overflow: hidden;
		border: 10px solid #ffffff;
		border-radius: 8px;
		box-shadow: 10px 25px 30px rgba(0,0,0,0.3);
	}
	.wrapper{
		width: 100%;
		display: flex;
		animation: slide 10s infinite;
	}
	@keyframes slide{
		0%{
			transform: translateX(0);
		}
		25%{
			transform: translateX(0);
		}
		30%{
			transform: translateX(-100%);
		}
		50%{
			transform: translateX(-100%);
		}
		55%{
			transform: translateX(-200%);
		}
		75%{
			transform: translateX(-200%);
		}
		80%{
			transform: translateX(-300%);
		}
		100%{
			transform: translateX(-300%);
		}
	}
	img{
		width: 100%;
	}
</style>
		
<body background="cafe.jpg">
	<div class="header">
		<div class="navi">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="CV.html">BIODATA PEMILIK</a></li>
				<li><a href="Profile.html">PROFIL MAKANAN</a></li>
				<li><a href="order.php">PEMESANAN</a></li>				
			</ul>
		</div>
	</div>
	
	<div class="carosel">
		<div class="wrapper">
			<img src="https://arsitagx-master-article.s3.ap-southeast-1.amazonaws.com/article-photo/396/Sekilas-Tentang-Desain-Restoran-8.jpeg">
			<img src="https://arsitagx-master.s3.ap-southeast-1.amazonaws.com/img_medium/1396/485/3443/photo-avec-moi-restaurant-avec-moi-restaurant-desain-arsitek-oleh-fine-team-studio.jpeg">
			<img src="https://arsitagx-master.s3.ap-southeast-1.amazonaws.com/img_large/1396/485/3441/photo-avec-moi-restaurant-avec-moi-restaurant-desain-arsitek-oleh-fine-team-studio.jpeg">
			<img src="https://arsitagx-master-article.s3-ap-southeast-1.amazonaws.com/article-photo/333/Arsitag-Januari-04-Foto-3.jpeg">
		</div>		
	</div>
	
	<div class="left">
		<h3 align="center">LOKASI</h3>
		Jalan R.A Kartini No 01, RT: 02, RW: 06
	</div>
					
	<div class="middle">
		<h4 align="center">SELAMAT DATANG DI CAFE MANG OTID</h4>
		<hr>
		Cafe Mang Otid merupakan Cafe yang terletak di Jawa Timur khususnya di di daerah Kabupaten Probolinggo. Nama Mang Otid sendiri diambil dari nama Paggilannya Yaitu Dito. Istilah yang berasal dari bahasa Perancis, yaitu Cafe. 
		Secara umum Cafe memiliki arti minuman kopi. Cafe dalam Kamus Besar Bahasa Indonesia memiliki arti tempat makan atau rumah makan. 
		Menurut Ensiklopedia Umum berarti tempat yang digunakan untuk menyajikan makanan dan minuman atau juga tempat yang digunakan untuk makan. 
		Cafe menurut Dictionary Of Language and Culture oleh Longman merupakan sebuah tempat makan kecil yang melayani pengunjungnya dengan minuman dan makanan kecil, 
		terutama digunakan untuk beristirahat sejenak sambil menikmati waktu.
	</div>
	
	<div class="right">
		<h3 align="center">QUOTES COFEE</h3>
		"Kuat lakoni, ora kuat tinggal ngopi". (Kuat ya dijalani, nggak kuat tinggal ngopi saja)"
	</div>
		
	<div class="footer">
		<p align="center">Copyright &copy; Cafe Mang Otid <p>
	</div>

</body>
 
</html>