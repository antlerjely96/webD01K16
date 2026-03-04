<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shoes List</title>
</head>
<body>
    <a href="{{ route('shoes.create') }}">Add a shoe</a>
    <table border="1px" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Type</th>
            <th>Brand</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($shoes as $shoe)
            <tr>
                <td>
                    {{ $shoe->id }}
                </td>
                <td>
                    {{ $shoe->name }}
                </td>
                <td>
                    {{ $shoe->description }}
                </td>
                <td>
                    {{ $shoe->type_name }}
                </td>
                <td>
                    {{ $shoe->brand_name }}
                </td>
                <td>
                    <a href="{{ route('shoes.edit', $shoe->id) }}">Edit</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('shoes.destroy', $shoe->id) }}">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
