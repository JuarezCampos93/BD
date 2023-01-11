<?php
 include ("conexao.php");

 $consulta = "SELECT * FROM pessoa WHERE id_pessoa = '20'";

 $con = $mysqli->query($consulta) or die($mysqli->error);
?>  

<html>
    <head>
        <meta charset = "utf8">        
    </head>
    <body>
        <table border = "1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Rua</td>
                <td>Bairro</td>
                <td>CPF</td>
                <td>ID_Estacionamento</td>
            </tr>
            <?php while($dado = $con->fetch_array()){ ?>
            <tr>
                <td><?php echo $dado["id_pessoa"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["telefone"]; ?></td>
                <td><?php echo $dado["rua"]; ?></td>
                <td><?php echo $dado["bairro"]; ?></td>
                <td><?php echo $dado["cpf"]; ?></td>
                <td><?php echo $dado["id_estacionamento"]; ?></td>
            </tr>
           <?php } ?>
        </table>
    </body>
</html>