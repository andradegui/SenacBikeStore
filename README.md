# Senac Bike Store 

- Projeto da aula de Desenvolvimento de Web Services

- Response -> enviando dado

- Request -> recebendo dado // StoreCategoriaRequest


# Comandos: 
- composer create-project laravel/laravel Senac-DemoMVC
- php artisan:model Categoria
- php artisan make:model Categoria
- php artisan make:resource CategoriaResource
- php artisan make:controller Api/CategoriaController --model=Categoria
- php artisan make:request StoreCategoriaRequest
- php artisan route:list

# Endpoints 

- 127.0.0.1:8000/api/categorias - GET
- 127.0.0.1:8000/api/categorias - POST
- 127.0.0.1:8000/api/categorias/*id* - PUT
- 
