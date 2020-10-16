<?php
    include_once "classes/Database.class.php";

    $database = new Database();
    $dbconnection = $database->create_connection();
                                    
    $sql = "SELECT * FROM estudiante e ORDER BY IdEstudiante ASC";

    $result = $dbconnection->query($sql);

    $response = null;
    $html = "";

    if($result->rowCount() >0)
    {
                                        
        //Si hay datos, vamos a obtener el resultado en forma de objeto
        //Cada fila será una propiedad en el objeto $row

        $response["status"]=1;
        foreach($result as $fila)
        {
            $html .= "<tr>";
            $html .= "<td>" . $fila["IdEstudiante"] . "</td>";
            $html .= "<td>" . $fila["Nombres"] . "</td>";
            $html .= "<td>" . $fila["Apellidos"] . "</td>";
            $html .= "<td>" . $fila["Edad"] . "</td>";
            $html .= "<td>" . $fila["Sexo"] . "</td>";
            $html .= "<td>" . $fila["telefono"] . "</td>";
            $html .= "<td>" . $fila["Email"] . "</td>";


            $html .= "<td class='text-center'>";
            $html .= "<a href='edit_estudiante.php?id=" . $fila["IdEstudiante"] . "' class='btn btn-warning'><i class='fa fa-pencil'></i> Mas Informacion</a> ";
            $html .= "<a href='#' id='" . $fila["IdEstudiante"] . "' class='btn btn-danger delete-estudiante' data-toggle='modal' data-target='#exampleModal' id='delete-button'><i class='fa fa-trash'></i> Eliminar</a>";
            $html .= "</td>";
            $html .= "</tr>";

        }

    }
    else
    {
        $response["status"]=0;
        $html="";
        $html .= "<tr><td colspan='6' class='text-center'>No hay datos que mostrar</td></tr>";
    }

    $response["data"]= $html;
    $database->close_connection($dbconnection);

    header('Content-Type: application/json');

    echo json_encode($response);
?>