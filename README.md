# Instalacion del proyecto

## Clonar el repositorio

`git clone https://github.com/GeorgeAngelQ/test-overskull-laravel.git`


## Instalar dependencias

`composer install`

## Generar la clave de la aplicacion:

`php artisan key:generate`

## Configurar el archivo `.env` 

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_overskull
DB_USERNAME=root
DB_PASSWORD=password
```


## Ejecutar Migraciones

```
php artisan migrate --seed
```

