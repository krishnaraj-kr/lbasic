

# Basics Notes


### Routing
Simple Routing
```php
simple routing: Route::get('about', 'PagesController@about');
```

### Controller
To create plain controller
```
php artisan make:controller --plain
```
For any help
```
php artisan help make:controller
```
To redirect to 404 page
```php
abort(404);
```

### Migration
To Migrate tables
```
php artisan migrate
```
To create a new migration
```
 php artisan make:migration create_articles_table --create="articles"
```
To add a column in an existing table
```
php artisan make:migration add_excerpt_to_articles_table --table="articles"
```
To rollback the changes after adding a column, that is to drop a colums a special composer package needed
```
composer require doctrine/dbal
```

### Views

Form creation: use a new HTML builder
```
composer require illuminate/html
```





