<?php include '../views/header.php'; ?>
<?php include '../views/nav.php'?>

<style>
    <?php include '../scss/main.css'?>
</style>

<main>
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="add_listing_form">
        <input type="hidden" name="action" value="add_listing">

        <label>Beer or bread:</label>
        <input type="text" name="category" />
        <br>

        <label>Name:</label>
        <input type="text" name="name" />
        <br>

        <label>IBU:</label>
        <input type="text" name="IBU" />
        <br>

        <label>Alcohol Content:</label>
        <input type="text" name="alcoholContent" />
        <br>

        <label>Price:</label>
        <input type="text" name="price" />
        <br>

        <label>Description:</label>
        <input type="text" name="description" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br>
    </form>

</main>
<?php include '../views/footer.php'; ?>