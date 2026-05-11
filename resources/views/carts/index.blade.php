<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('carts.updateCart') }}">
        @csrf
        <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($carts as $id => $products)
                <tr>
                    <td>
                        {{ $id }}
                    </td>
                    <td>
                        {{ $products['name'] }}
                    </td>
                    <td>
                        {{ $products['price'] }}
                    </td>
                    <td>
                        <a href="{{ route('carts.minus', $id) }}">-</a>
                        <input type="text" name="updateQuantity[{{$id}}]" value="{{ $products['quantity'] }}">
                        <a href="{{ route('carts.plus', $id) }}">+</a>
                    </td>
                    <td></td>
                    <td>

                    </td>
                    <td>
                        <a href="{{ route('carts.removeOneProduct', $id) }}">Remove</a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="7">
                    <a href="{{ route('carts.deleteCart') }}">Delete Cart</a>
                </td>
            </tr>
        </tbody>
    </table>
    <button>Update cart</button>
</form>
</body>
</html>
