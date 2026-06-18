<?php

class ContatoService
{
    private ContatoRepository $repository;

    public function __construct(ContatoRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Valida os dados e solicita o salvamento ao Repository.
     */
    public function criar(array $dados): array
    {
        $nome = trim((string) ($dados['nome'] ?? ''));
        $email = trim((string) ($dados['email'] ?? ''));
        $mensagem = trim((string) ($dados['mensagem'] ?? ''));

        if ($nome === '') {
            return ['erro' => 'O nome é obrigatório.'];
        }

        if (mb_strlen($nome) < 3) {
            return ['erro' => 'O nome deve possuir pelo menos 3 caracteres.'];
        }

        if ($email === '') {
            return ['erro' => 'O e-mail é obrigatório.'];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['erro' => 'O e-mail informado é inválido.'];
        }

        if ($mensagem === '') {
            return ['erro' => 'A mensagem é obrigatória.'];
        }

        if (mb_strlen($mensagem) > 500) {
            return ['erro' => 'A mensagem deve possuir no máximo 500 caracteres.'];
        }

        try {
            $salvo = $this->repository->salvar([
                'nome' => $nome,
                'email' => $email,
                'mensagem' => $mensagem
            ]);

            if (!$salvo) {
                return ['erro' => 'Não foi possível salvar o contato.'];
            }

            return ['sucesso' => 'Contato salvo com sucesso!!!'];

        } catch (Throwable $erro) {
            /*
             * Em uma aplicação real, o erro técnico deve ser registrado em log.
             * Não devemos expor detalhes internos do banco ao usuário.
             */
            return ['erro' => 'Ocorreu um erro ao salvar o contato.'];
        }
    }
}
