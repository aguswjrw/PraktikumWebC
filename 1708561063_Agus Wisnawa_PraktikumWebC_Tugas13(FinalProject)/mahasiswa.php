<?php 
    include "function.php";

    $queryMahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY nim asc");
    // $data = mysqli_fetch_assoc($queryMahasiswa);

    if( !isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    // tombol cari
    if(isset($_POST['cari'])) {
        $queryMahasiswa = cari($_POST['keyword']);
    }

    $nama = $_SESSION['nama'];
    $role = $_SESSION['role'];
    $id = $_SESSION['id'];
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
                            <a class="nav-link active" href="mahasiswa.php">Daftar Mahasiswa</a>
                            <a class="nav-link" href="dosen.php">Daftar Dosen</a>
                            <a class="nav-link" href="kelas.php">Daftar Kelas</a>
                            <a class="nav-link" href="bimbingan.php">Daftar Bimbingan</a>
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
                        <h3 class="mt-4">Daftar Mahasiswa</h3>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="" method="POST" >
                                        <input class="form-control col-sm-4 mb-3 ml-auto mr-4 keyword" type="text" placeholder="Pencarian" aria-label="Search" name="keyword" autofocus autocomplete="off">
                                        <button type="submit" name="cari" class="tombol-cari">Cari</button>
                                    </form>
                                    <div class="container">
                                        
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-auto">No</th>
                                                    <?php if($role == "0") { ?>
                                                    <th class="col-sm-auto">Aksi</th>
                                                    <?php } ?>
                                                    <th class="col-sm-auto">NIM</th>
                                                    <th class="col-sm-auto">Nama</th>
                                                    <th class="col-sm-auto">Email</th>
                                                    <th class="col-sm-auto">Alamat</th>
                                                    <th class="col-sm-auto">Status</th>
                                                </tr>
                                            </thead>
                                            <?php $i=1; 
                                            foreach ($queryMahasiswa as $data) : ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <?php if($role == "0") { ?>
                                                    <td><a href="edit_mahasiswa.php?id_mahasiswa=<?= $data['id_mahasiswa']; ?>" class="badge badge-primary ">Edit</a></td>
                                                    <?php } ?>
                                                    <td><?= $data['nim']; ?></td>
                                                    <td><?= $data['nama']; ?></td>
                                                    <td><?= $data['email']; ?></td>
                                                    <td><?= $data['alamat']; ?></td>
                                                    <td><?= $data['status']; ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
        <script src="js/script.js"></script>
    </body>
</html>
