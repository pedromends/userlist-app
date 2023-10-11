<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Sobre o teste

Nessa tarefa foi requisitado que fosse feito um programa que consuma um JSON via GET Request e mostrasse seus dados 
numa tabela disponibilizando opções para edição e deleção.

## Abordagem

A minha primeira ideia naturalmente seria abrir um framework Javascript, integrá-lo com o projeto e fazer as solicitações
dos dados e as funções de CRUD, porém como o teste propõe, utilizei uma view do Blade do Laravel apenas para exibição dos dados.

Eu poderia ter feito a paginação tanto no back-end quando no Front-End, pessoalmente prefiro trabalhar com paginação no
Front-End quando a massa de dados é pequena.

Não foi necessário utilizar nenhum framework CSS apesar do meu preferido ser TailwindCSS.

A rota principal é a "/" e assim que se digita o endereço onde a API está executando, a lista irá se abrir.

#### ATENÇÃO: Foi enviado um vídeo demonstração mostrando como o programa roda localmente.
#### ATENÇÃO: Para execução do sistema em outro computador é necessário configurar uma conexão com banco de dados e apontar para uma tabela "my_users" com as colunas (id, name, age, email).

## Arquivos

Não foi necessário alterar muitos arquivos, você encontrará modificações nos arquivos web.php, ListController.php, JsUser.php e list.blade.php

## Limitações

Como o link fornecido retorna um JSON, o objeto JSON em si não oferece maneiras para paginar os dados, isso quando utilizamos
apenas o Blade do Laravel como interface, se eu pudesse usar Frameworks JS, isso nem seria problema, porém neste caso em
específico, criei várias instancias da classe "JsUser" para que quando recuperássemos os dados do banco, eu pudesse paginá-los
da forma que o teste pede.

## Agradecimentos

Confira minhas redes sociais e portfólio para saber mais sobre mim e meus trabalhos.

### Links

- **[Portfólio](https://pedromends.github.io/)**
- **[GitHub](https://github.com/pedromends/)**
- **[LinkedIn](https://www.linkedin.com/in/pedro--souza//)**

Sucesso a todos nós!

#### Pedro Souza
