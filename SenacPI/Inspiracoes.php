<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header('Location: Index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Inspiracoes.css">
    <title>Insprirações - Venture Travel</title>
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
    <div class="container">
        <div class="topico">
            <div class="contentTittle">
                <h1>Dicas de Viagens</h1><br>
                <p>Separamos algumas dicas de viagens, para que você viajante possa aproveitar cada momento da sua aventura!</p>
            </div>

        </div>
        <div class="topico">
            <div class="contentLeft">
                <h1>1.Pesquise Antes de Partir:</h1>
                <p>Antes de embarcar na sua jornada, dedique algum tempo para pesquisar sobre o destino. Conheça a cultura, os costumes locais, a gastronomia e quaisquer eventos especiais que possam estar ocorrendo durante sua visita.</p>
            </div>
            <div class="contentRight">
                <img src="imagens/topicos1.png" alt="">
            </div>
        </div>
        <div class="topico">
            <div class="contentLeft">
                <h1>2.  Crie um Itinerário Flexível:</h1>
                <p>Embora seja ótimo ter um plano, permita-se a flexibilidade para aproveitar descobertas espontâneas. Mantenha um itinerário flexível para aproveitar ao máximo as oportunidades que surgirem.</p>
            </div>
            <div class="contentRight">
                <img src="imagens/topicos2.png" alt="">
            </div>
        </div>
        <div class="topico">
            <div class="contentLeft">
                <h1>3.  Respeite as Tradições Locais:</h1>
                <p>Conheça e respeite as tradições e normas culturais do destino. Isso não apenas enriquecerá sua experiência, mas também garantirá uma interação mais positiva com os locais.</p>
            </div>
            <div class="contentRight">
                <img src="imagens/topicos3.png" alt="">
            </div>
        </div>
        <div class="topico">
            <div class="contentLeft">
                <h1>4.  Mantenha-se Hidratado e Protegido:</h1>
                <p>Dependendo do destino, o clima pode variar. Mantenha-se hidratado e protegido do sol para garantir que você esteja sempre pronto para explorar.</p>
            </div>
            <div class="contentRight">
                <img src="imagens/topicos4.png" alt="">
            </div>
        </div>
        <div class="topico">
            <div class="contentLeft">
                <h1>5.  Comunique-se com os Locais:</h1>
                <p>Tente aprender algumas palavras-chave no idioma local. Mesmo que não seja fluente, os locais apreciarão seus esforços, tornando suas interações mais significativas.</p>
            </div>
            <div class="contentRight">
                <img src="imagens/topicos5.png" alt="">
            </div>
        </div>
    </div>
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