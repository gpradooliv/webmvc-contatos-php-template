<?php

require_once __DIR__ . '/../config/bootstrap.php';

$repository = new ContatoRepository();
$service = new ContatoService($repository);
$controller = new ContatoController($service, $repository);

/*
 * Este arquivo é um ponto de entrada da aplicação.
 * Ele encaminha a requisição POST ao Controller.
 */
$controller->salvar($_POST);
