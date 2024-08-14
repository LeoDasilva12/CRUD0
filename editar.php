<?php
    if(!empty($_GET['id'])){
        include_once('Conec.php');
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM cliente WHERE id=$id";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
            $FName = $user_data['FName'];
            $SecName = $user_data['SecName'];
            $Sexo = $user_data['Sexo'];
            $Num_fi = $user_data['Num_fi'];
            $DataNasc = $user_data['DataNasc'];
            $Email = $user_data['Email'];
            $NIF = $user_data['NIF'];
        }
        }else{
            header("Location:list_dados.php");
        }
    }else{
        header("Location:list_dados.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Actualizar Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>	
    <section class="form__section">
		<div class="container form__section-container">
			<h2>Actualizar Cidadão</h2>
			<form action="Salvar.php" method="post">

				<input type="text" id="firstname" name="FName" value="<?php echo $FName?>" required=""/>

				<input type="text" id="secname" name="SecName" value="<?php echo $SecName?>" required=""/>
            
				<input type="number" id="num_fi" name="Num_fi" value="<?php echo $Num_fi?>" required=""/>

				<input type="text" id="e-mail" name="Email" value="<?php echo $Email?>" required=""/>

                <input type="text" id="cpf" name="NIF" value="<?php echo $NIF?>" required=""/>

				<input type="date" name="DataNasc" value="<?php echo $DataNasc?>" id="dataNasc">

				<input type="text" id="sexo" name="Sexo" value="<?php echo $Sexo?>" required=""/>

                <input type="hidden" name="id" value="<?php echo $id?>">

                <input type="submit" name="actualizar"  class="btn" id="update" value="Actualizar">

				<small>Já cadastrou então liste os dados? <a href="./list_dados.php">Listar dados</a></small>	
	<script src="Cadastro.js"></script>
</body>
</html>