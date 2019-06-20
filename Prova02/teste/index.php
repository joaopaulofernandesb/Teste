<!-- <?php
include_once 'config.php';
?> -->
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CSS Timeline for Giggles</title>
  
  
  
      <link rel="stylesheet" href="./style.css">

  
</head>

<body>



<?php
//saldo

require_once('conexao/conexao.php');


//header('Location: index.php');

try {
    $stmt = $pdo->query("SELECT * FROM wallet  ");

echo " <div id='content'>
  <h1>Timeline</h1>";

    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {


         

         echo " 
  <ul class='timeline'>
    <li class='event' data-date='$linha[data]'>
      <h3>Valor $linha[entrada]</h3>
      <p>RAWWWWWWRRR 🐢🦂</p>
    </li>
   
  </ul>
</div>
  ";


    }


} catch (PDOExceptio $erro) {

    echo $erro->getMessage();

}





?>


  

</body>

</html>
