<?php
declare(strict_types=1);
class Order {
    public function __construct(private User $user, private array $products) {}
    public function getTotal(): float {
        return array_sum(array_map(fn(Product $p): float => $p->price, $this->products));
    }
}
