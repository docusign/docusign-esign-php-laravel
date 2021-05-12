# Docusign eSign PHP Laravel
A Laravel wrapper for the [DocuSign eSign PHP Client](https://github.com/docusign/docusign-esign-php-client)

### Install Through Composer

```
composer require docusign/esign-laravel
```

Add the service provider to the `providers` array in `config/app.php`

```php
DocuSign\eSign\ESignServiceProvider::class
```

## Usage
For usage see the [DocuSign eSign PHP Client](https://github.com/docusign/docusign-esign-php-client)

### Using the `DocuSign\eSign\Client\ApiClient` class
You can create a new instance of the DocuSign Client with:
```php
$client = new DocuSign\eSign\Client\ApiClient;
```