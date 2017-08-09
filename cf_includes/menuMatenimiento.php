
						<!--		//////////////////////Mantenimiento/////////////////////          	-->
					<?php if($accesoMantenimiento1=="Mantenimiento" OR $_SESSION['perfil']=="Administrador"){  ?>
					<?php
	if(
		$_GET['modulo']=="mantenimiento" AND $_GET['directorio']=="respaldar" OR
		$_GET['modulo']=="mantenimiento" AND $_GET['directorio']=="restaurar" OR
		$_GET['modulo']=="mantenimiento" AND $_GET['directorio']=="configurar" 
	)
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
					<a href="javascript:void(0);" class="menu-toggle">
                                   <i class="material-icons">security</i>
                                    <span>Mantenimiento</span>
                                </a>
				
					<ul class="ml-menu">
						<?php 
	if($_GET['modulo']=="mantenimiento" AND $_GET['directorio']=="respaldar" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=mantenimiento&directorio=respaldar&archivo=inicio">Respaldar Base de Datos</a>
						</li>
												<?php 
	if($_GET['modulo']=="mantenimiento" AND $_GET['directorio']=="restaurar" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=mantenimiento&directorio=restaurar&archivo=inicio">Restaurar Base de Datos</a>
						</li>
												<?php 
	if($_GET['modulo']=="mantenimiento" AND $_GET['directorio']=="configurar" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=mantenimiento&directorio=configurar&archivo=inicio">Configuración</a>
						</li>
					
		
					

					</ul>
					</li>
					<?php }?>
					
					
				
					