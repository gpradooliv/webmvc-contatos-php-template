# Roteiro do aluno — execução local com XAMPP

## 1. Preparar o ambiente

Instale:

- XAMPP;
- VS Code;
- Git;
- navegador atualizado.

No painel do XAMPP, inicie:

```text
Apache
MySQL
```

## 2. Copiar ou clonar o projeto

O projeto deve ficar em:

```text
C:\xampp\htdocs\webmvc-contatos-php-template
```

## 3. Criar o banco

Acesse:

```text
http://localhost/phpmyadmin
```

Importe:

```text
database/schema.sql
```

## 4. Abrir a aplicação

Acesse:

```text
http://localhost/webmvc-contatos-php-template/public/
```

## 5. Testar o fluxo

Cadastre um contato com dados válidos.

Depois, faça testes com:

- nome vazio;
- e-mail inválido;
- mensagem vazia;
- mensagem com mais de 500 caracteres.

## 6. Identificar as camadas

| Camada | Arquivo principal |
|---|---|
| View | `app/Views/contatos/index.php` |
| Controller | `app/Controllers/ContatoController.php` |
| Service | `app/Services/ContatoService.php` |
| Repository | `app/Repositories/ContatoRepository.php` |
| Banco | `database/schema.sql` |
| Configuração | `config/Database.php` |
