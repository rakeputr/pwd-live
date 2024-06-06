<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <h1>{{ $product->ProductName }}</h1>
    <ul>
        <li>ID : {{ $product->ProductID }}</li>
        <li>Supplier : {{ $product->supplier->CompanyName }}</li>
        <li>Kategori : {{ $product->category->CategoryName }}</li>
        <li>Harga : ${{ $product->UnitPrice }}</li>
    </ul>

    <form action="{{ route('cart.post') }}" method="post">
        @csrf
        <input type="hidden" value="{{ $product->ProductID }}" name="id" />
        <input type="number" value="1" name="amount" />
        <button type="submit">add to cart</button>
    </form>

</body>

</html>
