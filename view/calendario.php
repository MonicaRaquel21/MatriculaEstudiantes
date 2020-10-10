<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Fixed con logo ajustable</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<style>

.btn{
			border-radius: 3px;
			display: inline-block;
			padding: 20px 15px;
			text-decoration: none;
			text-shadow: 0 1px 0 rgba(255,255,255,0.3);
			box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
		}

		.btn-green{
			color: white;
			background-color: #3CC93F;
		}
		.btn-green:hover{
			background-color: #37B839;	
		}
		.btn-green:active{
			background-color: #29962A;
		}

		.btn-red{
			color: white;
			background-color: navy;
		}
		.btn-red:hover{
			background-color: #C43535;	
		}
		.btn-red:active{
			background-color: #A62828;
		}
    .myDiv {
    border: 5px outset navy ;
    background-color: navy;
    text-align: center;
    color:white;
  }
  .nota{
      color:red;
      font-weight:bold;
  }

</style>
   
  <div class="logo logo_main"><img src="img/logo.jpg" alt="construccion" width="100px" /> Liceo Reverendo Juan Bueno</div>
    
    <div class="nav">
        <div class="wrap">
            <div class="logo logo_small"><img src="img/logo.jpg" alt="construccion" width="60px"  height="50px"/></div>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Instrucciones</a></li>
                    <li><a href="#">Calendario de Admisión</a></li>
                    <li><a href="#">Contacto Estudiantil</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <div class="main">

    
  <h1>CALERANDIZACIÓN DE MATRICULA EN LÍNEA</h1>
        <hr>
        <CENTER>
        <h1>¿Qué necesitas para poder llenar la solicitud de matricula?</h1>
</CENTER>
        <p>-DUI del encargado del alumno</p>
        <p>-NIT del encargado del alumno</p>
        <p>-Ser Adulto responsable del alumno a matricular</p>
        <p>-Carnet de menoridad (Si es necesario)</p>
        <p>-Número de teléfono del responsable</p>
        <p>-Una foto del alumno </p>
        <p class="nota">NOTA:Cualquier duda e incoveniente favor de contactarse con la institución </p>
        <center>
        <p><h5>Indicaciones:</h5> Antes de Iniciar proceso de matricula.Revisar si cumple con los requisitos previos para evitar cualquier incoveniente.</p>
</center>
        <div class="requisitos"> </div>

				     <center>
					
                    <a href="Registro.php" class="btn btn-red">Iniciar Proceso de Matricula</a>
</center>
				</div>
    </div>
    
    <i class="fas fa-ellipsis-v btn-menu"></i>
    
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="js/script.js"></script>
</body>
</html>