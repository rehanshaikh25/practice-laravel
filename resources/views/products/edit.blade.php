<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <!-- Form fields for editing product data -->
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="title" value="{{ $product->title }}">
        </div>

        <!-- Add more form fields as needed -->

        <button type="submit">Update Product</button>
    </form>

    <!-- Delete Form -->
    <form method="POST" action="{{ route('products.destroy', $product->id) }}" onsubmit="return confirm('Are you sure you want to delete this product?');">
        @csrf
        @method('DELETE')

        <button type="submit" style="color: red;">Delete Product</button>
    </form>
</body>
</html>
