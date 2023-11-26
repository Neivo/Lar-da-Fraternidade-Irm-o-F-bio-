<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOSSA HISTÓRIA</title>
    <link rel="stylesheet" href="./css/geral.css">
    <link rel="stylesheet" href="./css/banner.css">
    <link rel="stylesheet" href="./css/footer.css">
    
    <style>
        /*CONTENT*/
        #content{
            /*height: 1000px;*/
            padding: 80px 0px;
        }
        .cont{
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 50px 20px;
        }
        .cont-title{
          color: var(--site-link-color);
    font-weight: bold;
    text-align: center;
    font-size: 21px;
    margin-bottom: 20px;
        }
        .cont-text{
            max-width: 1000px; /* Ajuste na largura máxima do texto */
    margin: auto;
    font-size: 16px;
    line-height: 1.6;
    text-align: justify;
        }
        .cont-image{
            max-width: 400px;
            width: calc(100% - 50px);
            margin: auto;
        }
        
        /*CARDS */
        
        .cont-cards-out{
            display: flex;
            gap: 30px;
            margin-top: 50px;
            max-width: 1130px;
            margin: auto;
        }
        @media only screen and (max-width: 550px){
            .cont-cards-out{
                flex-direction: column;
                align-items: center;
            }
            .cont-cards{
                width: calc(100%)!important;
            }
        }
        .cont-cards{
            width: calc(100% / 3);
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .img-card{
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .img-abrigo{
            width: calc(100% - 40px)!important;
            max-width: 540px!important;
        }
        .cont-card{
            aspect-ratio: 1.3;
            background: gray;
            overflow: hidden;
            position: relative;
        }
        .cont-card-infos{
            display: flex;
            flex-direction: column;
            gap: 35px;
            transition: transform 0.3s ease-in-out;
        }
        .cont-card:hover {
    transform: scale(1.05);
}
        .cont-card-title{
            font-size: 18px;
            color: var(--site-link-color);
        }
        .cont-card-title span{
            color: #4a86e8;
        }
        .cont-card-link{
            color: #4a86e8;
            text-decoration: underline;
        }
        .cont-g{
            max-width: 1000px; /* Ajuste na largura máxima do texto */
    margin: auto;
    font-size: 16px;
    line-height: 1.6;
    text-align: justify;
        }
        .center{
            text-align: center;
        }
        @media screen and (max-width: 767px) {
    #sub-under {
        display: none;
    }
}
    </style>
</head>
<body>
    
<div id="sub-div">
    <h1 class="sub-title">Contribua para fazer a diferença!</h1>
    <a class="sub-link" href="https://api.whatsapp.com/send?phone=553134810755">Whatsapp</a>
</div>
    <div id="sub-under">
        <a href="."><img src="./imagens/irmão fabio.PNG"></a>
    </div>
    
    <div id="banner">
        <img id="img-banner" src="./imagens/imagem parque de diversao.PNG">
        <img class="img-abrigo" src="./imagens/LOGO ABRIGO.png">
    </div>
    
    <div id="content">
        <div class="cont">
            <h1 class="cont-title">SOBRE AS CRIANÇAS</h1>
            <p class="cont-text">
    O Lar da Fraternidade Irmão Fábio acolhe crianças entre 2 a 6 anos de idade, de ambos os sexos, do município de Belo Horizonte - Minas Gerais, encaminhadas à Instituição pelos Conselhos Tutelares, Juizado da Infância e da Juventude e Promotoria da Infância e Juventude. <br><br>

    O acolhimento ocorre devido a graves situações de risco, como o abandono e outros, que ameaçam/violam os direitos fundamentais das crianças.<br><br>

    As crianças acolhidas ficam provisoriamente sob nosso cuidado e proteção, enquanto viabiliza-se o retorno à família de origem ou encaminhamento à família substituta, aguardando a determinação judicial para definição da situação de cada criança.<br><br>

    Atualmente, temos capacidade de atendimento para até 12 crianças, em nossa unidade localizada no endereço, Rua Mário Martins, 275-Pontéia Belo Horizonte-MG.
</p>

            
            <img class="cont-image" src="./imagens/crinaças felizes.PNG">
        </div>
        
        <div class="cont">
            <h1 class="cont-title">APOIE NOSSA CAUSA!</h1>
            <div class="cont-cards-out">
                <div class="cont-cards">
                    <div class="cont-card">
                        <a href="./o-que-doar.php"><img class="img-card" src="./imagens/img1.png"></a>
                    </div>
                    <div class="cont-card-infos">
                        <a href="./o-que-doar.php"><h2 class="cont-card-title"><span>DOE</span> PARA AS CRIANÇAS E PARA A MANUTENÇÃO DO ABRIGO</h2></a>
                        <p class="cont-card-text">Quer doar algum bem material que possa ser necessário a uma criança ou a toda manutenção da instituição? Itens materiais são necessários para o dia a dia. Veja os itens mais necessários.</p>
                        <a href="./o-que-doar.php" class="cont-card-link">Clique aqui</a>
                    </div>
                </div>
                <div class="cont-cards">
                    <div class="cont-card">
                         <a href="./copasa.php"><img class="img-card" src="./imagens/img2.png"></a>
                    </div>
                     <a href="./copasa.php"><h2 class="cont-card-title">ATIVE SUA CONTA DA <span>COPASA</span> PARA DOAÇÕES MENSAIS</h2></a>
                    <p class="cont-card-text">Quer ajudar mensalmente ao abrigo por meio da conta de água? Basta se cadastrar aqui.</p>
                    <a href="./copasa.php" class="cont-card-link">Clique aqui</a>
                </div>
                <div class="cont-cards">
                    <div class="cont-card">
                        <img class="img-card" src="./imagens/img3.png">
                    </div>
                    <h2 class="cont-card-title">AJUDE NAS <span>FINANÇAS</span> POR PIX OU TRANSFERÊNCIA</h2>
                    <div class="cont-card-text">
                    <ul>
    <li>Banco Santander - Agência: 3049 - CC: 13000278-1</li>
    <li>Banco do Brasil - Agência: 3495-9 - CC: 7956-1</li>
    <li>PIX CNPJ: 70.955.703/0001-59</li>
</ul>


   


                    </div>
                </div>
            </div>
            
            <!--SECOND PART CARDS -->
            
            <div class="cont-cards-out">
                <div class="cont-cards">
                    <div class="cont-card">
                         <a href="./como-visitar.php"><img class="img-card" src="./imagens/img4.jpg"></a>
                    </div>
                    <div class="cont-card-infos">
                         <a href="./como-visitar.php"><h2 class="cont-card-title">TRAGA UMA <span>ATIVIDADE</span> PARA AS CRIANÇAS</h2></a>
                        <p class="cont-card-text">As visitas são tão importantes. Planeje algo para o convívio, adequado a faixa etária das crianças, e agende um horário (duração 60 minutos).</p>
                        <a href="./como-visitar.php" class="cont-card-link">Clique aqui</a>
                    </div>
                </div>
                <div class="cont-cards">
                    <div class="cont-card">
                         <a href="./como-servir.php"><img class="img-card" src="./imagens/img5.jpg"></a>
                    </div>
                     <a href="./como-servir.php"><h2 class="cont-card-title"><span>SIRVA</span> OU AJUDE COM SEU SERVIÇO</h2></a>
                    <p class="cont-card-text">Quer colaborar de forma voluntária com serviços que você ou sua empresa tem habilidade ou repassando seus conhecimentos às crianças ou ao abrigo? Veja em que você pode ajudar. </p>
                    <a href="./como-servir.php" class="cont-card-link">Clique aqui</a>
                </div>
                <div class="cont-cards">
                    <div class="cont-card">
                         <a href="./apadrinhar-ou-adotar.php"><img class="img-card" src="./imagens/img6.jpg"></a>
                    </div>
                     <a href="./apadrinhar-ou-adotar.php"><h2 class="cont-card-title">APADRINHAR OU ADOTAR</h2></a>
                    <p class="cont-card-text">
                        Quer saber quais são os órgãos responsáveis por apadrinhamento ou adoção? 
                    </p>
                    <a href="./apadrinhar-ou-adotar.php" class="cont-card-link">Clique aqui</a>
                </div>
            </div>
        </div>
        
             <div class="cont cont-g">
            <h1 class="cont-title">NOSSA HISTÓRIA</h1>
            <p> O Lar da Fraternidade Irmão Fábio é uma instituição sem fins lucrativos, fundada em 18 de maio de 1993, tendo como objetivo acolher crianças que tiveram seus direitos violados, ou seja, que sofreram algum tipo de negligência, abandono ou maus tratos proporcionados por aqueles que deveriam ser seus protetores.</p>

         <p>A entidade tem como missão resgatar, ao máximo o potencial das crianças em seu desenvolvimento emocional, pessoal, funcional, cognitivo e afetivo, pautado em valores como respeito, fraternidade, sensibilidade, ética responsabilidade e amor.</p>
          <p>O Lar tem capacidade de acolher 12 crianças com idade compreendida entre 2 a 6 anos, sendo o encaminhamento dessas crianças realizado através da Vara da Infância e da Juventude de Belo Horizonte.</p>
           <p>Durante o período de acolhimento é proporcionado ás crianças condições dignas de moradia, alimentação, educação, saúde, vestuário, cultura e lazer. Como forma de custear o trabalho desenvolvido a Instituição possui convênio com a Prefeitura Municipal de Belo Horizonte, que através de uma verba mensal mantém o salário das funcionárias e os gastos mais emergentes da Casa.</p>
           <p>Outros itens como roupas, calçados, produtos de higiene pessoal, material de limpeza e escritório, fraldas, frutas, legumes, laticínios e guloseimas que toda criança carece, é necessário que sejam adquiridos pela Instituição. A manutenção do espaço, assim como os gastos com água, luz e telefone também tornam incessante a busca por patrocínio.</p>
            <p>Para angariar fundos são efetuados bazares na própria casa, eventos beneficentes e contatos com colaboradores que conhecem o trabalho efetuado há 28 anos.</p>
            <p>Além do apoio material a Instituição abre suas portas para quem quiser e puder ser voluntário e oferecer carinho e atenção às crianças. Para ser um voluntário não é necessário ter formação específica ou dispor de muito tempo.</p>

             </div>
        
         <div class="cont">
            <h1 class="cont-title">NOSSOS VALORES</h1>
            <p class="cont-text center">Ética, amor, fé, comprometimento, respeito, solidariedade e inclusão.</p>
        </div>
        
        <div class="cont cont-g">
            <h1 class="cont-title">PARCEIROS DO ABRIGO</h1>
            <p class="cont-text">O Lar da Fraternidade Irmão Fábio  é mantido pela prefeitura de Belo Horizonte, que provê os recursos básicos do dia-a-dia de uma casa e garante funcionários integrais para o trabalho, que são capacitados pela instituição para o cuidado das crianças. <br><br>

Porém são os parceiros do abrigo, pessoas como você, que de forma voluntária, ajudam a prover às crianças alguns itens específicos necessários ao seu dia a dia, a terem um convívio saudável com a sociedade e um cuidado emocional ainda mais especial.<br><br>

Esse site visa ser um meio de alcançarmos convivência, cuidado, atividades e auxílios físicos para essas crianças, suprindo suas necessidades como elas merecem, por meio da ajuda de todos.</p>
        </div>
    </div>
    
    <?php include"./componentes/footer.php"; ?>
    <script src="./js/banner.js"></script>
</body>
</html>