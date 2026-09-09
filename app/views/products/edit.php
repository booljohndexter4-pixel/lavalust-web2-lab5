<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <div class="card">
            <form action="<?= site_url('products/edit/' . $product['id']) ?>" method="post">
                <label>Product Name</label>
                <input type="text" name="product_name" value="<?= html_escape($product['product_name']) ?>" required>

                <label>Description</label>
                <textarea name="description" rows="3"><?= html_escape($product['description']) ?></textarea>

                <label>Price</label>
                <input type="number" step="0.01" name="price" value="<?= html_escape($product['price']) ?>" required>

                <label>Quantity</label>
                <input type="number" name="quantity" value="<?= html_escape($product['quantity']) ?>" required>

                <button type="submit" class="btn">Update</button>
            </form>
            <p class="footer-link"><a href="<?= site_url('products') ?>">← Back to list</a></p>
        </div>
    </div>
</body>
</html>