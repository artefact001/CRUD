Application CRUD PHP/MySQL
Cette application est un exemple simple de CRUD (Create, Read, Update, Delete) en PHP avec une base de données MySQL. Elle permet de gérer une liste d'utilisateurs avec les fonctionnalités suivantes :

Ajout d'un utilisateur
Affichage de la liste des utilisateurs
Modification des informations d'un utilisateur
Suppression d'un utilisateur
Configuration requise
Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre système :

Serveur web (comme Apache)
PHP (version 7 ou supérieure)
MySQL (version 5.6 ou supérieure)
Installation
Clonez ce dépôt dans le répertoire de votre serveur web :
bash
git clone https://github.com/votre-utilisateur/application-crud-php-mysql.git
Importez la base de données crud.sql fournie dans votre serveur MySQL.

Configurez les informations de connexion à la base de données dans le fichier config.php :


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'crud');
Lancez votre serveur web et accédez à l'application via votre navigateur.
Utilisation
Accédez à l'application via votre navigateur.
Sur la page principale, vous verrez la liste des utilisateurs.
Pour ajouter un nouvel utilisateur, cliquez sur le bouton "Ajouter un utilisateur" et remplissez le formulaire.
Pour modifier les informations d'un utilisateur existant, cliquez sur le bouton "Modifier" à côté de l'utilisateur correspondant dans la liste.
Pour supprimer un utilisateur, cliquez sur le bouton "Supprimer" à côté de l'utilisateur correspondant dans la liste.
Auteur
[cheikh tidiane sané]



cette application CRUD  permet de de faire une gestion des utilisateurs a savoir crée , modifier, mettre a jour et supprimer d'ou l'accronime CRUD.




