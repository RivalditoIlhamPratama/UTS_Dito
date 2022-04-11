<!--Rivaldito Ilham Pratama -->
<!--MI-1F-->
<html>
    <head>
		<meta charset="UTF-8">
        <title>Biodata</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

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
        <link rel="stylesheet" type="text/css" href="stylelogin.css">
        <div class="container">
          <h1>KASIR CAFE MANG OTID</h1>
            <form action = "post-method.php" method = "POST">
                <label>ID Pembeli</label><br>
                <input type="text" name="id_pembeli" placeholder="Masukkan ID Pembeli"><br>
                <label>Nama Pembeli</label><br>
                <input type="text" name="nama_pembeli" placeholder="Masukkan Nama Pembeli"><br>
				<label>Status Pembeli</label><br><br>
                <input type="radio" name="status_pembeli" value="member"><font color="grey">Member</font>
				<input type="radio" name="status_pembeli" value="non_member"><font color="grey">Non-Member</font><br><br>
				<label>Menu Makanan</label><br>
				<select id="menu" name="menu">
				  <option value="Geprek">Geprek</option>
				  <option value="Nasi Goreng">Nasi Goreng</option>
				  <option value="Mie Super">Mie Super</option>
				  <option value="Jamu">Jamu</option>
				</select> <br>
				<label>Jumlah Pesanan</label><br>
				<input type="number" name="jml_pesanan" placeholder="Masukkan Jumlah Pesanan"><br><br>
                <input type = "submit" name = "submit" value = "CETAK">
			</form>
        </div>
		</body>
	