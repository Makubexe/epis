<?php

# Cria a expressão SQL de consulta aos registros
  $sql_epi = "SELECT `CA`,`NOMEEPI`,`VENCIMENTO` FROM `epi` ORDER BY `VENCIMENTO`";
# Cria a expressão SQL de consulta aos registros
  $sql_funcionarios = "SELECT `CODFUNC`, `REGISTRO`, `NOME`, `DIVISAO`, `DEPARTAMENTO`, `FUNCAO`, `Status` FROM `funcionarios` ORDER BY `funcionarios`.`NOME` ";
# Cria a expressão SQL de consulta aos registros
  $sql_recebimento = "SELECT `CODREC`, `CA`, `CODFUNC`, `DATAREC`, `data_devolucao`, `TAMANHO` FROM `recebimento` ORDER BY `recebimento`.`DATAREC` DESC";

# Cria a expressão SQL de consulta aos registros
  $sql_receb_comp = "SELECT `funcionarios`.`REGISTRO`, `funcionarios`.`NOME`, `funcionarios`.`DEPARTAMENTO`, `funcionarios`.`DIVISAO`, `funcionarios`.`FUNCAO`, `epi`.`NOMEEPI`, `recebimento`.`DATAREC`, `recebimento`.`data_devolucao`, `recebimento`.`CA`, `epi`.`VENCIMENTO`, `recebimento`.`TAMANHO` FROM `recebimento`, `funcionarios`, `epi` WHERE `recebimento`.`CA` = `epi`.`CA` AND `recebimento`.`CODFUNC` = `funcionarios`.`CODFUNC` AND `funcionarios`.`Status` = 'Ativo' ORDER BY `funcionarios`.`NOME`, `recebimento`.`DATAREC` DESC";

?>
