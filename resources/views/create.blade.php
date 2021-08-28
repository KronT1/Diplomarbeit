
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>


    <style>
        .input{
            position:center;

        }

        .button{
            background-color: green;
        }
    </style>



</head>
<body>


    <h1> Create Energy System </h1>

    <div>

      
            
       <form action="create.blade.php" method="post">
       <div>
                <input type ="text" 
                placeholder="Energiesystemname" 
                name ="name" class="input"> 

                <input type ="text" 
                placeholder="Art"
                name ="Art" class="input"> 

                <input type ="integer" 
                placeholder="Latitude"
                name ="Latitude" class="input"> 

                <input type ="integer" 
                placeholder="Longtitude"
                name ="Longtitude" class="input"> 

                <button type="submit" class="button" name="buttonsubmit">
                    Submit
                </button>


                <button 
                    method="POST" 
                    type="submit"
                    name="create-btn" 
                    value="create-team" >
                    Created changes
                </button>

            </div>
        </form>
      </div> 
      
      <?php
            home();
           return redirect()->route('energiesysteme');
    
        ?>
 


</body>
</html>