<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    button {
        display: block;
        margin: 30px auto;
    }
    p{
        display:inline;
    }
</style>

<body>
    <div class = "container">
        <h1>Read form</h1>
        @csrf
        <div>
            <label for="">Name : </label>
            <p>{{$tit_data -> tit_name}}</p>
            <br>
            <br>
            <label for="">Pin : </label>
            <p>{{$tit_data -> tit_pin}}</p>
            <br>
        </div>
    </div>
</body>

</html>
