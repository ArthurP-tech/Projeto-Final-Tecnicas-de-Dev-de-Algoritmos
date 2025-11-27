# Projeto-Final-Concessionaria-Tecnicas-de-Dev-de-Algoritmos

# Project 4Boss

## 📌 Descrição
Project 4Boss é um site para uma concessionária que permite gerenciar informações essenciais através de operações CRUD (Cadastrar, Editar, Listar, Salvar e Excluir) para os seguintes conteúdos:
- Funcionário
- Cliente
- Marca
- Modelo
- Venda

O sistema possui interface desenvolvida em **HTML** e **Bootstrap**, com backend em **PHP** e banco de dados **MySQL**.

---

## 🚀 Funcionalidades
- [x] Cadastro de funcionários, clientes, marcas, modelos e vendas
- [x] Edição dos registros
- [x] Listagem completa
- [x] Exclusão de registros

---

## 🛠️ Tecnologias Utilizadas
- **PHP** (Backend)
- **MySQL** (Banco de Dados)
- **HTML5** (Interface)
- **Bootstrap** (Estilização)

---

## ✅ Pré-requisitos
Para rodar o projeto, você precisa ter instalado:
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL)
- MySQL Workbench (para importar o banco de dados)

---

## ⚙️ Instalação
1. Clone o repositório:
```bash
git clone https://github.com/seuusuario/project-4boss.git
```

2. Mova os arquivos para a pasta **htdocs** do XAMPP:
```bash
cp -r project-4boss /caminho/para/xampp/htdocs/
```

3. Inicie o Apache e MySQL pelo painel do XAMPP.

4. Importe o banco de dados:
   - Abra o MySQL Workbench
   - Crie um banco de dados (ex.: `project4boss`)
   - Importe o arquivo `banco-de-dados-2122m.sql`

---

## ▶️ Como Usar
1. Acesse no navegador:
```
http://localhost/project-4boss
```
2. Utilize as funcionalidades CRUD para gerenciar os dados da concessionária.

---

## 📂 Estrutura do Projeto
```
/project-4boss
│── index.php          # Página inicial
│── /config            # Arquivos de configuração
│── /src               # Código fonte
│── /assets            # CSS, JS e imagens
│── database.sql       # Script do banco de dados
```

---

## 🤝 Contribuição
Contribuições são bem-vindas! Para contribuir:
1. Faça um fork do projeto
2. Crie uma branch (`git checkout -b minha-feature`)
3. Commit suas alterações (`git commit -m 'Minha feature'`)
4. Push para a branch (`git push origin minha-feature`)
5. Abra um Pull Request

---

## 📄 Licença
Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 👨‍💻 Autor

**Arthur Pereira**\
Estudante de Análise e Desenvolvimento de Sistemas\
Projeto desenvolvido como parte da avaliação acadêmica.
