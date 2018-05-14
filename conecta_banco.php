<?PHP
#Resolve problema dos acentos
header("Content-Type: text/html; charset=ISO-8859-1", true);

   # Dados para a conexão com o banco de dados
   $servidor = 'localhost'; 		# Nome DNS ou IP do seu servidor HTTP
   $usuario = 'bobs';       	# Nome de usuário para acesso ao mysqli
   $senha = 'zYmYDtNEZHm9WyEE';      	# Senha de acesso
   $banco = 'consulta_epi';   		# Nome do banco de dados

   # Executa a conexão com o mysqli
   $link = mysqli_connect($servidor, $usuario, $senha)
    or die('Não foi possivel conectar: ' . mysqli_error());

  # Seleciona o banco de dados que deseja utilizar
  $select = mysqli_select_db($link, $banco);

?>
