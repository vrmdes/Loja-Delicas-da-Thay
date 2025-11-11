<?php
include('includes/conexao.php');
session_start();
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = 'Admin (exemplo)';
}
?>
<!doctype html>
<html lang="pt-br">
<head><meta charset="utf-8"><title>Loja - Exemplo</title></head>
<body>
<h1>Loja Delícias da Thay - Exemplo</h1>
<p>Usuário: <?php echo $_SESSION['usuario']; ?></p>
<a href="produtos.php">Ir para produtos</a>
</body></html>
