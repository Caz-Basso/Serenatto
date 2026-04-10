<?php 

use Repository\ProdutoRepository;

require "src/repository/ProdutoRepository.php";
require "src/connection.php";

$produtoRepository = new ProdutoRepository($pdo);
$produtoRepository->delete($_GET['id']);


?>