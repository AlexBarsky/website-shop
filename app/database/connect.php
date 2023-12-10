<?php
    $host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'shop';
    $charset = 'utf8';

    $connection = @mysqli_connect($host, $db_user, $db_password, $db_name); // @ - для подавление предупреждений
    mysqli_set_charset($connection, $charset);

    if (!$connection) {
        die('Ошибка при подключении: ' . mysqli_connect_error());
    }
?>