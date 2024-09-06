<?php

    $dsn = 'mysql:host=DB;dbname=' . getenv('MYSQL_DATABASE'); // Sử dụng tên dịch vụ MySQL từ docker-compose
    $user = getenv('MYSQL_USER'); // Tên người dùng MySQL
    $pass = getenv('MYSQL_PASSWORD'); // Mật khẩu MySQL
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );

    try {
        $con = new PDO($dsn, $user, $pass, $option);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'Failed To Connect: ' . $e->getMessage();
    }
?>
