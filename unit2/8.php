<?php
$products = [
    ["name" => "pencil", "price" => 10, "quantity" => 2],
    ["name" => "notebook", "price" => 20, "quantity" => 1],
    ["name" => "scale", "price" => 15, "quantity" => 3]
];
$totalPrice = 0;

foreach ($products as $product) {
    $totalPrice += $product["price"] * $product["quantity"];
}

echo "Total Price: $" . $totalPrice . "\n";
?>
