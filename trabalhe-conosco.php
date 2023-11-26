<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEJA UM VOLUNATRIO</title>
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
        .candidatese{
            padding: 5px;
            border: 1px solid black;
            text-align: center;
            width: calc(100% - 20px);
            text-align: center;
            display: block;
            margin: 30px auto;
            border-radius: 5px;
        }
        .candidatese:hover{
            box-shadow: 0px 0px 10px 0px #00000030;
        }
        .text-p{
            font-size: 15px;
        }
        .title-h2{
            font-size: 20px;
            color: var(--site-link-color);
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
        <img id="img-banner" src="./imagens/imagem parque de diversao.PNG" style="transform: translateY(0px);">
        <h1 class="title-banner">SEJA UM VOLUNTARIO</h1>
    </div>
    <div class="container">
    
    <p class="text-p">"Para ser voluntário, não é necessário ter formação específica ou dispor de muito tempo. Basta ter vontade, paixão e dedicação para fazer a diferença na vida das pessoas."</p>
</div>

    
    <?php include"./componentes/footer.php"; ?>
    <script src="./js/banner.js"></script>
</body>
</html>