<?php
//verifica a página atual caso seja informada na URL, senão atribui como 1ª página
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
#echo "$pagina<br>";

//seleciona todos os itens da tabela
$Func = mysqli_query($link, $sql_funcionarios);
$epis = mysqli_query($link, $sql_epi);
$rece = mysqli_query($link, $sql_receb_comp);

//conta o total de itens
$total_func = mysqli_num_rows($Func);
$total_epi = mysqli_num_rows($epis);
$total_rece = mysqli_num_rows($rece);
#echo "$total<br>";

//seta a quantidade de itens por página, neste caso, 2 itens
$registros = 10;
#echo "$registros<br>";

//calcula o número de páginas arredondando o resultado para cima
$numPaginas_func = ceil($total_func/$registros);
$numPaginas_epi = ceil($total_epi/$registros);
$numPaginas_rece = ceil($total_rece/$registros);
#echo "$numPaginas, $total, $registros<br>";

//variavel para calcular o início da visualização com base na página atual
$inicio = ($registros*$pagina)-$registros;
#echo "$inicio, $registros, $pagina, $registros<br>";

//seleciona os itens por página
$cmd_func = "$sql_funcionarios limit $inicio,$registros";
$Func = mysqli_query($link, $cmd_func);
$total_func = mysqli_num_rows($Func);

$cmd_epi = "$sql_epi limit $inicio,$registros";
$epis = mysqli_query($link, $cmd_epi);
$total = mysqli_num_rows($epis);

$cmd_rece = "$sql_receb_comp limit $inicio,$registros";
$rece = mysqli_query($link, $cmd_rece);
$total = mysqli_num_rows($rece);
#echo " $inicio, $total, ";
?>
