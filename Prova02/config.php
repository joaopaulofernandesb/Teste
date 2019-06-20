
<?php
//saldo

require_once('conexao/conexao.php');


//header('Location: index.php');

try {
    $stmt = $pdo->query("SELECT sum(entrada) as total FROM wallet  WHERE `operacao` LIKE 'deposito' ");



    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {


        $saldo = $linha['total'];


    }


} catch (PDOExceptio $erro) {

    echo $erro->getMessage();

}


?>
<?php
//deposito

require_once('conexao/conexao.php');


//header('Location: index.php');

try {
    $stmt = $pdo->query("SELECT sum(entrada) as saida FROM wallet  WHERE `operacao` LIKE 'saque'  ");



    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {


        $saque = $linha['saida'];


    }


} catch (PDOExceptio $erro) {

    echo $erro->getMessage();

}



?>
<?php
//deposito

require_once('conexao/conexao.php');


//header('Location: index.php');

try {
    $stmt = $pdo->query("SELECT sum(entrada) as transfer FROM wallet  WHERE `operacao` LIKE 'transferencia'  ");



    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {


        $transfer = $linha['transfer'];


    }


} catch (PDOExceptio $erro) {

    echo $erro->getMessage();

}



?>