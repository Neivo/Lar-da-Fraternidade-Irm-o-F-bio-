<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça a sua parte e colabore!</title>
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
        .itens-out{
            display: flex;
            gap: 10px;
            justify-content: space-between;
            margin-top: 50px;
            
        }
        .item-title{
            color: var(--site-link-color);
            margin-bottom: 20px;
        }
        @media only screen and (max-width: 550px){
            .itens-out{
                flex-direction: column;
            }
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
        <h1 class="sub-title">Faça a sua parte e colabore!</h1>
        <a class="sub-link" href="https://api.whatsapp.com/send?phone=553134810755">Whatsapp</a>
    </div>
    <div id="sub-under">
    <a href="#"><img src="./imagens/irmão fabio.PNG"></a>
    </div>
    <div id="banner" bis_skin_checked="1">
        <img id="img-banner" src="./imagens/imagem parque de diversao.PNG" style="transform: translateY(0px);">
        <h1 class="title-banner">O QUE DOAR?</h1>
    </div>
    
    <div class="container">
        <p>Veja os itens que a instituição sempre precisa.</p>
        <p>Fique a vontade para doar também algo que não esteja na lista. Entre em contato para esclarecer qualquer dúvida.</p>
        
        <div class="itens-out">
            <div class="item-out">
                <h4 class="item-title">PRODUTOS DE HIGIENE</h4>
                <ul>
                    <li>Creme de pentear</li>

                    <li>Creme de cabelo para hidratação</li>
                    
                    <li>Shampoo e condicionador</li>
                    
                    <li>Pomadas para assaduras</li>
                    
                    <li>Touca de banho</li>
                    
                    <li>Soro fisiológico</li>
                    
                    <li>Creme hidratante corporal Neutro</li>
                </ul>
            </div>
            <div class="item-out">
                <h4 class="item-title">CRIANÇAS</h4>
                <ul>
                    <li>Acessórios de cabelo (feminino)</li>

                    <li>Roupas e/ou sapatos (2 a 12 anos)</li>
                    
                    <li>Agasalhos</li>
                    
                    <li>Calcinhas e cuecas P, M e G</li>
                    
                    <li>Meias (idade de 2 a 12 anos)</li>
                </ul>
            </div>
    
         <div class="itens-out">
            <div class="item-out">
                <h4 class="item-title">ABRIGO</h4>
                <ul>
                    <li>Álcool em gel</li>

                    <li>Desinfetante</li>
                    
                    <li>Bucha de pia de cozinha</li>
                    
                    <li>Detergente</li>
                    
                    <li>Vassoura de piaçava / nylon / rodo grande</li>
                    
                    <li>Pano de chão</li>
                    
                    <li>Saco de lixo de 50 / 100 litros</li>
                    
                    <li>Sabão em pó/ Amaciante</li>
                </ul>
            </div>
            <div class="item-out">
                <h4 class="item-title">ROUPARIAS</h4>
                <ul>
                    <li>Roupas de frio</li>

                    <li>Roupa de cama solteiro</li>
                    
                    <li>Cobertas anti-alérgicas</li>
                    
                    <li>Lençóis e fronhas</li>
                    
                    <li>Toalhas de banho</li>
                    
                    <li>Toalhas de mão/rosto</li>
                </ul>
            </div>
            
            <div style="width: 250px"></div>
        </div>
    </div>
    
    <?php include"./componentes/footer.php"; ?>
    <script src="./js/banner.js"></script>
</body>
</html>