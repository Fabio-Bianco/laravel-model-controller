# Laravel Model Controller

Questo progetto è una semplice applicazione Laravel che mostra una lista di film. È pensata per esercitarsi con i concetti fondamentali di **controller**, **model** e le **query con Eloquent**.

## Concetti trattati

### Controller
I controller gestiscono la logica delle richieste HTTP. In questo progetto, il `PageController` recupera i dati dei film dal database e li passa alle viste.

### Model
Il model `Movie` rappresenta la tabella dei film nel database. I model in Laravel permettono di interagire facilmente con i dati tramite Eloquent ORM.

### Query con Eloquent
Eloquent è l'ORM di Laravel che consente di eseguire query sul database in modo semplice e leggibile. Ad esempio, per recuperare tutti i film:
```php
$movies = Movie::all();
```
Le query Eloquent permettono anche di filtrare, ordinare e gestire relazioni tra tabelle.

## Avvio rapido

1. Installa le dipendenze con `composer install`.
2. Configura il database in `.env`.
3. Esegui le migration con `php artisan migrate`.
4. Avvia il server con `php artisan serve`.

## Struttura del progetto

- `app/Http/Controllers/PageController.php`: gestisce la logica delle pagine.
- `app/Models/Movie.php`: rappresenta il model dei film.
- `resources/views/`: contiene le viste Blade per la visualizzazione.


