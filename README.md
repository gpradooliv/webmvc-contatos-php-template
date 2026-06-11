# Aplicação Web em Camadas com PHP — Cadastro de Contatos

Projeto didático para a disciplina **Fundamentos de Sistemas para Internet**.

A aplicação demonstra, de forma simples, como organizar uma aplicação PHP em camadas:

```text
Navegador
   ↓
Controller
   ↓
Service
   ↓
Repository
   ↓
Banco de Dados
```

## Funcionalidades disponíveis

- cadastrar contato;
- validar nome, e-mail e mensagem;
- salvar dados com PDO e prepared statements;
- listar os contatos cadastrados;
- exibir mensagens de sucesso ou erro.

## Tecnologias

- PHP 8;
- Apache;
- MySQL ou MariaDB;
- PDO;
- HTML e CSS;
- XAMPP como ambiente local sugerido.

## Estrutura do projeto

```text
webmvc-contatos-php-template/
│
├── app/
│   ├── Controllers/
│   │   └── ContatoController.php
│   ├── Repositories/
│   │   └── ContatoRepository.php
│   ├── Services/
│   │   └── ContatoService.php
│   └── Views/
│       └── contatos/
│           └── index.php
│
├── config/
│   ├── bootstrap.php
│   └── Database.php
│
├── database/
│   └── schema.sql
│
├── docs/
│   ├── ATIVIDADE_BRANCH_PULL_REQUEST.md
│   ├── GUIA_PROFESSOR_GITHUB.md
│   └── ROTEIRO_ALUNO_XAMPP.md
│
├── public/
│   ├── assets/
│   │   └── css/
│   │       └── style.css
│   ├── index.php
│   └── salvar_contato.php
│
├── .github/
│   └── PULL_REQUEST_TEMPLATE.md
│
├── .gitignore
├── LICENSE
└── README.md
```

## Como executar com XAMPP

1. Copie a pasta `webmvc-contatos-php-template` para:

```text
C:\xampp\htdocs\
```

2. Inicie os serviços `Apache` e `MySQL` no painel do XAMPP.

3. Acesse o phpMyAdmin:

```text
http://localhost/phpmyadmin
```

4. Importe o arquivo:

```text
database/schema.sql
```

5. Abra a aplicação:

```text
http://localhost/webmvc-contatos-php-template/public/
```

## Banco de dados local

Por padrão, o arquivo `config/Database.php` usa:

```text
host: 127.0.0.1
porta: 3306
banco: aula_camadas
usuário: root
senha: vazia
```

Esses valores correspondem à instalação local padrão utilizada em muitos laboratórios com XAMPP. Em uma aplicação de produção, credenciais não devem ficar expostas no repositório.

## Para os alunos

Leia:

```text
docs/ROTEIRO_ALUNO_XAMPP.md
docs/ATIVIDADE_BRANCH_PULL_REQUEST.md
```

## Para o professor

Leia:

```text
docs/GUIA_PROFESSOR_GITHUB.md
docs/CRIAR_REPOSITORIO_GITHUB.md
```
