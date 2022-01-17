# Installation
## Cloner le Repository
```
git clone https://github.com/Miarimalala/test_symfony.git
cd test_symfony/
```
## Installer les dépendances du projet
```
composer install
```
## Préparer la base de données
editer le fichier de configuration ```.env``` pour éditer la ligne ```DATABASE_URL```, selon les parametres de votre SGBD MySQL
par exemple : DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
## Créer la base de données
```
symfony console doctrine:database:create
```
## Effectuer la migration
```
symfony console make:migration
symfony console doctrine:migrations:migrate
```
## Lancer le serveur local
```
symfony serve
```
# Lancez l'application

Visitez l'url ```https://127.0.0.1:8000/singlepage``` dans votre navigateur

![Capture d’écran de 2022-01-17 04-53-08](https://user-images.githubusercontent.com/96646993/149689184-a2fd584c-4cda-40f4-bd4d-d706a7908965.png)

## Choisissez l'entité dirigeant ou société avec le bouton du haut
## Choisissez l'onglet ajout ou liste avec les boutons Ajout ou Liste
## L'onglet Ajout permet de remplir les formulaires Dirigeant ou Société et entrer les données dans la base de données
## L'onglet Liste permet de voir les listes des dirigeants et/ou des sociétés que vous avez entrés

## Information sur l'application
L'application permet d'envoyer et de lister le données de 2 différentes entités (dirigeant et société) sur une seule page
## Technologies utilisés:
-Symfony
-Bootstrap
-Vue.js
-Mysql (MariaDB)
-Vanilla PHP, Javascript, CSS

# Auteur de l'appli
```
RAZAFIMANAMPY Miarimalala Tokinambinina
034 09 685 78
tokinambinina@gmail.com
```
