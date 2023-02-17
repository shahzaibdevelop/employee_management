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
        <h1>Add Employees </h1>
        
        <form action="addData" method="POST">
            @csrf
            Enter Name : <input type="text" name="name">
            @error('name')
            <br>
                <span style="color:red">{{$message}}</span>
            @enderror
            <br>
            Enter Email : <input type="email" name="email">
            @error('email')
            <br>
                <span style="color:red">{{$message}}</span>
            @enderror
            <br>
            Enter Number : <input type="text" name="number">
            @error('number')
            <br>
                <span style="color:red">{{$message}}</span>
            @enderror
            <br>
            {{-- Enter Job : <input type="text" name="job"> --}}
           Enter Designation <select name="designation" id="designation">
            @foreach ($data as $item)
            <option value="{{$item->did}}">{{$item->designation}}</option>    
            @endforeach    
                
              </select>
            @error('job')
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