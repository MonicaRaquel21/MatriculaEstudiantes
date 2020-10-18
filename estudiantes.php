<?php
if(!function_exists('classAutoLoader')){
    function classAutoLoader($classname){
    $classname = strtolower($classname);
    $classFile = "classes/" . $classname . '.class.php';
    if(is_file($classFile) && !class_exists($classname)) include $classFile;
    }
}
//registrando el class autoloader         
spl_autoload_register('classAutoLoader');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/f6e8724f6b.js" crossorigin="anonymous"></script>
        <title>Estudiantes | </title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <center>
                        <h1>Listado de Estudiantes</h1>
                    </center> 
                    <br>

                    <?php
                    $database = new Database();
                    $dbconnection = $database->create_connection();
                    $sqlm = "SELECT * FROM  estudiante";
                        $statement = $dbconnection->prepare($sqlm);
                        $statement->execute();
                    $resultado = $dbconnection->query($sqlm);
                   $database->close_connection($dbconnection);
                    ?>

                     <div class="table-responsive">
                        <table class="table table-stripped table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id de Estudiante</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th><center>Acciones</center></th>
                                </tr>
                            </thead>

                            <tbody id="ajax-return">
                            </tbody>

                            </table>
                        <div class="d-flex justify-content-center" id="loading-spinner" style="display:none !important;">
                          <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="create_estudiante.php" class="btn btn-success"><i class="fa fa-user-plus"></i> Agregar Estudiante</a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Seguro?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Está seguro que desea eliminar al estudiante?
                        <input type="text" hidden value="0" id="idtodelete">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="delete-button" name="enviar" data-dismiss="modal">Si</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

         <div class='alert alert-success alert-dismissible fade show' role='alert' id="message-1" style="display:none;">
                        <h4 class='alert-heading'><i class='fa fa-user-edit'></i> Estudiante Eliminado</h4>
                        <p>Estudiante eliminado exitosamente.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>

                    <div class='alert alert-danger alert-dismissible fade show' role='alert' id="message-2" style="display:none;">
                        <h4 class='alert-heading'><i class='fa fa-ban'></i> Estudiante no eliminado</h4>
                        <p>Ocurrió un error procesando la consulta y no se pudo eliminar al Estudiante. Por favor, inténtelo de nuevo. <br>
                        </p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>

                    <div class='alert alert-danger alert-dismissible fade show' role='alert' id="message-3" style="display:none;">
                        <h4 class='alert-heading'><i class='fa fa-ban'></i> Estudiante no eliminado</h4>
                        <p>Ocurrió un error procesando la consulta y no se pudo eliminar al Estudiante. Por favor, inténtelo de nuevo. <br>
                        Código de error: <b id="errorcode"></b><br>
                        Descripción de error: <b id="errormessage"></b><br>
                        </p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <br>

                            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript">

        	$(document).ajaxComplete(function () {
                $(".delete-estudiante").click(function(){
                    //accedemos a la propiedad id del elemento actual
                    //alert($(this).attr("id"));
                    //lo asignamos al campo de texto a eliminar
                    $("#idtodelete").val($(this).attr("id"));
                    $("#idcat").val($(this).attr("id"));

                })
            });

             $(document).ready(function(){
                //almacenamos en una función, todo el código que queremos ejecutar
                //cuando la página se carga. De esta forma lo podemos llamar 
                //en cualquier momento
                function load_data(){
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: 'read_estudiantes.php',
                        data: {},
                        beforeSend: function() {
                            $("#loading-spinner").attr('style','display: flex !important;');
                        },
                        success: function(datos) {
                            console.log(datos);
                            if(datos.status==1){
                                $("#ajax-return").empty();
                                $("#ajax-return").append(datos.data);
                            }
                            else
                            {
                                $("#ajax-return").empty();
                                $("#ajax-return").append(datos.data);
                            }
                        },
                        error: function(error) {
                            alert("Ha ocurrido un error procesando la solicitud" + error.responseText);

                        },
                        complete: function() {
                            $("#loading-spinner").attr('style','display: none !important;');
                        }
                    })
                };

                //código de funcionamiento del botón de eliminar
                $("#delete-button").click(function(){

                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: 'delete_estudiante.php',
                        data: {idestudiante:$("#idtodelete").val()},
                        beforeSend: function() {
                            $("#loading-spinner").attr('style','display: flex !important;');
                        },
                        success: function(datos) {
                            console.log(datos);
                            if(datos.status==1){
                                $("#message-1").attr("style","display: ");

                            }
                            else if(datos.status==2)
                            {
                                $("#message-2").attr("style","display: ");
                            }
                            else if(datos.status==3)
                            {
                                $("#errorcode").append(datos.errcode);
                                $("#errormessage").append(datos.errmessage);
                                $("#message-3").attr("style","display: ");
                            }

                        },
                        error: function(error) {
                            alert("Ha ocurrido un error procesando la solicitud" + error.responseText);

                        },
                        complete: function() {
                            load_data();
                            $("#loading-spinner").attr('style','display: none !important;');
                        }
                    })
                });

                load_data();
            });
        </script>
    </body>
</html>