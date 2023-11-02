<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>LARAVEL ACL</h2>

    @can('create_admin')
        <a href="">Create Admin</a>
    @endcan

    @can('create_guest')
        <a href="">Create Guest</a>
    @endcan

    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
    
</body>
</html>