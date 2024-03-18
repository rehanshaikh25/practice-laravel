<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
<h1>Add New Product</h1>
<form method="post" action="{{route('products.store')}}">
    @csrf
    @method('post')
    <div>
        <label>Name</label>
        <input type="text" name='title' placeholder='Title' required/>
    </div>

    <div>
        <input type="submit" value="Save"/>
    </div>
</form>
</body>
</html>