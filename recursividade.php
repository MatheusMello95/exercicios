<?php

function achaNumero($num){
    if($num > 0){
        if($num % 2 ==0){
            if ($num % 3 ==0){
                if($num % 10 == 0){
                    return $num;
                }else{
                    return achaNumero($num +1);    
                }
            }else{
                return achaNumero($num +1);
            }
        }else{
            return achaNumero($num +1);
        }
       
    } 
    return $num;
}

echo achaNumero(1);