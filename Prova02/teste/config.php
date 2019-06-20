<?php
//saldo

require_once('conexao/conexao.php');


//header('Location: index.php');

try {
    $stmt = $pdo->query("SELECT * FROM wallet  ");



    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {


         $data = $linha[data];


    }


} catch (PDOExceptio $erro) {

    echo $erro->getMessage();

}


?>