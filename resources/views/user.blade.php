<html>

    <head>
        <title>Users</title>
    </head>

    <body>
        <h1>List of user</h1>
        <?php foreach ($users as $user): ?>
            <hr>
            <div>id: {{$user->id}}</div>
            <div>username: {{$user->username}}</div>
            <div>password: {{$user->password}}</div>
        <?php endforeach; ?>
    </body>
</html>