<?php
    function mostrar($tablero){
        
     echo $tablero[0][0] . $tablero[0][1] . $tablero[0][2] . "\n";
     echo $tablero[1][0] . $tablero[1][1] . $tablero[1][2] . "\n";
     echo $tablero[2][0] . $tablero[2][1] . $tablero[2][2] . "\n";

    }
    function comprobar_estado_de_partida($tablero){
        //filas iguales
        if(($tablero[0][0]==$tablero[0][1])&& ($tablero[0][0]==$tablero[0][2]) &&($tablero[0][0]!=="-") ){
            echo "fila 1 completada, juego terminado";
        }elseif(($tablero[1][0]==$tablero[1][1])&& ($tablero[1][0]==$tablero[1][2]) &&($tablero[1][0]!=="-")){
            echo "fila 2 completada, juego terminado";
        }elseif(($tablero[2][0]==$tablero[2][1])&& ($tablero[2][0]==$tablero[2][2]) &&($tablero[2][0]!=="-")){
            echo "fila 3 completada, juego terminado";
        //columnas iguales
        }elseif(($tablero[0][0]==$tablero[1][0])&& ($tablero[0][0]==$tablero[2][0]) &&($tablero[0][0]!=="-")){
            echo "columna 1 completada, juego terminado";
        }elseif(($tablero[0][1]==$tablero[1][1])&& ($tablero[0][1]==$tablero[2][1]) &&($tablero[0][1]!=="-")){
            echo "columna 2 completada, juego terminado";
        }elseif(($tablero[0][2]==$tablero[1][2])&& ($tablero[0][2]==$tablero[2][2])&&($tablero[0][2]!=="-")){
            echo "columna 3 completada, juego terminado";
        //diagonales iguales    
        }elseif(($tablero[0][0]==$tablero[1][1])&& ($tablero[0][0]==$tablero[2][2])&&($tablero[0][0]!=="-")){
            echo "diagonal 1 completada, juego terminado";
            
        }elseif(($tablero[2][0]==$tablero[1][1])&& ($tablero[2][0]==$tablero[0][2])&&($tablero[2][0]!=="-")){
            echo "diagonal 2 completada, juego terminado";

        }else{
            echo "nada";
        }

    }
$tablero[0][0] = "-";$tablero[0][1] = "-";$tablero[0][2] = "-";
$tablero[1][0] = "-";$tablero[1][1] = "-";$tablero[1][2] = "-";
$tablero[2][0] = "-";$tablero[2][1] = "-";$tablero[2][2] = "-";
$ganador = true;

comprobar_estado_de_partida($tablero);

while($ganador==false){
    $entrada = readline("mete X o 0");
    $fila_seleccionada = readline("selecciona");
}
    
    $s = readline("aqui");
    echo gettype($s);
?>