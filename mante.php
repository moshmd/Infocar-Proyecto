<?php 
include "codigosPHP/conexion.php";

$id = $_POST['buscar'];

 
$sql=mysql_query("SELECT * FROM usuario, estado, tipo_usuario
				 WHERE estado.id_estado = usuario.id_estado
				 AND tipo_usuario.id_tipo_usuario = usuario.id_tipo_usuario
				 AND id_usuario = '$id'");

while($row=mysql_fetch_array($sql)){
		$nombre=$row['NOMBRE_USUARIO'];
		$email=$row['EMAIL_USUARIO'];
		$tpusuario=$row['NOMBRE_ESTADO'];
		$estado=$row['NOMBRE_TIPO_USUARIO'];
		$id=$row['ID_USUARIO'];
		
		
	}

?>

<form action="mante.php" method="post">
	<table>
    	<tr>
        	<td>Id usuario:</td>
            <td><?php echo"<input type='text' value='".$id."' name='buscar'/>" ?> </td>
            <td><input name="" type="image" src="imagenes/search-red-icon.png" width="30" height="30"/></td>
        </tr>

		<tr>
        	<td>Nombre de usuario:</td>
        	<td><?php echo"<input type='text' value='".$nombre."' name='nombre_usuario'/>" ?> </td>          
        </tr>
        <tr>
        	<td>Email:</td>
        	<td><?php echo"<input type='text' value='".$email."' name='email'/>" ?> </td>            
        </tr>
                <tr>
        	<td>Tipo de usuario:</td>
        	<td><?php echo"<input type='text' value='".$tpusuario."' name='tpusuario'/>" ?> </td>       
        </tr>
                <tr>
        	<td>Estado:</td>
        	<td><?php echo"<input type='text' value='".$estado."' name='estado'/>" ?> </td>           
        </tr>
        <tr>
            <td><input name="" type="image" formaction="edusuario.php" src="imagenes/Actions-document-edit-icon.png" width="30" height="30"/></td>
            <td><input name="" type="image" src="imagenes/Close-2-icon.png" width="30" height="30"/></td>  
		</tr>

    </table> 