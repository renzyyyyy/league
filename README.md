# League

## GitHub
```
git clone https://github.com/renzyyyyy/league
``` 
## Docker
* This can be built using docker
```
docker-compose up --build -d
```
* Follow the bash commands. Make sure to run the php artisan commands in the container terminal
* The site will be available in http://localhost:8088/
## Bash
* navigate to project folder /league
* navigate to /src and run
```
composer install
```
* create your .env file and edit DB_ settings.
* You may need to generate app key
```
php artisan key:generate
```
* We need to build the database
```
php artisan migrate
```
* Run the seeders
```
php artisan db:seed --class=RolesSeeder
php artisan db:seed --class=ChampionsSeeder
```

