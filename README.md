# Gravatario

Gravatario is a simple Laravel package that displays a registered users Gravatar based on their email address in your users table.  If the user does not have a registered gravatar it will show the default mystery man.

![Mystery Man](https://secure.gravatar.com/avatar/6e600a1f5823cf4a7f267b709dc530a5?d=mm)

## Installation

Via [Composer](https://getcomposer.org/)

`composer require darovi/laravel-gravatar`

## Usage

Use Gravatario in your User model.

```php
<?php namespace App;

use Darovi\Gravatar;

class User extends Model {

  use Gravatar;
  
}
```

Then in your view wherever you want to use the Gravatar

```php
<img src="{{ Auth::user()->gravatar }}">
```
