# laravel-unique-slug-generator

#### A simple but beautiful unique slug generator for laravel eloquent model.
---


## Installation
```sh
composer require kaamrul/laravel-unique-slug
```

## Use from Controller

### Import first the UniqueSlug Facades

```php
use Kaamrul\UniqueSlug\Facades\UniqueSlug;
```

```php

UniqueSlug::generate(App\Models\User::class, 'kaamrul', 'name');
// kaamrul


UniqueSlug::generate(App\Models\User::class, 'kaamrul', 'name');
// kaamrul-1


UniqueSlug::generate(App\Models\User::class, 'kaamrul', 'name');
// kaamrul-2
```

### Publish Configuration
```php
php artisan vendor:publish kaamrul/laravel-unique-slug
```

## Contribution
You're open to create any Pull Request.