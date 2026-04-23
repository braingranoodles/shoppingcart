<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>

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
    <h1>Orders</h1>

    <a href="/products">Back to Products</a>

    <hr>

    @if($orders->count() == 0)
        <p>No orders found.</p>
    @else
        @foreach($orders as $order)
            <div style="margin-bottom:20px;">
                <p>Order ID: {{ $order->id }}</p>
                <p>Name: {{ $order->customer_name }}</p>
                <p>Email: {{ $order->email }}</p>
                <p>Total: ${{ $order->total }}</p>

                <a href="/orders/{{ $order->id }}">View Order</a>
            </div>
            <hr>
        @endforeach
    @endif

</body>
</html>