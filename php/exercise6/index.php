<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $products = [
        ['name' => 'Ручка', 'price' => 5, 'stock' => 100],
        ['name' => 'Ноутбук', 'price' => 1200, 'stock' => 10],
        ['name' => 'Блокнот', 'price' => 15, 'stock' => 50],
        ['name' => 'Мышь', 'price' => 45, 'stock' => 0],
        ['name' => 'Клавиатура', 'price' => 70, 'stock' => 20],
        ['name' => 'Карандаш', 'price' => 2, 'stock' => 200],
    ];

    $filteredProducts = array_filter($products, function($product) {
        return $product['price'] < 50 && $product['stock'] > 0;
    });

    echo "Товары с ценой меньше 50 и наличием на складе:\n";
    echo "----------------------------------------\n";
    
    foreach ($filteredProducts as $product) {
        echo "Название: " . $product['name'] . "\n";
        echo "Цена: " . $product['price'] . "$\n";
        echo "В наличии: " . $product['stock'] . " шт.\n";
        echo "----------------------------------------\n";
    }
?>
</body>
</html>