<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Dashboard</title>
</head>
<body>
    <p>dalam kondisi login</p>
    <form action="{{ route('do-logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>