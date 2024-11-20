<?php

    function load_products_from_ini($filename) {
        $products = parse_ini_file($filename, true);
        return $products;
    }

    function display_product_card($product) {
        echo '<div class="prod-card">';
        echo '<h2>' . $product['name'] . '</h2>';
        echo '<p>ID: ' . $product['id'] . '</p>';
        echo '<p>Описание: ' . $product['description'] . '</p>';
        echo '<p>Цена: ' . $product['price'] . ' руб.</p>';
        echo '<p>Количество на складе: ' . $product['stock'] . '</p>';
        echo '</div>';
    }

    function display_all_products($products) {
        foreach ($products as $product) {
            display_product_card($product);
        }
    }

    $products = load_products_from_ini('products.ini');
    display_all_products($products);

?>