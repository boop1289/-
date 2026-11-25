<?php
declare(strict_types=1);
spl_autoload_register(function (string $class): void {
    $file = __DIR__ . '/classes/' . $class . '.php';
    if (is_file($file)) { require $file; }
});
$employees = [new Manager('Анна', 60000), new Developer('Иван', 80000, 3),
    new Manager('Олег', 2000), new Developer('Мария', 70000, 2)];
$total = 0;
foreach ($employees as $employee) {
    echo $employee->getInfo(), PHP_EOL;
    $total += $employee->getTotalPay();
}
echo 'Общая сумма выплат: ', number_format($total, 2, '.', ' '), ' руб.', PHP_EOL;
echo 'Количество сотрудников: ', Employee::getEmployeeCount(), PHP_EOL;
