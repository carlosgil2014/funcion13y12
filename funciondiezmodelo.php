<?php
class examenModelo{

    public function number10($valor){
        $resultado = 0;
        $nuevaCadena = preg_replace('/[^A-Za-z0-9]/', '', $valor);
        for ( $pos=0; $pos < strlen($nuevaCadena); $pos ++ ) {
         $byte = substr($nuevaCadena, $pos);
         echo 'El byte ' . $pos . ' de $str tiene el valor ' . ord($byte) . PHP_EOL;
        }
        //echo $nueva;
        //echo $nueva;
        //$nueva = ord ($nueva);
        //echo $nueva;
        $matriz1 = str_split($nueva);
        if(strlen($nueva) == 10){
            for ($i=1; $i <=strlen($nueva) ; $i++) { 
                if($i != 10){
                      $resultado += $matriz1[$i-1]*$i;
                }else{
                     $resultado += $matriz1[9]*0;
                }
            }
            echo $resultado;
            //echo ($resultado % 11);
            // Cuando el residuo fuera 10, el último dígito se sustituye por una “X”
            // ($resultado % 9) == 10   esto es lo que pide?
              if(($resultado % 11)== $matriz1[9]){
                return 'Válida';
              }elseif($resultado==10){
                return 'Válida';
              }else{
                'No Válida';
              }  
        }else{
            return 'No Válida';
        }
    }

    public function number13($valor){
        $resultado = 0;
        $suma = 0;
        $nueva = preg_replace('/[^0-9]/', '', $valor);
        $matriz1 = str_split($nueva);
        if(strlen($nueva) == 13){
            for ($i=0; $i <strlen($nueva) ; $i=$i+2) {
                    if($i != 12){
                      $suma += $matriz1[$i]+$matriz1[$i+1];
                      $resultado = $suma*3; 
                    }
            }
            echo $resultado;
            echo $resul = (153 % 10) ;
            echo $aa = ($resul % 10-10);
            //return 'Válida';
            /*if($matriz1[12] == (10 % 10-10)){
                return 'Válida';
            }else{
                return 'No Válida';
            }*/
        }else{
            return 'No Válida';
        }
    }

    public function number14($valor){
        $resultado = 0;
        $suma = 0;
        $nueva = preg_replace('/[^0-9]/', '', $valor);
        $matriz1 = str_split($nueva);
        if(strlen($nueva) == 13){
            for ($i=0; $i <strlen($nueva); $i++) {
                if(($i +1) % 2 == 0){
                    $suma = $suma + ($nueva[$i] * 3);
                }
                else{
                    $suma = $suma + $nueva[$i];
                }
                $ultimoDigito = $nueva[$i];
            }
            $operacionMod = ((($suma % 10) % 10) - 10);
            $operacionBcdiv = ((bcdiv(bcdiv($suma, 10), 10))  - 10);
            echo "Cadena: " .$nueva. "<br>";
            echo "Suma: ".$suma."<br>"; 
            echo "Último dígito: ".$ultimoDigito."<br>";
            echo "Operación con módulos: ". $operacionMod."<br>";
            echo "Operación con bcdiv: ". $operacionBcdiv;
            if($ultimoDigito == $operacionMod || $ultimoDigito == $operacionBcdiv){
                return "Válida";
            }else{
                return "No válida";
            }
        }else{
            return 'No Válida';
        }
    }

}
?>