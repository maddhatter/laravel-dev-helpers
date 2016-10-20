Just a package for me to include in my projects with a bunch of dev dependencies I use in all of my Laravel 5.1 projects... trying to DRY my processes

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

To use configurable generator stub paths, pull in forked repo:

```json
"repositories": [
    {
        "type": "vcs",
        "url":  "https://github.com/maddhatter/Laravel-5-Generators-Extended.git"
    }
],
"require-dev": {
    "laracasts/generators": "dev-configurable-stubs as 1.1.1000",
},
```