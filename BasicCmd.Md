To start the server at localhost port 8080, run the following command:
```
php artisan serve
```

To get laravel and jetstream, run the following commands:
```
composer require laravel/laravel
composer require laravel/jetstream
```

Here is how this project is created.
```
composer create-project laravel/laravel To-Do-App-Laravel
```

Install Jetstream
```
php artisan jetstream:install livewire
```

Install the dependencies and devDependencies and start the server.
```
npm install && npm run dev
```

To migrate the database, run the following command:
```
php artisan migrate
```

php artisan make:model TodoItem
php artisan make:migration create-todo-items-table

cp resources/views/dashboard.blade.php resources/views/todo.blade.php

php artisan make:livewire todo.show
php artisan make:livewire todo.form


