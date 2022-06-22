<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>提交</title>
</head>
<body>
    <form action="/api/getform" method="POST">
        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="delete"> -->
        <!-- 上两句代码的快捷方式 -->
        <!-- @csrf -->
        @method("POST")
        <button type="submit">提交</button>
    </form>
</body>
</html>