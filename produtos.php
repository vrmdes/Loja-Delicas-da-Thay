<?php
include('includes/conexao.php');
// Exemplo estático de lista de produtos
$produtos = [
    ['id'=>1,'nome'=>'Brigadeiro','preco'=>5.0],
    ['id'=>2,'nome'=>'Beijinho','preco'=>4.5]
];
?>
<!doctype html><html><head><meta charset='utf-8'><title>Produtos</title></head><body>
<h2>Produtos</h2>
<ul>
<?php foreach($produtos as $p): ?>
  <li><?php echo $p['nome'] . ' - R$ ' . number_format($p['preco'],2,',','.'); ?></li>
<?php endforeach; ?>
</ul>
<a href="index.php">Voltar</a>
</body></html>
