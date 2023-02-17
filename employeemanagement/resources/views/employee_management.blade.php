<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .maincontainer{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px
        }
    </style>
</head>
<body>
    <div class="maincontainer">
        <h1>Employees</h1>
        <a href="/addemployee">Add Employee</a>
        <table border="1">
       
            <tr >
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Job</th>
                <th>Action</th>
                
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->number}}</td>
                <td>{{$item->des->designation}}</td>
                <td><a href='/edit/{{$item->id}}'>Edit</a><br><a href='/deleteData/{{$item->id}}'>Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>