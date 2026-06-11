<?php

class ContatoRepository
{
    private PDO $pdo;

    public function __construct(?PDO $pdo = null)
    {
        $this->pdo = $pdo ?? Database::conectar();
    }

    /**
     * Salva um contato no banco de dados.
     */
    public function salvar(array $dados): bool
    {
        $sql = 'INSERT INTO contatos
                (nome, email, telefone, mensagem)
                VALUES (:nome, :email, :telefone, :mensagem)';

        $comando = $this->pdo->prepare($sql);
        
        return $comando->execute([
            ':nome' => $dados['nome'],
            ':email' => $dados['email'],
            ':telefone' => $dados['telefone'],
            ':mensagem' => $dados['mensagem']
        ]);
    }

    /**
     * Retorna os contatos mais recentes primeiro.
     */
    public function listarTodos(): array
    {
        $sql = 'SELECT id, nome, email, mensagem, criado_em
                FROM contatos
                ORDER BY id DESC';

        $comando = $this->pdo->query($sql);

        return $comando->fetchAll();
    }
}
