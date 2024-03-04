<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header('Location: Index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/DicasDeViagens.css">
    <title>Dicas - Venture Travel</title>
</head>
<body>
<header>
        <div class="headerLeft">
            <a href="DicasDeViagens.php">• Inspirações de Férias</a>
            <a href="Inspiracoes.php">• Dicas de Viagens</a>
            <div class="logo">
                <div class="imagensLogo">      
                    <a href="index.php">
                        <img src="imagens/LogoBanner-removebg-preview.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="headerRight">
            <a href="#contato">• Fale conosco!</a>
            <?php
                if (isset($_SESSION['Email'])) {
                    echo '<a class="login" href="Sair.php">• Sair</a>';
                } else {
                    echo '<a class="login" onclick="openModal()">• Login</a>';
                }
            ?>
        </div>
    </header>
    <main>
        <div class="titulo">   
            <div class="searchBox">
                <form method="GET" action="DicasDeViagens.php">
                    <input class="searchInput" type="text" name="pesquisa" placeholder="O que você deseja explorar?">
                    <button class="searchButton" type="submit" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                            <g clip-path="url(#clip0_2_17)">
                                <g filter="url(#filter0_d_2_17)">
                                    <path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dy="4"></feOffset>
                                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
                                </filter>
                                <clipPath id="clip0_2_17">
                                    <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
                                </clipPath>
                            </defs>
                        </svg> 
                    </button>
                </form>
                
            </div>

        </div>
        <div class="btnTitulo">
            <a href="AdicionarViagem.php">
                <button id="btnTitulo">
                    ADICIONAR VIAGEM
                </button> 
            </a>
        </div>
        <div class="container">
            <div class="galeria">

            <?php
                include_once('conexao.php');
                $sql = "SELECT * FROM publicacao";

                if (isset($_GET['pesquisa'])) {
                    $pesquisa = $_GET['pesquisa'];
                    $sql = "SELECT * FROM publicacao WHERE Cidade LIKE '%$pesquisa%' OR Pais LIKE '%$pesquisa%'";
                } else {
                    $sql = "SELECT * FROM publicacao";
                }
                
                $result = $conexao->query($sql);

                if ($result->num_rows > 0) {
                    
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="card">';
                        echo '<div class="headerCard">';
                        echo '<h4>' . $row['Cidade'] . ' - ' . $row['Pais'] . '</h4>';
                        echo '</div>';
                        echo '<div class="bodyCard">';
                        echo '<a href="PaginaPais.php?id=' . $row['Id'] . '">';
                        echo '<img src="upload/' . $row['Foto'] . '" alt="">';
                        echo '</a>';
                        echo '</div>';
                        echo '<div class="footerCard">';
                        echo '<a href="PaginaPais.php?id=' . $row['Id'] . '">';
                        echo '<button> Saber Mais </button>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo 'Ainda não foi adicionado nenhuma avaliação :(';
                }
                $conexao->close();
?>


            </div>
        </div>
    </main>
    <footer>
        <div class="footerLeft" id="contato">
            <div class="footerCima">
                <h1>Mantenha-se conectado, siga-nos:</h4>
                <div class="redesSociais">
                    <div class="rede">
                        <img src="imagens/instagram.png" alt="">
                    </div>
                    <div class="rede">
                        <img src="imagens/facebook.png" alt="">
                    </div>
                    <div class="rede">
                        <img src="imagens/twitter.png" alt="">
                    </div>
                </div>
            </div>
            <div class="footerBaixo">
                <div class="inputEmail">
                    <img src="imagens/email.png" alt="">
                    <p>venturetravelturismo@gmail.com</p>
                </div>
                <div class="copy">
                    &copy; Venture Travel 2024
                </div>
                
            </div>
        </div>
        <div class="footerRight">
            <img src="imagens/imagemFooter.PNG" alt="">
        </div>
    </footer>
</body>
</html>