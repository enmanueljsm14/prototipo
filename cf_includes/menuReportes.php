
				
		
						<!--		//////////////////////Reportes/////////////////////          	-->
					<?php if($accesoReportes1=="Reportes" OR $_SESSION['perfil']=="Administrador"){  ?>
					<?php
	if(
		$_GET['modulo']=="reportes" AND $_GET['directorio']=="maternal" OR
		$_GET['modulo']=="reportes" AND $_GET['directorio']=="primaria" OR
		$_GET['modulo']=="reportes" AND $_GET['directorio']=="secundaria" OR
		$_GET['modulo']=="reportes" AND $_GET['directorio']=="diversificado" 
	)
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
					<a href="javascript:void(0);" class="menu-toggle">
                                   <i class="material-icons">print</i>
                                    <span>Reportes</span>
                                </a>
				
					<ul class="ml-menu">
						<?php 
	if($_GET['modulo']=="reportes" AND $_GET['directorio']=="maternal" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=reportes&directorio=maternal&archivo=inicio">Maternal</a>
						</li>
												<?php 
	if($_GET['modulo']=="reportes" AND $_GET['directorio']=="primaria" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=reportes&directorio=primaria&archivo=inicio">Primaria</a>
						</li>
												<?php 
	if($_GET['modulo']=="reportes" AND $_GET['directorio']=="secundaria" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=reportes&directorio=secundaria&archivo=inicio">Secundaria</a>
						</li>
					
												<?php 
	if($_GET['modulo']=="reportes" AND $_GET['directorio']=="diversificado" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>
						<a href="?modulo=reportes&directorio=diversificado&archivo=inicio">Diversificado</a>
						</li>
					

					</ul>
					</li>
					<?php }?>
					
					
        
					