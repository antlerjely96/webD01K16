<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('shoes.update', $shoe->id) }}" method="POST">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $shoe->name }}"><br>
        Description: <textarea name="description">
            {{ $shoe->description }}
        </textarea><br>
        Brand: <select name="brand_id">
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}"
                    @if($brand->id == $shoe->brand_id)
                        {{ 'selected' }}
                    @endif
                >
                    {{ $brand->name }}
                </option>
            @endforeach
        </select><br>
        Type: <select name="type_id">
            @foreach($types as $type)
                <option value="{{ $type->id }}"
                    @if($type->id == $shoe->type_id)
                        {{ 'selected' }}
                    @endif
                >
                    {{ $type->name }}
                </option>
            @endforeach
        </select><br>
        <button>Update</button>
    </form>
</body>
</html>
