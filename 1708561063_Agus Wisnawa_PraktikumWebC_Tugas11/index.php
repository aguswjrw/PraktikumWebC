<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<style>
    	body {
			background-image: url("bg.jpg");
			margin: 0;
			padding: 0;
		}
		h1 {
			font-family: Comic Sans MS;
			color: rgba(255,255,255,1);
			font-style: bold;
			font-size: 38px;
			text-align: center;
		}
		h2 {
			font-family: Comic Sans MS;
			color: rgba(255,255,255,1);
			font-style: bold;
			text-align: center;
			font-size: 20px;
			margin-top: 1px;
		}
		a {
			font-family: Comic Sans MS;
			font-size: 20px;
			color: rgba(255,255,255,1);
		}
		.header {
			height:50px;
			background-color:rgba(2,2,2,0.8);
			padding-top:10px;
			padding-right: 20px;
			text-align: right;
		}
		.isi {
			height:552px;
		}
		.formkot {
			width:90%;
			padding:20px;
			margin-left:50px;
			border-radius: 20px;
		}
		.btn {
			margin-top: 5px;
			width: 80%;
			height:30px;
			margin-left: 10%;
			text-align: center;
			font-size: 14px;
			font-family: 'Open Sans',sans-serif;
			font-weight: bold;
			letter-spacing: 0;
			-webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
			-moz-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
			box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
			color: #fff;
			background-color: #f2672e;
			text-shadow: none;
			text-transform: uppercase;
			border: none;
			cursor: pointer;
			position: relative;
			margin-bottom: 20px;
			-webkit-animation: shadowFadeOut 0.4s;
			-moz-animation: shadowFadeOut 0.4s;
			border-radius: 9px;
		}
		.btn:hover,.btn:focus{
  			color: #fff;
  		-webkit-box-shadow: inset 0px 54px 0px 0px rgba(204,86,15,1);
  		-moz-box-shadow:    inset 0px 54px 0px 0px rgba(204,86,15,1);
  		box-shadow:         inset 0px 54px 0px 0px rgba(204,86,15,1);
  		-webkit-animation: shadowFade 0.4s;
  		-moz-animation: shadowFade 0.4s;
		}
		#select {
			opacity: 1;
			color: rgba(255,255,255,1);
		}
		.select::-webkit-input-placeholder{
			text-align: center;
			font-family: Comic Sans MS;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(2,2,2,1);
		}
		.select {
			width: 8%;
			height: 30px;
			text-align: center;
			font-family: Comic Sans MS;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(2,2,2,1);
			background-color: rgba(255,255,255,1);
			padding-left: 8px;
		}	
		.tabel{
			width: 100%;
		}
		.tabel th {
			background-color: rgba(66,62,62,1);
			text-align: center;
			color: rgba(255,255,255,1);
			padding: 1em;
			font-family: Comic Sans MS;
			font-size: 15px;
		}
		.tabel td {
			border-bottom: 1px solid #ddd;
			padding: 1em;
			font-family: Comic Sans MS;
			font-size: 10px;
		}
		.tabel tr:nth-child(even) {
			background-color: rgba(173,173,173,1);
			font-family: Comic Sans MS;
			font-size: 10px;
		}
		.tabel tr:nth-child(odd) {
			background-color: rgba(255,255,255,1);
			font-family: Comic Sans MS;
			font-size: 10px;
		}
	</style>
</head>
<body>
<div class="isi">
<h1>Data Mahasiswa</h1>
<div class="formkot">
<b><a>NIM</a></b>
    <select id="nim" class="select">
        <option value="asc"></option>
        <option value="asc">Urutkan ascending</option>
        <option value="desc">Urutkan descending</option>
    </select>
<b><a>Nama</a></b>
    <select id="namalengkap" class="select">
        <option value="asc"></option>
        <option value="asc">Urutkan dari a-z</option>
        <option value="desc">Urutkan dari z-a</option>
    </select>
