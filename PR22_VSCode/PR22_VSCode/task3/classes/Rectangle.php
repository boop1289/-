<?php
declare(strict_types=1);
class Rectangle extends Shape {
    public function __construct(private float $width, private float $height) {
        if (min($width, $height) <= 0) { throw new InvalidArgumentException('Некорректные размеры'); }
    }
    public function area(): float { return $this->width * $this->height; }
    public function perimeter(): float { return 2 * ($this->width + $this->height); }
    public function getName(): string { return 'Прямоугольник'; }
}
