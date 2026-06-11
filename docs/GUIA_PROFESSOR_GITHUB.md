# Guia do professor — GitHub e colaboração

## Nome sugerido para o repositório-base

```text
webmvc-contatos-php-template
```

## Estratégia recomendada para a turma

Utilize este projeto como um repositório-base público e marque-o como **Template repository**.

Evite conceder permissão de escrita para toda a turma em um único repositório. Um repositório central com dezenas de branches aumenta a possibilidade de alterações acidentais e dificulta a avaliação individual.

### Atividade individual

Cada aluno cria o próprio repositório a partir do template usando a opção **Use this template**. Dentro do repositório individual, o aluno:

1. clona o projeto;
2. cria uma branch própria;
3. altera o projeto;
4. executa testes locais;
5. cria commit;
6. envia a branch ao GitHub;
7. abre um Pull Request para a própria branch `main`;
8. envia o link do Pull Request ao professor.

### Atividade em grupo

Crie um repositório para cada equipe a partir do template. Convide somente os integrantes do grupo como colaboradores. Cada integrante trabalha em uma branch própria e abre Pull Request para `main`.

Exemplo:

```text
main
  ├── feature/ana-telefone
  ├── feature/bruno-busca
  └── feature/carla-exclusao
```

### Simulação de contribuição em projeto aberto

Para uma aula específica sobre colaboração externa, mantenha o repositório-base público e solicite que cada aluno faça um **fork**. Depois, o aluno cria uma branch no fork e abre Pull Request para o repositório-base do professor.

Use essa opção com moderação, pois muitos Pull Requests simultâneos podem dificultar a correção.

## GitHub Classroom

O GitHub informou em maio de 2026 que novos cadastros no GitHub Classroom não estão mais disponíveis durante a transição para soluções parceiras. Caso você já possua uma conta ou salas existentes, ainda poderá verificar as opções disponíveis no ambiente. Para uma nova turma, use o fluxo com template, cópia por aluno e Pull Request descrito neste guia.

## Criar o repositório-base pela interface do GitHub

1. Entre em sua conta do GitHub.
2. No canto superior direito, clique em `+`.
3. Clique em `New repository`.
4. Em `Repository name`, informe:

```text
webmvc-contatos-php-template
```

5. Selecione `Public`.
6. Não marque a criação automática de README, `.gitignore` ou licença, pois esses arquivos já fazem parte do projeto.
7. Clique em `Create repository`.

## Publicar os arquivos iniciais pelo terminal

Extraia o arquivo ZIP e abra o Git Bash ou terminal na pasta do projeto.

Execute:

```bash
git init
git add .
git commit -m "chore: adiciona projeto base de WebMVC em PHP"
git branch -M main
git remote add origin https://github.com/gpradooliv/webmvc-contatos-php-template.git
git push -u origin main
```

## Marcar o repositório como template

Após enviar os arquivos:

1. abra o repositório no GitHub;
2. clique em `Settings`;
3. na seção `General`, habilite `Template repository`.

## Fluxo sugerido para o aluno

```text
main
  └── feature/usuario-telefone
        └── Pull Request para main
```

## Branch sugerida para o primeiro exercício

```text
feature/usuario-telefone
```

## Comandos do aluno

```bash
git clone URL_DO_REPOSITORIO_DO_ALUNO
cd NOME_DO_REPOSITORIO
git checkout -b feature/seu-usuario-telefone
git status
git diff
git add .
git commit -m "feat: adiciona telefone ao cadastro de contatos"
git push -u origin feature/seu-usuario-telefone
```

Depois, o aluno abre um Pull Request para `main`.

## Proteção da branch principal em trabalhos em grupo

Em repositórios compartilhados por equipes, configure uma regra de proteção para a branch `main` e exija Pull Request antes do merge. Isso evita alterações diretas na branch principal e cria um histórico claro para revisão.

## Checklist do professor

- criar e publicar o repositório-base;
- habilitar `Template repository`;
- postar o link do template;
- orientar cada aluno ou equipe a criar uma cópia própria;
- exigir branch própria;
- exigir pelo menos um commit;
- exigir `git status` e `git diff` antes do commit;
- exigir push da branch;
- exigir Pull Request;
- solicitar evidências dos testes;
- revisar mudanças antes do merge.
