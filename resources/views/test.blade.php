<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>这是 {{ $users[0]->username }} 用户</p>
    <p>{{ $arr[0] }}</p>
    
    <script>
        var app = @json($users);
        console.log(app);
    </script>
</body>
</html>