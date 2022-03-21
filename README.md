# My laravel project with Vite, Vue & Domain Driven Design.

##### My own project to build my app in domain driven design using laravel and vue.

### Project setup

```sh
npm install

composer install

mysql -u root
# run: create database;

cp .env.example .env
code .env
# edit if needed: DB_PORT=, DB_DATABASE=laravel, DB_USERNAME=, DB_PASSWORD=

php artisan key:generate
php artisan migrate-seed
```

### Run project

Run in 1 terminal the javascript development server:

```sh
npm run dev
```

Run in another terminal the laravel development server:

```sh
php artisan serve
```

### Laravel domain driven design data stucture;
    Core
        |-- Commands
        |-- Controllers
        |-- Database
        |-- Exceptions
        |-- Kernels
        |-- Middleware
        |-- Providers
    Domain
        |-- * // = Names
            |-- Controllers
            |-- Database
            |-- Models
            |-- Request
            |-- Routes
    Interface
        |-- *
    Vue // = UI
        |-- Core
            |-- *
        |-- Domain
            |-- *
        |-- Interface
            |-- *
    
    
### Automatic index:
```sh
    Migrations:  "App\\Domain\\*\\Database\\\Migrations\\".
    Seeders:     "App\\Domain\\*\\Database\\\Seeders\\".
    Factories:   "App\\Domain\\*\\Database\\\Factories\\".
    Routes:      "App\\Domain\\*\\Routes".
```

### Custom commands:
    Command: $php artisan migrate-seed // equals php artisan mirgate::fresh -seed 
