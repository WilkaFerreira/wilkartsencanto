<?php
// Lógica para adicionar o produto ao carrinho
$produtoID = $_GET['produto']; // Recupera o ID do produto da URL

// Adicione o produto ao carrinho (isso pode envolver banco de dados ou uma sessão, dependendo da sua implementação)

// Redirecione o usuário para a página do carrinho
header('Location: carrinho.php');
exit;
?>
