# Introduzione

Questo è un progetto di test per la valutazioni delle capacità del candidato

# Come installare il progetto

Per avviare il proggetto ho utilizzato php artisan serve
```shell
php artisan serve
```

## Clona il repository

Se non l'hai già fatto clona il repository da github. Puoi clonare direttamente il nostro repository o, per semplicità, esegui un fork.
(p.s. se hai eseguito un fork modifica il path nel comando successivo con il path al tuo repository)

```shell
git clone git@github.com:Athomos-Github/Netsons-Test.git
```

oppure 

```
git clone https://github.com/Athomos-Github/Netsons-Test.git
```

## Spostati nella cartella del progetto

```shell
cd Netsons-Test
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

#Eseguire seeders
``` shell
php artisan db:seed --class ComicsTableSeeder
```




