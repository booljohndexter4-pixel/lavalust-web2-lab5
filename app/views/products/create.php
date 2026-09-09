<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="<?= site_url('products/create') ?>" method="post">
        <label>Product Name:</label><br>
        <input type="text" name="product_name" required><br><br>

        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Quantity:</label><br>
        <input type="number" name="quantity" required><br><br>

        <button type="submit">Save</button>
    </form>
    <p><a href="<?= site_url('products') ?>">Back to list</a></p>
</body>
</html>