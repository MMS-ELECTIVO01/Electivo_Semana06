<?php
class tarea{
    
    function mayorDosNumeros($n1,$n2){
        if($n1>$n2)
            return $n1;
        else
            return $n2;
    }
    //mheyson loyola
    function menorDosNumeros($n1,$n2){
            if($n1<$n2)
            return $n1;
        else
            return $n2;
    }
       function  NumeroPrimo($n1){
    //"Fernández Guzmán Sandro Fabricio"
    for ($i = 1; $i < ($n1+1); $i++) {
        if(n%i==0){
            $a++;
        }
    }
        if(a!==2){
            return 'No es primo';
        }else {
            return 'es primo';
        }
            
        
    }
    function factorial($x) 
// Hecho por: Mauro_Arroyo_Ordoñez
{
    $return = 1;
    for ($i=2; $i <= $x; $i++) {
        $return = gmp_mul($return, $i);
    }
    return $return;
}
   
}
    

        