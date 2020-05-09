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
    <title> Universitas Udayana - Tentang </title>
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
            <h1 class="h1content">Tentang Universitas Udayana</h1>
            <img src="img/udayana.jpg" alt="" height="150px" width="300px">
            <p class="pcontent">Cikal bakal Unud adalah Fakultas Sastra Udayana cabang Universitas Airlangga yang diresmikan oleh P. J. M. Presiden Republik Indonesia Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Priyono pada tanggal 29 September 1958 sebagaimana tertulis pada Prasasti di Fakultas Sastra Jalan Nias Denpasar. 
            Universitas Udayana secara sah berdiri pada tanggal 17 Agustus 1962 dan merupakan perguruan tinggi negeri tertua di daerah Provinsi Bali. Sebelumnya, sejak tanggal 29 September 1958 di Bali sudah berdiri sebuah Fakultas yang bernama Fakultas Sastra Udayana sebagai cabang dari Universitas Airlangga Surabaya. Fakultas Sastra Udayana inilah yang merupakan embrio dari pada berdirinya Universitas Udayana. Berdasarkan Surat Keputusan Menteri PTIPNo.104/1962, tanggal 9 Agustus 1962, Universitas Udayana secara syah berdiri sejak tanggal 17 Agustus 1962. Tetapi oleh karena hari lahir Universitas Udayana jatuh bersamaan dengan hari Proklamasi Kemerdekaan RepublikIndonesia maka perayaan Hari Ulang Tahun Universitas Udayana dialihkan menjadi tanggal 29 September dengan mengambil tanggal peresmian Fakultas Sastra yang telah berdiri sejak tahun 1958.</p>
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