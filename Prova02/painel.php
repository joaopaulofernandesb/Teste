<?php
session_start();
 
require_once 'init.php';
 
require 'check.php';
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Admin</title>
</head>
<body>
  
        <h1>Painel do Usuário</h1>
 
        <p>Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?> | <a href="logout.php">Sair</a></p>
</body>
</html>
