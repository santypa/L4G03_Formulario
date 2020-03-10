<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon"href="ico/a.jpg">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>login</title>
</head>
<body>
 
 <div class="login-box">
     
     
   <img src="img/v.png" class="avatar" alt="Avatar Image">
     <h1>Login</h1>
     
     <form action="guardar.php" method="post">
         
            <label for="usuario">Usuario</label> 
            <input type="text" placeholder="usuario" name="nombre" required>
            
            <label for="email">Email</label> 
            <input type="text" placeholder="email" name="email" required >
            
            <br>
           <button type="submit" class="but"> Gruardar</button> 
            
           <div class="logo">
           <a href="index.php" > <img  src="img/a.png" width="90px" height="15%"  alt="logo" ></a> 
          </div>
    </form>
     
 </div>
 
 
     
            

</body>
</html>