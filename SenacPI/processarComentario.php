<?php
session_start();
include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_publicacao = $_POST['id_publicacao'];
    $usuario = $_POST['usuario'];
    $comentario = $_POST['comentario'];

    $listaPalavroes = array("anus","baba-ovo","babaovo","babaca","bacura","bagos","baitola","bebum","besta","bicha","bisca","bixa","boazuda","boceta","boco","boiola","bolagato","boquete","bolcat","bosseta","bosta","bostana","brecha","brexa","brioco","bronha","buca","buceta","bunda","bunduda","burra","burro","busseta","cachorra","cachorro","cadela","caga","cagado","cagao","cagona","canalha","caralho","casseta","cassete","checheca","chereca","chibumba","chibumbo","chifruda","chifrudo","chota","chochota","chupada","chupado","clitoris","cocaina","coco","corna","corno","cornuda","cornudo","corrupta","corrupto","cretina","cretino","cruz-credo","cu","culhao","curalho","cuzao","cuzuda","cuzudo","debil","debiloide","defunto","demonio","difunto","doida","doido","egua","escrota","escroto","esporrada","esporrado","esporro","estupida","estupidez","estupido","fedida","fedido","fedor","fedorenta","feia","feio","feiosa","feioso","feioza","feiozo","felacao","fenda","foda","fodao","fode","fodidaFodido","fornica","fudendo","fudecao","fudida","fudido","furada","furado","furao","furnica","furnicar","furo","furona","gaiata","gaiato","gay","gonorrea","gonorreia","gosma","gosmenta","gosmento","grelinho","grelo","homo-sexual","homossexual","homossexual","idiota","idiotice","imbecil","iscrota","iscroto","japa","ladra","ladrao","ladroeira","ladrona","lalau","leprosa","leproso","lésbica","macaca","macaco","machona","machorra","manguaca","mangua¦a","masturba","meleca","merda","mija","mijada","mijado","mijo","mocrea","mocreia","moleca","moleque","mondronga","mondrongo","naba","nadega","nojeira","nojenta","nojento","nojo","olhota","otaria","ot-ria","otario","ot-rio","paca","paspalha","paspalhao","paspalho","pau","peia","peido","pemba","pênis","pentelha","pentelho","perereca","peru","pica","picao","pilantra","piranha"

    ,"anus","suck-up","suckup","jerk","fool","testicles","faggot","drunk","beast","bitch","slut","bitch","hot woman","vagina","stupid","gay cat","blowjob","dumbass","bosseta","shit","shitty","piece of shit","gap","gap","asshole","jerk off","hole","pussy","butt","big butt","stupid","donkey","bush","bitch","dog","female dog","shit","shitty","shithead","rascal","dick","dickhead","pussy","pussy","suck","cocaine","coconut","horn","horn","horny woman","horny man","corrupt woman","corrupt man","stupid woman","stupid man","crucifix","ass","balls","dick","big dick","asshole","big ass","fucker","fornicate","fucking","fucked up","fucked","hole","driller","hole","hole","joker","joker","lesbian","monkey","monkey","butch","lesbian","drunkard","drunkard","masturbate","booger","shit","piss","pissed off","piss","booger","booger","girl","boy","stupid","stupid","mound","hill","navel","offensive word for women","nose","butthole","dirty word","dirty word","deceased","demon","deceased","crazy woman","crazy man","mare","disgusting woman","disgusting man","disgusting","ugly woman","ugly man","ugly woman","ugly man","felatio","slit","fuck","big fuck","fuck","fucked up","fornicate","fucking","fucked up","fucked","hole","hole","trouble","trouble","trouble","trouble","trouble","coward","cow","whore","whore","vagina","vein","gay","gonorrhea","gonorrhea","slime","slimy woman","slimy man","clitoris","cocaine","coco","homo-sexual","homosexual","homosexual","idiot","idiocy","imbecile","bitchy","bitchy","japanese person","thief","thief","thievery","thief woman","thief woman","incompetent","leper woman","leper man","lesbian","monkey","monkey","dyke","ugly woman","ugly man","ugly woman","ugly man"
    ,
    
    "ano","lameculos","lameculos","idiota","tonto","testículos","maricón","borracho","bestia","perra","zorra","perra","mujer buena","vagina","estúpido","gato gay","felación","imbécil","boseta","mierda","mierda","pedazo de mierda","brecha","brecha","culo","masturbarse","agujero","coño","culo","culo grande","estúpido","burro","arbusto","perra","perro","perra","mierda","mierda","cabeza de mierda","rufián","pene","cabezón","coño","concha","chupar","cocaína","coco","cuerno","cuerno","mujer cachonda","hombre cachondo","corrupta","corrupto","estúpida","estúpido","cruz-credo","culo","bolas","pene","pene grande","culo","culo grande","follador","fornicar","jodiendo","jodido","jodido","agujero","perforador","hoyo","hoyo","bromista","bromista","lesbiana","mono","mono","marimacho","lesbiana","borracho","borracho","masturbarse","moco","mierda","pis","cabreado","pis","moco","moco","chica","chico","estúpido","estúpido","montón","colina","ombligo","palabra ofensiva para mujeres","nariz","agujero del culo","palabra sucia","palabra sucia","difunto","demonio","difunto","mujer loca","hombre loco","yegua","mujer asquerosa","hombre asqueroso","asqueroso","mujer fea","hombre feo","mujer fea","hombre feo","felación","raja","follar","gran follada","follar","jodido","fornicar","jodiendo","jodido","jodido","agujero","hoyo","problema","problema","problema","problema","problema","cobarde","vaca","puta","puta","vagina","vena","gay","gonorrea","gonorrea","baba","mujer babosa","hombre baboso","clítoris","cocaína","coco","homosexual","homosexual","homosexual","idiota","idiotismo","imbécil","puta","puta","persona japonesa","ladrón","ladrón","robo","ladrona","ladrona","incompetente","mujer leprosa","hombre leproso","lesbiana","mono","mono","tortillera","mujer fea","hombre feo","mujer fea","hombre feo"

    );

    foreach ($listaPalavroes as $palavra) {
        if (stripos($comentario, $palavra) !== false) {
            echo '<script>';
            echo 'alert("Comentário inválido. Ajuste e tente novamente.");';
            echo 'window.location.href = "PaginaPais.php?id=' . $id_publicacao . '";';
            echo '</script>';
            exit();
        }
    }
    

    $query_inserir_comentario = "INSERT INTO comentarios (Id_publicacao, Usuario, Comentario, data) VALUES ('$id_publicacao', '$usuario', '$comentario', NOW())";
    $conexao->query($query_inserir_comentario);

    header("Location: PaginaPais.php?id=$id_publicacao");
    exit();
}
?>
