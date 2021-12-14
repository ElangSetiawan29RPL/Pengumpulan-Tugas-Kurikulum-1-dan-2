<?php 
// menangkap data nama dengan method get
$nama = $_GET['nama'];
$usia = $_GET['usia'];
$jenis_kelamin = $_GET['jenis kelamin'];
$agama = $_GET{'agama'};
$tempat_lahir = $_GET['tempat lahir'];
$tanggal_lahir = $_GET['tanggal lahir'];
$hobi = $_GET['hobi'];
$cita_cita = $_GET['cita - cita'];
$asal_sekolah = $_GET['asal sekolah']
 
// menampilkan data nama
echo "Nama kalian adalah " . $nama;
echo "<br/>";
// menampilkan data usia
echo "Usia kalian adalah " . $usia;
echo "<br/>";
echo "Jenis kelamin kallian adalah" . $jenis_kelamin;
echo "<br/>";
echo "Agama kalian adalah" . $agama;
echo "<br/>";
echo "Tempat lahir kalian adalah" . $tempat_lahir;
echo "<br/>";
echo "tanggal lahir kalian adalah" . $tanggal_lahir;
echo "<br/>"
echo "Hobi kalian adalah" . $hobi;
echo "<br/>";
echo "Cita - cita kalian adalah" . $cita_cita;
echo "<br/>";
echo "Asal sekolah kalian adalah" . $asal_sekolah;
?>

