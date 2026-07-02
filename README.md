# Laravel SMS Gateway Magfa Driver

Magfa SMS gateway driver for [`misaf/laravel-sms-gateway`](https://github.com/misaf/laravel-sms-gateway).

## Installation

```bash
composer require misaf/laravel-sms-gateway-magfa
```

Laravel package discovery registers the driver service provider automatically.

## Configuration

```env
SMS_GATEWAY_DRIVER=magfa
SMS_GATEWAY_MAGFA_USERNAME=your-username
SMS_GATEWAY_MAGFA_PASSWORD=your-password
```

```php
// config/services.php
'magfa' => [
    'username' => env('SMS_GATEWAY_MAGFA_USERNAME'),
    'password' => env('SMS_GATEWAY_MAGFA_PASSWORD'),
],
```

## Usage

```php
use Misaf\LaravelSmsGateway\Facade\SmsGateway;

$response = SmsGateway::driver('magfa')->send([
    'to'      => '09123456789',
    'message' => 'Hello',
]);
```

The payload is passed directly to Magfa, so use the fields expected by the Magfa API.

Use `request()` when you need direct access to Laravel's HTTP client:

```php
$request = SmsGateway::driver('magfa')->request();
```

## Testing

```bash
composer test
composer analyse
```

## License

MIT
