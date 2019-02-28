<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>TestLaravel</title>
</head>
<body>
<?php $stt = 0;?>
    <table>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($userList as $user)
        <tr class="success">
            <td><?php echo(++$stt);?></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{url("users/$user->id/edit")}}">Edit</a></td>
            <td>
            <form action="{{url("users/$user->id")}}" method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" >
                    <i >DELETE</i>
                </button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>

