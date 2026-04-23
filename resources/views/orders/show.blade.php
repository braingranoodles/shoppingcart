<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    </head>
</head>
<body>
    <nav>
        <a href="/" style="margin-right:15px;">Home</a>
        <a href="/products" style="margin-right:15px;">Products</a>
        <a href="/cart" style="margin-right:15px;">Cart</a>
        <a href="/orders">Orders</a>
    </nav>   

    <h1>Order Details</h1>

    <a href="/orders">Back to Orders</a>

    <p>Order ID: {{ $order->id }}</p>
    <p>Name: {{ $order->customer_name }}</p>
    <p>Email: {{ $order->email }}</p>
    <p>Address: {{ $order->address }}</p>
    <p>Total: ${{ $order->total }}</p>

    <hr>

    <h2>Items</h2>

    @foreach($order->items as $item)
        <div style="margin-bottom:15px;">
            <p>Product: {{ $item->product_name }}</p>
            <p>SKU: {{ $item->product_sku }}</p>
            <p>Price: ${{ $item->price }}</p>
            <p>Quantity: {{ $item->quantity }}</p>
        </div>
        <hr>
    @endforeach

</body>
</html>