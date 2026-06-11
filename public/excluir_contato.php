<?php
// public/excluir_contato.php

// Correção: Agora ele usa o bootstrap correto e unificado igual aos outros arquivos
require_once __DIR__ . '/../config/bootstrap.php';

$repository = new ContatoRepository();
$service = new ContatoService($repository);
$controller = new ContatoController($service, $repository);

/*
 * Este arquivo é um ponto de entrada da aplicação.
 * Ele encaminha a requisição POST de exclusão ao Controller.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->excluir($_POST);
} else {
    // Se tentarem acessar a URL direto pelo navegador, redireciona para a index
    header('Location: index.php');
    exit;
}