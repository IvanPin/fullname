# Сборка полного ФИО

## Требование

-------------------------
php>=7.4

## Установка

-------------------------
composer require itpin/fullname

## Использование

-------------------------
```
declare(strict_types=1);
require_once(__DIR__ . '/vendor/autoload.php');

use Itpin\Fullname\FullName;

$str = new FullName();
echo $str->getFullName("Ponamarev", "Ivan", "Yurievich");
```