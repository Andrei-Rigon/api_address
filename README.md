<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Endereços - Laravel</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1, h2 {
            color: #2c3e50;
        }

        h1 {
            margin-bottom: 10px;
        }

        p {
            line-height: 1.6;
        }

        ul {
            margin-left: 20px;
        }

        code {
            background: #eee;
            padding: 3px 6px;
            border-radius: 4px;
            font-size: 0.95em;
        }

        .badge {
            display: inline-block;
            background: #3498db;
            color: #fff;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.8em;
            margin-right: 5px;
        }

        footer {
            margin-top: 40px;
            text-align: center;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>CRUD de Endereços</h1>
        <span class="badge">Laravel</span>
        <span class="badge">API REST</span>
        <span class="badge">BrasilAPI</span>
        <span class="badge">Repository Pattern</span>

        <p>
            Este projeto é uma API REST desenvolvida em <strong>Laravel</strong> para gerenciamento
            de endereços de entrega, com integração à <strong>BrasilAPI</strong> para busca de dados
            a partir do CEP.
        </p>

        <h2>🚀 Funcionalidades</h2>
        <ul>
            <li>Cadastro de endereços</li>
            <li>Listagem de endereços</li>
            <li>Consulta de endereço por ID</li>
            <li>Atualização de endereço</li>
            <li>Remoção de endereço</li>
            <li>Busca automática de dados via CEP</li>
        </ul>

        <h2>🛠 Tecnologias Utilizadas</h2>
        <ul>
            <li>PHP 8+</li>
            <li>Laravel 12</li>
            <li>Repository Pattern</li>
            <li>API RESTful</li>
            <li>BrasilAPI (CEP)</li>
            <li>MySQL / MariaDB</li>
        </ul>

        <h2>📌 Endpoints Principais</h2>
        <ul>
            <li><code>GET /api/addresses</code> – Listar endereços</li>
            <li><code>POST /api/addresses</code> – Criar endereço</li>
            <li><code>GET /api/addresses/{id}</code> – Buscar endereço</li>
            <li><code>PUT /api/addresses/{id}</code> – Atualizar endereço</li>
            <li><code>DELETE /api/addresses/{id}</code> – Remover endereço</li>
            <li><code>GET /api/buscar-cep/{cep}</code> – Buscar dados do CEP</li>
        </ul>

        <h2>📂 Arquitetura</h2>
        <p>
            O projeto utiliza o <strong>Repository Pattern</strong> para separar as responsabilidades
            de acesso a dados da lógica de negócio, facilitando manutenção, testes e escalabilidade.
        </p>

        <h2>▶️ Como Executar</h2>
        <ul>
            <li>Clone o repositório</li>
            <li>Execute <code>composer install</code></li>
            <li>Configure o arquivo <code>.env</code></li>
            <li>Execute as migrations</li>
            <li>Inicie o servidor com <code>php artisan serve</code></li>
        </ul>

        <footer>
            <p>Desenvolvido por Andrei 🚀</p>
        </footer>
    </div>

</body>
</html>
