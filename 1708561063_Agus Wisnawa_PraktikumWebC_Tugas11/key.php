<?php 
    include "koneksi.php";

    $nim        = $_GET['nim'];
    $namalengkap       = $_GET['namalengkap'];
    $kelamin    = $_GET['kelamin'];
    $agama      = $_GET['agama'];
    $cari       = $_GET['cari'];

    if(($kelamin=="all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE namalengkap LIKE '%$cari%' OR nim LIKE '%$cari%'
        ");
    }
    else if(($kelamin=="all")&&($agama<>"all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE agama = '$agama' AND (namalengkap LIKE '%$cari%' OR nim LIKE '%$cari%') 
        ");
    }
    else if(($kelamin<>"all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE kelamin = '$kelamin' AND (namalengkap LIKE '%$cari%' OR nim LIKE '%$cari%') 
        ");
    }
    else{
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE kelamin = '$kelamin' AND agama = '$agama' AND (namalengkap LIKE '%$cari%' OR nim LIKE '%$cari%') 
        ");
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