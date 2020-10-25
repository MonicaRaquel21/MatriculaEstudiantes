<?php

    session_start();

    $name = $_SESSION['usuario'];
    if($name == null){
        header("location: pages-login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>LC San Antonio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/Liceo Cristiano.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                            <?php echo $name; ?>  <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0 text-white">
                                    Bienvenido !
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Mi Cuenta</span>
                            </a>

                            <!-- item-->
                            <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a> -->

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="pages-login.php" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span >Cerrar Sesion</span>
                            </a>

                        </div>
                    </li>

                    


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="pages-starter.php" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets/images/tek.png" alt="" height="30">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="assets/images/tek1.png" alt="" height="30">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->
              <!-- ========== Start Code PHP ========== -->


              <?php
                if(isset($_POST["enviar"])){

                    include_once "controller/db.php";

                    	$idestudiante = trim($_POST["idestudiante"]);
                        $nombres = trim($_POST["nombres"]);
                        $apellidos = trim($_POST["apellidos"]);
                        $codigoestudiante = trim($_POST["codigoestudiante"]);
                        $fechanacimiento = date("Y-m-d", strtotime(trim($_POST["fechanacimiento"])));
                        $edad = trim($_POST["edad"]);
                        $institucionproviene = trim($_POST["institucionproviene"]);
                        $poseefacebook = trim($_POST["poseefacebook"]);
                        $nombrecuentafb = trim($_POST["nombrecuentafb"]);
                        $nombrerecomienda = trim($_POST["nombrerecomienda"]);
                        $sexo = trim($_POST["sexo"]);
                        $telefono = trim($_POST["telefono"]);
                        $email = trim($_POST["email"]);
                        $carnet = trim($_POST["carnet"]);
                        $nacionalidad = trim($_POST["nacionalidad"]);
                        $direccion = trim($_POST["direccion"]);
                        $depto = trim($_POST["depto"]);
                        $zona = trim($_POST["zona"]);
                        $vivecon = trim($_POST["vivecon"]);
                        $economia = trim($_POST["economia"]);
                        $nacademico = trim($_POST["nacademico"]);


                    $database = new Database();
                    $dbconnection = $database->create_connection();

                    $sql = "INSERT INTO estudiante (IdEstudiante,Nombres,Apellidos,CodigoEstudiante,FechaNacimiento,Edad,InstitucionProviene,PoseeFacebook,NombreCuentaFB,NombreRecomienda,Sexo,telefono,Email,carnet,nacionalidad,direccion,depto,zona,ViveCon,economia,NAcademico) VALUES (:IdEstudiante,:Nombres,:Apellidos,:CodigoEstudiante,:FechaNacimiento,:Edad,:InstitucionProviene,:PoseeFacebook,:NombreCuentaFB,:NombreRecomienda,:Sexo,:telefono,:Email,:carnet,:nacionalidad,:direccion,:depto,:zona,:ViveCon,:economia,:NAcademico)";

                    $statement = $dbconnection->prepare($sql);

                    $statement->bindParam(":IdEstudiante",$idestudiante);
                    $statement->bindParam(":Nombres",$nombres);
                    $statement->bindParam(":Apellidos",$apellidos);
                    $statement->bindParam(":CodigoEstudiante",$codigoestudiante);
                    $statement->bindParam(":FechaNacimiento",$fechanacimiento);
                    $statement->bindParam(":Edad",$edad);
                    $statement->bindParam(":InstitucionProviene",$institucionproviene);
                    $statement->bindParam(":PoseeFacebook",$poseefacebook);
                    $statement->bindParam(":NombreCuentaFB",$nombrecuentafb);
                    $statement->bindParam(":NombreRecomienda",$nombrerecomienda);
                    $statement->bindParam(":Sexo",$sexo);
                    $statement->bindParam(":telefono",$telefono);
                    $statement->bindParam(":Email",$email);
                    $statement->bindParam(":carnet",$carnet);
                    $statement->bindParam(":nacionalidad",$nacionalidad);
                    $statement->bindParam(":direccion",$direccion);
                    $statement->bindParam(":depto",$depto);
                    $statement->bindParam(":zona",$zona);
                    $statement->bindParam(":ViveCon",$vivecon);
                    $statement->bindParam(":economia",$economia);
                    $statement->bindParam(":NAcademico",$nacademico);


                    $statement->execute();

                    if($statement->rowCount() == 1)
                    {
                        $message = "<div class='alert alert-success' role='alert'>";
                        $message .= "<h4 class='alert-heading'><i class='fa fa-user-plus'></i> Estudiante Agregado</h4>";
                        $message .= "<p>Estudiante agregado exitosamente.</p>";
                        $message .= "</div>";

                        echo $message;
                    }
                    else
                    {
                        $message = "<div class='alert alert-danger' role='alert'>";
                        $message .= "<h4 class='alert-heading'><i class='fa fa-ban'></i> Estudiante no pudo ser agregado</h4>";
                        $message .= "<p>Ocurrió un error procesando la consulta y no se pudo guardar la informacion del estudiante. Por favor, inténtelo de nuevo. <br>";
                        $message .= "Descripción: " . $dbconnection->error . " <br>";
                        $message .= "Código de error: " . $dbconnection->errno . "</p>";
                        $message .= "</div>";

                        echo $message;
                    }

                    $database->close_connection($dbconnection);

                }
                ?>










            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Explora</li>

                            <li>
                                <a href="index.html">
                                    <i class="la la-dashboard"></i>
                                   
                                    <span> Inicio </span>
                                </a>
                             
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="la la-cube"></i>
                                    <span> Mantenimiento </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="apps-calendar.html">Estudiantes    <span class="menu-arrow"></span></a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="pages-starter-u.php">Registrar</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Buscar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="apps-contacts.html">Padres de Familia</a>
                                    </li>
                                    <li>
                                        <a href="apps-tickets.html">Maestros</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="la la-clone"></i>
                                    <span> Usuarios </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="layouts-sidebar-sm.html">Roles</a>
                                    </li>
                                   
                                </ul>
                            </li>
                
                         
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

           
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Estudiantes</a></li>
                                            <li class="breadcrumb-item active">Registro de Estudiantes</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Estudiantes</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="alert alert-warning d-none fade show">
                            <h4 class="mt-0">Algo Salio Mal!</h4>
                            <p class="mb-0">No se pudo enviar el formulario por campos vacios</p>
                        </div>


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mb-3">Registrar Estudiante</h4>

                                        <form id="demo-form" method="POST data-parsley-validate="">
                                            <div id="progressbarwizard">

                                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                                                    <li class="nav-item">
                                                        <a href="#account-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi mdi-account-outline mr-1"></i>
                                                            <span class="d-none d-sm-inline">Datos Estudiante</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#profile-tab-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi  mdi mdi-account-multiple-minus-outline
                                                            mr-1"></i>
                                                            <span class="d-none d-sm-inline">Datos Padre</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#finish-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi  mdi mdi-account-check-outline mr-1"></i>
                                                            <span class="d-none d-sm-inline">Final</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            
                                                <div class="tab-content b-0 mb-0 pt-0">
                                            
                                                    <div id="bar" class="progress mb-3" style="height: 7px;">
                                                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                                                    </div>
                                            
                                                    <div class="tab-pane" id="account-2">
                                                        <div class="row">
                                                            <div class="col-12" >
                                                            <div class="form-group row mb-3" >
                                                                    <label class="col-md-1
                                                                    . col-form-label" for="userName1">Id Estudiante</label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="idestudiante" id="userName1"  required="">
                                                                    </div>
                                                                    </div>
                                                                <div class="form-group row mb-3" >
                                                                    <label class="col-md-1
                                                                    . col-form-label" for="userName1">Nombres</label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" name="nombres" class="form-control" id="userName1"  required="">
                                                                    </div>
                                                              
                                                               
                                                                    <label class="col-md-1 col-form-label" for=""> Apellidos</label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" id="password1" name="apellidos" class="form-control" required="" >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3"  >
                                                            
                                                                    <label class="col-md-1 col-form-label" for=""> Edad</label>
                                                                    <div class="col-md-4">
                                                                    <select class="form-control" name="edad"id="example-select" required="">
                                                                        <option>4 años</option>
                                                                        <option>5 años</option>
                                                                        <option>6 años</option>
                                                                        <option>7 años</option>
                                                                        <option>8 años</option>
                                                                        <option>9 años</option>
                                                                        <option>10 años</option>
                                                                        <option>11 años</option>
                                                                        <option>12 años</option>
                                                                        <option>13 años</option>
                                                                        <option>14 años</option>
                                                                        <option>15 años</option>
                                                                        <option>16 años</option>
                                                                        <option>17 años</option>
                                                                        <option>18 años</option>
                                                                        <option>19 años</option>
                                                                        <option>20 años</option>
                                                                    </select>
                                                                </div>
                                                            
                                                                <label class="col-md-1 col-form-label" for="">Direccion</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" id="password1" name="direccion" class="form-control" required="">
                                                                </div>
                                                            </div>
                                                                <div class="form-group row mb-4"  >

                                                                    <label class="col-md-1 col-form-label" for=""> Telefono de Estudiante (Si Posee)</label>
                                                                    <div class="col-md-4">
                                                                        <input class="form-control"  type="number" name="number" >
                                                                </div>
                                                                <label class="col-md-2 col-form-label" for=""> Nivel Academico al que Aplica</label>
                                                                <div class="col-md-4">
                                                                    <select class="form-control" id="example-select" required="">
                                                                        <option>Parvularia 4</option>
                                                                        <option>Parvularia 5</option>
                                                                        <option>Parvularia 6 </option>
                                                                        <option>Primer Grado</option>
                                                                        <option>Segundo Grado A</option>
                                                                        <option>Segundo Grado B</option>
                                                                        <option>Tercer Grado</option>
                                                                        <option>Cuarto Grado</option>
                                                                        <option>Quinto Grado</option>
                                                                        <option>Sexto Grado</option>
                                                                        <option>Septimo Grado</option>
                                                                        <option>Octavo Grado</option>
                                                                        <option>Noveno Grado</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                                <div class="form-group row mb-3" >
                                                                    <label class="col-md-2
                                                                    . col-form-label" for="userName1">Institucion Educativa de donde Proviene</label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" id="userName1" name="userName1" >
                                                                    </div>
                                                              
                                                               
                                                                    <label class="col-md-1 col-form-label" for="">Religion</label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" id="password1" name="" class="form-control" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3" >
                                                                    <label class="col-md-2
                                                                    . col-form-label" for="userName1">El estudiante Posee Facebook</label>
                                                                    <div class="col-md-4">
                                                                        <select class="form-control" id="example-select" required="">
                                                                            <option>Si</option>
                                                                            <option>No</option>
                                                                        </select>
                                                                    </div>
                                                                    <label class="col-md-2
                                                                    . col-form-label" for="userName1">Nombre de Cuenta de Facebook</label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" id="password1" name="" class="form-control" >
                                                                    </div>
                                                               
                                                                </div>
                                                                <div class="form-group row mb-3" >
                                                                    
                                                              
                                                               
                                                                    <label class="col-md-1 col-form-label" for="">Quien lo Recomienda</label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" id="password1" name="" class="form-control" required="">
                                                                    </div>
                                                                </div>
                                                          
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>

                                                    <div class="tab-pane" id="profile-tab-2">
                                                        <div class="row">
                                                            <div class="col-12">
                                                               <div class="form-group row mb-3" >
                                                                <label for="example-email" class="col-md-1 col-form-label">Correo Electronico Encargado</label>
                                                                    <div class="col-md-4">
                                                                        <input type="email" id="example-email" name="example-email" class="form-control" laceholder="Email">
                                                                    </div>
                                                              
                                                               
                                                                    <label class="col-md-2 col-form-label" for=""> Nombre del Padre</label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" id="password1" name="" class="form-control" required="" >
                                                                    </div>

                                                                </div>
                                                                <div class="form-group row mb-3" >

                                                                    <label class="col-md-1 col-form-label" for=""> Telefono del Padre </label>
                                                                    <div class="col-md-4">
                                                                        <input class="form-control"  type="number" name="number" required="">
                                                                </div>

                                                                <label class="col-md-2 col-form-label" for=""> Lugar de Trabajo Padre</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" id="password1" name="" class="form-control" required="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3" >

                                                                <label class="col-md-1 col-form-label" for=""> Nombre de la Madre </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" id="password1" name="" class="form-control" required="" >
                                                            </div>

                                                            <label class="col-md-1 col-form-label" for=""> Telefono de la Madre</label>
                                                                    <div class="col-md-4">
                                                                        <input class="form-control"  type="number" name="number" required="">
                                                                </div>
                                                        </div>
                                                        <div class="form-group row mb-3" >

                                                            <label class="col-md-1 col-form-label" for=""> Lugar de Trabajo Madre</label>
                                                            <div class="col-md-4">
                                                                <input type="text" id="password1" name="" class="form-control" required="" >
                                                        </div>

                                                    </div>
                                                        <div class="form-group mb-12">
                                                            <label>El Estudiante Vive Con:</label>
                
                                                            <div class="radio mb-1">
                                                                <input type="radio" name="gender" id="genderM" value="Male" required="">
                                                                <label for="genderM">
                                                                    Ambos Padres
                                                                </label>
                                                            </div>
                                                            <div class="radio mb-1">
                                                                <input type="radio" name="gender" id="genderF" value="Female">
                                                                <label for="genderF">
                                                                    Papá
                                                                </label>
                                                            </div>
                                                                <div class="radio mb-2">
                                                                    <input type="radio" name="gender" id="genders" value="cx">
                                                                    <label for="genders">
                                                                        Mamá
                                                                    </label>
                                                                </div>
                                                            
                                                        </div>

                                                        <div class="form-group row mb-3" >

                                                            <label class="col-md-2 col-form-label" for=""> Vive Con Otros (Especifique el Parentesco):</label>
                                                            <div class="col-md-3">
                                                                <input type="text" id="password1" name="" class="form-control" required="" >
                                                        </div>

                                                        <label class="col-md-3 col-form-label" for=""> La Razon por la cual desea que su Hijo/a Estudie en esta Institución es:</label>
                                                        <div class="col-md-4">
                                                            <input type="text" id="password1" name="" class="form-control" required="" >
                                                    </div>
                                                    </div>
                                                                
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>

                                                    <div class="tab-pane" id="finish-2">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="text-center">
                                                                    <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                                    <h3 class="mt-0">Enviar Formulario !</h3>

                                                                    <p class="w-75 mb-2 mx-auto">.</p>

                                                                    <div class="mb-3">
                                                                        <div class="custom-control custom-checkbox">
                                                                           
                                                                            <div class="form-group mb-0">
                                                                                <br>
                                                                                <br>
                                                                                <input type="submit" class="btn btn-success" name="enviar"value="Enviar">
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>

                                                  

                                                </div> <!-- tab-content -->
                                            </div> <!-- end #progressbarwizard-->
                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                        </div> 
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2020 &copy; LC <a href="">San Antonio</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
                    <p class="text-muted mb-0"><small>Product Owner</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <div class="row">
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                </div>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1">Notifications</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">API Access</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                        <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                        <label class="custom-control-label" for="customSwitch4">Online Status</label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/form-wizard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
                <!-- Plugin js-->
                <script src="assets/libs/parsleyjs/parsley.min.js"></script>

                <!-- Validation init js-->
                <script src="assets/js/pages/form-validation.init.js"></script>
        
    </body>
</html>