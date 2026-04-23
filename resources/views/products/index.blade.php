<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>
    <nav>
        <a href="/" style="margin-right:15px;">Home</a>
        <a href="/products" style="margin-right:15px;">Products</a>
        <a href="/cart" style="margin-right:15px;">Cart</a>
        <a href="/orders">Orders</a>
    </nav>
    <hr>
    <h1>Products Page</h1>

    <a href="/products/create">Add Product</a>

    <hr>

        @if($products->count() == 0)
            <p>No products found.</p>
        @endif

        @foreach($products as $product)
            <div style="margin-bottom:20px;">
                <p>Name: {{ $product->name }}</p>
                <p>SKU: {{ $product->sku }}</p>
                <p>Price: ${{ $product->price }}</p>
                <p>Image:</p>
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="150">
                @endif
                <p>Stock: {{ $product->stock }}</p>
                <form method="POST" action="/cart/add/{{ $product->sku }}">
                @csrf
                <button type="submit">Add to Cart</button>
                <a href="/products/{{ $product->sku }}/edit" class="btn btn-primary">Edit</a>
            </form>


                

                <form method="POST" action="/products/{{ $product->sku }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
            <hr>
        @endforeach

</body>
</html>
