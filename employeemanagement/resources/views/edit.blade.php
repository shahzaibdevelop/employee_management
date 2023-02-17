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
        margin-top: 200px;
    }
</style>
</head>
<body>
    <div class="maincontainer">
        <h1>Edit Employees </h1>
        <form action="/editData/{{$employeerow->id}}" method="POST">
            @csrf
            Enter Name : <input type="text" name="name" value="{{$employeerow->name}}">
            @error('name')
            <br>
                <span style="color:red">{{$message}}</span>
            @enderror
            <br>
            Enter Email : <input type="email" name="email" value="{{$employeerow->email}}">
            @error('email')
            <br>
                <span style="color:red">{{$message}}</span>
            @enderror
            <br>
            Enter Number : <input type="text" name="number" value="{{$employeerow->number}}">
            @error('number')
            <br>
                <span style="color:red">{{$message}}</span>
            @enderror
            <br>
            Enter Designation <select name="designation" id="designation">
                @foreach ($designation as $item)
                <option value="{{$item->did}}">{{$item->designation}}</option>    
                @endforeach    
                    
                  </select>
            @error('designation')
            <br>
                <span style="color:red">{{$message}}</span>
            @enderror
            <br>
            <br>
            <button type="submit">Enter Employee</button>
        </form>
    </div>
</body>
</html>