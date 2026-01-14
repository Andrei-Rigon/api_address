# 📦 CRUD de Endereços – Laravel + BrasilAPI

API REST desenvolvida em **Laravel** para gerenciamento de endereços de entrega, com integração à **BrasilAPI** para busca automática de dados a partir do CEP.  
O projeto segue boas práticas de arquitetura utilizando **Repository Pattern**.

---

## 🚀 Funcionalidades

- ✅ Cadastro de endereços
- 📄 Listagem de endereços
- 🔍 Consulta de endereço por ID
- ✏️ Atualização de endereço
- ❌ Remoção de endereço
- 📮 Busca de dados via CEP (BrasilAPI)
- 📦 Padrão de respostas JSON

---

## 🛠️ Tecnologias Utilizadas

- PHP 8+
- Laravel 12
- API REST
- Repository Pattern
- BrasilAPI (CEP)
- MySQL / MariaDB
- Composer

---

## 📂 Arquitetura do Projeto

O projeto utiliza **Repository Pattern**, separando:

- **Controllers** → Responsáveis por receber requisições HTTP
- **Repositories** → Camada de acesso a dados
- **Services** → Integrações externas (BrasilAPI)
- **Models** → Entidades do banco de dados
- 
---

## 🔗 Endpoints da API

### 📍 Endereços

| Método | Endpoint | Descrição |
|------|---------|----------|
| GET | `/api/addresses` | Listar endereços |
| POST | `/api/addresses` | Criar endereço |
| GET | `/api/addresses/{id}` | Buscar endereço por ID |
| PUT | `/api/addresses/{id}` | Atualizar endereço |
| DELETE | `/api/addresses/{id}` | Remover endereço |

### 📮 CEP

| Método | Endpoint | Descrição |
|------|---------|----------|
| GET | `/api/buscar-cep/{cep}` | Buscar dados do CEP |

---

## 📥 Exemplo de Resposta (Buscar CEP)

```json
{
  "success": true,
  "data": {
    "cep": "01001000",
    "state": "SP",
    "city": "São Paulo",
    "neighborhood": "Sé",
    "street": "Praça da Sé"
  }
}
```
Script para criação do banco:
CREATE DATABASE IF NOT EXISTS `db_address` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
