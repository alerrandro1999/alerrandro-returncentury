# PHP Century

Pacote para retornar o século do ano informado.

## Requisitos 
- PHP >= 7.4
- Composer

## Instalação
Instale o pacote utilizando **Composer**
```
composer require alerrandro/returncentury
```


## Utilização
```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Alerrandro\century\ReturnCentury;


$century = ReturnCentury::century(1999); // 20;

$century = ReturnCentury::centuryNow(); // 21 
```

A função **century** deve receber o parâmetro com o ano.

A função **centuryNow** retorna o século do ano atual.

## Desenvolvedor

- Linkedin - [Alerrandro Borges](https://www.linkedin.com/in/alerrandro-borges-b45a6a1a1/)
- Email - [alerrandrokaton@gmail.com](mailto:alerrandrokaton@gmail.com)


