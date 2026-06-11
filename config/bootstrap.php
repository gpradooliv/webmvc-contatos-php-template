<?php

/*
 * Este arquivo centraliza os carregamentos necessários para a aplicação.
 * Para manter a atividade introdutória simples, não utilizamos Composer.
 */

require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/../app/Repositories/ContatoRepository.php';
require_once __DIR__ . '/../app/Services/ContatoService.php';
require_once __DIR__ . '/../app/Controllers/ContatoController.php';
