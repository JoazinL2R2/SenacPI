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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/PaginaPais.css">
    <title>Viagem - Venture Travel</title>
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
        <div class="container">
                <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $usuario_atual = $_SESSION['Email'];
                        include_once('conexao.php');
                        $sql = "SELECT * FROM publicacao WHERE Id = $id";
                        $result = $conexao->query($sql);

                        $query_comentarios = "SELECT * FROM comentarios WHERE Id_publicacao = $id";
                        $resultado_comentarios = $conexao->query($query_comentarios);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo "<div class='publicacao'>";
                                echo "<div class='leftContent'>";
                                    echo '<img id="FotoPaginaPais" src="upload/' . $row['Foto'] . '" alt="">';
                                echo "</div>";
                                echo "<div class='rightContent'>";                
                                    echo '<h2>' . $row['Cidade'] . ' - ' . $row['Pais'] . '</h2>';
                                    echo "<br>";
                                    echo '<p>' . $row['Texto'] . '</p>';
                                echo "</div>";
                            echo "</div>";
                            echo "<div class='ContainerComentarios'>";
                                echo "<h1>Comentarios</h1>";
                                echo "<div class='formComentarios'>";
                                    echo "<div class='Comentarios'>";
                                        if ($resultado_comentarios->num_rows > 0) {
                                            while ($row_comentario = $resultado_comentarios->fetch_assoc()) {
                                                echo '<p><strong>' . $row_comentario['Usuario'] . ':</strong> ' . $row_comentario['Comentario'] . '</p>';
                                            }
                                        } else {
                                            echo '<p>Ainda não foi feito nenhum comentário neste post :( </p>';
                                        }
                                    echo "</div>";
                                    echo '
                                        <form action="processarComentario.php" method="post" onsubmit="verificarComentario()">
                                            <input type="hidden" name="id_publicacao" value="' . $id . '">
                                            <input type="hidden" name="usuario" value="' . $usuario_atual . '">
                                            <input id="InputComentarios" type="text" name="comentario" placeholder="Faça um comentario..." required >
                                            <button>
                                            <div class="svg-wrapper-1">
                                              <div class="svg-wrapper">
                                                <svg
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  viewBox="0 0 24 24"
                                                  width="24"
                                                  height="24"
                                                >
                                                  <path fill="none" d="M0 0h24v24H0z"></path>
                                                  <path
                                                    fill="currentColor"
                                                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                                                  ></path>
                                                </svg>
                                              </div>
                                            </div>
                                            <span>enviar</span>
                                          </button>
                                        </form>
                                        <p id="mensagemErroComentario" style="color: rgb(155, 2, 2);"></p>
                                        ';
                                        
                                echo "</div>";

                            echo "</div>";

                        } else {
                            echo 'Card não encontrado.';
                        }

                        $conexao->close();
                    } else {
                        echo 'ID do card não especificado.';
                    }
                ?>
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
<script src="script/PaginaPais.js"></script>
</html>