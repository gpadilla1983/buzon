<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buzón STPS</title>

    <!-- jQuery -->
    <script src="../../public/js/jquery.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet" />

    <!-- MetisMenu CSS -->
    <link href="../../public/css/metisMenu.min.css" rel="stylesheet" />
    
    
    <link href="../../public/css/bootstrap-social.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="../../public/css/startmin.css" rel="stylesheet" />

    <!-- Custom Fonts -->
    <link href="../../public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Timeline CSS -->
    <link href="../../public/css/timeline.css" rel="stylesheet" />

    <!-- Morris Charts CSS -->
    <link href="../../public/css/morris.css" rel="stylesheet" />

    <!-- Bootstrap Core CSS -->
   
    <link href="../../public/css/font-awesome.min.css" rel="stylesheet" />
   

    <!-- DataTables CSS -->
    <link href="../../public/css/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <!-- DataTables Responsive CSS -->
    <link href="../../public/css/dataTables/dataTables.responsive.css" rel="stylesheet" />


    
</head>
<body>


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="../Administrador/Login.aspx">Buzón STPS</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="http://www.gob.mx/stps"><i class="fa fa-home fa-fw"></i>Inicio</a></li>
        </ul>

        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>
                    <asp:Label ID="lb_nombreusuario" runat="server"></asp:Label><b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li class="divider"></li>
                    <li><a href="../Administrador/Login.aspx" onclick="CerrarSession"><i class="fa fa-sign-out fa-fw"></i>Salir</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

      
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>   Configuración<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="index.php">   Prioridades</a></li>
                            <li><a href="../Administrador/Temas.aspx">   Temas</a></li>
                            <li><a href="../Administrador/Usuarios.aspx">  Usuarios</a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="../Administrador/Solicitudes.aspx" class="active"><i class="fa fa-envelope fa-fw"></i>   Solicitudes recibidas</a>
                    </li>
                     <li>
                        <a href="../Administrador/ConteoGeneral.aspx" class="active"><i class="fa fa-table fa-fw"></i>   Conteo General</a>
                    </li>
                    
                    <li><a href="../Administrador/Reporte_areas.aspx"><i class="fa fa-table fa-fw"></i>   Reporte por áreas</a></li>

                </ul>
            </div>
        </div>
        

    </nav>
    <br />
    <br />
    <br />
    <form id="form1" runat="server">
        <div id="page-wrapper">
           
        </div>
    </form>
    <!-- jQuery -->
    <script src="../../public/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../public/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../public/js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../public/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="../../public/js/dataTables/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../public/js/startmin.js"></script>


</body>
</html>
