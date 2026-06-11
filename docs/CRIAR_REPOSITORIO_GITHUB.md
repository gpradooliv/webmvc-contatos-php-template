# Criar e publicar o repositório no GitHub

## Repositório sugerido

```text
webmvc-contatos-php-template
```

## Etapa 1 — criar o repositório vazio

Na conta do professor:

1. clique em `+`;
2. selecione `New repository`;
3. informe o nome `webmvc-contatos-php-template`;
4. selecione `Public`;
5. não crie README, `.gitignore` ou licença pela interface;
6. finalize em `Create repository`.

## Etapa 2 — enviar os arquivos

Abra o terminal dentro da pasta extraída e execute:

```bash
git init
git add .
git commit -m "chore: adiciona projeto base de WebMVC em PHP"
git branch -M main
git remote add origin https://github.com/gpradooliv/webmvc-contatos-php-template.git
git push -u origin main
```

## Etapa 3 — transformar em template

No GitHub:

1. abra o repositório;
2. acesse `Settings`;
3. em `General`, habilite `Template repository`.

## Etapa 4 — gerar cópias para os alunos

Cada aluno acessa o repositório-base e usa:

```text
Use this template → Create a new repository
```

Depois, o aluno cria uma branch para a atividade.
