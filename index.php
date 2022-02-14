<!DOCTYPE html>
<html>
<head>
<title>Trucorp-web-2.0</title>
    <style>
        table {
            border-collapse: collapse;
	    border: 1px solid;
            width: 100%;
            text-align: left;
        }
    </style>
</head>
<body>
<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jabatan</th>
</tr>
<?php
    $conn = new mysqli("192.168.79.128", "root", "1234", "trucorp-web-2.0");
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
    $result = $conn->prepare('SELECT ID, Nama, Alamat, Jabatan FROM users');
    $result->execute();
    $result->bind_result($ID, $Nama, $Alamat, $Jabatan);

    while($row = $result->fetch()) {
        echo
        "<tr>
        <td>".$ID."</td>
        <td>".$Nama."</td>
        <td>".$Alamat."</td>
        <td>".$Jabatan."</td>
        </tr>";
    }
    echo "</table>";
 
    $conn->close();
?>
</table>
</body>
</html>
