<?php

$sigla = ['ES', 'MG', 'RJ', 'SP'];
$estado = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];

$estado = array_reverse($estado);

$uf = array_combine($sigla,$estado);

echo "<prev>";
foreach($uf as $sig => $estados){
    echo "$sig - $estados<br>";
}

