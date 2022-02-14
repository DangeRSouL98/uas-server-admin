<?php
    $conn = new mysqli("192.168.79.128", "root", "1234", "trucorp-web-2.0");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->prepare('SELECT ID, Nama, Alamat, Jabatan FROM users');
    $result->execute();
    echo $result->get_result()->num_rows;

    $conn->close();
?>
