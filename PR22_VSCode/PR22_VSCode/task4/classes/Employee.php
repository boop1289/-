<?php
declare(strict_types=1);
abstract class Employee {
    private static int $employeeCount = 0;
    public const MIN_BONUS = 500;
    public function __construct(protected string $name, protected float $salary) {
        self::$employeeCount++;
    }
    abstract public function calculateBonus(): float;
    public function getTotalPay(): float { return $this->salary + $this->calculateBonus(); }
    public function getInfo(): string {
        return sprintf('%s: оклад = %.2f, премия = %.2f', $this->name, $this->salary, $this->calculateBonus());
    }
    public static function getEmployeeCount(): int { return self::$employeeCount; }
}
