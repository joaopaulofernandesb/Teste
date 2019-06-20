<?php


require_once('conexao/conexao.php');


//header('Location: index.php');

try {
    $stmt = $pdo->query("SELECT * FROM wallet  ");

    // $consulta = $conexao->query("SELECT * FROM venda  ORDER BY nome ASC");


    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {


        echo $linha[saldo];

    }


} catch (PDOExceptio $erro) {

    echo $erro->getMessage();

}


?>