# Atividade — branch, commit, push e Pull Request

## Objetivo

Praticar um fluxo de colaboração com Git e GitHub a partir da aplicação WebMVC de cadastro de contatos.

## Regra principal

Não faça alterações diretamente na branch `main`.

Crie uma branch própria antes de alterar o projeto.

## Padrão de nomes

Use:

```text
feature/seu-usuario-telefone
```

Exemplo:

```text
feature/maria-silva-telefone
```

## Exercício obrigatório

Acrescente o campo `telefone` ao cadastro de contatos.

A alteração deve alcançar todas as camadas necessárias:

```text
View
Controller
Service
Repository
Banco de dados
```

## Regras para o telefone

- o campo deve ser obrigatório;
- deve possuir no mínimo 8 caracteres após a remoção de espaços;
- deve aparecer no formulário;
- deve ser salvo no banco;
- deve ser exibido na listagem.

## Comandos sugeridos

Depois de clonar o seu repositório:

```bash
git checkout -b feature/seu-usuario-telefone
```

Verifique os arquivos alterados:

```bash
git status
```

Confira as diferenças:

```bash
git diff
```

Adicione os arquivos:

```bash
git add .
```

Crie um commit:

```bash
git commit -m "feat: adiciona telefone ao cadastro de contatos"
```

Envie a branch ao GitHub:

```bash
git push -u origin feature/seu-usuario-telefone
```

Depois, abra um Pull Request da sua branch para `main`.

## O que verificar antes do Pull Request

- a aplicação abre corretamente;
- o cadastro sem telefone retorna erro;
- o cadastro com telefone válido funciona;
- o telefone aparece no banco;
- o telefone aparece na tabela da página;
- a mensagem do commit está clara;
- somente os arquivos necessários foram alterados.

## Desafios adicionais

Depois de concluir o exercício obrigatório, escolha um desafio:

1. adicionar busca por nome ou e-mail;
2. implementar exclusão de contatos;
3. melhorar a aparência da interface;
4. documentar o fluxo da aplicação no README;
5. incluir validação para impedir mensagens maiores que 300 caracteres;
6. criar uma página simples que explique a responsabilidade de cada camada.
