<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <h1>Daftar Produk Kategori {{ $category->CategoryName }}</h1>

    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Unit Price</th>
        </tr>

        @foreach ($products as $product)
        <tr>
            <td>{{ $product->ProductID }}</td>
            <td><a href="{{ route('product.get', $product->ProductID) }}">{{ $product->ProductName }}</a></td>
            <td>${{ $product->UnitPrice }}</td>
        </tr>
        @endforeach
</body>

</html>
