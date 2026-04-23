<!DOCTYPE html>
    <head>
        <title>Create Product</title>
        <link rel="stylesheet" href="{{ asset('app.css') }}">
    </head>
<html>
<body>
    <nav>
        <a href="/" style="margin-right:15px;">Home</a>
        <a href="/products" style="margin-right:15px;">Products</a>
        <a href="/cart" style="margin-right:15px;">Cart</a>
        <a href="/orders">Orders</a>
    </nav>
    <h1>Add Product</h1>

    <form method="POST" action="/products" enctype="multipart/form-data">
        @csrf

        <label>SKU</label><br>
        <input type="text" name="sku" required><br><br>

        <label>Name</label><br>
        <input type="text" name="name" required><br><br>

        <label>Description</label><br>
        <textarea name="description"></textarea><br><br>

        <label>Price</label><br>
        <input type="number" step="0.01" name="price" required><br><br>


        <label>Image</label><br>
        <input type="file" name="image"><br><br>

        <label>Stock</label><br>
        <input type="number" name="stock" value="0"><br><br>

        <button type="submit">Save Product</button>
        <a href="/products">Return</a>
    </form>

</body>
</html>