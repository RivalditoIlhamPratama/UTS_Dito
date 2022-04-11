<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CAFE MANG OTID</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<div class="navi">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="Cv.html">BIODATA</a></li>
				<li><a href="Profil.html">PROFIL</a></li>
				<li><a href="order.php">PEMESANAN</a></li>				
			</ul>
		</div>
	</div>
	
	<?php
		if (ISSET($_POST['submit'])){
			$id_pembeli=@$_POST['id_pembeli'];
			$nama_pembeli=@$_POST['nama_pembeli'];
			$status_pembeli=@$_POST['status_pembeli'];
			$menu=@$_POST['menu'];
			$jml_pesanan=@$_POST['jml_pesanan'];
			
		if ($status_pembeli=="member"){
			if($jml_pesanan==1){
				$diskon=5;
			}elseif($jml_pesanan > 1 && $jml_pesanan < 4){
				$diskon=7;
			}elseif($jml_pesanan > 3){
				$diskon=10;}
		}else{
			if($jml_pesanan>0 && $jml_pesanan < 4 ){
				$diskon=1;
			}elseif($jml_pesanan > 3 && $jml_pesanan < 6){
				$diskon=5;
			}elseif($jml_pesanan > 5){
				$diskon=5;
			}
		}	
		
		if ($menu=="Geprek"){
			$nominal=25000;
		}elseif($menu=="Nasi Goreng"){
			$nominal=18000;
		}elseif($menu=="Hotdog"){
			$nominal=20000;
		}else{
			$nominal=10000;
		}
		$total=$nominal*$jml_pesanan;
		$potongan= $total*$diskon/100;
		$bayar= $total-$potongan;
		
		
		}
	?>
	<h4 align="center">DETAIL PESANAN</h4>
	<table style="margin-left:auto;margin-right:auto" class="table1">
		<tr>
			<td>Nama Member</td>
			<td><?php echo $nama_pembeli?></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><?php echo $status_pembeli?></td>
		</tr>
		<tr>
			<td>Pesanan</td>
			<td><?php echo $menu?></td>
		</tr>
		<tr>
			<td>Harga Porsi</td>
			<td><?php echo "RP. ".$nominal?></td>
		</tr>
		<tr>		
			<td>Jumlah Pesanan</td>
			<td><?php echo $jml_pesanan?></td>
		</tr>
		<tr>
			<td>Total</td>
			<td><?php echo "RP. ".$total?></td>
		</tr>
		<tr>
			<td>Diskon</td>
			<td><?php echo $diskon. "%"?></td>
		</tr>	
		<tr>
			<th>Total Bayar</th>
			<th><?php echo "RP. ".$bayar?></th>
		</tr>
	</table>
	<br>
	<br>
	
	<center><a href="order.php"><button>KEMBALI KE MENU ORDER</button></a><center>
	
		
</body>
</html>