<?php

    function add_product_listing($categoryId, $name, $IBU, $alcoholContent, $price, $description) {
    global $db;
    $query = 'INSERT INTO products_listings
               (categoryId, name, IBU, alcoholContent, price, description)
              VALUES
               (:categoryId, :name, :IBU, :alcoholContent, :price, :description)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryId', $categoryId);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':IBU', $IBU);
        $statement->bindValue(':alcoholContent', $alcoholContent);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':description', $description);
        $statement->execute();
        $statement->closeCursor();

        $product_id = $db->lastInsertId();
        return $product_id;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}


?>