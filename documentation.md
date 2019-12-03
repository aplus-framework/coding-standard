# Coding Standard Library *documentation*

Coding Standard Library makes it easy to create
*[.php_cs.dist](https://github.com/FriendsOfPHP/PHP-CS-Fixer#user-content-config-file)*
file with data already pre-configured according to accepted syntax rules.

Basically, just use the following lines of code to make the *.php_cs.dist* file
valid with all the main rules.:

```php
<?php

use Framework\CodingStandard\Config;
use Framework\CodingStandard\Finder;

return Config::create()->setFinder(
	Finder::create()->in(__DIR__)
);

```
