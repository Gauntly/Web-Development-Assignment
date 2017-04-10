<?php

$db_user = "root";
$db_host = "127.0.0.1";
$db_password = "";
$db_name = "";


function checksExist($connection)
{
    $selectAllQuery = "SELECT * FROM status";
    $data = mysqli_query($connection, $selectAllQuery);
    if (empty($data)) {
        mysqli_query($connection,"CREATE DATABASE statusDB");
        mysqli_select_db($connection,'StatusDB');
        createTable($connection);
    }
}

function createTable($connection)
{
    $createQuery = "CREATE TABLE status(status_code VARCHAR(5) PRIMARY KEY,
    status VARCHAR(255),
    share int(1),
    status_date VARCHAR(8),
    db_like int(1),
    db_comment int(1),
    db_share int(1))";

    mysqli_query($connection, $createQuery);
}



?>