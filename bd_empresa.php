<!DOCTYPE html>

<html lang="pt">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="css/estilos.css">

</head>

<!--<body style="background-color: #AE0DF9;">-->

<body style="background-color: #0FBCFF">

  <nav style="background-color:#0FBCFF;" class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 200%; color:white;"
          class="navbar-brand" href="bemEstar.html">Bem-Estar</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a style="color:white;" href="index.html">Home</a></li>
        <li class="dropdown">
          <a style="color:white;" class="dropdown-toggle" data-toggle="dropdown" href="saude.html">Saúde
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="terapia.html">Terapia</a></li>
            <li><a href="fitness.html">Fitness</a></li>
          </ul>
        </li>

        <li><a style="color:white;" href="alimentacao.html">Alimentação</a></li>

        <li><a style="color:white;" href="faleConnosco.html">Fale Connosco</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <!--<li><a style="color:white;" href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
        <li class="dropdown">
          <a style="color:white;" class="dropdown-toggle" data-toggle="dropdown" href="saude.html"><span
              class="glyphicon glyphicon-user"></span>Sing up
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="signupEmpresa.html">Empresa</a></li>
            <li><a href="signupUser.html">Cliente</a></li>
          </ul>
        </li>
        <li><a style="color:white;" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>

      <button class="btn btn-danger navbar-btn"
        style="background-color:aliceblue;border:none;color: black; padding: 10px 10px;text-align:justify;">
        <a href="imc.html">IMC</a>
        <!--<a href="https://www.tuasaude.com/calculadora/imc/">IMC</a>-->
      </button>
    </div>
  </nav>
  
  <!--<p style="font-size:200%;">-->

<?php


$nome_empresa=$_POST['nome_empresa'];
$site_empresa=$_POST['site_empresa'];
$localidade_empresa=$_POST['localidade_empresa'];
$contacto_empresa=$_POST['contacto_empresa'];
$especialidade_empresa=$_POST['especialidade_empresa'];


$ligacao = new PDO("mysql:host=fdb27.runhosting.com;dbname=4174025_roberta", "4174025_roberta", "1?xZO-YH9.8ei:%S");
$ligacao->query("SET NAMES UTF8");
$consulta=$ligacao->prepare("insert into empresas (nome_empresa, site_empresa, localidade_empresa, contacto_empresa, especialidade_empresa) values('$nome_empresa','$site_empresa', '$localidade_empresa', '$contacto_empresa', '$especialidade_empresa') "); 
$consulta->execute();

if ($consulta->rowCount()>0) { 
echo "Registo criado com sucesso!";
}
else
{
echo "Não foi possível criar o Registo!";
}

/*echo "<p><a href='painel.php?user=admin&pass=123457'>Voltar atrás</a>";*/

?>

<!--</p>-->
</body>
</html>