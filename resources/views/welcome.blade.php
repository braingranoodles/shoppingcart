<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <title>Products</title>
</head>
<body>
    
    <nav>
        <a href="/" style="margin-right:15px;">Home</a>
        <a href="/products" style="margin-right:15px;">Products</a>
        <a href="/cart" style="margin-right:15px;">Cart</a>
        <a href="/orders">Orders</a>
    </nav>

    <h1>Welcome!</h1>
    <p>Here you can purchase from our short supply of valuable items. 
    <hr>


    <h2>Item of the Day</h2>

    @if($product)
        <p>{{ $product->name }}</p>
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" width="200">
        @endif

        <form method="POST" action="/cart/add/{{ $product->sku }}">
            @csrf
            <button type="submit">Add to Cart</button>
        </form>
     @else
        <p>No product found.</p>
     @endif
    <hr>

        

       
       
    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>
</html>
