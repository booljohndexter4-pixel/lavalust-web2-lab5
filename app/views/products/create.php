<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Add Product</h1>
        <div class="card">
            <form action="<?= site_url('products/create') ?>" method="post">
                <label>Product Name</label>
                <input type="text" name="product_name" required>

                <label>Description</label>
                <textarea name="description" rows="3"></textarea>

                <label>Price</label>
                <input type="number" step="0.01" name="price" required>

                <label>Quantity</label>
                <input type="number" name="quantity" required>

                <button type="submit" class="btn">Save</button>
            </form>
            <p class="footer-link"><a href="<?= site_url('products') ?>">← Back to list</a></p>
        </div>
    </div>
</body>
</html>