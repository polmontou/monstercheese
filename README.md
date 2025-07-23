## Initialization

When project is cloned, you need to :
- Create your database 
- Copy ``.env.example`` in a ``.env`` file in root directory
- Set your database in ``.env`` file
- At the beginnig of your ``.env`` you have to specify the **APP_KEY**, call me and I'll give it to you
- Install all the dependencies with :
    ```
    composer install
    ```
- Run if you're not using SQLite as database:
    ```
    php artisan migrate
    ```
- Run :
    ```
    npm install && npm run build
    ```
    then 
    ```
    composer run dev
    ```