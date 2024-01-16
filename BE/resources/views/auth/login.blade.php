<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
    @csrf
    <input type="email" name="email" placeholder="enter your mail">
    <input type="password" name="password" placeholder="enter your password">
    <input type="submit" value="login">
     </form>
</body>
</html>
