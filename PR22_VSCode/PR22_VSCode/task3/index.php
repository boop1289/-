<?php
declare(strict_types=1);
spl_autoload_register(function (string $class): void {
    $file = __DIR__ . '/classes/' . $class . '.php';
    if (is_file($file)) { require $file; }
});
$shapes = [new Circle(5), new Rectangle(4, 6), new Triangle(3, 4, 5)];
foreach ($shapes as $shape) { echo $shape->describe(), PHP_EOL; }
// Shape абстрактный, поэтому создать его экземпляр напрямую нельзя.
try { new Shape(); } catch (Error $e) { echo 'Проверка: ', $e->getMessage(), PHP_EOL; }
