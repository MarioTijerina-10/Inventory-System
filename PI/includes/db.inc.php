<?php

$dsn = "sqlsrv:Server=DESKTOP-NQRK101;Database=AdielAutoAire";

try{
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e){
}