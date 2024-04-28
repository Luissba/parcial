<?php 
include("conexion.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    print_r($_POST);

   $nombres=(isset($_POST['nombres']))? $_POST['nombres'] : null;
   $correo=(isset($_POST['email']))? $_POST['email'] : null;
   $apellidos=(isset($_POST['apellidos']))? $_POST['apellidos'] : null;
   $password=(isset($_POST['password']))? $_POST['password'] : null;
   $genero=(isset($_POST['genero']))? $_POST['genero'] : null;
   $curso=(isset($_POST['curso']))? $_POST['curso'] : null;



   try{
    $pdo=new PDO('mysql:host='.$servidor.';dbname='.$bd,$usuario,$contra);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `email`, `password`, `genero`, `curso`) 
    VALUES (NULL, 'LUIS', 'SBARBATI', 'luissba90@gmail.com', '1234', 'Masculino', 'PHP');";

    $resultado=$pdo->prepare($sql);
    $resultado->execute();


   }catch(PDOException $e){

    echo "Hubo un error de conexión".$e->getMessage();
   }
}





?>