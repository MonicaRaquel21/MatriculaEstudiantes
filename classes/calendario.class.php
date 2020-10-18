<?php
//error_reporting(E_ALL);
ini_set('display_errors',1);

class Calendario{
    private $mes;
    private $ano;
    private $dias_de_semana;
    private $num_dias;
    private $fecha_info;
    private $dia_semana;

    public function __construct($mes,$ano,$dias_de_semana=array('D','L','Ma','Mi','J','V','S')){
        $this->mes = $mes;
        $this->ano = $ano;
        $this->dias_de_semana=$dias_de_semana;
        $this->num_dias=cal_days_in_month(CAL_GREGORIAN, $this->mes, $this->ano);
        $this->fecha_info = getdate(strtotime('first day of', mktime(0,0,0,$this->mes,1,$this->ano)));
        $this->dia_semana= $this->fecha_info['wday'];
    }
    
    public function mostrar(){
        $output = '<div class="container">';
        $output = "<table class='calendario' style='position: relative; width: 600px; left: 300px;'>";
        $output .= '<caption>'.$this->ano. '</caption>';
        $output .= '</tr>';

        foreach ( $this->dias_de_semana as $dia ){
            $output .= '<th class="header">' . $dia . '</th>';
        }

        $output .= '<tr></tr>';

        if ($this->dia_semana > 0) {
            $output .= '<td colspan="'. $this->dia_semana . '"></td>';
        }

        $dia_actual=1;

        while  ( $dia_actual <= $this->num_dias){
            if( $this->dia_semana == 7){
                $this->dia_semana = 0;
                $output .= '<tr></tr>';
            }
            $output .= '<td class ="dia">'. $dia_actual. '<p></p>' . '</td>';

            $dia_actual++;
            $this->dia_semana++;
        }

        if ($this->dia_semana != 7){
            $dias_restantes = 7 - $this->dia_semana;
            $output .= '<td colspan ="' . $dias_restantes . '"></td>';
        }

        $output .= '</tr>';
        $output .= '</table>';
        $output .= '</div>';

        echo $output;

    }
    
}
?>

<!-- 
<!DOCTYPE html>
<html>
    <head>
    <!--<link href ="css/calendario.css" rel="stylesheet">-->
   <!--  </head>

    <body>
    <?php
    $calendario = new Calendario(1,2020);
    $calendario->mostrar();
    ?>
    </body>
    </hmtl>*/
-->