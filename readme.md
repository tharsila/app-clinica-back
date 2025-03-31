# 🏥 App Clínica - Backend

## 📌 Sobre o Projeto

Este projeto é a API backend desenvolvida em Laravel 5.6 para gerenciar os dados da aplicação App Clínica. O sistema fornece endpoints para autenticação de usuários, manipulação de registros de clínicas e funcionalidades como paginação e filtragem.

---

## 🚀 Tecnologias Utilizadas

- [Laravel 5.6](https://laravel.com/docs/5.6)
- [MySQL](https://www.mysql.com/)
- [JWT Authentication](https://jwt.io/)

---

## 🛠️ Como Rodar o Projeto

### 🔧 Pré-requisitos

Antes de começar, certifique-se de ter instalado em sua máquina:

- [PHP 7.2 ou superior](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)

### 🚀 Instalação e Configuração

1. Clone o repositório:

   ```bash
   git clone https://github.com/tharsila/app-clinica-back.git
   ```

2. Acesse a pasta do projeto:

   ```bash
   cd app-clinica-back
   ```

3. Instale as dependências do Laravel:

   ```bash
   composer install
   ```

4. Copie o arquivo de ambiente e configure as variáveis:

   ```bash
   cp .env.example .env
   ```

   Abra o arquivo `.env` e configure as credenciais do banco de dados:

   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nome_do_banco
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```

5. Gere a chave da aplicação:

   ```bash
   php artisan key:generate
   ```

6. Rode as migrations para criar as tabelas do banco de dados:

   ```bash
   php artisan migrate
   ```

7. Popule o banco com dados iniciais:

   ```bash
   php artisan db:seed
   ```

8. Gere a secret key:

   ```bash
   php artisan jwt:secret
   ```

9. Inicie o servidor da aplicação:

   ```bash
   php artisan serve
   ```

O backend estará rodando em `http://localhost:8000`.

---

## 🔑 Credenciais de Acesso (Padrão)

Para acessar a API com um usuário padrão:

```bash
E-mail: admin@email.com
Senha: admin
```

## 📌 Melhorias Futuras

#### Validações

- Implementar validação customizada para campos com apenas espaços em branco

- Validação de data de inauguração (não permitir datas futuras)
