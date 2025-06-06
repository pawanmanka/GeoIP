# Laravel GeoIP

[![Latest Version](https://img.shields.io/packagist/v/yourvendor/laravel-geoip.svg?style=flat-square)](https://packagist.org/packages/yourvendor/laravel-geoip)
[![Total Downloads](https://img.shields.io/packagist/dt/yourvendor/laravel-geoip.svg?style=flat-square)](https://packagist.org/packages/yourvendor/laravel-geoip)
[![License](https://img.shields.io/packagist/l/yourvendor/laravel-geoip.svg?style=flat-square)](LICENSE)

**Laravel GeoIP** is a simple package to retrieve geographical location data from an IP address using the [ip-api.com](http://ip-api.com/) API.

## 🔧 Installation

Install via Composer:

```bash
composer require yourvendor/laravel-geoip


If you're using Laravel <5.5, you must manually register the service provider in config/app.php:

```php
'providers' => [
    // ...
    YourVendor\GeoIP\GeoIPServiceProvider::class,
],

```

⚙️ Configuration
Publish the configuration file (optional):

```php
php artisan vendor:publish --tag=config

```
This will create a config/geoip.php file you can modify.

🚀 Usage
Use the package like this:

```php
use GeoIP;

$location = GeoIP::lookup(); // Uses current request IP
$customLocation = GeoIP::lookup('8.8.8.8'); // Pass a specific IP

dd($location);

```

Sample Output

```json
{
    "status": "success",
    "country": "United States",
    "regionName": "California",
    "city": "Mountain View",
    "zip": "94043",
    "lat": 37.422,
    "lon": -122.084,
    "timezone": "America/Los_Angeles",
    "isp": "Google LLC",
    "query": "8.8.8.8"
}

```

✅ Features
- Get geo location from IP address
- Automatically detect current IP
- Simple API, no setup required
- Uses public API (ip-api.com)

Developed with ❤️ by Pawan Manka