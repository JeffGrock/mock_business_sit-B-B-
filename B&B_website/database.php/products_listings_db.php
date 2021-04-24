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

    function remove_product($productId) {
        global $db;
        $query = 'DELETE FROM products_listings
                  WHERE productId = :productId';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':productId', $productId);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    function get_product_by_name($name) {
        global $db;
        $query = 'SELECT *
                  FROM products_listings
                  WHERE name = :name';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->execute();
            $result = $statement->fetch();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    function get_listings() {

        global $db;
        $query = 'SELECT * FROM products_listings
                  ORDER BY productID';
        try {
            $statement = $db->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    function get_beer_listings() {
        $categoryId = 1;
        global $db;
        $query = 'SELECT * FROM products_listings
                  WHERE categoryID = :categoryId
                  ORDER BY productID';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':categoryId', $categoryId);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }
    function get_bread_listings() {
        $categoryId = 2;
        global $db;
        $query = 'SELECT * FROM product_listings
                  WHERE categoryID = :categoryId
                  ORDER BY productID';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':categoryId', $categoryId);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    function update_product($productId, $categoryId, $name, $IBU, $alcoholContent, $price, $description) {
        global $db;
        $query = 'UPDATE Products
                SET name = :name,
                    IBU = :IBU,
                    price = :price,
                    alcoholContent = :alcoholContent,
                    categoryId = :categoryId,
                    description = :description
                WHERE productId = :productId';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':IBU', $IBU);
            $statement->bindValue('alcoholContent', $alcoholContent);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':price', $price);
            $statement->bindValue(':category_id', $category_id);
            $statement->bindValue(':product_id', $product_id);
            $row_count = $statement->execute();
            $statement->closeCursor();
            return $row_count;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

?>