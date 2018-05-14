<?php
include 'conecta_banco.php';
include 'consultas.php';
include 'paginacao.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testes sistema</title>
    <!--Chamada CSS esterno-->
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  </head>
  <body>
    <?php include 'barrasuperior.php'; ?>
    <table border="1" id="tabela_principal" align="center" width="25%">
      <tr bgcolor="#121A59" bordercolordark="#8F8F8F" style="color: #FFFFFF;" align="center">
        <td align="center" colspan="3">
          <a href="index.php" style="color: #FFFFFF;">Menu</a>
        </td>
      </tr>
      <tr>
        <td align="center">
          <a href="func.php" id="link">Funcionarios</a>
        </td>
        <td align="center">
          <a href="epi.php" id="link">EPIs</a>
        </td>
        <td align="center">
          <a href="receb.php" id="atual">Recebimento</a>
        </td>
      </tr>
    </table>

    <!--width="80%"-->
    <TABLE border=1 align="center">
      <TR bgcolor="#121A59" bordercolordark="#8F8F8F" style="color: #FFFFFF;" align="center">
        <TD>Registro</TD>
        <TD>Nome<BR>Funcionario</TD>
        <TD>Departamento<BR>Funcionario</TD>
        <TD>Divisao<BR>Funcionario</TD>
        <TD>Funcao<BR>Funcionario</TD>
        <TD>Nome<BR>EPI</TD>
        <TD>Data<BR>Recebimento</TD>
        <TD>Data<BR>Devolucao</TD>
        <TD>CA</TD>
        <TD>Data<BR>Validade</TD>
        <TD>Tamanho</TD>
        <TD>Alterar</TD>
        <TD>Excluir</TD>
      </TR>
      <?php
        # Exibe os resultados de novidades e notícias
        $result_tab_receb_comp = (mysqli_query($link, $sql_receb_comp)) or die(mysqli_error($banco));
        while ($tbl_receb_comp = mysqli_fetch_assoc($rece))
        {
          $receb_comp_ca   = $tbl_receb_comp["CA"];
          $receb_comp_nome_epi   = $tbl_receb_comp["NOMEEPI"];
          $receb_comp_registro   = $tbl_receb_comp["REGISTRO"];
          $receb_comp_nome   = $tbl_receb_comp["NOME"];
          $receb_comp_departamento  = $tbl_receb_comp["DEPARTAMENTO"];
          $receb_comp_divisao   = $tbl_receb_comp["DIVISAO"];
          $receb_comp_func   = $tbl_receb_comp["FUNCAO"];
          $receb_comp_data_receb   = $tbl_receb_comp["DATAREC"];
          $receb_comp_data_dev   = $tbl_receb_comp["data_devolucao"];
          $receb_comp_vencimento   = $tbl_receb_comp["VENCIMENTO"];
          $receb_comp_tamanho   = $tbl_receb_comp["TAMANHO"];

          $data_brasil_recebimento = new DateTime($receb_comp_data_receb);
          $data_brasil_devolucao = new DateTime($receb_comp_data_dev);
          $data_brasil_validade = new DateTime($receb_comp_vencimento);

          echo "<TR bgcolor='#B1B1B1' bordercolordark='#8F8F8F' style='color:#000000' align='center'>";
            #echo "<TD>$receb_comp_cod_receb</TD>";
            echo "<TD>$receb_comp_registro</TD>";
            echo "<TD>$receb_comp_nome</TD>";
            echo "<TD>$receb_comp_departamento</TD>";
            echo "<TD>$receb_comp_divisao</TD>";
            echo "<TD>$receb_comp_func</TD>";
            echo "<TD>$receb_comp_nome_epi</TD>";
            #echo "<TD>$receb_comp_status</TD>";
            echo "<TD>";
            echo $data_brasil_recebimento->format('d/m/Y');
            echo "</TD>";
            echo "<TD>";
            if ($receb_comp_data_dev==null) {
              echo "-";
            }else {
              echo $receb_comp_data_dev->format('d/m/Y');
            }
            echo "</TD>";
            echo "<TD>$receb_comp_ca</TD>";
            echo "<TD>";
            echo $data_brasil_validade->format('d/m/Y');
            echo "</TD>";
            echo "<TD>$receb_comp_tamanho</TD>";
            echo "<TD>";
              echo "<A ><img src='css/img/64_edit_page.png'width='35%'height='35%'></A>";
              #href='alterarcliente.php?Codigo=$Codigo
            echo "</TD>";
            echo "<TD>";
              echo "<A ><img src='css/img/64_trash.png'width='35%'height='35%'></A>";
              #href=deletacliente.php?Codigo=$Codigo
            echo "</TD>";
          echo "</TR>";
        }
        echo "<TR bgcolor='#121A59' bordercolordark='#8F8F8F' style='color: #FFFFFF;' align='center'>";
          echo "<TD colspan='13'>";
            //exibe a paginação
            for($i = 1; $i < $numPaginas_rece + 1; $i++) {
                echo "<a href='receb.php?pagina=$i' style='color: #FFFFFF;' id='link_funcionarios'>&nbsp".$i."&nbsp</a>";
            }
          echo "</TD>";
        echo "</TR>";
      ?>
    </table>
  </body>
</html>
