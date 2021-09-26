# Robot Solutions

<!--Tecnologias Utilizadas e suas versões-->

[![MySQL Version][mysql-badge]][mysql-doc] [![PHP Version][php-badge]][php-doc] [![Apache Version][apache-badge]][apache-doc]

> Status: :factory: Em desenvolvimento

## Indíce :bookmark_tabs:

:cd: [Descrição](#descrição-clipboard) 

:cd: [Funcionalidade](#funcionalidades-gear)    

:cd: [Layout da Aplicação](#layout-da-aplicação-art) 

<!--:cd: [Instalção](#instalação-floppy_disk)-->

:cd: [Caso de Uso](#caso-de-uso-office) 

:cd: [Outras Tecnologias](#outras-tecnologias-books)

:cd: [Contribuir](#contribuir-gift) 

<!--:cd:[Licença](#licença-notebook_with_decorative_cover)-->

## Descrição :clipboard:

<p style="text-aling=justify">
Este projeto é um sistema web para registro e manuntenção de dados de clientes da empresa fictícia Robot Solutions, visando um melhor controle desses dados para possiblitar estrátegias de marketing mais inteligêntes. Desenvolvido durante aulas de Programação para Aplicativos Mobile.
</p>

## Funcionalidades :gear:
> Quer mais detalhes sobre como está o desenvolvimento deste projeto? [Clique aqui][tarefas]

- Cadastrar clientes
- Consultar registros de clientes

## Layout da Aplicação :art:

<!--Layout ou link para o Deploy da aplicação-->

> Algumas screenshots e gifs das telas da aplicação

### Tela de Cadastrar

![Tela de Cadastrar][desktop-tela-cadastrar-img]

### Tela de Consultar

![Tela de Consultar][desktop-tela-consultar-gif]

### Tela de Editar

![Tela de Editar][desktop-tela-editar-img]

### Tela de Excluir

![Tela de Excluir][desktop-tela-excluir-img]

<!--## Intalação :floppy_disk:

<!--Indique o passo a passo para se instalar o projeto, como também os pré-requisitos para isso-->

<!--### Pré-requisitos

- [phpMyAdmin][phpmyadmin-download]

### Clone 
> Os comandos listados a seguir foram feitos pelo terminal do Windows

Verifique o endereço da pasta eds-www na _Dashboard_ do phpMyAdmin:

![Dashboard][phpmyadmin-dashboard]

Acesse a pasta eds-www pelo terminal:

```
cd "C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www"
```

Clone o projeto pelo terminal:

```
git clone https://github.com/GustavoHerreroNunes/webLab
```

### Banco de Dados

Lorem ipsum...

Agora você pode utilizar e alterar o projeto em seu computador.-->

## Caso de Uso :office:

> Situação em que o projeto poderia ser utilizado

A empresa fictícia Robot Solutions está abrindo uma nova filial, a qual precisará de um sistema para armazenar os dados de seus clientes, de forma que a administração entenda a realidade da loja e o perfil de seus clientes, e que o departamento de marketing consiga criar estratégias mais eficiêntes.

### Exemplo de registros

Um exemplo de dois registros no banco de dados:

| id | nome              | telefone        | origem   | data_contato | observacao                  |
|----|-------------------|-----------------|----------|--------------|-----------------------------|
| 1  | Paula Souza Lima  | (11) 90000-0000 | Whatsapp | 2020-07-02   | Adquiriu 2 produtos         |
| 2  | Caique dos Santos | (11) 91111-1111 | Site     | 2021-01-21   | Recebeu um atendimento ruim |

## Outras tecnologias :books:
<!--Caso precisa, já que aparece nos Badges-->
> Outras lingugens, bibliotecas ou dependências utilizadas no projeto

- [Boostrap][boostrap-doc]

## Contribuir :gift:

Se você tem alguma ideia, sugestão, ou viu algum erro, você pode me contar [aqui (Issues)][issues].

<!--## Licença :notebook_with_decorative_cover:
<!--Pedir ajuda de alguém/ler sobre-->

<!--The [MIT License][] (MIT)-->

<!---Links utilizados no documento-->

[mysql-badge]: https://img.shields.io/static/v1?label=mysql&message=5.7.17&color=blue&style=for-the-badge&logo=MySQL
[mysql-doc]:https://dev.mysql.com/doc/refman/5.7/en/

[php-badge]:https://img.shields.io/static/v1?label=php&message=5.6.30&color=blueviolet&style=for-the-badge&logo=php
[php-doc]: https://www.php.net/docs.php

[apache-badge]: https://img.shields.io/static/v1?label=apache&message=2.4.25&color=red&style=for-the-badge&logo=Apache
[apache-doc]: https://httpd.apache.org/docs/2.4/pt-br/

[status-badge]: https://img.shields.io/static/v1?label=status&message=em%20projeto&color=success&style=for-the-badge

[tarefas]: https://github.com/GustavoHerreroNunes/robot_solutions/projects

[desktop-tela-cadastrar-img]: https://github.com/GustavoHerreroNunes/robot_solutions/blob/main/readme_src/img/Desktopt-Tela_Cadastrar.jpg
[desktop-tela-consultar-gif]: https://github.com/GustavoHerreroNunes/robot_solutions/blob/main/readme_src/gif/Desktopt-Tela_Consultar.gif
[desktop-tela-editar-img]: https://github.com/GustavoHerreroNunes/robot_solutions/blob/main/readme_src/img/Desktopt-Tela_Editar.jpg
[desktop-tela-excluir-img]: https://github.com/GustavoHerreroNunes/robot_solutions/blob/main/readme_src/img/Desktopt-Tela_Excluir.jpg

[phpmyadmin-download]: https://www.phpmyadmin.net/downloads/
[phpmyadmin-dashboard]: https://github.com/GustavoHerreroNunes/webLab/blob/main/assets/readme/phpmyadmin-dashboard

[boostrap-doc]: https://getbootstrap.com.br/

[issues]: https://github.com/GustavoHerreroNunes/webLab/issues