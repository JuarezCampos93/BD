
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
    <main>
        <div class="header-1">
            <ul align="left">
                <li><a href="index.php">HOME</a> </li>
                <li><a href="aparelhos.php">APARELHOS</a> </li>
                <li><a href="alunos.php">ALUNOS</a> </li>
                <li><a href="agenda.php">AGENDA</a> </li>
            </ul>
        </div>
        <div position="relative" class="main" align="center">
            <form method="post" action="cadastro.php">
                <fieldset>
                    <legend align="center">Preencha Dados dos Alunos:</legend>
                    <label>ID</label>
                    <input type="number" name="id"/>

                    <label>Nome:</label>
                    <input type="text" name="nome" />

                    <label>Telefone:</label>
                    <input type="tel" name="telefone"/>

                    <label>Idade:</label>
                    <input type = "numbet" name="idade" />

                    <label> Rua:</label>
                    <input type="text" name="rua"/>

                    <label>Bairro:</label>
                    <input type="text" name="bairro" />

                    <label>CPF:</label>
                    <input type="number" name="cpf"/>

                    <label>Estacionamento use apenas 1 ou 2:</label>
                    <input type="number" name="estacionamento" />

                    <label>Peso:</label>
                    <input type="number" name="peso"/>

                    <label>Altura:</label>
                    <input type="number" name="altura" />

                    <label>Ficha:</label>
                    <input type="text" name="ficha"/>

                    <label>Matricula Personal:</label>
                    <input type="text" name="personal"/>


                    <br> </br>
                    <button class= "btn btn-sucess" type="submit">Enviar</button>
                    <button align="right" name="consultar" id="consultar"> Consultar</button>


                </fieldset>
            </form>
        </div>
        <div>

    </main>


</body>

</html>