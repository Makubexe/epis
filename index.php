<?php
include 'conecta_banco.php';
include 'consultas.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testes sistema</title>
    <!--Chamada CSS esterno-->
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  </head>
  <body >
    <!--<div id="teste">-->
    <table border="1" id="back" align="center" width="50%" >
      <tr bgcolor="#121A59" bordercolordark="#8F8F8F" style="color: #FFFFFF;" align="center">
        <td align="center" colspan="3">
          Menu
        </td>
      </tr>
      <tr >
        <td align="center" >
          <a href="func.php" id="link_funcionarios"><img src='css/img/64x64/users-alt.png'><br>Funcionarios</a>
        </td>
        <td align="center" >
          <a href="epi.php" id="link_epis"><img src='css/img/64x64/MD-headphones.png'><br>EPIs</a>
        </td>
        <td align="center" >
          <a href="receb.php" id="link_recebimento"><img src='css/img/64x64/document.png'><br>Recebimento</a>
        </td>
      </tr>
    </table>


  </div>
  </body>
</html>
