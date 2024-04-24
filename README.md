### InternNet - Plateforme de Stages
InternNet est une plateforme en ligne visant à faciliter la recherche de stages en développement web en regroupant toutes les offres disponibles en un seul endroit.

## Suivez ces étapes pour lancer l'application sur votre machine locale :

Prérequis
PHP 7.4, Composer, MySQL

Installation
Clonez le dépôt git :
git clone <url-du-depot>


Générez la clé d'application :
```bash
php artisan key:generate
```

Exécutez les migrations :
```bash
php artisan migrate
```

Lancez le serveur :
```bash
php artisan serve
```

et cliquer sur http://localhost:8000.
