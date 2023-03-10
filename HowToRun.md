Install Composer and NodeJS too...

1. Clone the repository

```
git clone https://github.com/ZXY-CC-3ag13/To-Do-App-Laravel.git
```

2. Navigate to the project folder

```
cd To-Do-App-Laravel
```

3. Install dependencies
```
composer install
```
```
npm install
```

3. Create a copy of your .env file
```
cp .env.example .env
```

3. Generate an app encryption key
```
php artisan key:generate
```

4.  Create an empty database for our application

5. In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD

6. Migrate the database
```
php artisan migrate
```

To add some seed data to the database, run the following command
```
php artisan db:seed --class=UsersTableSeeder
```