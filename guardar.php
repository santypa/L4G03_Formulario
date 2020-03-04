Guardando la persona <br>
<?php
    //datos
    $host ="localhost";
    $user ="root";
    $password=""; 
    $db="base_persona";



    //crear la conexion
    $con=new mysqli($host , $user ,$password,$db);

    
    //pueba conexion
    if($con->connect_error){
        echo "base de datos erroneo<br>";

    }else{
        echo "conectados a la base de datos <br>";
    }

    
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];

    if($nombre=="" || $email==""){

        echo "no puedes ingresar datos vacios";

    }
    else{
        echo "la informacion enviada es :  nombre:$nombre email:$email";

        $query= "insert into usuario(nombre,email) values('$nombre','$email')";

             if($con->query($query)){//true or false

            echo "<br>personas guardada correctamente";
             }else{
            echo "<br>no se ha podido guardar la persona <br>".$con->error;

    }
    }
        

    $con ->close();

   header('Location: crear.php');
?>
