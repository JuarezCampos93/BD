<?php
 include ("conexao.php");

 $consulta = "SELECT * 
              FROM pessoa p 
              INNER JOIN aluno a ON p.id_pessoa = a.id_pessoa";

 $con = $mysqli->query($consulta) or die($mysqli->error);
?>  

<html>
    <head>
        <meta charset = "utf8">        
    </head>
    <body>
        <h1>Alunos Cadastrados</h1>
        <table border = "1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Rua</td>
                <td>Bairro</td>
                <td>CPF</td>
                <td>ID_Estacionamento</td>
                <td>Ficha</td>
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
                <td><?php echo $dado["numero_ficha"]; ?></td>
            </tr>
           <?php } ?>
        </table>

        <h2>Listar Ficha</h2>
        <div position="relative" class="main" align="center">
                <form action="aparelhos.php" method="post">
                    <fieldset>
                        <legend align="center">Conslute a ficha do Aluno</legend>                       
                        <label >Aluno:</label>
                        <input type="text" name="aluno"/>
                        <br> </br>
                        <button type="submit">Consultar</button>


                    </fieldset>
                </form>
            </div>

    </body>
</html>