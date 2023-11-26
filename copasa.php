<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPASA</title>
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
        .title{
            margin: 20px 0;
        }
        .title span{
            color: #4a86e8;
        }
        .itens{
            display: flex;
            gap: 20px;
            justify-content: space-between;
            margin-top: 50px;
        }
        .item-out h4, .inner-title{
            margin-bottom: 20px;
            color: var(--site-link-color);
        }
        .padrinho-out{
            margin-top: 100px;
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
        iframe{
            width: 300px;
            height: 400px;
            margin: 50px auto;
            display: block;
        }
        @media only screen and (max-width: 550px){
            .itens{
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
        <h1 class="sub-title">COMO AJUDAR?</h1>
        <a class="sub-link" href="https://api.whatsapp.com/send?phone=553134810755">Whatsapp</a>
    </div>
    <div id="sub-under">
    <a href="#"><img src="./imagens/irmão fabio.PNG"></a>
    </div>
    <div id="banner" bis_skin_checked="1">
        <img id="img-banner" src="./imagens/imagem parque de diversao.PNG"style="transform: translateY(0px);">
        <h1 class="title-banner">COPASA</h1>
    </div>
    
    <div class="container">
        <h1 class="title">DOE através da sua conta da <span>COPASA.</span></h1>
        
        <div class="itens">
            <div class="item-out">
                <h4>COMO FUNCIONA?</h4>
                <p>Ao apadrinhar o Lar da Fraternidade Irmão Fábio de Belo Horizonte pela COPASA, mensalmente será arrecadado um valor diretamente na sua conta de água, conforme informado no formulário de apadrinhamento (em anexo). <br><br>

Qualquer pessoa pode apadrinhar o Lar da Fraternidade Irmão Fábio, com doações a partir de R$10,00 (dez reais), mensais.<br><br>

O cancelamento da doação pode ser feito a qualquer momento.<br><br>

Sua conta de água vai fazer a diferença para as crianças! <br><br>

</p>
            </div>
            <div class="item-out">
                <h4>COMO FUNCIONA?</h4>
                <ul>
                    <li>Somente o titular do imóvel poderá se cadastrar.</li>
                    <li>É indispensável assinar e informar o número da matricula do imóvel no formulário de apadrinhamento!</li>
                    <li>No caso de imóveis com mais de uma unidade servida, a autorização deve ser aprovada pelos demais titulares;</li>
                    <li>No caso de edifícios condominiais, o síndico poderá assinar a “Autorização de Débito”, desde que aprovada em assembleia geral, registrada em cartório.</li>
                </ul>
            </div>
        </div>
        
        <div class="padrinho-out">
            <h3 class="inner-title">É necessário preencher e assinar o formulário para se tornar uma padrinho!</h3>
            <h4>VOCÊ PODE PREENCHER O FORMULÁRIO ONLINE. </h4>
            <p>CLIQUE ABAIXO:</p>

            
            
            <h4>VOCÊ PODE PREENCHER O FORMULÁRIO MANUALMENTE. </h4>
            
            <p>IMPRIMA O DOCUMENTO ABAIXO e nos mande foto nítida pelo WhatsApp, ou digitalize enviando pelo e-mail.</p>
            <p>Email: contato@abrigolarcristao.com.br</p>
            
            <iframe src="https://drive.google.com/file/d/1BSgUQcpNxbICbiwWvYk0rRIOF6TQXvx5/preview" width="640" height="480"></iframe>


        </div>
    </div>
    
    <?php include"./componentes/footer.php"; ?>
    <script src="./js/banner.js"></script>
</body>
</html>