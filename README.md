# php-cs-fixer-config

Provides a configuration factory and multiple rule sets for [`friendsofphp/php-cs-fixer`](http://github.com/FriendsOfPHP/PHP-CS-Fixer).

## Installation

Add repository to `composer.json`:
```
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/UksusoFF/php-cs-fixer-config"
        }
    ],
```

Run
```
composer require --dev uksusoff/php-cs-fixer-config
```

## Usage

Pick one of the rule sets:

* [`UksusoFF\PhpCsFixer\RuleSet\Laravel`](src/RuleSet/Laravel.php)

Create a configuration file `.php_cs` in the root of your project:

```php
<?php

$config = \UksusoFF\PhpCsFixer\Factory::fromRuleSet(new \UksusoFF\PhpCsFixer\RuleSet\Laravel());

$config->getFinder()->in(__DIR__);

return $config;
```

## Credits

This project is based on [ergebnis/php-cs-fixer-config](https://github.com/ergebnis/php-cs-fixer-config).
