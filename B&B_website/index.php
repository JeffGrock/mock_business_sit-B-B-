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
        <li><a href='admin_portal/index.php'>Admin Portal</a></li>
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

</main>

<?php include 'views/footer.php'; ?>