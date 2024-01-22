# Plataforma de Gerenciamento de Biblioteca <br> (Nome da Plataforma:FINLIBRARY)

Este projeto é uma aplicação de controle de biblioteca, desenvolvida em PHP, HTML,CSS e JAVASCRIPT com o uso de um banco de dados MySQL para armazenamento de informações, e framework BOOTSTRAP para estilização.
<br>
Este projeto foi desenvolvido para proporcionar uma solução abrangente e eficiente para a gestão de bibliotecas, incorporando operações CRUD (Create, Read, Update, Delete) para simplificar o controle do acervo.


## Ferramentas Utilizadas

**Linguagem de Programação:**
   - PHP
**Banco de Dados:**
   - MySQL

**Front-end:**
   - HTML
   - CSS
   
**Framework:**<br>
  - BOOTSTRAP

**Servidor Web:**
   - XampServer

**Controle de Versão:**
   - Git

## Instruções de Configuração

**Ambiente de Desenvolvimento:**
   - Instale um servidor web local (WAMP, XAMPP).
   - Certifique-se de ter o PHP e o MySQL instalados.

**Banco de Dados:**
   - Importe o arquivo config/conexao.php para criar as tabelas necessárias.
     
**Configuração do Banco de Dados:**
   - Edite `config/conexao.php` com as configurações do seu banco de dados.

**Acesso à Aplicação:**
   - Acesse a aplicação via navegador, usando o endereço do servidor local

## Funcionamento do Projeto

1. Painel de Entrada:
<p>
USUÁRIO: SOCORRO
<br>
SENHA: 12345
</p>
O projeto inicia com um painel de entrada que requer um nome de usuário e senha. O acesso é exclusivo para a usuária "socorro" com a senha "12345". Essa medida visa garantir maior segurança no acesso ao sistema.
3. Painel Central - Gerenciamento:

Após a autenticação bem-sucedida, os usuários autorizados serão direcionados para o Painel Central, o núcleo do sistema onde todas as operações CRUD são realizadas. O Painel Central é dividido em três seções principais:

a. Clientes:
- Nesta seção, a usuária "socorro" pode cadastrar novos clientes, gerenciar informações existentes, atualizar dados e excluir registros conforme necessário.

b. Livros:
- Aqui, a usuária tem controle total sobre o acervo da biblioteca. Pode cadastrar novos livros, atualizar detalhes existentes, realizar buscas avançadas e remover itens do catálogo.

c. Locações:
- A seção de Locações abrange o registro de empréstimos e devoluções. A usuária pode cadastrar novas locações, gerenciar os empréstimos ativos, renovar períodos e registrar as devoluções dos livros.

3. Operações CRUD:

Todas as seções do Painel Central oferecem operações CRUD específicas para os conjuntos de dados associados (Clientes, Livros, Locações). Estas operações incluem:
a. Criação (Create):
- Permite adicionar novos registros ao sistema, como clientes, livros ou locações, preenchendo os campos relevantes.

b. Leitura (Read):
- Facilita a visualização e pesquisa de informações existentes. Pode-se realizar buscas avançadas para localizar clientes, livros ou locações específicas.

c. Atualização (Update):
- Possibilita a modificação de detalhes existentes. A usuária pode, por exemplo, atualizar informações de clientes, editar dados de livros ou renovar datas de locações.

d. Exclusão (Delete):
- Permite a remoção segura de registros do sistema. Caso necessário, a usuária pode excluir clientes, retirar livros do acervo ou encerrar locações.

4. Segurança:

A implementação de uma autenticação rigorosa, com a usuária "socorro" e senha "12345", visa garantir que apenas usuários autorizados tenham acesso ao sistema. Isso contribui para a segurança dos dados armazenados no gerenciador de biblioteca, Tambem com a implementação de arrays que mostram o bloqueio de entrada previnindo contra  XSS e SQL Injection



