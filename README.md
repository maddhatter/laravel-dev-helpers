Just a package for me to include in my projects with a bunch of dev dependencies I use in all of my Laravel 5.* projects... trying to DRY my processes

```
composer require maddhatter/laravel-dev-helpers dev-master --dev
```

### `AppServiceProvider.php`

```php
/**
 * Register any application services.
 *
 * @return void
 */
public function register()
{
    if (config('app.debug', false)) {
        $this->app->register(\MaddHatter\DevHelpers\ServiceProvider::class);
    }
}
```

### composer.json

Customized `laracasts/generators` fork:

```json
"repositories": [
    {
        "type": "vcs",
        "url":  "https://github.com/maddhatter/Laravel-5-Generators-Extended.git"
    }
],
```
#### Laravel <5.4
```json
"require-dev": {
    "laracasts/generators": "dev-custom",
},
```
#### Laravel 5.4
```json
"require-dev": {
    "laracasts/generators": "dev-custom-5.4",
},
```