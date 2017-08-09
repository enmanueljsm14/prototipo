<?php
	include("../../cf_cong/conectar.php");	
	session_start();
	
?>

	
		<table class="table table-bordered tabla">
			<thead>
				<tr class="bg-<?php echo $_SESSION['tema']?>">
					<th>Código</th>
					<th>Nombre</th>
					<th>Direccion</th>
					<th>Teléfono</th>
					<th>Correo</th>
					<th>Estatus</th>
				</tr>
			</thead>
			
			<tbody>
<?php 
				$tabla="cf_plantel";
		        $condicion="1";
				$servicio=new op;
				$servicio->setDriver();
				$sqlconnect= $servicio->abrirConexion();
				$sql=$servicio->select($tabla,$condicion);
				$resultado= $servicio->query($sql);
				$fila= $servicio->num_rows($resultado);
				$servicio->cerrarConexion($sqlconnect);
				for($i=0;$i<$fila;$i++)
		        { 
		         	$registro= $servicio->fetch_array($resultado);
?>
					<tr id="<?php echo utf8_encode($registro['cfpl_codigo'])?>">
					    <td><?php echo utf8_encode($registro['cfpl_codigo'])?></td>
						<td><?php echo utf8_encode($registro['cfpl_nombre'])?></td>
						<td><?php echo utf8_encode($registro['cfpl_direccion'])?></td>
						<td><?php echo utf8_encode($registro['cfpl_telefono'])?></td>
						<td><?php echo utf8_encode($registro['cfpl_correo'])?></td>
						<td><?php echo utf8_encode($registro['cfpl_estatus'])?></td>
					</tr>
<?php 	
				}
?>
			</tbody>
		</table>
	
<script type="text/javascript">
		var table = $( '.tabla' ).DataTable();
		$( '.tabla tbody' ).on( 'mouseover', 'tr', function () {
			$( this ).css( "cursor", "pointer" );
		} );
		$( '.tabla tbody' ).on( 'click', 'tr', function () {
			
			if($( this ).attr( "id" )=="vacio"){
				$( "#eliminar" ).attr( "disabled", true );
				$( "#modificar" ).attr( "disabled", true );
			}else{
			if ( $( this ).hasClass( 'seleccion' ) ) {
				$( this ).removeClass( 'seleccion' );
				$( "#eliminar" ).attr( "disabled", true );
				$( "#modificar" ).attr( "disabled", true );
				

			} else {
				table.$( 'tr.seleccion' ).removeClass( 'seleccion' );
				$( this ).addClass( 'seleccion' );
				$( "#eliminar" ).val( $( this ).attr( "id" ) );
				$( "#modificar" ).val( $( this ).attr( "id" ) );
				
				$( "#modificar" ).attr( "disabled", false );
				$( "#eliminar" ).attr( "disabled", false );
			}	
			}
		} );
	
</script>