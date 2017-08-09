 <!-- #Top Bar -->
<section>
	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar">
		<div class="menu">
			<ul class="list">
				<li class="header">Menu de Navegación</li>
				
					<?php if($_SESSION['perfil']=="Administrador" OR $_SESSION['perfil']=="Instalaciones" OR $_SESSION['perfil']=="Presupuesto" OR $_SESSION['perfil']=="Cultivo"){  ?>

				<?php 
	if($_GET['directorio']=="menu" AND $_GET['archivo']=="inicio")
	{ echo '<li class="active">';  }
						else
						{echo'<li>';} ?>


				<a href="?modulo=inicio&directorio=menu&archivo=inicio">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
			

				</li>
				<?php }?>

				<?php include("menuRegistro.php") ?>
				<?php include("menuPlanificacion.php") ?>
				<?php include("menuInscripcion.php") ?>
				<?php include("menuMensualidad.php") ?>
				<?php include("menuReportes.php") ?>
				<?php include("menuMatenimiento.php") ?>
			
				
<!--				<li class="header"></li>-->
				<li>
					<a href="?modulo=login&directorio=validar&archivo=salir"><i class="material-icons col-red">input</i> <span>Cerrar Sesion</span></a>
					


				</li>


			</ul>
		</div>
		<!-- #Menu -->

	</aside>
	<!-- #END# Left Sidebar -->
	<!-- Right Sidebar -->
	<aside id="rightsidebar" class="right-sidebar">
		<ul class="nav nav-tabs tab-nav-right" role="tablist">
			<li role="presentation" class="active"><a href="#skins" data-toggle="tab">Temas</a>
			</li>
			<li role="presentation"><a href="#settings" data-toggle="tab">Ajustes</a>
			</li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active in active" id="skins">
				<ul class="demo-choose-skin">

					<li data-theme="red" <?php if($_SESSION[ 'tema']=="red" ){echo 'class="active"';} ?>>
						<div class="red"></div>
						<span>Red</span>
					</li>
					<li data-theme="pink" <?php if($_SESSION[ 'tema']=="pink" ){echo 'class="active"';} ?>>
						<div class="pink"></div>
						<span>Pink</span>
					</li>
					<li data-theme="purple" <?php if($_SESSION[ 'tema']=="purple" ){echo 'class="active"';} ?>>
						<div class="purple"></div>
						<span>Purple</span>
					</li>
					<li data-theme="deep-purple" <?php if($_SESSION[ 'tema']=="deep-purple" ){echo 'class="active"';} ?>>
						<div class="deep-purple"></div>
						<span>Deep Purple</span>
					</li>
					<li data-theme="indigo" <?php if($_SESSION[ 'tema']=="indigo" ){echo 'class="active"';} ?>>
						<div class="indigo"></div>
						<span>Indigo</span>
					</li>
					<li data-theme="blue" <?php if($_SESSION[ 'tema']=="blue" ){echo 'class="active"';} ?>>
						<div class="blue"></div>
						<span>Blue</span>
					</li>
					<li data-theme="light-blue" <?php if($_SESSION[ 'tema']=="light-blue" ){echo 'class="active"';} ?>>
						<div class="light-blue"></div>
						<span>Light Blue</span>
					</li>
					<li data-theme="cyan" <?php if($_SESSION[ 'tema']=="cyan" ){echo 'class="active"';} ?>>
						<div class="cyan"></div>
						<span>Cyan</span>
					</li>
					<li data-theme="teal" <?php if($_SESSION[ 'tema']=="teal" ){echo 'class="active"';} ?>>
						<div class="teal"></div>
						<span>Teal</span>
					</li>
					<li data-theme="green" <?php if($_SESSION[ 'tema']=="green" ){echo 'class="active"';} ?>>
						<div class="green"></div>
						<span>Green</span>
					</li>
					<li data-theme="light-green" <?php if($_SESSION[ 'tema']=="light-green" ){echo 'class="active"';} ?>>
						<div class="light-green"></div>
						<span>Light Green</span>
					</li>
					<li data-theme="lime" <?php if($_SESSION[ 'tema']=="lime" ){echo 'class="active"';} ?>>
						<div class="lime"></div>
						<span>Lime</span>
					</li>
					<li data-theme="yellow" <?php if($_SESSION[ 'tema']=="yellow" ){echo 'class="active"';} ?>>
						<div class="yellow"></div>
						<span>Yellow</span>
					</li>
					<li data-theme="amber" <?php if($_SESSION[ 'tema']=="amber" ){echo 'class="active"';} ?>>
						<div class="amber"></div>
						<span>Amber</span>
					</li>
					<li data-theme="orange" <?php if($_SESSION[ 'tema']=="orange" ){echo 'class="active"';} ?>>
						<div class="orange"></div>
						<span>Orange</span>
					</li>
					<li data-theme="deep-orange" <?php if($_SESSION[ 'tema']=="deep-orange" ){echo 'class="active"';} ?>>
						<div class="deep-orange"></div>
						<span>Deep Orange</span>
					</li>
					<li data-theme="brown" <?php if($_SESSION[ 'tema']=="brown" ){echo 'class="active"';} ?>>
						<div class="brown"></div>
						<span>Brown</span>
					</li>
					<li data-theme="grey" <?php if($_SESSION[ 'tema']=="grey" ){echo 'class="active"';} ?>>
						<div class="grey"></div>
						<span>Grey</span>
					</li>
					<li data-theme="blue-grey" <?php if($_SESSION[ 'tema']=="blue-grey" ){echo 'class="active"';} ?>>
						<div class="blue-grey"></div>
						<span>Blue Grey</span>
					</li>
					<li data-theme="black" <?php if($_SESSION[ 'tema']=="black" ){echo 'class="active"';} ?>>
						<div class="black"></div>
						<span>Black</span>
					</li>
				</ul>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="settings">
				<div class="demo-settings">
					<p>Ajustes Generales</p>
					<ul class="setting-list">
						<li>
							<span>Report Panel Usage</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
						<li>
							<span>Email Redirect</span>
							<div class="switch">
								<label><input type="checkbox"><span class="lever"></span></label>
							</div>
						</li>
					</ul>
					<p>Ajustes Generales</p>
					<ul class="setting-list">
						<li>
							<span>Notifications</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
						<li>
							<span>Auto Updates</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
					</ul>
					<p>Ajustes de Cuenta</p>
					<ul class="setting-list">
						<li>
							<span>Offline</span>
							<div class="switch">
								<label><input type="checkbox"><span class="lever"></span></label>
							</div>
						</li>
						<li>
							<span>Location Permission</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</aside>
	<!-- #END# Right Sidebar -->
</section>