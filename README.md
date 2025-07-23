## Initialization

When project is cloned, you need to :
- Create your database 
- Copy ``.env.example`` in a ``.env`` file in root directory
- Set your database in ``.env`` file
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