<html>
<head>
<title>Editar Registo</title>
<meta charset="UTF-8">
</head>
<body>
<div align="center">
<h1>Stand Online - Versão 1.0</h1>
<h4>EDITAR REGISTO</h4>
<hr>
<form method="get" action="alterar2.php">   
        <h3>ID</h3>
        <input type="text" name="id" size="20" value="<?php $id=$_GET['id']; echo $id ?>" readonly>
        <h3>Marca</h3>
        <input type="text" name="marca" size="20" value="<?php $marca=$_GET['marca']; echo $marca ?>" required>
        <h3>Modelo</h3>
        <input type="text" name="modelo" size="20" value="<?php $modelo=$_GET['modelo']; echo $modelo ?>" required> 
        <h3>Cor</h3>
        <input type="text" name="cor" size="20" value="<?php $cor=$_GET['cor']; echo $cor ?>" required>
        <h3>Matrícula</h3>
        <input type="text" name="matricula" size="20" value="<?php $matricula=$_GET['matricula']; echo $matricula ?>" required>
        <h3>Kilómetros</h3>
        <input type="text" name="kms" size="20" value="<?php $kms=$_GET['kms']; echo $kms ?>" required>
        <h3>Preço de Venda</h3>
        <input type="text" name="preco_venda" size="20" value="<?php $preco_venda=$_GET['preco_venda']; echo $preco_venda ?>" required>
        <h3>Combustível</h3>
        <p/>
        <select name="combustivel">
                <option value="<?php $combustivel=$_GET['combustivel']; echo $combustivel ?>"><?php $combustivel=$_GET['combustivel']; echo $combustivel ?></option>
                <option value="gasolina">gasolina</option>
                <option value="gasoleo">gasoleo</option>
                <option value="elétrico">elétrico</option>
                <option value="gás">gás</option>
        </select>
        <h3>Ano</h3>
        <input type="text" name="ano" size="20" value="<?php $ano=$_GET['ano']; echo $ano ?>" required>
        <br><br>
        <input type="submit" value="ALTERAR REGISTO">
</form>
</div>
</body>
</html>