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
        $sql = 'INSERT INTO contatos (nome, email, mensagem)
                VALUES (:nome, :email, :mensagem)';

        $comando = $this->pdo->prepare($sql);

        return $comando->execute([
            ':nome' => $dados['nome'],
            ':email' => $dados['email'],
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

    /**
     * Exclui um contato do banco de dados pelo ID.
     */
    public function excluir(int $id): bool
    {
        $sql = 'DELETE FROM contatos WHERE id = :id';
        $comando = $this->pdo->prepare($sql);
        
        return $comando->execute([':id' => $id]);
    }
}