# Introduzione

Questo è un progetto di test per la valutazioni delle capacità del candidato

# Come installare il progetto

Per avviare il proggetto ho utilizzato artisan 
```shell
php artisan serve
```

## Installa le dipendenze di composer

per installare le dipendenze ho utilizzato composer 

```shell
composer install --ignore-platform-reqs
```

## Configura il file .env

Parti dal file `.env.example` e crea il file `.env`

```shell
cp .env.example .env
```

È già sufficiente per far partire il progetto. Personalizza eventualmente il file `.env` in base alle tue necessità.

## Avvia il progetto 

installa le dipendezze con npm

``` shell
npm install
```
per complilare i file:

``` shell
npm run dev
```
# Eseguire migration

``` shell
php artisan migrate
```

# Eseguire seeders

``` shell
php artisan db:seed --class ComicsTableSeeder
```




