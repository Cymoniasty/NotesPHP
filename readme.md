# Zaprojektowanie wstępnego układu aplikacji - layout

* PSR-12 - https://www.php-fig.org/psr/psr-12/

## Struktura katalogów

<pre>
project_dir
  ├── src
  │   └── ...
  ├── templates
  │   ├── pages
  │   │   └─ ...
  │   └ ...
  └ index.php
</pre>

## Cel

Stworzymy szablon html z wydzielonymi miejscami na:

* nagłówek
* menu
* kontent strony

Dodamy strony:

* formularz dodawania nowej notatki
* lista notatek - czyli strona główna

Zlinkujemy strony ze sobą.

## Krok po kroku

1. wyniesienie funkcji debagujących do osobnego pliku
   * Importowanie plików
     * include, include_once
     * require, require_once
2. połączenie html i php
3. wyniesienie html do osobnych plików
4. utworzenie klasy widoku
#   N o t e s P H P 
 
 

# Baza danych - zapis notatki oraz wyjątki

* wprowadzenie teoretyczne do baz danych - TOOD
* wprowadzenie teoretyczne do wyjątków - TODO

## Cel

* Wdrożenie obsługi bazy danych. Zapisywanie notatek w DB.
* Wprowadzenie obsługi błędów.

## Krok po kroku

1. utworzenie konfiguracji dla aplikacji
2. przekazanie konfiguracji do kontrolera
3. utworzenie biblioteki do obsługi bazy danych
   * metoda do walidacji konfiguracji
   * nawiązywanie połączenia
   * dodanie obsługi błędów - ustawienie ENV
4. utworzenie tabeli w DB
5. dodanie metod odpowiedzialnych za zapis