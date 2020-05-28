<?php 
require 'koneksi.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$nama = $_SESSION["username"];
$type = $_SESSION["role"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Universitas Udayana</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container" >
        <div id="banner">
            <img src="img/udayana.jpg" alt="">
            <div id="bannertextbox">
                <p>Universitas Udayana</p>
            </div>
        </div>
        <div id="sidebar">
            <div id="logobox" <?= ($type == 'admin') ? "style='background-color: LawnGreen'" : "style='background-color: #19e5e6'"; ?>>
                <img src="img/logo.png" alt="">
            </div>
            <div id="popular" <?= ($type == 'admin') ? "style='background-color: LawnGreen'" : "style='background-color: #19e5e6'"; ?>>
                <p>Artikel Populer</p>
            </div> 
            <div id="popularlist">
                <ul>
                    <li><a href="#">Desain Web</a></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">Lain-lain</a></li>
                    <li><a href="logout.php">Logout</a></li>

                </ul>
            </div>
        </div>
        <div id="menu" <?= ($type == 'admin') ? "style='background-color: LawnGreen'" : "style='background-color: #19e5e6'"; ?>>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="about.php">Tentang Udayana</a></li>
                <li><a href="profile.php">Profil Pengajar</a></li>
                <li><a href="contact.php">Kontak</a></li>
                <li><a href=""><?= $nama; ?></a></li>
            </ul>
        </div>
        <div id="content">
            <h1 class="h1content">Selamat Datang <?= $nama; ?> di Website Universitas Udayana</h1>
            <h1 class="h1content">Berita</h1>
            <div class = "news">
                <img src="img/Rapat.jpg" alt="">
                <p class="newshead">Rapat Rektor</p>
                <p class="pcontent">Kapolda Bali Irjen Pol. Petrus R. Golose bersama jajaran bertemu Rektor Unud Prof. A.A Raka Sudewi di Gedung Rektorat Kampus Jimbaran, Senin (30/3/2020). Turut hadir mendampingi Rektor, Wakil Rektor Bidang Perencanaan Kerja Sama dan Informasi, Dekan FMIPA dan Wakil Dekan serta Koorprodi.....</p>
                <p> <a href="" style="text-decoration: underline;" >baca selengkapnya.......</a></p>
            </div>
        </div>
        <div id="clear"></div>
        <div id="footer" <?= ($type == 'admin') ? "style='background-color: LawnGreen'" : "style='background-color: #19e5e6'"; ?>>
            <p>Universitas Udayana</p>
            <p>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</p>
            <p>Email: info@unud.ac.id</p>
        </div>
        
    </div>
</body>
</html>