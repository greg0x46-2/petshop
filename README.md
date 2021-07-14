## PHP

- Iniciando servidor php: `` php -S 127.0.0.1:8080 -t public ``

## GIT

### Subir algo para o git: 
`` git add . `` 
`` git commit -m "alguma mensagem aqui" `` 
`` git push origin amanda ``

## Composer

**Instalar dependências**
``composer install``

## MVC

**Model** = A responsabilidade dos models é representar o negócio. Também é responsável pelo acesso e manipulação dos dados na sua aplicação. 
**View** = A view é responsável pela interface que será apresentada, mostrando as informações do model para o usuário (front end).
**Controller** = É a camada de controle, responsável por ligar o model e a view, fazendo com que os models possam ser repassados para as views e vice-versa.

![Alt text](https://dkrn4sk0rn31v.cloudfront.net/uploads/2020/06/diagramaMVC.png "MVC example")

#### Gerando uma model
``php artisan make:model <model-name>``

#### Gerando uma model e a respectiva migration
``php artisan make:model <model-name> -m``


### Migration:

- Utilizado para definir e versionar o banco de dados.
- Executando as migrations ``php artisan migrate``

### Controllers:

-  Gerando uma controller: ``php artisan make:controller <controller-nome>``
