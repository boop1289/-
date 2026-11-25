<?php
declare(strict_types=1);
namespace App\Models;
class Product {
    public function __construct(public string $title, public float $price) {}
    public function getInfo(): string { return $this->title . ': ' . number_format($this->price, 2, '.', ' ') . ' руб.'; }
}
