<?php include '../views/header.php'?>
<?php include '../views/nav.php'?>

<style>
    <?php include '../scss/main.css'?>
</style>

<main>
    <h2>Listings</h2>
            <table>
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>IBU</th>
                    <th>Price</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($listings as $listing) : ?>
                <tr>
                    <td><?php echo $listing['productId']; ?></td>
                    <td><?php echo $listing['name']; ?></td>
                    <td><?php echo $listing['IBU']; ?></td>
                    <td><?php echo $listing['price']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
    <p><a href ='add_listing_form.php'>Add Listing</a></p>

    <h2>Remove Item</h2>
    <form action="index.php" method="post" id="remove_listing_form">
        <input type="hidden" name="action" value="remove_listing">

        <label>product Id:</label>
        <input type="text" name="productId" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="remove" />
        <br>
    </form>
</main>

<?php include '../views/footer.php'?>