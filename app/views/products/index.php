<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <div class="topbar">
            <h1>Products</h1>
            <div class="nav-links">
                <a href="<?= site_url('products/create') ?>" class="btn">+ Add Product</a>
                <a href="<?= site_url('auth/logout') ?>">Logout</a>
            </div>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= html_escape($product['id']) ?></td>
                        <td><?= html_escape($product['product_name']) ?></td>
                        <td><?= html_escape($product['description']) ?></td>
                        <td><?= html_escape($product['price']) ?></td>
                        <td><?= html_escape($product['quantity']) ?></td>
                        <td>
                            <a href="<?= site_url('products/edit/' . $product['id']) ?>">Edit</a>
                            <a href="<?= site_url('products/delete/' . $product['id']) ?>" onclick="return confirm('Are you sure you want to delete this?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6">No products found.</td></tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>