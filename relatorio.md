
# Relatório de Desenvolvimento do CRUD - Laravel

**Aluno:** Celso José Cordasso da Rosa  
**RA:** 0938622  
**Curso:** Sistemas para Internet  
**Polo:** Umuarama  

## Tema Escolhido
CRUD de **Livros**

## Introdução
Este projeto visa desenvolver um CRUD completo utilizando o framework Laravel, com PHP no backend, MySQL como banco de dados e Tailwind CSS no frontend. O objetivo é aplicar conceitos aprendidos na disciplina, além de seguir boas práticas de desenvolvimento e UX.

## Passos Realizados

### 1. Instalação do Laravel
- Instalei o Laravel com o comando:  
  ```bash
  composer create-project laravel/laravel crud-livros
  ```
- Configurei o `.env` com as credenciais do MySQL.

### 2. Criação do Modelo, Migração e Controller
- Modelo: Livro  
- Comando utilizado:  
  ```bash
  php artisan make:model Livro -mcr
  ```
- Defini os seguintes atributos na tabela:  
  - `id`  
  - `titulo`  
  - `autor`  
  - `genero`  
  - `ano_publicacao`  
  - `descricao`  
  - `timestamps`

### 3. Implementação das Rotas
- Utilizei rotas resource no arquivo `routes/web.php`:  
  ```php
  Route::resource('livros', LivroController::class);
  ```

### 4. Desenvolvimento do Frontend
- Utilizei Tailwind CSS para estilização.  
- Criei menus de navegação para acesso às funções: Criar, Listar, Editar e Excluir livros.

### 5. Testes e Validações
- Testei todas as rotas e operações: Create, Read, Update, Delete.  
- Validei os formulários utilizando regras do Laravel.

### 6. Versionamento no GitHub
- Criei repositório: https://github.com/celsojcr  
- Utilizei comandos:  
  ```bash
  git add .
  git commit -m "Adicionando CRUD de Livros"
  git push origin main
  ```

## Considerações Finais
A atividade proporcionou uma visão prática do desenvolvimento web com Laravel, desde a configuração até o versionamento no GitHub.

## Link do Vídeo
(Deixar em branco)
