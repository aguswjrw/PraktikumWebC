<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
?>

<html>
<head>    
    <title>Homepage</title>
</head>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nama</th> <th>NIM</th> <th>Jurusan</th> <th>Fakultas</th> <th style="width: 6%">Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['jurusan']."</td>";  
        echo "<td>".$user_data['fakultas']."</td>";    
        echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>