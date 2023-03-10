<?php
$conn = mysqli_connect('fdb27.runhosting.com', 'betadomenique@hotmail.com', 'Fernandes123', '4174025_roberta');

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

//INCLUIR DADOS NA TABELA

$id=$_GET['id'];
$marca=$_GET['marca'];
$modelo=$_GET['modelo'];
$cor=$_GET['cor'];
$matricula=$_GET['matricula'];
$kms=$_GET['kms'];
$preco_venda=$_GET['preco_venda'];
$combustivel=$_GET['combustivel'];
$ano=$_GET['ano'];


// Ligar PHP à Base Dados
$ligacao = new PDO("mysql:host=fdb27.runhosting.com;dbname=4174025_roberta", "4174025_roberta", "1?xZO-YH9.8ei:%S");
$ligacao->query("SET NAMES UTF8");
$consulta=$ligacao->prepare("update stand set marca='$marca', modelo='$modelo', cor='$cor', matricula='$matricula', kms=$kms, preco_venda=$preco_venda, combustivel='$combustivel', ano=$ano where id=$id");

$consulta->execute();

if ($consulta->rowCount()>0) {
echo "Registo alterado com sucesso!";
}
else
{
echo "Não foi possível atualizar o Registo!";
}

//echo "<p><a href='painel.php'>Voltar atrás</a>";

echo "<p><a href='painel.php?user=admin&pass=123457'>Voltar atrás</a>";
?>