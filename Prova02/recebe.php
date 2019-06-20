<?php



require_once('conexao/conexao.php');


try{


    $name = filter_var($_POST['name']);
    $sobrenome = filter_var($_POST['sobrenome']);
    $cpf = filter_var($_POST['cpf']);
    $email = filter_var($_POST['email']);
    $password = sha1(md5($_POST['password']));
    $meuconvite = sha1(md5($_POST['meuconvite']));







    $insert = $pdo->prepare("INSERT INTO users (name,sobrenome,cpf,email,password,meuconvite) VALUES (:name, :sobrenome, :cpf, :email, :password, :meuconvite) ");

    $insert->bindParam(':name', $name);
    $insert->bindParam('sobrenome', $sobrenome);
    $insert->bindParam('cpf', $cpf);
    $insert->bindParam('email', $email);
    $insert->bindParam('password', $password);
    $insert->bindParam('meuconvite', $meuconvite);


    $insert->execute();

    header("location: index.php");

} catch (PDOException $erro){




    echo 'Erro:' .$erro->getMessage();


}

?>

?>


