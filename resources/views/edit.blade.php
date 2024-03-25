<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    div{
        display:flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }
    button{
        display:block;
        margin:30px auto;
    }
</style>
<body>
    <div>
        <h1>Edit form</h1>
        <form action="/customers/{{$tit_data -> tit_id}}" method = "POST"> 
            @csrf
            @method("PUT")
            <label for="">name</label>
            <br>
            <input type="text" name = "name" value = {{$tit_data -> tit_name }} >
            <br>
            <label for="">pincode</label>
            <br>
            <input type="text" name = "pin" value = {{$tit_data -> tit_pin }}>
            <br>
            <button type = "submit">Submit</button>
        </form>
    </div>
</body>
</html>