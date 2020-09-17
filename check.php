<?php
			if(isset($_POST['name'])){
				
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
					
					include("conexion.php");
					
					if(SearchUser($ced, $con) == 1){
						echo "<div class='error'>
							Error: ese numero de cedula ya fue registrado";
						
					}
					
					else{
						
						if(SearchCard($card, $con) == 1){
							echo "<div class='error'>
							Error: ese numero de tarjeta de credito ya fue registrado";
						}
						else{
							$sql = "INSERT INTO user(ced,name,last,card)
								VALUES('$ced','$name','$last','$card')";
									if($con -> query($sql)=== true){
										echo "<div class='correcto'>
										Datos Guardados Correctamente";
									}			
						}
					
							
					}
					include("closeCon.php");
				}
				echo "</div>";
			}
			
			
			function SearchUser($searchId, $con){
				
				$sql = "SELECT * FROM user WHERE ced = '$searchId'";
				
				$res = mysqli_query($con, $sql);
				
				if(mysqli_num_rows($res) > 0)
				{
					return 1;
				}
				else{
					return 0;
				}
			}
			
			function SearchCard($searchCard, $con){
				
				$sql = "SELECT * FROM user WHERE card = '$searchCard'";
				
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