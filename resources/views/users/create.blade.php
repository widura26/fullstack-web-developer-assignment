<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <form method="POST" action="{{ route('storeUser') }}">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="age" placeholder="age">
        <input type="text" name="city" placeholder='city'>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
