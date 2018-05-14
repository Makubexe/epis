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
  <body style="align='center';">
    <?php include 'barrasuperior.php'; ?>
    <br>
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
          <a href="epi.php" id="atual">EPIs</a>
        </td>
        <td align="center">
          <a href="receb.php" id="link">Recebimento</a>
        </td>
      </tr>
    </table>
    <br>
    <!--width="80%"-->
    <TABLE border=1 align="center">
      <TR bgcolor="#121A59" bordercolordark="#8F8F8F" style="color: #FFFFFF;" align="center">
        <TD>CA</TD>
        <TD>Nome EPI</TD>
        <TD>Vencimento</TD>
        <TD>Alterar</TD>
        <TD>Excluir</TD>
      </TR>
      <?php
        # Exibe os resultados de novidades e notícias
        $result_tab_epi = (mysqli_query($link, $sql_epi)) or die(mysqli_error($banco));
        while ($tbl_epi = mysqli_fetch_assoc($epis))
        {
          $epi_ca  = $tbl_epi["CA"];
          $epi_nomeepi   = $tbl_epi["NOMEEPI"];
          $epi_vencimento   = $tbl_epi["VENCIMENTO"];

          $data_brasil = new DateTime($epi_vencimento);

          echo "<TR bgcolor='#B1B1B1' bordercolordark='#8F8F8F' style='color:#000000' align='center'>";
            echo "<TD>$epi_ca</TD>";
            echo "<TD>$epi_nomeepi</TD>";
            echo "<TD>";
            echo $data_brasil->format('d/m/Y');
            echo "</TD>";
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
          echo "<TD colspan='5'>";
            //exibe a paginação
            for($i = 1; $i < $numPaginas_epi + 1; $i++) {
                echo "<a href='epi.php?pagina=$i' style='color: #FFFFFF;' id='link_funcionarios'>&nbsp&nbsp&nbsp".$i."&nbsp&nbsp&nbsp</a>";
            }
          echo "</TD>";
        echo "</TR>";
      ?>
    </table>
    <br>
  </body>
</html>
