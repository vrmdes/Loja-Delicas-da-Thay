<?php
// Arquivo de conexão de exemplo - ajuste conforme seu ambiente
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'loja_doces';
$conn = new mysqli($host,$user,$pass,$dbname);
if ($conn->connect_error) {
    // Para um exemplo didático, não morra - apenas exiba mensagem
    echo 'Aviso: não conectou ao MySQL (arquivo de exemplo).';
}
?>
