<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>

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
        
        .create{
            margin-bottom:40px;
            height: 50px;
            font-size:20px;
        }
        
        .btn{
            height:50px;
            width: 250px;
        }
        
        </style>



</head>
<body>
    

    <h1 class="h1"> Create Energiesystem </h1>

    <div class="div">

        <form action="/" method="POST">
            @csrf
            
            <input type="text" placeholder="Name"
            name="name" class="create">
            <br>

            <input type="text" placeholder="Art"
            name="art"class="create" >
            <br>

            <input type="text" placeholder="Längengrad"
            name="lg" class="create">
            <br>

            <input type="text" placeholder="Breitengrad"
            name="bg" class="create">
            <br>

            <button type="submit" name="submitbutton" class="btn"> Create </button>
            <br><br>
            <a href="/" class="deletebtn">&#9754; Back  </a>


        </form>

    </div>



</body>
</html>