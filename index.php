<?php

$t=time(); // time() retorna o número de segundos desde 01/01/1970 até
//data/hora atuais
//echo $t."<br />";
//Traduz o dia da semana (Inglês/Português)
switch(date("D")) {
case "Sun":
$semana = "Domingo"; 
break;
case "Mon":
$semana = "Segunda-feira "; break;
case "Tue":
$semana = "Terça-feira "; break;
case "Wed":
$semana = "Quarta-feira "; break;
case "Thu":
$semana = "Quinta-feira "; break;
case "Fri":
$semana = "Sexta-feira "; break;
case "Sat":
$semana = "Sábado "; break;
}
echo $semana;
$cidades = array("MG"=>"Belo Horizonte","RS"=>"Porto Alegre", "PR"=>"Curitiba",
"PE"=>"Recife");
echo $cidades['RS'];
?> 




