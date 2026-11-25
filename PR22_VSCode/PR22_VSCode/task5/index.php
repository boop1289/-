<?php
declare(strict_types=1);
use App\Product;
use App\Book;
use App\Electronics;
spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';
    if (str_starts_with($class, $prefix)) {
        $file = __DIR__ . '/src/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
        if (is_file($file)) { require $file; }
    }
});
$catalog = [new Book('PHP', 1200), new Electronics('Ноутбук', 50000, 10),
    new Book('Алгоритмы', 1500), new Electronics('Мышь', 2000, 5), new Book('SQL', 800)];
$total = 0;
foreach ($catalog as $product) {
    echo $product->getInfo(), PHP_EOL;
    $total += $product->getFinalPrice();
}
echo 'Сумма каталога: ', number_format($total, 2, '.', ' '), ' руб.', PHP_EOL;
echo 'Количество товаров: ', Product::getCount(), PHP_EOL;
