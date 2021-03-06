<?php 

include "function.php";

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$nama = $_SESSION['nama'];

$role = $_SESSION['role'];
$role = $_SESSION['id'];

$id_kelas = $_GET['id_kelas'];
$queryKRS = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'");
$krs = mysqli_fetch_assoc($queryKRS);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Sistem Informasi Udayana</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="index.php">Sistem Perkuliahan</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i>USER: <?= $nama; ?> </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <?php if($role == "1") { ?>
                            <a class="dropdown-item" href="profil_mahasiswa.php">Lihat Profil</a>
                        <?php } elseif($role == "2") { ?>
                            <a class="dropdown-item" href="profil_dosen.php">Lihat Profil</a>
                        <?php } elseif($role == "0") { ?>
                            <a class="dropdown-item" href="profil_admin.php">Lihat Profil</a>
                        <?php } ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="mahasiswa.php"
                                >
                                Daftar Mahasiswa</a
                            >
                            <a class="nav-link" href="dosen.php"
                                >
                                Daftar Dosen</a
                            >
                            <a class="nav-link active" href="kelas.php"
                                >
                                Daftar Kelas</a
                            >
                            <a class="nav-link" href="bimbingan.php"
                                >
                                Daftar Bimbingan</a
                            >
                            <?php if($role == "0") { ?>
                            <a class="nav-link" href="matakuliah.php"
                                >
                                Matakuliah</a>
                            <?php } ?>
                            <?php if($role == "1") { ?>
                            <a class="nav-link" href="krs.php"
                                >
                                KRS</a>
                            <?php } ?>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Mengedit Kelas</h3>
                        <div class="card mb-4">
                            <form form action="function.php?act=editKelas&id_kelas=<?= $id_kelas; ?>" id="buat" method="POST" >
                                <div class="form-group ml-4 py-3 mb-0">
                                    <label for="namaKelas">Nama Kelas</label>
                                    <input type="text" class="form-control col-sm-3" id="namaKelas" name="namaKelas" value="<?= $krs['nama_kelas']; ?>">
                                </div> 
                                <div class="form-group ml-4">
                                    <label for="jamKuliah">Jam Kuliah</label>
                                    <input type="text" class="form-control col-sm-3" id="jamKuliah" name="jamKuliah"  value="<?= $krs['jam_kuliah']; ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="kuotaKelas">Kuota Kelas</label>
                                    <input type="number" class="form-control col-sm-3" id="kuotaKelas" name="kuotaKelas"  value="<?= $krs['kuota_kelas']; ?>">
                                </div>
                                <div class="form-group ml-4 ">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control col-sm-3">
                                        <option value="<?= $krs['status']; ?>"><?= $krs['status']; ?></option>
                                            <option value="aktif">Aktif</option>
                                            <option value="tidak tersedia">Tidak Tersedia</option>
                                    </select>
                                </div>
                                <input type="submit" name="buat_btn" id="buat" class="btn btn-primary ml-4 mb-3" value="Edit Kelas">
                            </form>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Sistem Informasi Udayana 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
