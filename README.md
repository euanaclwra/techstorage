# 🔹TechStorage 
Aplicação web local para gerenciamento básico de estoque.
<br>

### 🔎 Tecnologias Utilizadas
- **HTML, CSS/Bootstrap e JavaScript** para o front-end;
- **PHP** para o back-end;
- **MySQL Server** como banco de dados;
- **Smarty** como motor de templates, conectando PHP e interface gráfica

<hr>

### 📂 Estrutura do Repositório
- `public/`: Diretório público acessado pelo navegador;
- `config/`: Arquivos de configurações gerais;
- `core/`: Inicialização da variável global do Smarty;
- `install/`: Setup de configuração da aplicação;
- `smarty/`: Todos os arquivos da lib;
- `src/`: Controllers e Classes.

<hr>

### 💻 Pré-requisitos
- Servidor Apache;
- Acesso configurado ao MySQL.

<hr>

### 🌐 Acessando pela LAN
1️⃣ Para acessar o TechStorage via navegador, sua máquina precisa estar na mesma rede de internet do servidor Apache:
```
http://IP_DO_SERVIDOR/techstorage/public/
```

2️⃣ No primeiro acesso, a aplicação vai solicitar as credenciais para conexão com o banco de dados:
- Se o servidor Apache for o mesmo do MySQL, preencha `localhost` no nome do host;
- Se for em outra máquina, preencha o IP ou DNS da máquina;
- A porta, usuário e senha devem estar de acordo com as configurações do seu banco de dados.
 
3️⃣ Após a conexão bem sucedida, a aplicação criará, automaticamente, o banco de dados e as tabelas necessárias.  

Por fim, você será redirecionado para a tela principal. 🎉  

<hr>

### ✔️ Troubleshooting: Conexão
***php_network_getaddresses: getaddrinfo failed: Este host não é conhecido.***  
Host com endereço incorreto e/ou fora da rede.  

***Nenhuma conexão pôde ser feita porque a máquina de destino as recusou ativamente.***  
Porta incorreta e/ou fechada para acesso.

***Access denied for user [...]***  
Usuário e/ou senha incorretos.
