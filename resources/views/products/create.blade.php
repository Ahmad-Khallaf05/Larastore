<!DOCTYPE html>
<html>
<head>
    <title>Create Products</title>
</head>
<body>
    <h1>Create New Products</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="product_name">Name:</label>
        <input type="text" id="product_name" name="product_name" required>

        <label for="product_description">Description:</label>
        <input type="text" id="product_description" name="product_description" required>

        <label for="product_price">Price:</label>
        <input type="number" id="product_price" name="product_price" required>

        <button type="submit">Create</button>
    </form>
</body>
</html>