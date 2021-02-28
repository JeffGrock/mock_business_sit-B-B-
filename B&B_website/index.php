<?php include 'views/header.php'?>

<nav id = 'nav'>
    <ul>
        <li><a href ='index.php' >Homepage</a></li>
        <li><a href='beer_list/index.php'>beer list</a></li>
        <li><a href='calendar/index.php'>calendar</a></li>
        <li><a href='bakery/index.php'>bakery</a></li>
        <li><a href='cart/index.php'>cart</a></li>
    </ul>
</nav>

<main>
    <div id = "table">
    <table>
        <tr>
            <td><a href='beer_list/index.php'>beer list</a></td>
        </tr>
        <tr>
            <td><a href='calendar/index.php'>calendar</a></td>
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