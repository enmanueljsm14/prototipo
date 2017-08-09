<?php include_once("cf_includes/cssgeneral.php") ?>
<?php include_once("cf_includes/menuhorizontal.php") ?> 
<?php include_once( "cf_includes/menuvertical.php" ) ?>
<?php include_once("cf_includes/cssformulario.php") ?>

  <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">
                                 <ol class="breadcrumb breadcrumb-col-<?php echo $_SESSION['tema']?>">
                                    <li><a href="?modulo=inicio&directorio=menu&archivo=inicio"><i class="material-icons">home</i> Inicio</a></li>
                                    <li><a href="javascript:void(0);"><i class="material-icons">content_paste</i> Registros</a></li>
                                    <li><a href="javascript:void(0);"><i class="material-icons">queue</i> Otros</a></li>
                                    <li class="active"><i class="material-icons">book</i>Grados</li>
                                </ol>
                            </h2>
                            <ul class="header-dropdown m-r--0">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">help_outline</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" id="ayuda" class=" waves-effect waves-block">Activar Ayuda</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="resultadoEliminar"></div>
                        <div class="modal fade" id="openModalRegistro" data-backdrop="static" tabindex="-1" role="dialog"></div>
                         <div class="modal fade" id="openModalModificar" data-backdrop="static" tabindex="-1" role="dialog">
                         </div>
                         <h1 class="text-center">
                             <div class="btn-group">
                                <?php if($_SESSION["privilegio1"]=="Agregar" || $_SESSION['perfil']=="Administrador" ){ ?>
                                <button type="button" onClick="nuevo()" class="btn bg-green waves-effect">
                                    <i class="material-icons">add_box</i> Nuevo Registro
                                </button>
                                <?php }if($_SESSION["privilegio2"]=="Modificar" || $_SESSION['perfil']=="Administrador" ){?>
                                <button type="button" onClick="modificar(this.value)" disabled id="modificar" class="btn bg-amber waves-effect">
                                    <i class="material-icons">edit</i> Modificar Registro
                                </button>
                                <?php }if($_SESSION["privilegio3"]=="Eliminar" || $_SESSION['perfil']=="Administrador" ){?>
                                <button type="button" value="" onClick="eliminar(this.value)" disabled id="eliminar" class="btn bg-red waves-effect">
                                    <i class="material-icons">delete</i> Eliminar Registro
                                </button>
                                <?php }?>
                            </div>
                        </h1>
                            
                        <div class="body" id="listado">
                            
                          
                        </div>
                    </div>
                </div>
            </div>
            <audio src="sonido/proveedores.wav" id="player"></audio>
            <!-- #END# Example -->
            <?php include_once("cf_includes/footer.php"); ?>
        </div>
    </section>
    <?php include_once("cf_includes/jsgeneral.php"); ?>
    <?php include_once("cf_includes/jsformulario.php"); ?>

<script type="text/javascript">
        $("#listado").load("cf_registros/cf_grados/listado.php");
//**********************************************************//
       function nuevo()
        {
            $("#openModalRegistro").modal('show');
            $("#openModalRegistro").load("cf_registros/cf_grados/formregistro.php");
        }
             
//**********************************************************//
        function modificar(x)
        {
            $("#openModalModificar").modal('show');
            $('#openModalModificar').load('cf_registros/cf_grados/formmodificar.php?valor='+x);
        }
//**********************************************************//    
    function eliminar(val){
        var valor = val.split('|');
        var val1=valor[0];
        var accion="eliminar";
        swal({
                title: "Deseas eliminar este registro?",
                text: "Por favor verifique. !Esta acción es irreversible!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Si, Eliminar Registro!",
                cancelButtonText: "No",
                closeOnConfirm: false,
                closeOnCancel: false
        }, 
        function (isConfirm) {
            if (isConfirm)
            {
                swal("Bien hecho", "El registro ha sido Eliminado satisfactoriamente.", "success");
                $( '#resultadoEliminar' ).load( 'cf_registros/cf_grados/controlador.php?accion='+accion+'&val1='+val1);
              
                
            } else
            {
                swal("Cancelado", "El registro no fue eliminado", "error");
            }
        });
        $( "#eliminar" ).attr( "disabled", true );
        $( "#modificar" ).attr( "disabled", true );
    } 
//**********************************************************//
    $("#ayuda").on("click", function(){
        
        document.getElementById('player').play();
    });
</script>
    
   	