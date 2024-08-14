<?php
    include_once('Conec.php');
    if(isset($_POST['actualizar'])){
        $id = $_POST['id'];
        $FName = $_POST['FName'];
        $SecName = $_POST['SecName'];
        $Sexo = $_POST['Sexo'];
        $Num_fi = $_POST['Num_fi'];
        $DataNasc = $_POST['DataNasc'];
        $Email = $_POST['Email'];
        $NIF = $_POST['NIF'];

        $sqlUpdate = "UPDATE cliente SET FName ='$FName', SecName='$SecName', Sexo='$Sexo', Num_fi='$Num_fi', DataNasc='$DataNasc', Email='$Email', NIF='$NIF' WHERE id='$id'";
        $result = $conexao->query($sqlUpdate);
    }
    header("Location:list_dados.php");
?>