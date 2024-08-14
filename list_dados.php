<?php
include_once('Conec.php');

if(!empty($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM cliente WHERE id LIKE '%$data%' or FName LIKE '%$data%' or SecName LIKE '%$data%' ORDER BY id ASC";
}
else
{
    $sql = "SELECT * FROM cliente ORDER BY id DESC";
}
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style1.css" rel='stylesheet' type='text/css' media="all">
    <link rel="stylesheet" href="table.css">
    <title>Ver Clientes</title>
</head>
<body>
    <section class="dashboard">
        <div class="container dashboard__container">
            <main>
                <h2>Manejar Cidadão</h2>
                <table>
            <thead>
                <tr>
                    <th>Primeiro Nome</th>
                    <th>Sobre Nome</th>
                    <th>Sexo</th>
                    <th>Número de Filhos</th>
                    <th>Data de Nascimento</th>
                    <th>E-mail</th>
                    <th>NIF</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo "<td>".$user_data['FName']."</td>";
                echo "<td>".$user_data['SecName']."</td>";
                echo "<td>".$user_data['Sexo']."</td>";
                echo "<td>".$user_data['Num_fi']."</td>";
                echo "<td>".$user_data['DataNasc']."</td>";
                echo "<td>".$user_data['Email']."</td>";
                echo "<td>".$user_data['NIF']."</td>";
                echo "<td>
                    <a class='btn btn-sm btn-primary' href='editar.php?id=$user_data[id]' title='Editar' class='btn sn'>Editar</a>
                    </td>";
                echo "<td>
                    <a class='btn btn-sm btn-danger' href='deletar.php?id=$user_data[id]' title='Deletar' class='btn sn danger'>Eliminar</a>
                    </td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
                </main>
            </div>
        <small><a href="index_cadastro.php">Cadastrar Cidadão</a></small>
    </section>
</body>
</html>