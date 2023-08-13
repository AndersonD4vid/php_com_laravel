# Iniciar o servidor

## Iniciar o servidor local: Rodar esse comando a baixo na pasta public do projeto, maneira padrão

-   php -S localhost:8000

## Iniciar o servidor local com artisan, com ele não precisamos acessar a pasta public para rodar o comando

-   php artisan serve --port=8000

## Colocar a aplicação em modo manutenção é down, e up para voltar ao normal

-   php artisan down
-   php artisan up

## Listar todas as rotas

-   php artisan route:list

## Criando um controller

-   php artisan make:controller NomeController

## Observação sobre a sitaxe blade

-   O blade é o motor de renderização de views do laravel. Através do blade temos acesso a uma sintaxe de programação php mais clean/enchuta. Facilitando a criação de páginas web dinâmicas, além disso o blade também possui um poderoso recurso de herança de templates que possibilita que extendam, modifiquem ou inclua outras views. Diferente de outros motores de renderização de views o blade, ele não impede o uso da sintaxe pura do php, ou seja é possível mas embora pouco usual utilizar a sintaxe blade e a sintaxe pura no php das views.
