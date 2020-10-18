<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/f6e8724f6b.js" crossorigin="anonymous"></script>

        <link rel="icon" type="icon" href="img/ICON.ico"/>
        <title>Informacion del Estudiante</title>
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
                        <h1>Informacion del estudiante</h1>

                         <?php
                            include_once "classes/Database.class.php";
                            $exception = 0;
                            if(isset($_POST["enviar"])){

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

                            try{
                            $sql = "UPDATE estudiante SET Nombres = ?, Apellidos = ?, CodigoEstudiante = ?, FechaNacimiento = ?, Edad = ?, InstitucionProviene = ?, PoseeFacebook = ?, NombreCuentaFB = ?, NombreRecomienda = ?, Sexo = ?, telefono = ?, Email = ?, carnet = ?, nacionalidad = ?,direccion = ?,depto = ?,zona = ?,ViveCon = ?,economia = ?,NAcademico = ? WHERE IdEstudiante = ?";

                            $statement = $dbconnection->prepare($sql);
                            $statement->bindParam(1,$nombres);
                            $statement->bindParam(2,$apellidos);
                            $statement->bindParam(3,$codigoestudiante);
                            $statement->bindParam(4,$fechanacimiento);
                            $statement->bindParam(5,$edad);
                            $statement->bindParam(6,$institucionproviene);
                            $statement->bindParam(7,$poseefacebook);
                            $statement->bindParam(8,$nombrecuentafb);
                            $statement->bindParam(9,$nombrerecomienda);
                            $statement->bindParam(10,$sexo);
                            $statement->bindParam(11,$telefono);
                            $statement->bindParam(12,$email);
                            $statement->bindParam(13,$carnet);
                            $statement->bindParam(14,$nacionalidad);
                            $statement->bindParam(15,$direccion);
                            $statement->bindParam(16,$depto);
                            $statement->bindParam(17,$zona);
                            $statement->bindParam(18,$vivecon);
                            $statement->bindParam(19,$economia);
                            $statement->bindParam(20,$nacademico);
                            $statement->bindParam(21,$idestudiante);

                            $statement->execute();
                        }
                        catch(PDOException $e)
                        {
                            $message = "<div class='alert alert-danger' role='alert'>";
                            $message .= "<h4 class='alert-heading'><i class='fa fa-ban'></i> Registro no actualizado</h4>";
                            $message .= "<p>Ocurrió un error procesando la consulta y no se pudo actualizar el registro. Por favor, inténtelo de nuevo. <br>";
                            $message .= "Descripción: " . $e->getMessage() . " <br>";
                            $message .= "Código de error: " . $e->getCode() . "</p>";
                            $message .= "</div>";

                            echo $message;
                            $exception = 1;
                        }
                        if($statement->rowCount() == 1)
                        {
                            $message = "<div class='alert alert-success' role='alert'>";
                            $message .= "<h4 class='alert-heading'><i class='fa fa-user-edit'></i> Registro actualizado</h4>";
                            $message .= "<p>Registro de estudiante actualizado exitosamente.</p>";
                            $message .= "</div>";

                            echo $message;
                        }
                        else
                        {
                            if($exception==0)
                            {
                                $message = "<div class='alert alert-danger' role='alert'>";
                                $message .= "<h4 class='alert-heading'><i class='fa fa-ban'></i> Registro no actualizado</h4>";
                                $message .= "<p>Ocurrió un error procesando la consulta y no se pudo actualizar el registro. Por favor, inténtelo de nuevo. <br>";
                                $message .= "Descripción: " . $dbconnection->errorInfo()[2] . " <br>";
                                $message .= "Código de error: " . $dbconnection->errorInfo()[0] . "</p>";
                                $message .= "</div>";
    
                                echo $message;
                            }
                        }

                        $database->close_connection($dbconnection);

                        }

                    if(isset($_GET["id"])){

                        $idestudiante = trim($_GET["id"]);

                        $database = new Database();
                        $dbconnection = $database->create_connection();

                        $sql = "SELECT * FROM estudiante WHERE IdEstudiante = ?";
                        $statement = $dbconnection->prepare($sql);
                        //vinculamos a los parámetros que vamos a enviar
                        $statement->bindParam(1,$idestudiante);
                        $statement->execute();

                        if($statement->rowCount() == 1)
                        {
                            $row=$statement->fetch();

                        ?>

                        <form method="POST">
                    <div class="form-group">
                        <label for="idestudiante">ID de Estudiante</label>
                        <input type="text" class="form-control" id="idestudiante" name="idestudiante" value="<?php echo $row['IdEstudiante'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nombres">Nombres del Estudiante</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $row['Nombres'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="apellidos">Apellidos del Estudiante</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $row['Apellidos'];?>" required>
                    </div>
                   

                    <div class="form-group">
                        <label for="codigoestudiante">Codigo Estudiante: </label>
                    <input type="text" class="form-control" id="codigoestudiante" name="codigoestudiante" value="<?php echo $row['CodigoEstudiante'];?>" required></textarea>
                    </div>

                    <div class="form-group">
                                    <label for="fechanacimiento">Fecha de Nacimiento:</label>
                                    <input type="date" name="fechanacimiento" id="fechanacimiento" value="<?php echo $row['FechaNacimiento'];?>">
                    </div>

                    <div class="form-group">
                        <label for="edad">Edad del Estudiante</label>
                        <input type="text" class="form-control" id="edad" name="edad" value="<?php echo $row['Edad'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="institucionproviene">Institucion de que proviene</label>
                        <input type="text" class="form-control" id="institucionproviene" name="institucionproviene" value="<?php echo $row['InstitucionProviene'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="poseefacebook">Posee facebook</label>
                        <input type="text" class="form-control" id="poseefacebook" name="poseefacebook" value="<?php echo $row['PoseeFacebook'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nombrecuentafb">Nombre de cuenta de Facebook</label>
                        <input type="text" class="form-control" id="nombrecuentafb" name="nombrecuentafb" value="<?php echo $row['NombreCuentaFB'];?>">
                    </div>

                    <div class="form-group">
                        <label for="nombrerecomienda">Nombre de la persona que recomienda</label>
                        <input type="text" class="form-control" id="nombrerecomienda" name="nombrerecomienda" value="<?php echo $row['NombreRecomienda'];?>">
                    </div>

                    <div class="form-group">
                        <label for="sexo">Sexo del estudiante</label>
                        <input type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $row['Sexo'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono del estudiante</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $row['telefono'];?>" required>
                    </div>


                    <div class="form-group">
                        <label for="email">Email del estudiante</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['Email'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="carnet">Carnet del estudiante</label>
                        <input type="text" class="form-control" id="carnet" name="carnet"value="<?php echo $row['carnet'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nacionalidad">Nacionalidad del estudiante</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="<?php echo $row['nacionalidad'];?>" required>
                    </div>


                     <div class="form-group">
                        <label for="direccion">Direccion del Estudiante: </label>
                        <textarea class="form-control" id="codigoestudiante" name="direccion" required><?php echo $row['direccion'];?></textarea>
                    </div>

                     <div class="form-group">
                        <label for="depto">Departamento del estudiante</label>
                        <input type="text" class="form-control" id="depto" name="depto" value="<?php echo $row['depto'];?>" required>
                    </div>

                     <div class="form-group">
                        <label for="zona">Zona del estudiante: </label>
                        <input type="text" class="form-control" id="zona" name="zona" value="<?php echo $row['zona'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="vivecon">Personas con las que vive el  Estudiante: </label>
                        <textarea class="form-control" id="vivecon" name="vivecon" required><?php echo $row['ViveCon'];?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="economia">Nivel economico del Estudiante:</label>
                        <input type="text" class="form-control" id="economia" name="economia" value="<?php echo $row['economia'];?>" required>
                    </div>


                    <div class="form-group">
                        <label for="nacademico">Nivel academico del Estudiante:</label>
                        <input type="text" class="form-control" id="nacademico" name="nacademico" value="<?php echo $row['NAcademico'];?>" required>
                    </div>
      

                    <center>
                                    <button type="submit" class="btn btn-primary" name="enviar"><i class="fa fa-edit"></i> Actualizar Registro</button>
                                </center>
                </form>
                <?php
                        }
                        else
                        {
                            $message = "<div class='alert alert-danger' role='alert'>";
                            $message .= "<h4 class='alert-heading'><i class='fa fa-ban'></i> Error, no se encontró el Registro</h4>";
                            $message .= "<p>El Estudiante con id " . $idestudiante . " no existe en la base de datos.</p>";
                            $message .= "</div>";

                            echo $message;
                        }

                        $database->close_connection($dbconnection);

                    }
                    ?>

                    
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12">
                    <a href="estudiantes.php" class="btn btn-success"><i class="fa fa-arrow-left"></i> Lista de Estudiantes</a>
                </div>
            </div>
        </div>
        <br>

        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>