<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/product" method="post">
        @csrf
        <select name="category_id" id="">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach

        </select>
        <input type="text" name="name" placeholder="name">
        <input type="text" name="price" placeholder="price">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
