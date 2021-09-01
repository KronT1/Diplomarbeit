<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Energiesystem</title>
</head>

<style>

*{
padding: 0px;
margin:0px;
}

.h1{
    text-align: center;
    font-family: verdana;
    margin:40px;
}

    .addbtn{
        background-color: #a8a8a8;
        border-radius: 12px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-bottom: 50px;
        margin-left: 50px;
    }

    .addbtn:hover{
        background-color: #696969;

    }

body{
    background-color: #ededed;
}


.system{
    text-align:center;
    margin-left: 20px;
    margin-right: 20px;
    height: 40px;
   
}

.system:hover{
    background-color:#d4d4d4;
}

.header{
   border-bottom: 2px solid black;
   margin-left:20px;
   margin-right:20px;
   margin-bottom:20px;
}
.td{
    width: 180px;
    font-size:18px;
}
.tdh{
    width: 180px;
    font-size:22px;
}

.tdb{
    width: 100px;
    font-size:20px;
}

.editbtn{
    background-color: #259443;
    border-radius: 12px;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    width: 80px;
    height:20px;
}

.deletebtn{
    background-color: #ab1313;
    border-radius: 12px;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    width: 80px;
    height:20px;

}

.nav{
    border: 2px solid black;
    text-align:right;
    background-color: #d1d1d1;
    padding-left: 0px;
    height: 35px;
    font-size: 23px;
    
    
}
</style>

<body>

     <!-- Navigation -->

     <div class="nav">
        <p><a href="/"> Home </a> |  <a href="/create"> Add </a>  |  <a href="/kartendienst"> Kartendienst </a>  </p>

     </div>





   <!-- <img src="bestgmbh.jpg" alt="best gmbh" > -->

    <h1 class="h1"> Energiesysteme</h1>
    
 
    <div>

        <a href ="/create" class="addbtn">
            Add Energiesystem &rarr;

        </a>
    </div>
        

    <table class="header">
        <tr>
            <td class="tdh"> <b>ID</b></td>
            <td class="tdh"><b>Name </b></td>
            <td class="tdh"> <b>Art</b></td>
            <td class="tdh"><b>Breitengrad</b> </td>
            <td class="tdh"><b>Längengrad </b></td>
            <td class="tdh"> <b>Erstellt um </b></td>
            <td class="tdh"><b>Updated um </b></td>
        </tr>
    </table>
    


    <!-- Ausgabe der Energiesysteme -->
    
    @foreach ($energiesysteme as $energiesystem)

    <div class="system">
  <!--  <h1> Energystem {{ $energiesystem ->id }}</h1>
    Name: {{  $energiesystem ->name}}
    Art : {{  $energiesystem ->art}}
    Längengrad : {{  $energiesystem ->lg}}
    Breitengrad : {{  $energiesystem ->bg}}
  -->
    <table>
        <tr>   
            <td class="td"> {{ $energiesystem ->id }}</td>
            <td class="td">{{  $energiesystem ->name}} </td>
            <td class="td"> {{  $energiesystem ->art}}</td>
            <td class="td">{{  $energiesystem ->lg}} </td>
            <td class="td">{{  $energiesystem ->bg}} </td>
            <td class="td">{{  $energiesystem ->created_at}} </td>
            <td class="td">{{  $energiesystem ->updated_at}} </td>
            <td class="tdb"><a href="/edit/{{ $energiesystem->id}}" class="editbtn">Edit &rarr; </a> </td>
            <td class="tdb"> <a href="/delete/{{ $energiesystem->id}}" class="deletebtn">Delete &rarr; </a></td>
        </tr>
    </table>
    
    
   
    
  
    </div>
    @endforeach

 

</body>
</html>