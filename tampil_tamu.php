<?php
$name = $_GET["NamaLengkap"];
$jenisorderan = $_GET["JenisOrderan"];
$tempatduduk = $_GET["TempatDuduk"];
$nomortelepon = $_GET["NomorTelepon"];
$alamat = $_GET["Alamat"];
$chicken = $_GET["Chicken"];
$ayamgoreng = $_GET["Ayam_Goreng"];
$ayamgeprek = $_GET["Ayam_Geprek"];
$ayambakar = $_GET["Ayam_Bakar"];
$igasapibakarrica = $_GET["Iga_Sapi_Bakar_Rica"];
$sopbuntut = $_GET["Sop_Buntut"];
$kepiting = $_GET["Kepiting"];
$icejuice = $_GET["Ice_Juice"];
$coffe = $_GET["Coffee"];
$sususodagembira = $_GET["Susu_Soda_Gembira"];

echo "<center><font color=lavender><h3>Selamat Datang ".$name;
echo "<br> anda memilih untuk ".$jenisorderan;
echo "<br> jika anda makan disini maka tempat duduk anda ada di ".$tempatduduk;
echo "<br> nomor telepon anda adalah : ".$nomortelepon;
echo "<br> dan akan segera diantar ke alamat tujuan jika anda memilih pesan antar di alamat : ".$alamat;
echo "<br>pesanan anda adalah";
echo "<br>Chicken...............................: ".$chicken;
echo "<br>Ayam Goreng.....................: ".$ayamgoreng;
echo "<br>Ayam Geprek.....................: ".$ayamgeprek;
echo "<br>Ayam Bakar.......................: ".$ayambakar;
echo "<br>Iga Sapi Bakar Rica..........: ".$igasapibakarrica;
echo "<br>Sop Buntut.........................: ".$sopbuntut;
echo "<br>Kepiting..............................: ".$kepiting;
echo "<br>Ice Juice..............................: ".$icejuice;
echo "<br>Coffee..................................: ".$coffe;
echo "<br>Susu Soda Gembira...........: ".$sususodagembira;
?>

<body background="img/full_size.jpg"></body>