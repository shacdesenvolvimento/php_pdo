<?php
require_once 'vendor/autoload.php';

$poduto= new \App\Model\Produto();
$poduto->setNome("TV");
$poduto->setDescricao("Samsung");
$poduto->setId(3);

$produtoDao= new \App\Model\ProdutoDao();

//CREATE
//$produtoDao->create($poduto);
//READ
/* $lista= $produtoDao->read();
echo "<pre>";
print_r($lista);
echo "</pre>"; */

//UPDATE
//$produtoDao->update($poduto);

//DELETE
$produtoDao->delete($poduto);
?>