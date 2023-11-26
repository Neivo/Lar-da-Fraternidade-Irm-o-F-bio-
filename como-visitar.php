<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMO VISITAR?</title>
    <link rel="stylesheet" href="./css/geral.css">
    <link rel="stylesheet" href="./css/banner.css">
    <link rel="stylesheet" href="./css/footer.css">
    <style>
        .container{
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1100px;
            width: calc(100% - 40px);
            margin: auto;
            padding: 20px;
        }
        .group iframe{
            width: 100%;
            aspect-ratio: 1.5;
            margin-bottom: 30px;
        }
        .title{
            margin: 30px 0;
            color: var(--site-link-color);
        }
        .li{
            margin-bottom: 50px;
        }
        .li li{
            margin: 20px;
        }
        @media screen and (max-width: 767px) {
    #sub-under {
        display: none;
    }
}
    </style>
</head>
<body>
    <div id="sub-div" bis_skin_checked="1">
        <h1 class="sub-title">COMO AJUDAR?</h1>
        <a class="sub-link" href="https://api.whatsapp.com/send?phone=553134810755">Whatsapp</a>
    </div>
    <div id="sub-under">
    <a href="#"><img src="./imagens/irmão fabio.PNG"></a>
    </div>
    <div id="banner" bis_skin_checked="1">
        <img id="img-banner" src="./imagens/imagem parque de diversao.PNG"style="transform: translateY(0px);">
        <h1 class="title-banner">COMO VISITAR?</h1>
    </div>
    
    <div class="container">
        <p>Este é um momento para trazer alguma atividade preparada e planejada para as crianças!</p>
        <div class="group">
            <h4>VISITA de 60 MINUTOS.</h4>
            <h3>Grupo máximo de 6 pessoas (incluindo crianças).</h3>
        </div>
        <div class="group">
            <h4>HORÁRIOS:</h4>
            <ul>
                <li>Terça, quinta nos horários de 09:00 às 10:00h, ou 15;00 às 16:00.</li>
                <li>Aos sábados somente no horário de 15:00 às 16:00. </li>
            </ul>
        </div>
        <div class="group">
            <h4>FORMULÁRIO:</h4>
            <ul>
                <li>ENVIE uma mensagem pelo WHATSAPP +55 (31) 34810755 (Whatsapp) para confirmar a disponibilidade de datas</li>
                <li>ENVIE formulário devidamente preenchido por meio de uma foto nítida ou digitalização. É necessário preencher o formulário previamente e ter as 2 doses da vacina da COVID.  E-MAIL abrigoirmaofabio@yahoo.com,br</li>
            </ul>
        </div>
        <div class="group">
            <h4>FAÇA O DOWNLOAD DO FORMULÁRIO ABAIXO PARA O PREENCHIMENTO.</h4>
            <iframe src="https://drive.google.com/file/d/1BSgUQcpNxbICbiwWvYk0rRIOF6TQXvx5/preview" width="640" height="480"></iframe>
        </div>
        
        <p>Sua atividade e sua visita às crianças fará o dia mais especial.</p>
        
        <h1 class="title">Sugestões de atividades:</h1>
        <ul class="li">
            <li>Brincadeiras dirigidas</li>
            <li>Gincanas</li>
            <li>Atividades esportivas</li>
            <li>Atividades artesanais</li>
            <li>Piquenique</li>
            <li>Lanchinho</li>
            <li>Aulas lúdicas</li>
            <li>Contar histórias/ teatros.</li>
            <li>Atividades musicais ou artísticas.</li>
            <li>Etc...</li>
        </ul>
    </div>
    
    <?php include"./componentes/footer.php"; ?>
    <script src="./js/banner.js"></script>
</body>
</html>