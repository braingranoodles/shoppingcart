<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>
    <nav>
        <a href="/" style="margin-right:15px;">Home</a>
        <a href="/products" style="margin-right:15px;">Products</a>
        <a href="/cart" style="margin-right:15px;">Cart</a>
        <a href="/orders">Orders</a>
    </nav>
    <h1>Shopping Cart</h1>

    <a href="/products">Back to Products</a>

    <hr>

    @if(count($cart) == 0)
        <p>Your cart is empty.</p>
    @else
        @php $total = 0; @endphp

        @foreach($cart as $item)
            @php
                $subtotal = $item['price'] * $item['quantity'];
                $total += $subtotal;
            @endphp

            <div style="margin-bottom:20px;">
                <p>Name: {{ $item['name'] }}</p>
                <p>SKU: {{ $item['sku'] }}</p>
                <p>Price: ${{ $item['price'] }}</p>
                <p>Quantity: {{ $item['quantity'] }}</p>
                <p>Subtotal: ${{ $subtotal }}</p>

                <form method="POST" action="/cart/update/{{ $item['sku'] }}">
                    @csrf
                    <label>New Quantity</label>
                    <input type="number" name="quantity" min="1" value="{{ $item['quantity'] }}">
                    <button type="submit">Update Quantity</button>
                </form>

                <form method="POST" action="/cart/remove/{{ $item['sku'] }}">
                    @csrf
                    <button type="submit">Remove Item</button>
                </form>

                
            </div>
            <a href="/checkout">Proceed to Checkout</a>

            <hr>
        @endforeach

        <h3>Total: ${{ $total }}</h3>
    @endif

</body>
</html>