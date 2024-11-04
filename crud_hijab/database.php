<?php

$serverName = "LAPTOP-O7MSCG4B\SQLEXPRESS";
$connectionInfo = [
    "Database" => "crudhijab"
];

$conn = sqlsrv_connect($serverName, $connectionInfo) or die(print_r(sqlsrv_errors(), true));