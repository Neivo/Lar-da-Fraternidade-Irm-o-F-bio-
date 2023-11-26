<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMO SERVIR?</title>
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
        li{
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
        <h1 class="title-banner">COMO SERVIR?</h1>
    </div>
    
    <div class="container">
        <p>Quer colaborar com a instituição com um serviço que você sabe fazer bem ou repassando conhecimentos?</p>
        <p>ENVIE uma mensagem pelo e-mail para nos contar como você quer ajudar.</p>
        <p>Entraremos em contato para confirmar seu horário e pediremos para preencher um formulário. </p>
        <h4>SERVIÇOS ao abrigo ou às crianças</h4>
        <p>Serviços que você pode fazer ofertando suas próprias habilidades frequentemente, ou apenas uma vez. Podem acontecer em horários conforme acordo entre a Instituição e você. Sugestões do que fazer:</p>
        <ul>
            <li>Acompanhamento escolar com as tarefas para casa</li>
            <li>Corte de cabelo.</li>
            <li>Aulas musicais ou artísticas.</li>
            <li>Aulas de esportes.</li>
            <li>Preparar ou financiar algum passeio/lazer.</li>
            <li>Otimizar ou melhorar algum ambiente da instituição.</li>
            <li>Pintura das paredes do abrigo.</li>
            <li>Fique a vontade para fornecer qualquer outro serviço às crianças ou a instituição</li>
            <li>Fornecer de brinquedos temporários (Pula pula, etc.).</li>
            <li>Etc...</li>
        </ul>
    </div>
    
    <?php include"./componentes/footer.php"; ?>
    <script src="./js/banner.js"></script>
</body>
</html>