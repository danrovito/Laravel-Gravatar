# Laravel Gravatar

Laravel Gravatar is a simple Laravel package that displays a registered users Gravatar based on their email address in your users table.  If the user does not have a registered gravatar it will show the default mystery man.

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

## License

Laravel Slack Invite is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Bug Reporting and Feature Requests

Please add as many details as possible regarding submission of issues and feature requests

## Disclaimer

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
