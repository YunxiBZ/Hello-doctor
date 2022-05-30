# Hello-doctor
This is an application for get medical appointment

## Quel est le sujet ? 🎯

Un projet pour mettre en place un site de prise de rendez-vous médicaux : Hello doctor !  


 **[Cahier des charges](doc/Cahier-des-charges.pdf)** 


## Comment Démarrer ce prejet ? 📚
## Informations utiles  

## Pré-requis:
- Un environement de développement PHP fonctionne
- Un SGBDR mysql fonctionne

## Comment démarrer ce projet: 
### 1. Installation de repository :
- Rester sur la branche `master` et Colonner le projet dans votre machine 

    ```bash
    git clone git@github.com:YunxiBZ/Hello-doctor.git
    ```
- Accéder au projet 

    ```bash
    cd laravel-parcours-YunxiBZ
    ```
- Installer les dépendances du projet à partir de composer 

    ```bash
    composer install
    ```
- Créer une copie de votre fichier .env 

    ```bash
    cp .env.example .env
    ```
- Générez votre clé d’encryption 

    ```bash
    php artisan key:generate
    ```
    Fermez et ouvrez à nouveau votre fichier .env, vous devriez remarquez que votre clé s’est généré dans la variable : APP_KEY

### 2. Creation de base de données pour ce projet

- Se connecter sur mysql étant root (super user) 

    ```bash
    mysql -u root -p

    // Il faut taper le password de utilisateur root
    ``` 

- Créer un base de données dédié à ce projet 

    ```sql
    CREATE DATABASE '$BDD_NAME;
    ```  

- Créer un utilisateur dédié à ce BDD 

    ```sql
    CREATE USER '$BDD_USER_NAME'@'localhost' IDENTIFIED BY '$BDD_USER_PASSWORD;
    ``` 

- Donner le droit de consulter le database par l’utilisateur

    ```sql
    GRANT ALL PRIVILEGES ON *.* TO '$BDD_USER_NAME'@'localhost;
    ``` 

- Déconnecter étant root (super user)

    ```sql
    exit;
    ``` 

- Se Connecter étant nouveau utilisateur créé pour verifier

    ```bash
    mysql -u BDD_USER_NAME -p

    // Il faut taper le password de nouveau utilisateur
    ``` 

- Si c'est tous bon, il faut remplir ces informations dans votre fichier `.env`

    - DB_DATABASE=nomDeDatabase
    - DB_USERNAME=nomDeUtilisateur
    - DB_PASSWORD=passwordDeUtilisateur

### 3. Ajouter les tables et contenus de votre base de donnée avec les migrations et seeders
-
    ```bash
    php artisan migrate:refresh --seed
    ``` 

### 4. Lancer le projet
-
    ```bash
    php artisan serve
    ``` 
- Default URL : http://127.0.0.1:8000/


## Fake compte pour tester l'application

-  Patient
   ```
    'email' => 'patient3@gmail.com',
    'password' => 'patient3',
    ```
-  Practitioner (docteur)
   ```
    'email' => 'practitioner1@gmail.com',
    'password' => 'practitioner1',
    ```

- Administrator

    ```
    'email' => 'admin@gmail.com',
    'password' => 'admin',
    ```

## Vous rencontrez un problème ?
- Connectez - moi  : yunxi.bancezhang@gmail.com


Enjoy !
