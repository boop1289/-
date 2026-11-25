<?php
declare(strict_types=1);
class Triangle extends Shape {
    public function __construct(private float $a, private float $b, private float $c) {
        if (min($a, $b, $c) <= 0 || 2 * max($a, $b, $c) >= $a + $b + $c) {
            throw new InvalidArgumentException('Некорректные стороны треугольника');
        }
    }
    public function perimeter(): float { return $this->a + $this->b + $this->c; }
    public function area(): float {
        $s = $this->perimeter() / 2;
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }
    public function getName(): string { return 'Треугольник'; }
}
