<?php

# Exibe os resultados de novidades e notícias
  $result_tab_epi = (mysqli_query($link, $sql)) or die(mysqli_error($banco));
  while ($tbl_epi = mysqli_fetch_assoc($result_tab_epi))
  {
    $ca  = $tbl_epi["CA"];
    $nomeepi   = $tbl_epi["NOMEEPI"];
    $vencimento   = $tbl_epi["VENCIMENTO"];
?>

<TABLE border=1 width="80%">
  <TR>
    <TD>Codigo Recebimento</TD>
    <TD>CA</TD>
    <TD>Codigo Funcionario</TD>
    <TD>Data Recebimento</TD>
    <TD>Tamanho</TD>
    <TD>Alterar</TD>
    <TD>Excluir</TD>
  </TR>
  <?php
    # Exibe os resultados de novidades e notícias
    $result_tab_recebimento = (mysqli_query($link, $sql_recebimento)) or die(mysqli_error($banco));
    while ($tbl_receb = mysqli_fetch_assoc($result_tab_recebimento))
    {
      $receb_cod_receb  = $tbl_receb["CODREC"];
      $receb_ca   = $tbl_receb["CA"];
      $receb_cod_func   = $tbl_receb["CODFUNC"];
      $receb_data_receb   = $tbl_receb["DATAREC"];
      $receb_tamanho   = $tbl_receb["TAMANHO"];

      echo "<TR bgcolor='#B1B1B1' bordercolordark='#8F8F8F' style='color:#000000' align='center'>";
        echo "<TD>$receb_cod_receb</TD>";
        echo "<TD>$receb_ca</TD>";
        echo "<TD>$receb_cod_func</TD>";
        echo "<TD>$receb_data_receb</TD>";
        echo "<TD>$receb_tamanho</TD>";
        echo "<TD>";
          #echo "<A href='alterarcliente.php?Codigo=$Codigo><img src='css/imagens/64_edit_page.png'width='50%'height='50%'></A>";
        echo "</TD>";
        echo "<TD>";
          #echo "<A href=deletacliente.php?Codigo=$Codigo><img src='css/imagens/64_trash.png'width='50%'height='50%'></A>";
        echo "</TD>";
      echo "</TR>";
    }
  ?>
</table>
