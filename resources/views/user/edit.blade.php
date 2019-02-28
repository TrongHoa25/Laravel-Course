<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url("user/$user->id")}}" method="post">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="{{$user['name']}}"></td>
            </tr>
            <tr>
                <td> Email</td>
                <td><input type="email" name="email" value="{{$user['email']}}"></td>
            </tr>
            <tr>
                <td>PassWord</td>
                <td><input type="password" name="password" value="{{$user['password']}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>