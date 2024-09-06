<?php

function totalQuantity(string $productName, array $products): int {
    foreach ($products as $product) {
        if (strtolower($product['product_name']) === strtolower($productName)) {
            return $product['quantity'];
        }
    }
    return 0;
}

function addStock(string $productName, int $quantity, array &$products): void {
    foreach ($products as &$product) {
        if (strtolower($product['product_name']) === strtolower($productName)) {
            $product['quantity'] += $quantity;
            return;
        }
    }
    // If product doesn't exist, add a new one
    $products[] = ['product_name' => $productName, 'quantity' => $quantity];
}

$products = [
    ['product_name' => 'Apple', 'quantity' => 50],
    ['product_name' => 'Banana', 'quantity' => 30],
];

echo totalQuantity('Apple', $products);
addStock('Orange', 20, $products);
addStock('Apple', 10, $products);
print_r($products);

