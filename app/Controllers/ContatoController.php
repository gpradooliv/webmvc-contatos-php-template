<?php

class ContatoController
{
    private ContatoService $service;
    private ContatoRepository $repository;

    public function __construct(
        ContatoService $service,
        ContatoRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    /**
     * Prepara os dados exibidos na página inicial.
     */
    public function index(array $queryString): array
    {
        $tipoMensagem = (string) ($queryString['tipo'] ?? '');
        $mensagem = (string) ($queryString['msg'] ?? '');

        if (!in_array($tipoMensagem, ['sucesso', 'erro'], true)) {
            $tipoMensagem = '';
        }

        return [
            'contatos' => $this->repository->listarTodos(),
            'mensagem' => $mensagem,
            'tipoMensagem' => $tipoMensagem
        ];
    }

    /**
     * Recebe os dados do formulário, chama o Service e decide a resposta HTTP.
     */
    public function salvar(array $dados): void
    {
        $resultado = $this->service->criar($dados);

        $tipoMensagem = isset($resultado['sucesso']) ? 'sucesso' : 'erro';
        $mensagem = $resultado[$tipoMensagem] ?? 'Ocorreu um erro inesperado.';

        header(
            'Location: index.php?tipo=' . urlencode($tipoMensagem)
            . '&msg=' . urlencode($mensagem)
        );

        exit;
    }
}
