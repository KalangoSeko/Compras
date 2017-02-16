<?php

$login=$_POST['login'];
$senha=$_POST['senha'];

$con=mysqli_connect("localhost","root","","lista_de_compras");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }





?>

<html>

<head>
<title>Autenicando Usuário</title>
<script type="text/javascript">
funcion logonsuccessfully(){
	setTimeout("window.location='botao.html'", 5000);
}

function loginfailed() {
	setTimeout("window.location='index.html'", 5000);

</script>
</head>

<body>


<?php

 

$sql =   mysqli_query($con,"SELECT * FROM usuario WHERE login = '$login' and senha = '$senha'") or die (mysqli_error());
$row = mysqli_num_rows($sql);
if($row > 0) {
	session_start();
	$_SESSION['login']=$_POST['inputLogin'];
	echo"<script>loginsuccessfully</script>";
        header('Location: botao.html');

} else {
	echo "<center>Nome de usuário ou senha inválidos! Aguarde um instante para tentar novamente</center>";
	echo " <script>loginfaild()</script>";
        header('Location: index.php?msg=login ou senha incorretos');

}
?>

</body>
</html>
