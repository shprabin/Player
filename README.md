How to run this app?

1. Install mysql. Connect Laravel  to your mysql server supplying the credentials on config/database.
2. Run Migration using artisan: php artisan migrate
3. run development server: php artisan serve
4. This is api which support Player  get, post and delete verbs. URL would be http://127.0.0.1:portno/player
5. These are the files I added/modified on laravel 8 framework and api is tested using the postman.
    a. app/Http/Controller/PlayerController.php
    b. app/Models/Player.php
    c. routes/web.php

TODO:
VUE JS Frontend that uses the above exposed api to create/view/delete/list the Player.
