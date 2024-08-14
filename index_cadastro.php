<?php

    if(isset($_POST['salvar'], $_POST['FName'])){
		try {
			$conexao = new PDO ("mysql:host=localhost;dbname=crud1","root","");
		} 
		catch (\Throwable $erro) {
			echo $erro->getMessage();
		}
		$FName = $_POST['FName'];
        $SecName = $_POST['SecName'];
        $Sexo = $_POST['sexo'];
        $Num_fi = $_POST['Num_fi'];
        $DataNasc = $_POST['DataNasc'];
        $Email = $_POST['Email'];
        $NIF = $_POST['NIF'];

		$conexao->query(" INSERT INTO cliente (FName, SecName, Sexo, Num_fi, DataNasc, Email, NIF)VALUES ('$FName', '$SecName', '$Sexo', '$Num_fi', '$DataNasc', '$Email', '$NIF');");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="./css/style.css" rel="stylesheet" type="text/css"/>
	<title>Cadastro de Cidadão</title>
</head>
<body>
	<section class="form__section">

		<div class="container form__section-container">

			<h2>Cadastar Cidadão</h2>

			<form action="index_cadastro.php" method="post">

				<input type="text" name="FName" placeholder="Insira o primeiro nome"/>

				<input type="text" name="SecName" placeholder="Insira o sobrenome"/>
				
				<input type="number" name="Num_fi" placeholder="Quantos filhos tens?"/>

				<input type="text" name="Email" placeholder="Insira o e-mail"/>

				<input type="text" name="NIF" placeholder="Insira o nº de BI"/>

				<input type="date" name="DataNasc">

				<select id="sexo" name="sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
				<input type="submit" name="salvar" class="btn" value="Cadastrar"> 
				<small>Já cadastrou então liste os dados? <a href="list_dados.php">Listar dados</a></small>	
			</form>
		</div>
	</section>
</body>
</html>