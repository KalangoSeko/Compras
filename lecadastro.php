<html>

<head>
<title></title>
<meta http-equiv="refresh" content="2;url=cadastro.html">.
</head>

<body>
<?php




$con=mysqli_connect("localhost","root","","lista_de_compras");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }





?>

<?php
$nome=$_POST['inputNome'];
$login=$_POST['inputLogin'];
$email=$_POST['inputemail'];
$senha=$_POST['inputSenha'];
$sql = mysqli_query($con,"INSERT INTO usuario(nome, login, email, senha)
VALUES('$nome', '$login', '$email', '$senha')");
mysqli_close($con);
echo "<center><h1>Usuário foi cadastrado com sucesso!</h1></center>";
?>
</body>

</html>
