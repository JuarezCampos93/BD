<html>

<head>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title> IronInside Juiz de Fora</title>
</head>

<body>
    <header class="menu-principal">
        <main>
            <div class="header-1" align="center" <h1> <b> IronInside Juiz de Fora</b> </h1>
                <img src="./img/logo.png" alt="logo" height="42" width="62" />

            </div>
            <div class="redes-sociais">
                <ul>
                    <li>
                        <a href="">
                            <img src="./img/rss.png" alt="rss" height="42" width="42" />
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="./img/face.png" alt="face" height="42" width="42" />
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="./img/tw.png" alt="face" height="42" width="42" />
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="./img/lik.png" alt="face" height="42" width="42" />
                        </a>
                    </li>

                </ul>

            </div>
            </div>
        </main>
    </header>
    <br> </br>
    <div class="header-1">
        <ul align="left">
            <li><a href="index.php">HOME</a> </li>
            <li><a href="listar.php">ALUNOS</a> </li>
        </ul>

        <?php
        include ("conexao.php");
        $nome = $_POST["aluno"];
        
        $consulta = "SELECT e.descricao AS exercicios
                     FROM pessoa p
                     INNER JOIN aluno a on a.id_pessoa = p.id_pessoa and p.nome = '$nome'
                     INNER JOIN exercicio_da_ficha e on e.numero_ficha = a.numero_ficha
                    ";

        $con = $mysqli->query($consulta) or die($mysqli->error);

        ?><table border=1>
            <tr><td>Exercicios:</td></tr>
            <tr><?php while($dado = $con->fetch_array()){ ?>
                <td><?php echo $dado["exercicios"]; ?></td>
            </tr>
            <?php } ?>
        </table>
        <?php

        ?>  







</body>

</html>