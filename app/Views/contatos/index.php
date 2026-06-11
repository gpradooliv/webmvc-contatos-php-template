<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Contatos</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <h1>Cadastro de Contatos</h1>

            <p>Utilize esta página para consultar e gerenciar os contatos
cadastrados.</p>

            <p class="descricao">
                Aplicação didática organizada em camadas:
                <strong>View → Controller → Service → Repository → Banco de Dados</strong>.
            </p>

            <?php if ($mensagem !== ''): ?>
                <div class="alerta <?= htmlspecialchars($tipoMensagem) ?>">
                    <?= htmlspecialchars($mensagem) ?>
                </div>
            <?php endif; ?>

            <form action="salvar_contato.php" method="post">
                <label for="nome">Nome</label>
                <input
                    type="text"
                    name="nome"
                    id="nome"
                    maxlength="100"
                    placeholder="Digite o nome"
                >

                <label for="email">E-mail</label>
                <input
                    type="text"
                    name="email"
                    id="email"
                    maxlength="150"
                    placeholder="nome@email.com"
                >

                <label for="mensagem">Mensagem</label>
                <textarea
                    name="mensagem"
                    id="mensagem"
                    maxlength="500"
                    placeholder="Digite uma mensagem"
                ></textarea>

                <button type="submit">Salvar contato</button>
            </form>
        </section>

        <section class="card">
            <h2>Contatos cadastrados</h2>

            <?php if (count($contatos) === 0): ?>
                <p>Nenhum contato cadastrado.</p>
            <?php else: ?>
                <div class="tabela-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Mensagem</th>
                                <th>Cadastrado em</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contatos as $contato): ?>
                                <tr>
                                    <td><?= htmlspecialchars((string) $contato['id']) ?></td>
                                    <td><?= htmlspecialchars($contato['nome']) ?></td>
                                    <td><?= htmlspecialchars($contato['email']) ?></td>
                                    <td><?= htmlspecialchars($contato['mensagem']) ?></td>
                                    <td><?= htmlspecialchars($contato['criado_em']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
