# HttpEnum
[![PHP Version Require](http://poser.pugx.org/reiterus/http-enum/require/php)](https://packagist.org/packages/reiterus/http-enum)
[![License](http://poser.pugx.org/reiterus/http-enum/license)](https://packagist.org/packages/reiterus/http-enum)
[![Latest Stable Version](http://poser.pugx.org/reiterus/http-enum/v)](https://packagist.org/packages/reiterus/http-enum) 
[![Total Downloads](http://poser.pugx.org/reiterus/http-enum/downloads)](https://packagist.org/packages/reiterus/http-enum)  

Constants in the form of enum classes describing HTTP methods, codes, headers, and other useful things.

## Using
```php
use Reiterus\HttpEnum\Code;
require './src/Code.php';
echo Code::BAD_GATEWAY->value;
```
