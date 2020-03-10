<?php

//datos
//$host ="localhost";
//$user ="root";
//$password=""; 
//$db="base_persona";

class DB{
        static $host ="localhost";
        static $user ="root";
        static $password=""; 
        static $db="base_persona";

        public static function init(){
                echo "Iniciando base de datos";

        }

        public static function query($sql){
                //conexion de la base de datos
                $con=new mysqli(self::$host,self::$user,self::$password,self::$db);

                $result= $con->query($sql); 
                $con ->close();
                return $result;
               

        }


}



?>