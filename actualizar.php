<?php 
  	include("conexion.php");
     
    $iduser = $_REQUEST["iduser"]; 
    if(!empty($_POST)){
      
      $name = $_POST['name'];
      $last = $_POST['last'];
      $ced = $_POST['ced'];
      $card = $_POST['card'];
        
        
        $space = array();

        if($name == ""){
          array_push($space, "El campo Nombre no pude estar vacío");
        }

        if($last == ""){
          array_push($space, "El campo de Apellido no puede estar vacio");
        }
                
        if($ced == ""){
          array_push($space, "El campo de Numero de cedula no puede estar vacio");
        }

        if($card == "" || strlen($card) != 16 ){
          array_push($space, "Ingresa un numero de tarjeta de credito valido");
        }

        if(count($space) > 0){
          echo "<div class='error'>";
          for($i = 0; $i < count($space); $i++){
            echo "<li>".$space[$i]."</i>";
          }
        }else{
          

          if(SearchUser($ced, $con,$iduser) == 1){
            echo "<div class='error'>
              Error: ese numero de cedula ya fue registrado";
            
          }
          else{
            
            if(SearchCard($card, $con,$iduser) == 1){
              echo "<div class='error'>
              Error: ese numero de tarjeta de credito ya fue registrado";
            }
            else{
              $sql = "UPDATE user SET ced = $ced,
                                    name= '$name', 
                                    last='$last', 
                                    card=$card
                                  WHERE iduser = $iduser";

                  if($con -> query($sql)=== true){
                    echo "<div class='correcto'>
                    Datos Actualizados Correctamente";
                  }     
            }


        }
    }
}

      

     if(empty($_REQUEST["iduser"])){
     	header("Location: buscar.php");
     }else{
      
       if(!is_numeric($iduser)){
        header("Location: buscar.php");
       }

      $sql = "SELECT u.name, u.last, u.ced, u.card FROM user u WHERE iduser = $iduser";

      $result = mysqli_query($con,$sql);
      $result_sql = mysqli_num_rows($result);

      if($result_sql > 0){
                $data = mysqli_fetch_assoc($result);

                //print_r($data);
            }else{
              header("Location: buscar.php");
            }     
    
        }

     

  	
  
  	include("closeCon.php");


    function SearchUser($searchId, $con, $iduser){
        
        $sql = "SELECT * FROM user WHERE ced = '$searchId' AND iduser != $iduser";
        
        $res = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($res) > 0)
        {
          return 1;
        }
        else{
          return 0;
        }
      }
      
      function SearchCard($searchCard, $con, $iduser){
        
        $sql = "SELECT * FROM user WHERE card = '$searchCard' AND iduser != $iduser";
        
        $res = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($res) > 0)
        {
          return 1;
        }
        else{
          return 0;
        }
      }
?>