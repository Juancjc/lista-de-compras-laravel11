
## Sobre o projeto

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## Primeira instalação de um projeto laravel

```bash
composer create-project laravel/laravel nome-do-projeto

cd nome-do-projeto

php artisan serve

```
Até aqui, o projeto já está rodando em http://localhost:8000 mas sem nada de interessante.

## Laravel Breeze para temos login e register

```bash 
composer require laravel/breeze --dev

php artisan breeze:install
```
Aqui ira aparecer a escolha de como você quuer o frontEnd, pra ficar mais rápido e fácil escolha o alpine.js com blade
-Dark mode (você decide)
-PHPUnit
logo após seguir as instruções, continue

```bash 
php artisan migrate
npm install
npm run dev
```

Pronto agora o projeto está com login, register e o alpine.js configurado.
