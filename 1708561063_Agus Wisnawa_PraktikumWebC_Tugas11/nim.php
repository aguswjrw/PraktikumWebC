<?php 
    include "koneksi.php";

    $nim    = $_GET['nim'];
    $namalengkap   = $_GET['namalengkap'];
    $kelamin     = $_GET['kelamin'];
    $agama  = $_GET['agama'];
    $cari   = $_GET['cari'];

    if(($nim=="asc")&&($kelamin=="all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            ORDER BY nim ASC
        ");
    }
    else if(($nim=="asc")&&($kelamin=="all")&&($agama<>"all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE agama = '$agama'
            ORDER BY nim ASC
        ");
    }
    else if(($nim=="asc")&&($kelamin<>"all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE kelamin = '$kelamin'
            ORDER BY nim ASC
        ");
    }
    else if(($nim=="asc")&&($kelamin<>"all")&&($agama<>"all")){
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE kelamin = '$kelamin' AND agama = '$agama' 
            ORDER BY nim ASC
        ");
    }
    else if(($nim=="desc")&&($kelamin=="all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            ORDER BY nim DESC
        ");
    }
    else if(($nim=="desc")&&($kelamin=="all")&&($agama<>"all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE agama = '$agama'
            ORDER BY nim DESC
        ");
    }
    else if(($nim=="desc")&&($kelamin<>"all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE kelamin = '$kelamin'
            ORDER BY nim DESC
        ");
    }
    else if(($nim=="desc")&&($kelamin<>"all")&&($agama<>"all")){
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE kelamin = '$kelamin' AND agama = '$agama' 
            ORDER BY nim DESC
        ");
    }
    else{
        echo "tidak ditemukan";
    }
?>
<?php 
    include "koneksi.php";
    $no = 1;
    while($data = mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['namalengkap']; ?></td>
        <td><?php echo $data['kelamin']; ?></td>
        <td><?php echo $data['tempat']; ?></td>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['agama']; ?></td>
        <td><?php echo $data['telp']; ?></td>
        <td><?php echo $data['fakultas']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
    </tr>
<?php } ?>