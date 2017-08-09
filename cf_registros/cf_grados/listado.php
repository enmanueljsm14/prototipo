<?php
	include("../../cf_cong/conectar.php");	
	session_start();
	
?>

	<div class="table-responsive ">
		<table class="table table-bordered tabla">
			<thead>
				<tr class="bg-<?php echo $_SESSION['tema']?>">
					<th>Código</th>
					<th>Descripción</th>
					<th>Estatus</th>
				</tr>
			</thead>
			
			<tbody>
<?php 
				$tabla="cf_grados";
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
					<tr id="<?php echo utf8_encode($registro['cfg_codigo'])?>">
					    <td><?php echo utf8_encode($registro['cfg_codigo'])?></td>
						<td><?php echo utf8_encode($registro['cfg_descripcion'])?></td>
						<td><?php echo utf8_encode($registro['cfg_estatus'])?></td>
					</tr>
<?php 	
				}
?>
			</tbody>
		</table>
	</div>
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