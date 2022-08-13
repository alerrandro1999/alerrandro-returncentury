# PHP Century

Simples pacote para retornar o século do ano informado.

## Requisitos 

- PHP >= 7.0
- Composer

## Instalação
Instale o pacote utilizando **Composer**
> composer require alerrandro/returncentury


## Utilização



```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Alerrandro\century\ReturnCentury;


$century = ReturnCentury::century(2022);
```

Suporte somente para os séculos d.C.

