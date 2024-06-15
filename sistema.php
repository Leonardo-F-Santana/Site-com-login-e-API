<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Gol de Placa</title>
</head>
</head>
<body>
<div class="background-verde">
        <!--header-->
        <header>
            <div class="container">
                <nav>
                    <div class="logo">
                       <a> Gol de Placa </a>  
                    </div>
                    <ul class="ul">
                        <li> <a href="jogadores.php"> Jogadores </a> </li>
                        <li> <a href="ligas.php"> Ligas </a> </li>
                        <li> <a href="sair.php"> <button class="btn-gradient">Sair</button></a> </li>
                    </ul>
                    <div class="menu-icon">
                        <img src="img/menu.png" alt="ícone de menu">
                    </div>
                </nav>
            
            </div>
        </header>
        <!--fim do header-->
        <main>
            <div class="container">
                <!--main text-->
                <div class="main-text">
                    <h1>FutePaixão</h1>
                    <h2>Todas as ligas de futebol</h2>
                    <div>
                        <a href="ligas.php"><button class="btn-gradient">Pesquisar agora</button></a>
                        <img src="img/verificado.png" alt="Verificado">
                    </div>
                    </div>
                    <div class="main-img">
                        <img src="img/img1.png" alt="Jogador chutando"
                    </div>


                </div>
            </div>
        </main>
    </div>
    <!--fim bg verde-->
    <!--resultados-->
    <section class="resultados">
        <!--container-->
        <div class="container">
             <!--result texte-->
            <div class="resultados-text">
                Atualizando a galera!!
            </div>
            <!--fim result texte-->
            <div class="resultados-numeros">
                <p>
                    <span>Quase mil</span><br>
                    Ligas
                </p>

                <p>
                    <span>+ de 2</span><br>
                    anos
                </p>

                <p>
                    <span>+ de 800</span><br>
                    consultas!
                </p>
            </div>
        </div>
        <!--fim container-->
    </section>
    <!--section diferenciais com imagens-->
    <section class="diferenciais">
        <div class="container">
            <div class="card">
                <img src="img/medal.png" alt="medalha">
                <h3 class="titulo">TOP 1 Nacional</h3>
                <p>
                    “Esporte em Foco” - O Guia Definitivo para os Amantes do Esporte

                    Se você é um verdadeiro aficionado por futebol, o “Gol de placa” é o seu destino online
                    para tudo relacionado ao esporte mais popular do mundo.
                </p>
            </div>
            <div class="card">
                <img src="img/24h.png" alt="24h">
                <h3 class="titulo">Consulta 24h</h3>
                <p>
                    Mantenha-se informado sobre as últimas notícias do mundo do futebol.
                    Transferências, lesões, resultados de partidas e muito mais.
                </p>
            </div>
            <div class="card">
                <img src="img/caixa.png" alt="Caixa">
                <h3 class="titulo">Servindo em todo país</h3>
                <p>
                    Não perca nenhum jogo importante! Nosso calendário detalhado mostra as datas,
                    horários e locais das partidas dos principais campeonatos.                </p>
            </div>
        </div>
    </section>
    <!--fim da section diferenciais com imagens-->
    <!--section-->
    <section class="casa">
        <div class="container">
            <div class="casa-img">
                <img src="img/casa.png" alt="Estadio">
            </div>
            <div class="casa-text">
                <h2>Seu time é o melhor!</h2>
                <p>  Temos todas as ligas de futebol do universo!</p>
                    <img src="img/user-happy.png" alt="usuarios">
                    <p>
                        <b>
                           +50 usuarios felizes. 
                        </b>
                    </p>
            </div>
        </div>
    </section>
    <!--fim resultados-->
    <footer>
        <div class="container">
            <!--ul1-->
           <ul>
                <h3>Gol de Placa</h3>
                <p>
                    Explore a rica história do futebol.
                </p>
                <div class="redes-sociais">
                    <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.png" alt="Facebook"></a>
                    <a href="https://x.com/" target="_blank"><img src="img/twitter.png" alt="X"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png" alt="Instagram"></a>
                    <a href="https://www.linkedin.com/" target="_blank"><img src="img/linkedin.png" alt="Linkedin"></a>
                </div>
            </ul>
            <!--fim ul1-->
            <!--ul2-->
            <ul>
                <h3>Parceiros</h3>
                <li><a href="https://tntsports.com.br/" target="_blank">TNT Sports</a></li>
                <li><a href="https://ge.globo.com/" target="_blank">Globo Esporte</a></li>
                <li><a href="https://www.lance.com.br/" target="_blank">Lance!</a></li>
            </ul>
             <!--fim ul2-->
            <!--ul3-->
            <ul>
                <h3>Consultar ligas</h3>
                <li><a href="ligas.php">API</a></li>
                <li><a href="jogadores.php">Ranking de melhores jogadores</a></li>
            </ul>
            <!--fim ul3-->
            <!--ul4-->
            <ul>
                <h3>Entre em contato</h3>
                <li>
                    21 912345678
                </li>
                <li>
                    empresa@goldeplaca.com
                </li>
            </ul>
            <!--fim ul4-->
        </div>
    </footer>
    <script src="js/main.js"></script>


    
    
</body>

</html>
