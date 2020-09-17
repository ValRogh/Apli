<?php 
    
   $con = new mysqli("localhost", "root", "AsRo1808SaRo", "db_user");
   
   if($con -> connect_error){
	   die("Conexion Fallida" . $con -> connect_error);
   }
	   
   
 ?>