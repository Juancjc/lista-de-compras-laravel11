
## Sobre o projeto


## Intalar projeto pronto
Crie o .env padrão para usar o sqlite ou altere para usar o banco de dados que preferir
```bash
cp .env.example .env
npm install
composer install
php artisan key:generate
```
Iniciar o projeto
```bash
php artisan serve
npm run dev
```
Vai abrir local 
``´bash
 http://localhost:8000
´´´

## Primeira instalação de um projeto laravel (se for do zero)

```bash
composer create-project laravel/laravel nome-do-projeto

cd nome-do-projeto

php artisan serve

```
Até aqui, o projeto já está rodando em http://localhost:8000 mas sem nada de interessante.

## Laravel Breeze para ter login e register

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
