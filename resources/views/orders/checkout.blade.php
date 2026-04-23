<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>
    <nav>
        <a href="/" style="margin-right:15px;">Home</a>
        <a href="/products" style="margin-right:15px;">Products</a>
        <a href="/cart" style="margin-right:15px;">Cart</a>
        <a href="/orders">Orders</a>
    </nav>
    <h1>Checkout</h1>
    <hr>

    <a href="/cart">Back to Cart</a>

    <form method="POST" action="/checkout">

        @csrf

        <label>Name</label><br>
        <input type="text" name="customer_name" required><br><br>

        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Address</label><br>
        <input type="text" name="address" required><br><br>



        <button type="submit">Place Order</button>
    </form>
    <hr>

</body>
</html>