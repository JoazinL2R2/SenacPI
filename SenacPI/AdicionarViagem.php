<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header('Location: Index.php');
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
    <link rel="stylesheet" href="css/AdicionarViagem.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" defer></script>
    <script src="script/AdicionarViagem.js"></script>
    <title>Adicionar experiência - Venture Travel</title>
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
            <div class="leftContent">
                <div class="form">
                    <div class="headerForm">
                        <h2>Como foi sua Viagem?</h2>
                    </div>
                    <form action="Adicionar.php" method="post" enctype="multipart/form-data" onsubmit="verificarPalavras()">
                        <div class="bodyForm">
                            <div class="leftForm">
                                <label for="Pais">Selecione o País:</label>
                                    <select class="grid-4" id="country" name="pais" required>
                                    <option value="Afeganistão">Afeganistão</option>
                                            <option value="África do Sul">África do Sul</option>
                                            <option value="Albânia">Albânia</option>
                                            <option value="Alemanha">Alemanha</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                                            <option value="Arábia Saudita">Arábia Saudita</option>
                                            <option value="Argélia">Argélia</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armênia">Armênia</option>
                                            <option value="Austrália">Austrália</option>
                                            <option value="Áustria">Áustria</option>
                                            <option value="Azerbaijão">Azerbaijão</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Barein">Barein</option>
                                            <option value="Bélgica">Bélgica</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benim">Benim</option>
                                            <option value="Bielorrússia">Bielorrússia</option>
                                            <option value="Bolívia">Bolívia</option>
                                            <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                                            <option value="Botsuana">Botsuana</option>
                                            <option value="Brasil">Brasil</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgária">Bulgária</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Butão">Butão</option>
                                            <option value="Cabo Verde">Cabo Verde</option>
                                            <option value="Camarões">Camarões</option>
                                            <option value="Camboja">Camboja</option>
                                            <option value="Canadá">Canadá</option>
                                            <option value="Catar">Catar</option>
                                            <option value="Cazaquistão">Cazaquistão</option>
                                            <option value="Chade">Chade</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Chipre">Chipre</option>
                                            <option value="Colômbia">Colômbia</option>
                                            <option value="Comores">Comores</option>
                                            <option value="Congo-Brazzaville">Congo-Brazzaville</option>
                                            <option value="Coreia do Norte">Coreia do Norte</option>
                                            <option value="Coreia do Sul">Coreia do Sul</option>
                                            <option value="Costa do Marfim">Costa do Marfim</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Croácia">Croácia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Dinamarca">Dinamarca</option>
                                            <option value="Djibuti">Djibuti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Egito">Egito</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                                            <option value="Equador">Equador</option>
                                            <option value="Eritreia">Eritreia</option>
                                            <option value="Eslováquia">Eslováquia</option>
                                            <option value="Eslovênia">Eslovênia</option>
                                            <option value="Espanha">Espanha</option>
                                            <option value="Estados Unidos">Estados Unidos</option>
                                            <option value="Estônia">Estônia</option>
                                            <option value="Eswatini">Eswatini</option>
                                            <option value="Etiópia">Etiópia</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Filipinas">Filipinas</option>
                                            <option value="Finlândia">Finlândia</option>
                                            <option value="França">França</option>
                                            <option value="Gabão">Gabão</option>
                                            <option value="Gâmbia">Gâmbia</option>
                                            <option value="Gana">Gana</option>
                                            <option value="Geórgia">Geórgia</option>
                                            <option value="Granada">Granada</option>
                                            <option value="Grécia">Grécia</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guiana">Guiana</option>
                                            <option value="Guiné">Guiné</option>
                                            <option value="Guiné-Bissau">Guiné-Bissau</option>
                                            <option value="Guiné Equatorial">Guiné Equatorial</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hungria">Hungria</option>
                                            <option value="Iêmen">Iêmen</option>
                                            <option value="Ilhas Marshall">Ilhas Marshall</option>
                                            <option value="Ilhas Salomão">Ilhas Salomão</option>
                                            <option value="Índia">Índia</option>
                                            <option value="Indonésia">Indonésia</option>
                                            <option value="Irã">Irã</option>
                                            <option value="Iraque">Iraque</option>
                                            <option value="Irlanda">Irlanda</option>
                                            <option value="Islândia">Islândia</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Itália">Itália</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japão">Japão</option>
                                            <option value="Jordânia">Jordânia</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Lesoto">Lesoto</option>
                                            <option value="Letônia">Letônia</option>
                                            <option value="Líbano">Líbano</option>
                                            <option value="Libéria">Libéria</option>
                                            <option value="Líbia">Líbia</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lituânia">Lituânia</option>
                                            <option value="Luxemburgo">Luxemburgo</option>
                                            <option value="Macedônia do Norte">Macedônia do Norte</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malásia">Malásia</option>
                                            <option value="Maláui">Maláui</option>
                                            <option value="Maldivas">Maldivas</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marrocos">Marrocos</option>
                                            <option value="Maurícia">Maurícia</option>
                                            <option value="Mauritânia">Mauritânia</option>
                                            <option value="México">México</option>
                                            <option value="Mianmar">Mianmar</option>
                                            <option value="Micronésia">Micronésia</option>
                                            <option value="Moçambique">Moçambique</option>
                                            <option value="Moldávia">Moldávia</option>
                                            <option value="Mônaco">Mônaco</option>
                                            <option value="Mongólia">Mongólia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Namíbia">Namíbia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Nicarágua">Nicarágua</option>
                                            <option value="Níger">Níger</option>
                                            <option value="Nigéria">Nigéria</option>
                                            <option value="Noruega">Noruega</option>
                                            <option value="Nova Zelândia">Nova Zelândia</option>
                                            <option value="Omã">Omã</option>
                                            <option value="Países Baixos">Países Baixos</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestina">Palestina</option>
                                            <option value="Panamá">Panamá</option>
                                            <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
                                            <option value="Paquistão">Paquistão</option>
                                            <option value="Paraguai">Paraguai</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Polônia">Polônia</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Quênia">Quênia</option>
                                            <option value="Quirguistão">Quirguistão</option>
                                            <option value="Reino Unido">Reino Unido</option>
                                            <option value="República Centro-Africana">República Centro-Africana</option>
                                            <option value="República Checa">República Checa</option>
                                            <option value="República Democrática do Congo">República Democrática do Congo</option>
                                            <option value="República Dominicana">República Dominicana</option>
                                            <option value="Romênia">Romênia</option>
                                            <option value="Ruanda">Ruanda</option>
                                            <option value="Rússia">Rússia</option>
                                            <option value="Salomão">Salomão</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Santa Lúcia">Santa Lúcia</option>
                                            <option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
                                            <option value="São Marino">São Marino</option>
                                            <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                                            <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                                            <option value="Seicheles">Seicheles</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serra Leoa">Serra Leoa</option>
                                            <option value="Sérvia">Sérvia</option>
                                            <option value="Singapura">Singapura</option>
                                            <option value="Síria">Síria</option>
                                            <option value="Somália">Somália</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Suazilândia">Suazilândia</option>
                                            <option value="Sudão">Sudão</option>
                                            <option value="Sudão do Sul">Sudão do Sul</option>
                                            <option value="Suécia">Suécia</option>
                                            <option value="Suíça">Suíça</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Tailândia">Tailândia</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajiquistão">Tajiquistão</option>
                                            <option value="Tanzânia">Tanzânia</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trindade e Tobago">Trindade e Tobago</option>
                                            <option value="Tunísia">Tunísia</option>
                                            <option value="Turcomenistão">Turcomenistão</option>
                                            <option value="Turquia">Turquia</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Ucrânia">Ucrânia</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Uruguai">Uruguai</option>
                                            <option value="Uzbequistão">Uzbequistão</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vaticano">Vaticano</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietname">Vietnã</option>
                                            <option value="Zambia">Zâmbia</option>
                                            <option value="Zimbabue">Zimbábue</option>
                                    </select>
                                    <br>
                                    <label for="Cidade">Cidade:</label>
                                    <input type="text" placeholder="Insira a cidade" id="inputCidade" name="cidade" required>
                                    <br>
                                    <label for="Imagem">Imagem sobre a viagem:</label>
                                    <input type="file" name="fotoPais" required>
                                </div>
                                <div class="rightForm">
                                    <textarea name="historiaViagem" cols="30" rows="10" placeholder="Descreva como foi sua viagem, como, onde esteve hospedado, lugares visitados, restaurantes, etc." required></textarea>
                                </div>                     
                            </div> 
                            <p id="mensagemErro" style="color: rgb(155, 2, 2);"></p>
                            <div class="footerForm">
                                <button type="submit" name="enviar"><h2>Adicionar Experiência!</h2></button>
                            </div> 
                    </form>
                </div>
            </div>
            <div class="rightContent">
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
        <div id="overlay" class="overlay" onclick="fecharModal()"></div>
        <div class="card" id="card">
            <div class="header">
                <div class="image"><svg aria-hidden="true" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
                    <path d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" stroke-linejoin="round" stroke-linecap="round"></path>
                    </svg>
                </div>
                <div class="content">
                    <span class="title">Cuidado!</span>
                    <p class="message">Você ultizou muitas palavras onfensivas. Mude o linguajar e tente novamente :/</p>
                </div>
                <div class="actions">
                    <button class="desactivate" type="button" onclick="fecharModal()">Tentar novamente</button>
                    <button class="cancel" type="button" href="DicasDeViagens.php">Cancelar post</button>
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