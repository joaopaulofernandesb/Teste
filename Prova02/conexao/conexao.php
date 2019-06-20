<?php

// Informações para conexão
$host = 'ctgplw90pifdso61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$usuario = 'cbglg97ec3qqaoeg';
$senha = 'lfemrxdw2fcag5p4';
$banco = 'sutfp66hu6roru5j';
$dsn = "mysql:host={$host};port=3306;dbname={$banco}";

try 
{
    // Conectando
    $pdo = new PDO($dsn, $usuario, $senha);
} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexão
    die($e->getMessage());
}


