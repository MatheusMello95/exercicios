<?php

$num=0;
for($i=0; $i<=1000; $i++){
    if($i % 3 ==0){
        $num += $i;
    }else if($i % 5 ==0){
        $num += $i;
    }
}

echo $num;