<!DOCTYPE html>
<html>
<head>
    <title>Edit Products</title>
</head>
<body>
    <h1>Edit Products</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method("put")
        <label for="product_name">Name:</label>
        <input type="text" id="product_name" name="product_name"  value="{{$product->product_name}}"  required>

        <label for="product_description">Description:</label>
        <input type="text" id="product_description" name="product_description"  value="{{$product->product_description}}" required>

        <label for="product_price">Price:</label>
        <input type="number" id="product_price" name="product_price"  value="{{$product->product_price}}" required>

        <button type="submit">Save</button>
    </form>
</body>
</html>