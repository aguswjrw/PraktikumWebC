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
    <title> Universitas Udayana - Profile Pengajar </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
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
            <h1 class="h1content">Profile Pengajar</h1>
            <hr/>
            <div class="daftar-pengajar">
                <div class="pengajar">
                    <p class="namapengajar">Pengajar 1</p>
                    <img src="img/pengajar/pengajar.png" alt="">
                    <nav class="biodata">
                        <ul>
                            <li>Nama</li>
                            <li>NO</li>
                            <li>ALAMAT</li>
                            <li>Email</li>
                        </ul>
                        <ul>
                            <li>Agus</li>
                            <li>1708561099</li>
                            <li>Jl Kesana no 5 Denpasar</li>
                            <li>agus19000@gmail.com</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <hr/>
            <div class="daftar-pengajar">
                <div class="pengajar">
                    <p class="namapengajar">Pengajar 2</p>
                    <img src="img/pengajar/pengajar.png" alt="">
                    <nav class="biodata">
                        <ul>
                            <li>Nama</li>
                            <li>NO</li>
                            <li>ALAMAT</li>
                            <li>Email</li>
                        </ul>
                        <ul>
                            <li>Wisnawa</li>
                            <li>170849223</li>
                            <li>Jl Kesana no 6 Denpasar</li>
                            <li>agus19000@gmail.com</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <hr/>

        <div id="clear"></div>
        <div id="footer" <?= ($type == 'admin') ? "style='background-color: LawnGreen'" : "style='background-color: #19e5e6'"; ?>>
            <p>Universitas Udayana</p>
            <p>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</p>
            <p>Email: info@unud.ac.id</p>
        </div>
        
    </div>
</body>
</html>