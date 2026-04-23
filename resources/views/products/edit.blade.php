<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
        <link rel="stylesheet" href="{{ asset('app.css') }}">
    </head>
<body>
    <nav>
        <a href="/" style="margin-right:15px;">Home</a>
        <a href="/products" style="margin-right:15px;">Products</a>
        <a href="/cart" style="margin-right:15px;">Cart</a>
        <a href="/orders">Orders</a>
    </nav>
    <h1>Edit Product</h1>
    <hr>

    <form method="POST" action="/products/{{ $product->sku }}">
        @csrf
        @method('PUT')

        <label>Current SKU: {{ $product->sku }}</label><br>
        <input type="text" name="sku" required><br><br>

        <label>Name: {{ $product->name }}</label><br>
        <input type="text" name="name" required><br><br>

        <label>Description: {{ $product->description }}</label><br>
        <textarea name="description"></textarea><br><br>

        <label>Price: {{ $product->price }}</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Image: {{ $product->image }}</label><br>
        <input type="text" name="image"><br><br>

        <label>Stock: {{ $product->stock }}</label><br>
        <input type="number" name="stock" value="0"><br><br>

        <button type="submit">Save Product</button>
        <a href="/products">Return</a>
    </form>
    <hr>

</body>
</html>