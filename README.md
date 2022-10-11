# Para configurar projeto:
- criar .env
- php artisan key:generate

# Senac Bike Store 

- Projeto da aula de Desenvolvimento de Web Services

- Response -> enviando dado

- Request -> recebendo dado 

# Comandos: 
- composer create-project laravel/laravel Senac-DemoMVC
- php artisan:model Categoria
- php artisan make:model Categoria
- php artisan make:resource CategoriaResource
- php artisan make: Api\CategoriaController --model=Categoria
- php artisan make:controller Api\CategoriaController --model=Categoria
- php artisan make:controller Api/CategoriaController --model=Categoria
- php artisan make:request StoreCategoriaRequest
- php artisan route:list
