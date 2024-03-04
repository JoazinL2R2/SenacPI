<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" defer></script>
    <script src="script/script.js"></script>
    <title>HOME - Venture Travel</title>
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
        <div id="overlay" class="overlay" onclick="closeModal()"></div>
        <div id="modal" class="modal">  
            <div class="headerModal">
                <span class="close-btn" onclick="closeModal()">&times;</span>
            </div>
            <div class="bodyModal">
                <form class="form" method="post" action="javascript:void(0);" onsubmit="verificarLogin()">
                    <p class="form-title">Entrar - Venture Travel</p>
                        <div class="input-container">
                        <input placeholder="Insira seu e-mail" type="email" id="email" name="email" required>
                        <span>
                            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="input-container">
                        <input placeholder="Insira sua senha" type="password" id="senha" name="senha" required>
                        <span>
                            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                            <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </span>
                        </div>
                        <p id="mensagemErro" style="color: rgb(155, 2, 2);"></p>
                        <button class="submit" type="submit" value="submit">Entrar</button>

                        <p class="signup-link">
                            Não possui conta?
                            <a onclick="openModalCadastro()">Cadastrar</a>
                        </p>
                </form>
            </div>
        </div>

        <div id="overlay" class="overlay" onclick="closeModal()"></div>
        <div id="modalCadastro" class="modalCadastro">  
            <div class="headerModal">
                <span class="close-btn" onclick="closeModal()">&times;</span>
            </div>
            <div class="bodyModal">
                <form class="form" method="post" action="criarConta.php">
                    <p class="form-title">Cadastrar - Venture Travel</p>
                        <div class="input-container">
                            <input placeholder="Insira seu nome" type="text" name="nome">
                        </div>
                        <div class="input-container">
                            <input placeholder="Insira seu e-mail" type="email" name="email">
                            <span>
                                <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="input-container">
                            <input placeholder="Insira sua senha" type="password" name="senha">
                            <span>
                                <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="input-container">
                            <input placeholder="Confirme sua senha" type="password" name="confirmacaoSenha">
                            <span>
                                <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                </svg>
                            </span>
                        </div>
                        <button class="submit" type="submit">Cadastrar</button>

                        <p class="signup-link">
                            Já possui conta?
                            <a onclick="openModal()">Entrar</a>
                        </p>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="contentLeft">
                <div class="logoContainer">
                    <img src="imagens/Logo.png" alt="">
                    <p>Seu  guia  turistico  online!</p>
                </div>
                <a><button onclick="verificarSessao()"><h2>Explore agora!</h2></button></a>

            </div>
            <div class="contentRight">
                <div class="pointerRight">
                    <img src="imagens/Pointer1-removebg-preview.png" alt="">
                </div>
                <div class="pointerLeft">
                    <div class="pointerCima">
                        <img src="imagens/Pointer2-removebg-preview.png" alt="">
                    </div>
                    <div class="pointerBaixo">
                        <img src="imagens/Pointer3-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="segundoContainer">
            <div class="segundoHeader">
                <div class="contentSegundoHeader">
                    <p>Bem-vindo ao Venture Travel, seu companheiro confiável para aventuras pelo mundo! Somos um site de guia turístico informativo projetado para transformar suas viagens em experiências inesquecíveis.</p>
                </div>      
            </div>
            <div class="banner">
                <div class="fotos">
                    <img src="imagens/fotobanner1.PNG" alt="">
                </div>
                <div class="fotos">
                    <img src="imagens/LogoBanner-removebg-preview.png" alt="">
                </div>
                <div class="fotos">
                    <img src="imagens/fotobanner2.PNG" alt="">
                </div>
            </div>
            <div class="contentSegundoContainer">
                <div class="galeria">
                    <div class="fotos">
                        <img src="imagens/img2Content.PNG" alt="">
                    </div>
                    <div class="fotos">
                        <img src="imagens/img1Content.PNG" alt="">
                    </div>
                    <div class="fotos">
                        <img src="imagens/img3Content.PNG" alt="">
                    </div>
                </div>
                <div class="contentFooter">
                    <div class="filhoContentFooter">
                        <p>Junte-se a nós no Venture Travel - Onde cada viagem é uma jornada única, e cada destino conta uma história cativante.</p>
                    </div>
                </div>      
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