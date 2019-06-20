
<?php



require_once('conexao/conexao.php');


try{


    $entrada = filter_var($_POST['entrada']);
    $data = filter_var($_POST['data']);
    $usuario  = filter_var($_POST['usuario']);
    $operacao = filter_var($_POST['operacao']);
    $cpfdestinatario = filter_var($_POST['cpfdestinatario']);








    $insert = $pdo->prepare("INSERT INTO wallet (entrada,data,usuario,operacao,cpfdestinatario) VALUES (:entrada, :data, :usuario, :operacao, :cpfdestinatario) ");

    $insert->bindParam(':entrada', $entrada);
    $insert->bindParam('data', $data);
    $insert->bindParam('usuario', $usuario);
    $insert->bindParam('operacao', $operacao);
    $insert->bindParam('cpfdestinatario', $cpfdestinatario);

    $insert->execute();

    header("location: dash.php");

} catch (PDOException $erro){




    echo 'Erro:' .$erro->getMessage();


}

?>










