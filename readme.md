

# Basics Notes


### Routing
Simple Routing
```php
simple routing: Route::get('about', 'PagesController@about');
```

### Controller
To create plain controller
```cmd
php artisan make:controller --plain
```
For any help
```cmd
php artisan help make:controller
```


### Migration
To Migrate tables
```cmd
php artisan migrate
```
To create a new migration
```cmd
 php artisan make:migration create_articles_table --create="articles"
```
To add a column in an existing table
```cmd
php artisan make:migration add_excerpt_to_articles_table --table="articles"
```
