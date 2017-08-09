
				<!--		//////////////////////Registros/////////////////////          	-->
				<?php if($_SESSION['perfil']=="Administrador"){  ?>


				<?php 
					if(
				$_GET['modulo']=="registros"  
					)
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>



				<a href="javascript:void(0);" class="menu-toggle">
                             <i class="material-icons">assignment</i>
                            <span>Registros</span>
                        </a>
			

				<ul class="ml-menu">
				
					<!--		//////////////////////Estudiantes/////////////////////          	-->
					<?php if($accesoRegistro1=="Estudiantes" OR $_SESSION['perfil']=="Administrador"){  ?>
					<?php
	if(
		$_GET['modulo']=="registros" AND $_GET['directorio']=="maternal" OR
		$_GET['modulo']=="registros" AND $_GET['directorio']=="primaria" OR
		$_GET['modulo']=="registros" AND $_GET['directorio']=="secundaria" OR
		$_GET['modulo']=="registros" AND $_GET['directorio']=="diversificado" 
	)
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
					<a href="javascript:void(0);" class="menu-toggle">
                                   <i class="material-icons">face</i>
                                    <span>Estudiantes</span>
                                </a>
				
					<ul class="ml-menu">
						<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="maternal" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=maternal&archivo=inicio">Maternal</a>
						</li>
												<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="primaria" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=primaria&archivo=inicio">Primaria</a>
						</li>
												<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="secundaria" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=secundaria&archivo=inicio">Secundaria</a>
						</li>
						<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="diversificado" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=diversificado&archivo=inicio">Diversificado</a>
						</li>

					</ul>
					</li>
					<?php }?>
						<!--		//////////////////////Personal/////////////////////          	-->
					<?php if($accesoRegistro2=="Personal" OR $_SESSION['perfil']=="Administrador"){  ?>
					<?php
	if(
		$_GET['modulo']=="registros" AND $_GET['directorio']=="administrativo" OR
		$_GET['modulo']=="registros" AND $_GET['directorio']=="maestros" OR
		$_GET['modulo']=="registros" AND $_GET['directorio']=="profesores" 
	)
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
					<a href="javascript:void(0);" class="menu-toggle">
                                   <i class="material-icons">work</i>
                                    <span>Personal</span>
                                </a>
				
					<ul class="ml-menu">
						<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="administrativo" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=administrativo&archivo=inicio">Administrativo</a>
						</li>
												<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="maestros" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=maestros&archivo=inicio">Maestros</a>
						</li>
												<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="profesores" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=profesores&archivo=inicio">Profesores</a>
						</li>
					

					</ul>
					</li>
					<?php }?>
						<!--		//////////////////////Representante/////////////////////          	-->
					<?php if($accesoRegistro3=="Representante" OR $_SESSION['perfil']=="Administrador"){  ?>
					<?php
	if(
		$_GET['modulo']=="registros" AND $_GET['directorio']=="representante"
	)
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
					<a href="javascript:void(0);" class="menu-toggle">
                                   <i class="material-icons">directions_run</i>
                                    <span>Representante</span>
                                </a>
				
					<ul class="ml-menu">
						<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="representante" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=representante&archivo=inicio">Responsable</a>
						</li>
						
					</ul>
					</li>
					<?php }?>
						<!--		//////////////////////Otros/////////////////////          	-->
					<?php if($accesoRegistro4=="Otros" OR $_SESSION['perfil']=="Administrador"){  ?>
					<?php
	if(
		$_GET['modulo']=="registros" AND $_GET['directorio']=="grados" OR
		$_GET['modulo']=="registros" AND $_GET['directorio']=="plantel" OR
		$_GET['modulo']=="registros" AND $_GET['directorio']=="usuarios" 
	)
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
					<a href="javascript:void(0);" class="menu-toggle">
                                   <i class="material-icons">queue</i>
                                    <span>Otros</span>
                                </a>
				
					<ul class="ml-menu">
						<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="grados" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=grados&archivo=inicio">Grados</a>
						</li>
												<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="plantel" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=plantel&archivo=inicio">Plantel</a>
						</li>
												<?php 
	if($_GET['modulo']=="registros" AND $_GET['directorio']=="usuarios" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=registros&directorio=usuarios&archivo=inicio">Usuarios</a>
						</li>
						

					</ul>
					</li>
					<?php }?>
					
                       </ul>
					<?php }?>
					
					