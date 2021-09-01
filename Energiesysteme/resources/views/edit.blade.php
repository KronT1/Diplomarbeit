<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>



<style>
body{
    background-color: #ededed;
}

.h1{
    text-align: center;
    font-family: verdana;
}

.div{
    text-align: center;
    padding:20px;
    margin:30px;
    font-size: 20px;
    
}

.edit{
    margin-bottom:40px;
    height: 50px;
    font-size:20px;
}

.btn{
    height:50px;
    width: 250px;
    background-color: #259443;
    border-radius: 12px;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border: 1px solid black;
}

</style>



</head>
<body>
    <h1 class="h1"> Edit {{$energiesystem->name}} </h1>

    <div class="div">

        <form action="/update/{{ $energiesystem->id }}" method="">
            @csrf
           
           
            <input type="text" value="{{ $energiesystem->name }}"
            name="name" class="edit" >
            <br>

            
            <input type="text" value="{{ $energiesystem->art }}"
            name="art" class="edit">
            <br>

            
            <input type="text" value="{{ $energiesystem->lg }}"
            name="lg" class="edit">
            <br>

            
            <input type="text" value="{{ $energiesystem->bg }}"
            name="bg" class="edit">
            <br>
            
            <button type="submit" class="btn"> Edit </button>

        </form>

    </div>




</body>
</html>