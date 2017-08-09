
				<!--		//////////////////////Planificacion Escolar/////////////////////          	-->
				<?php if($_SESSION['perfil']=="Administrador"){  ?>


				<?php 
					if(
				$_GET['modulo']=="planificacion"  
					)
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>



				<a href="javascript:void(0);" class="menu-toggle">
                             <i class="material-icons">folder</i>
                            <span>Planificación Escolar</span>
                        </a>
			

				<ul class="ml-menu">
				
					<!--		//////////////////////Año Escolar/////////////////////          	-->
					<?php if($accesoPlanificacion1=="periodo" OR $_SESSION['perfil']=="Administrador"){  ?>
					<?php
	if(
		$_GET['modulo']=="planificacion" AND $_GET['directorio']=="periodo" 
	)
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
					<a href="javascript:void(0);" class="menu-toggle">
                                   <i class="material-icons">school</i>
                                    <span>Año Escolar</span>
                                </a>
				
					<ul class="ml-menu">
						<?php 
	if($_GET['modulo']=="planificacion" AND $_GET['directorio']=="periodo" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=planificacion&directorio=periodo&archivo=inicio">Registro</a>
						</li>
						
					</ul>
					</li>
					<?php }?>
						<!--		//////////////////////Planificacion/////////////////////          	-->
					<?php if($accesoPlanificacion2=="Planificacion" OR $_SESSION['perfil']=="Administrador"){  ?>
					<?php
	if(
		$_GET['modulo']=="planificacion" AND $_GET['directorio']=="maternal" OR
		$_GET['modulo']=="planificacion" AND $_GET['directorio']=="primaria" OR
		$_GET['modulo']=="planificacion" AND $_GET['directorio']=="secundaria" OR
		$_GET['modulo']=="planificacion" AND $_GET['directorio']=="diversificado" 
	)
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
					<a href="javascript:void(0);" class="menu-toggle">
                                   <i class="material-icons">attachment</i>
                                    <span>Planificación</span>
                                </a>
				
					<ul class="ml-menu">
						<?php 
	if($_GET['modulo']=="planificacion" AND $_GET['directorio']=="maternal" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=planificacion&directorio=maternal&archivo=inicio">Maternal</a>
						</li>
												<?php 
	if($_GET['modulo']=="planificacion" AND $_GET['directorio']=="primaria" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=planificacion&directorio=primaria&archivo=inicio">Primaria</a>
						</li>
												<?php 
	if($_GET['modulo']=="planificacion" AND $_GET['directorio']=="secundaria" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=planificacion&directorio=secundaria&archivo=inicio">Secundaria</a>
						</li>
					
												<?php 
	if($_GET['modulo']=="planificacion" AND $_GET['directorio']=="diversificado" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=planificacion&directorio=diversificado&archivo=inicio">Diversificado</a>
						</li>
					

					</ul>
					</li>
					<?php }?>
					
					
                       </ul>
					<?php }?>
					
					