<?php include_once("cf_includes/cssgeneral.php") ?>
 <!-- JVectorMap Css -->
 <link href="css/plugins/map/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
<?php  include_once("cf_includes/menuhorizontal.php") ?> 
<?php include_once( "cf_includes/menuvertical.php" ) ?>


  <section class="content">
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">
                                  <ol class="breadcrumb breadcrumb-col-<?php echo $_SESSION['tema']?>">
                                <li><a href="?modulo=inicio&directorio=menu&archivo=inicio"><i class="material-icons">home</i> Inicio</a></li>
                                <li class="active"><i class="material-icons">insert_chart</i> Estadisticas Generales</li>
                            </ol>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example -->
        <?php include_once("cf_includes/footer.php"); ?>
        </div>
    </section>
 
 <?php include_once("cf_includes/jsgeneral.php"); ?>
   
   	

	
    
