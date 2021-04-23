<?php require ('database.php/products_listings_db.php')?>
<?php require ('database.php/database.php')?>
<?php include 'views/header.php'?>

<nav id = 'nav'>
    <ul>
        <li><a href ='index.php' >Homepage</a></li>
        <li><a href='beer_list/index.php'>beer list</a></li>
        <li><a href='calender/index.php'>calendar</a></li>
        <li><a href='bakery/index.php'>bakery</a></li>
        <li><a href='cart/index.php'>cart</a></li>
        <li><a href='Admin_page.php'>Admin_page</a></li>
    </ul>
</nav>

<main>
    
    <div id = "table">
    <table>
        <tr>
            <td><a href='beer_list/index.php'>beer list</a></td>
        </tr>
        <tr>
            <td><a href='calender/index.php'>calendar</a></td>
        </tr>
        <tr>
            <td><a href='bakery/index.php'>bakery</a></td>
        </tr>
        <tr>
            <td><a href='cart/index.php'>cart</a></td>
        </tr>

    </table>
    </div>


    <?php
        $category = 1;
        $name = 'IPA';
        $IBU = 50;
        $alcoholContent = 4.99;
        $price = 3.99;
        $description = 'West Coast style IPA with bold hoppy flavor';


        $newBeer = add_product_listing($category, $name, $IBU, $alcoholContent, $price, $description);


    ?>
    <p><?php echo $newBeer;?></p>

</main>

<?php include 'views/footer.php'; ?>