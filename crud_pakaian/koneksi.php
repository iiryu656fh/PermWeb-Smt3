<?php

$serverName = "LAPTOP-O7MSCG4B\SQLEXPRESS";
$connectionInfo = [
    "Database" => "crudpakaian"
];

$koneksi = sqlsrv_connect($serverName, $connectionInfo) or die(print_r(sqlsrv_errors(), true));