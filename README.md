# Laravel Browser Lang

## About

The language of your Laravel Project will change according to your browser

## Installation

Use the package manager [composer](https://getcomposer.org/download/) to install transbrowser.

```bash
composer require ademozmermer/transbrowser
```

## Configuration
You can pull a configuration file into your application by running one of the following artisan command.

```bash
php artisan vendor:publish --provider="AdemOzmermer\TransBrowser\TransBrowserServiceProvider"
```

The language that will be used by default when the browser language cannot be found in the languages ​​you want to use.

```php
// transbrowser.php

'default_lang' => 'en',
```

The codes of the languages ​​you want to use

```php
// transbrowser.php

'all_langs' => [
        'en',
        'tr',
        'fr',
        'gr',
    ],
```

## Usage
if you want to use it as middleware

```php
Route::middleware('transbrowser')->group(function() {
   //
})
```
If you want it to be valid everywhere

```php
// Kernel.php
protected $middleware = [
   ...
   \AdemOzmermer\TransBrowser\Middleware\TransBrowserMiddleware::class
];
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
