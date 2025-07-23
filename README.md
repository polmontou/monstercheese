## Initialization

When project is cloned, you need to :
- Set your database in ``.env`` file
- Install all the dependencies with :
    ```
    composer install
    ```
- Run if you're not using SQLite as database:
    ```
    php artisan migrate
    ```