<b><a>Jenis Kelamin</a></b>
	<select id="kelamin" class="select">
        <option value="all"></option>
        <option value="Perempuan">Perempuan</option>
        <option value="Laki-laki">Laki-laki</option>
    </select>
<b><a>Agama</a></b>
    <select id="agama" class="select">
        <option value="all"></option>
        <option value="Islam">Islam</option>
        <option value="Protestan">Protestan</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Kong Hu Cu">Kong Hu Cu</option>   
    </select>
<b><a>Pencarian</a></b>
    <input type="text" class="select" id="cari" style="width:225px;" placeholder=""><br><br>
<?php

// koneksi
$koneksi = mysqli_connect("localhost","root","","modul10") or die(mysqli_error());


	echo "<table class='tabel'>";
	echo "<tr>
			<th>No.</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Aalamat</th>
			<th>Agama</th>
			<th>No. Telp.</th>
			<th>Fakultas</th>
			<th>Jurusan</th>
		  </tr>";?>
	<tbody id="tabel">
	<?php
	$sql = "SELECT * FROM mahasiswa";
	$query = mysqli_query($koneksi, $sql);
	$no = 1;
	while($data = mysqli_fetch_array($query)){?>
		
			<tr>
				<td style="text-align:center"><?php echo $no ?></td>
				<td style="text-align:center"><?php echo $data['nim']; ?></td>
				<td><?php echo $data['namalengkap']; ?></td>
				<td style="text-align:center"><?php echo $data['kelamin']; ?></td>
				<td><?php echo $data['tempat']; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td style="text-align:center"><?php echo $data['agama']; ?></td>
				<td><?php echo $data['telp']; ?></td>
				<td style="text-align:center"><?php echo $data['fakultas']; ?></td>
				<td style="text-align:center"><?php echo $data['prodi']; ?></td>
			</tr>
		<?php
		$no++;
	}
	echo "</table>";?></tbody>
 
</div></div></div><br><br>
</body>
<script src="jquery.js"></script>
    <!-- Pencarian -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#cari").keyup(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var kelamin    = $("#kelamin").val();
          var agama = $("#agama").val();
          var namalengkap  = $("#namalengkap").val();
          if (cari != ""){
            $("#tabel").html("<tr><td colspan=10></td></tr>") 
            $.ajax({
              type:"get",
              url:"key.php",
              data:"cari="+cari+"&nim="+nim+"&kelamin="+kelamin+"&agama="+agama+"&namalengkap="+namalengkap,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          }
          else
          {
            $.ajax({
              url:"key.php",
              data:"cari="+cari+"&nim="+nim+"&kelamin="+kelamin+"&agama="+agama+"&namalengkap="+namalengkap,
              cache: false,
              success: function(msg){
                $("#tabel").html(msg);
              }
            });
          }
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#agama, #kelamin").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var kelamin    = $("#kelamin").val();
          var agama = $("#agama").val();
          var namalengkap  = $("#namalengkap").val();
          $("#tabel").html("<tr><td colspan=10></td></tr>")  
          $.ajax({
              type:"get",
              url:"filter.php",
              data:"cari="+cari+"&nim="+nim+"&kelamin="+kelamin+"&agama="+agama+"&namalengkap="+namalengkap,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nama -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#namalengkap").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var kelamin    = $("#kelamin").val();
          var agama = $("#agama").val();
          var namalengkap  = $("#namalengkap").val();
          $("#tabel").html("<tr><td colspan=10></td></tr>")  
          $.ajax({
              type:"get",
              url:"nama.php",
              data:"cari="+cari+"&nim="+nim+"&kelamin="+kelamin+"&agama="+agama+"&namalengkap="+namalengkap,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nim -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nim").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var kelamin    = $("#kelamin").val();
          var agama = $("#agama").val();
          var namalengkap  = $("#namalengkap").val();
          $("#tabel").html("<tr><td colspan=10></td></tr>")  
          $.ajax({
              type:"get",
              url:"nim.php",
              data:"cari="+cari+"&nim="+nim+"&kelamin="+kelamin+"&agama="+agama+"&namalengkap="+namalengkap,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
</html>
