<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('shoes.create') }}" method="POST">
        @csrf
        Name: <input type="text" name="name"><br>
        Description: <textarea name="description"></textarea><br>
        Brand: <select name="brand_id">
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}">
                    {{ $brand->name }}
                </option>
            @endforeach
        </select><br>
        Type: <select name="type_id">
            @foreach($types as $type)
                <option value="{{ $type->id }}">
                    {{ $type->name }}
                </option>
            @endforeach
        </select><br>
        <button>Add</button>
    </form>
</body>
</html>
