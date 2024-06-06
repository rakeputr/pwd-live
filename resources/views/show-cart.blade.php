<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <h1>Carts</h1>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
        </tr>

        @foreach ($carts as $cart)
        <tr>
            <td>{{ $cart["name"] }}</td>
            <td>{{ $cart["amount"] }}</td>
            <td>${{ $cart["totalPrice"] }}</td>
        </tr>
        @endforeach
</body>

</html>
