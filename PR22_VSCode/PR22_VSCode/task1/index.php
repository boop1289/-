<?php
declare(strict_types=1);
spl_autoload_register(function (string $class): void {
    $file = __DIR__ . '/classes/' . $class . '.php';
    if (is_file($file)) { require $file; }
});
$user = new User('Иван', 'ivan@example.com');
$products = [new Product('Книга', 500), new Product('Ручка', 50)];
$order = new Order($user, $products);
echo $user->getInfo(), PHP_EOL;
foreach ($products as $product) { echo $product->getInfo(), PHP_EOL; }
echo 'Сумма заказа: ', $order->getTotal(), ' руб.', PHP_EOL;
