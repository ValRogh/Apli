<?php 
  	include("conexion.php");

  	if(!empty($_POST)){
  		$search = $_POST['busqueda'];
	
	
		 if(empty($search)){
	 		 $sql = "SELECT * FROM user";
  			
 		 	}
	  
		 else{
	 		
	 		$sql = "SELECT * FROM user 
	 											WHERE (ced LIKE '%$search%' OR 
	 										           name LIKE '%$search%' OR
	 										           last LIKE '%$search%' OR
	 										       	   card LIKE '%$search%')";
  			
		 }

			$result = mysqli_query($con,$sql);

	 		while ($mos = mysqli_fetch_array($result)) {

  				echo "<tr><td class = 'table-td2-two-color'>".$mos['ced']."</td>
  				<td class='table-td2-two-color'>".$mos['name']."</td>
  				<td class='table-td2-two-color'>".$mos['last']."</td>
  				<td class='table-td2-two-color'>".$mos['card']."</td>
  				<td class='table-td2-two-color'><a class = 'link-edit' href='edit.php?iduser=".$mos['iduser']."'>Editar</td>
  				</tr>";
 		 	}

  	
  	}
	

  	include("closeCon.php");
?>