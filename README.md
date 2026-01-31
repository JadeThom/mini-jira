# Mini Jira - Gestão de Tarefas

Projeto de portfólio desenvolvido em **Laravel 12** com **autenticação** (Breeze) e front-end responsivo.  
Objetivo: criar um mini sistema de gerenciamento de tarefas inspirado no Jira, demonstrando boas práticas em Laravel, Vue 3 e controle de versão.

## Tecnologias

- **Back-end:** Laravel 12
- **Front-end:** Blade + TailwindCSS / Bootstrap
- **Autenticação:** Laravel Breeze
- **Banco de Dados:** PostgreSQL
- **Versionamento:** Git / GitHub

## Funcionalidades

- Registro e login de usuários
- Recuperação de senha
- Dashboard de tarefas
- Criação, edição e exclusão de tarefas
- Organização de tarefas por status
- Controle de usuários e permissões

## Instalação

1. Clone o repositório:
```bash
git clone https://github.com/JadeThom/mini-jira.git
```

2. Entre na pasta do projeto:
```bash
cd mini-jira
```

3. Instale as dependências PHP:
```bash
composer install
```

4. Instale as dependências JS:
```bash
npm install
npm run dev
```

5. Configure o .env com seu banco de dados e chave APP_KEY:
```bash
cp .env.example .env
php artisan key:generate
```
Atualize as variáveis DB_DATABASE, DB_USERNAME e DB_PASSWORD conforme seu PostgreSQL.

6. Execute as migrations:
```bash
php artisan migrate
```

7. Inicie o servidor local:
```bash
php artisan serve
```
