<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="form-add">
        <input type="text" name="nd">
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        <button type="submit">Send</button>
    </form>
</body>
</html>