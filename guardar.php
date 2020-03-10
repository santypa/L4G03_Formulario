
<?php
  
    include("includes/db.php");

    $nombre=$_POST["nombre"];
    $email=$_POST["email"];

  

    if($nombre=="" || $email==""){

    }
    else{

        $sql="insert into usuario(nombre,email) values('$nombre','$email')";
        
        if(DB::query($sql))
            {           
            echo "<br>personas guardada correctamente";
             }
        else{
            echo "<br>no se ha podido guardar la persona <br>".$con->error;

            }
    }
        

    
    

   header('Location: crear.php');
?>
