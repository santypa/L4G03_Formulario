<?php

    $conexion= new mysqli('localhost','root','','base_persona');
  //  $con =new mysqli($host,$user,$password,$db);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/style.css">
    
   <link rel="icon"href="ico/a.jpg">
</head>
<body>
    <div class="Tabls">


  


<div class="datos-us">



  <table class="dat_usu" border=1 bordercolor="black" cellpadding=6 cellspacing=0 >
    <tr  >
    <center>
     <font color="black" size="5" face="Comic Sans MS,MS Sans Serif">  
         <big>DATOS USUARIOS </big> 
     </font> 
   </center>


   <br>
        <thead>
         <th> id </th>
         <th> Nombre </th>
         <th> Email </th>
        </thead>
       
    </tr>

    <?php

        $sql="SELECT * FROM usuario";
        $result= mysqli_query($conexion,$sql);

        while($mostrar= mysqli_fetch_array($result)){
          ?>

        <tr>
         <td><?php echo $mostrar['id'] ?></td>
         <td><?php echo $mostrar['nombre'] ?></td>
         <td><?php echo $mostrar['email'] ?></td>
        </tr>

            <?php
        }



    ?>
    
  
  </table>

    <div class="log">
    <a href="guardar.php" > <img src="img/a.png" width="70px" height="15%"  alt="logo"  ></a>
    </div>

</div>
      
    
</body>
</html>