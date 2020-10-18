<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f6e8724f6b.js" crossorigin="anonymous"></script>
    <link rel="icon" type="icon" href="img/ICON.ico"/>
    <title>Estudiante | </title>
<style type="text/css">
        .bot
        {
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            float: right;
            z-index: 10;
            position: fixed;
            padding-top: 1px;
            right: 20px;
            font-family: Tw Cen MT;
        }
    </style>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <center>
                    <h1>Ingresar Estudiante</h1>
                    <h6 class="text-muted">Creando </h6> 
                </center>        
                <br>
                <?php
                if(isset($_POST["enviar"])){

                    include_once "classes/Database.class.php";

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

                <form method="POST">
                    <div class="form-group">
                        <label for="idestudiante">ID de Estudiante</label>
                        <input type="text" class="form-control" id="idestudiante" name="idestudiante" placeholder="Ingrese ID del estudiante" required>
                    </div>

                    <div class="form-group">
                        <label for="nombres">Nombres del Estudiante</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese nombres del estudiante" required>
                    </div>

                    <div class="form-group">
                        <label for="apellidos">Apellidos del Estudiante</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos del estudiante" required>
                    </div>
                   

                    <div class="form-group">
                        <label for="codigoestudiante">Codigo Estudiante: </label>
                    <input type="text" class="form-control" id="codigoestudiante" name="codigoestudiante" placeholder="Ingrese codigo del estudiante." required></textarea>
                    </div>

                    <div class="form-group">
                                    <label for="fechanacimiento">Fecha de Nacimiento:</label>
                                    <input type="date" name="fechanacimiento" id="fechanacimiento">
                    </div>

                    <div class="form-group">
                        <label for="edad">Edad del Estudiante</label>
                        <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese edad del estudiante" required>
                    </div>

                    <div class="form-group">
                        <label for="institucionproviene">Institucion de que proviene</label>
                        <input type="text" class="form-control" id="institucionproviene" name="institucionproviene" placeholder="Ingrese institucion de que proviene el estudiante" required>
                    </div>

                    <div class="form-group">
                        <label for="poseefacebook">Posee facebook</label>
                        <input type="text" class="form-control" id="poseefacebook" name="poseefacebook" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="nombrecuentafb">Nombre de cuenta de Facebook</label>
                        <input type="text" class="form-control" id="nombrecuentafb" name="nombrecuentafb" placeholder="Ingrese nombre de cuenta de Facebook">
                    </div>

                    <div class="form-group">
                        <label for="nombrerecomienda">Nombre de la persona que recomienda</label>
                        <input type="text" class="form-control" id="nombrerecomienda" name="nombrerecomienda" placeholder="Ingrese nombre de la persona que recomienda">
                    </div>

                    <div class="form-group">
                        <label for="sexo">Sexo del estudiante</label>
                        <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Ingrese sexo del estudiante" required>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono del estudiante</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono del estudiante" required>
                    </div>


                    <div class="form-group">
                        <label for="email">Email del estudiante</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese Email del estudiante" required>
                    </div>

                    <div class="form-group">
                        <label for="carnet">Carnet del estudiante</label>
                        <input type="text" class="form-control" id="carnet" name="carnet" placeholder="Ingrese carnet del estudiante" required>
                    </div>

                    <div class="form-group">
                        <label for="nacionalidad">Nacionalidad del estudiante</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Ingrese nacionalidad del estudiante" required>
                    </div>


                     <div class="form-group">
                        <label for="direccion">Direccion del Estudiante: </label>
                        <textarea class="form-control" id="codigoestudiante" name="direccion" placeholder="Ingrese direccion del Estudiante." required></textarea>
                    </div>

                     <div class="form-group">
                        <label for="depto">Departamento del estudiante</label>
                        <input type="text" class="form-control" id="depto" name="depto" placeholder="Ingrese departamento del estudiante" required>
                    </div>

                     <div class="form-group">
                        <label for="zona">Zona del estudiante: </label>
                        <input type="text" class="form-control" id="zona" name="zona" placeholder="Ingrese el Lugar" required>
                    </div>

                    <div class="form-group">
                        <label for="vivecon">Personas con las que vive el  Estudiante: </label>
                        <textarea class="form-control" id="vivecon" name="vivecon" placeholder="" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="economia">Nivel economico del Estudiante:</label>
                        <input type="text" class="form-control" id="economia" name="economia" placeholder="Ingrese el nivel economico del estudiante" required>
                    </div>


                    <div class="form-group">
                        <label for="nacademico">Nivel academico del Estudiante:</label>
                        <input type="text" class="form-control" id="nacademico" name="nacademico" placeholder="Ingrese el nivel academico del estudiante" required>
                    </div>
      

                    <a href="estudiantes.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Listado de Estudiantes</a>
                    <button type="submit" class="btn btn-success" name="enviar"><i class="fa fa-plus"></i> Agregar Estudiante</button>
                    <button type="reset" class="btn btn-warning" style="color: white;"><i class="fa fa-ban"></i> Limpiar formulario</button>
                </form>
            </div>
        </div>

        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>