</head>
 <body class="ls-closed theme-<?php echo $_SESSION['tema']?>">
      <?php include_once("cf_includes/acceso.php") ?>
       <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-<?php echo $_SESSION['tema']?>">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Modelando Interfaz...</p>
            </div>
        </div>
        <!-- #END# Search Bar -->
    	 <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="javascript:void(0)">prototipo</a>
                    <span id="temaEstilo"></span>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       <li>
                               <a href="javascript:void(0);" style="margin: 5px; padding: 5px; font-size: 18px;"> <img src="images/user.png" width="50" height="50" class="img img-circle"/>  <?php echo $_SESSION['tuuser']; ?> 
                                </a></li>
                        <!-- #END# Tasks -->
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">view_headline</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
 