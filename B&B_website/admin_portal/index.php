<?php
    require('../database.php/database.php');
    require('../database.php/products_listings_db.php');

    $action = filter_input(INPUT_POST, 'action');


    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'current_products';
        }
    }

    if ($action == 'current_products') {
        $listings = get_listings();
        include('current_products.php');
    } else if ($action == 'add_listing_form' ) {
        include('add_listing_form');
    } else if ($action == 'add_listing') {
        $categoryId = 1;
        $name = filter_input(INPUT_POST, 'name');
        $price = filter_input(INPUT_POST, 'price');
        $IBU = filter_input(INPUT_POST, 'IBU');
        $alcoholContent = filter_input(INPUT_POST, 'alcoholContent');
        $description = filter_input(INPUT_POST, 'description');
        
        add_product_listing($categoryId, $name, 
            $IBU, $alcoholContent, $price, $description);

        $listings = get_listings();
        include('current_products.php');
    } else if ($action == 'remove_listing') {
        $productId = filter_input(INPUT_POST, 'productId');
        remove_product($productId);
        $listings = get_listings();
        include('current_products.php');
    }

?>