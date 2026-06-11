<?php

require_once __DIR__ . '/../config/bootstrap.php';

$repository = new ContatoRepository();
$service = new ContatoService($repository);
$controller = new ContatoController($service, $repository);

/*
 * O Controller prepara as informações utilizadas pela View.
 */
$dadosPagina = $controller->index($_GET);

$contatos = $dadosPagina['contatos'];
$mensagem = $dadosPagina['mensagem'];
$tipoMensagem = $dadosPagina['tipoMensagem'];

require __DIR__ . '/../app/Views/contatos/index.php';
