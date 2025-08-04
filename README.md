# laravel-seplag-pss

**PSS 02/2025 - SEPLAG (Analista de TI - Sênior)**

- **Nome:** Tatilon Roberto Lino de Souza  
- **Cargo:** Desenvolvedor PHP  
- **Protocolo de Inscrição:** [9291]

---

O sistema contempla todas as funcionalidades exigidas no edital, bem como os requisitos essenciais para garantir seu pleno funcionamento, segurança, confiabilidade e escalabilidade.

Também estão disponíveis dois arquivos dentro da pasta `ToolsTest`:

- `Projeto Seplag-Pss.postman_collection.json`
- `cors-test.html`

Esses arquivos foram criados com o intuito de **facilitar e agilizar os testes**.

---

## Funcionalidades implementadas

- Autenticação com expiração e renovação de token (5 minutos)
- Restrições de CORS conforme especificado
- CRUD completo para:
  - Servidor Efetivo
  - Servidor Temporário
  - Unidade
  - Lotação
- Consulta por `unid_id`, retornando nome, idade, unidade e fotografia
- Consulta de endereço funcional por parte do nome do servidor
- Upload de imagens para Min.IO
- Recuperação de imagens via links temporários com expiração de 5 minutos
- Paginação em todas as listagens
- Orquestração completa com Docker Compose

---

## Tecnologias utilizadas

- **PHP 8.2 (Laravel 12)**
- **PostgreSQL (última versão)**
- **Min.IO** (armazenamento compatível com S3)
- **Docker / Docker Compose**

---

## Requisitos para execução

- Docker
- Docker Compose

---

## Executando o projeto

Estou disponibilizando um vídeo para explicar, de forma simples, como instalar, executar e testar o sistema:

-- "removido"

---

### Passo a passo (modo texto)

1. Clone o repositório:
    ```bash
    git clone https://github.com/TailonRoberto/laravel-seplag-pss.git
    ```

2. Acesse a pasta do projeto:
    ```bash
    cd laravel-seplag-pss
    ```

3. Execute o build do Docker:
    ```bash
    docker-compose build
    ```

4. Inicie os containers:
    ```bash
    docker-compose up --build
    ```

5. Aguarde até aparecer a mensagem:
    ```
    INFO  Server running on [http://0.0.0.0:8000].
    ```

---

## Acessos

- API Laravel: [http://localhost:8000](http://localhost:8000)  
- Min.IO: [http://localhost:9000](http://localhost:9000)  
- Console Min.IO: [http://localhost:9001](http://localhost:9001)  
  - Usuário: `minioadmin`  
  - Senha: `minioadmin`

---

## Testes com Postman

6. (Opcional) Importe o arquivo `Projeto Seplag-Pss.postman_collection.json` no Postman.

- Ao importar, todas as rotas estarão pré-configuradas.
- Execute a rota de login.
- Copie o token e ele será automaticamente salvo na variável `access_token`.
- A partir daí, é só testar todas as rotas clicando em **"Send"**.

7. (Sem Postman) Se preferir testar manualmente, use as seguintes credenciais para login:

```json
{
  "email": "admin@example.com",
  "password": "password"
}
