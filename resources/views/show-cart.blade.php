<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <h1>Carts</h1>
    <a href="{{route('category')}}">back to category</a>

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
        <tr>
            <td colspan="2"><strong>Grand Total</strong></td>
            <td><strong>${{ $grandTotal }}</strong></td>
        </tr>
    </table>

</body>

</html>