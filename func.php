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
    <table border="1" id="tabela" align="center" width="25%">
      <tr bgcolor="#121A59" bordercolordark="#8F8F8F" style="color: #FFFFFF;" align="center">
        <td align="center" colspan="3">
          <a href="index.php" style="color: #FFFFFF;">Menu</a>
        </td>
      </tr>
      <tr>
        <td align="center">
          <a href="func.php" id="atual">Funcionarios</a>
        </td>
        <td align="center">
          <a href="epi.php" id="link">EPIs</a>
        </td>
        <td align="center">
          <a href="receb.php" id="link">Recebimento</a>
        </td>
      </tr>
    </table>

    <!--width="80%"-->
    <TABLE border=1 align="center">
      <TR bgcolor="#121A59" bordercolordark="#8F8F8F" style="color: #FFFFFF;" align="center">
        <!--<TD>Codigo Funcionario</TD>-->
        <TD>Registro</TD>
        <TD>Nome Funcionario</TD>
        <TD>Divisao</TD>
        <TD>Departamento</TD>
        <TD>funcao</TD>
        <TD>Status</TD>
        <TD>Alterar</TD>
        <TD>Excluir</TD>
      </TR>
      <?php
        # Exibe os resultados de novidades e notícias
        $result_tab_funcionario = (mysqli_query($link, $sql_funcionarios)) or die(mysqli_error($banco));
        #while ($tbl_func = mysqli_fetch_array($result_tab_funcionario))
        while ($tbl_func = mysqli_fetch_array($Func))
        {
          $func_cod_func  = $tbl_func["CODFUNC"];
          $func_registro   = $tbl_func["REGISTRO"];
          $func_nome   = $tbl_func["NOME"];
          $func_divisao   = $tbl_func["DIVISAO"];
          $func_departamento   = $tbl_func["DEPARTAMENTO"];
          $func_funcao   = $tbl_func["FUNCAO"];
          $func_status   = $tbl_func["Status"];

          echo "<TR bgcolor='#B1B1B1' bordercolordark='#8F8F8F' style='color:#000000' align='center'>";
            #echo "<TD>$func_cod_func</TD>";
            echo "<TD>$func_registro</TD>";
            echo "<TD>$func_nome</TD>";
            echo "<TD>$func_divisao</TD>";
            echo "<TD>$func_departamento</TD>";
            echo "<TD>$func_funcao</TD>";
            echo "<TD>$func_status</TD>";
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
          echo "<TD colspan='8'>";
            //exibe a paginação
            for($i = 1; $i < $numPaginas_func + 1; $i++) {
                echo "<a href='func.php?pagina=$i' style='color: #FFFFFF;' id='link_funcionarios'>&nbsp&nbsp&nbsp".$i."&nbsp&nbsp&nbsp</a>";
            }
          echo "</TD>";
        echo "</TR>";
      ?>
    </table>

  </body>
</html>
