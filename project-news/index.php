<?php
  require_once("db-connect.php");
  $messages = array();
  if(isset($_POST['btn-enviar'])){
    $email = mysqli_escape_string($conn, $_POST['email-txt']);

    if(empty($email)){
      echo "O Campo de E-mail está vazio!";
    } else {
      $sql = mysqli_query(
        $conn,"INSERT INTO assinantes (email) VALUES ('$email') ");
    }
    
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope News - Notícias de Esperança!</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,900&family=Zen+Dots&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
      <!-- Section de Home -->
        <section class="home">
          <!-- Section Header -->
          <div class="header-top">
            <h2>Hope<span class="red-dt">News</span></h2>
            <div class="links">
              <a href="index.html">Home</a>
              <a href="#noticias-em-destaque">Destaques</a>
              <a href="#newsletter">Assine o Newsletter</a>
            </div>
            <div class="btn">
              <button onclick="Menu.open()">
                <i class="fas fa-bars"></i>
              </button>
            </div>
          </div>
          <!-- Menu -->
          <div id="menu">aa</div>

          <div class="container">
            <div class="container1">
              <a href="#mais-de-68-bebes-nascem-com-anticorpos-contra-covid-19"><img src="assets/bebe-face-shield-1068x561.jpg" height="70%" width="100%" alt=""></a>
              <h2><a href="#mais-de-68-bebes-nascem-com-anticorpos-contra-covid-19">Mais 68 bebês nascem com anticorpos contra a Covid-19, revela pesquisa inédita da UFMG</a></h2>
            </div>

            <div class="container2">
              <a href="#estudantes-de-sp-criam-app-que-alerta-sobre-o-coronavirus"><img src="assets/corona-app-5002734_1280-1068x601.jpeg" alt="" height="70%" width="100%"></a>
              <h2><a href="#estudantes-de-sp-criam-app-que-alerta-sobre-o-coronavirus">Estudantes de SP criam app que alerta e ajuda a prevenir a propagação do Coronavírus</a></h2>
            </div>

          </div>
          <div class="mini-container">
            <div class="news-card">
              <a href="javascript:void(window.scroll(0,2470))"><img src="assets/paciente-internado-covid-19-danca-som-beatles-1068x561.jpg" width="100%" alt=""></a>
              <h3><a href="javascript:void(window.scroll(0,2470))">Ao som de Beatles, paciente internado com Covid-19 há quase 2 meses começa a dançar</a></h3>
            </div>
            <div class="news-card">
              <a href="javascript:void(window.scroll(0,3090))"><img src="assets/atendimento-psicologo-online-gratuito-familiares-vitimas-covid-19-1068x561.png" width="100%" alt=""></a>
              <h3><a href="javascript:void(window.scroll(0,3090))">De graça e online, ação social oferece apoio psicológico a familiares de vítimas da Covid-19</a></h3>
            </div>
            <div class="news-card">
              <a href="javascript:void(window.scroll(0,3650))"><img src="assets/professora-cria-varal-com-licoes-de-casa-para-seus-alunos-capa-1068x556.jpg" width="100%" alt=""></a>
              <h3><a href="javascript:void(window.scroll(0,3650))">Professora cria ‘Varal de Lições’ para atender alunos sem acesso à internet no RS</a></h3>
            </div>
          </div>
        </section>

      <!-- Section de Destaques -->
        <section  class="destaques">
          <header id="noticias-em-destaque" class="destaques-header">
            <h2>Notícias em Destaque</h2>
          </header>
          <!-- Destaque 1 -->
          <div class="destaques-container">
            <article id="mais-de-68-bebes-nascem-com-anticorpos-contra-covid-19" class="destaque-card">
              <h2>Mais 68 bebês nascem com anticorpos contra a Covid-19, revela pesquisa inédita da UFMG</h2>
              <img src="https://razoesparaacreditar.com/wp-content/uploads/2021/05/bebe-face-shield-1068x561.jpg" width="70%" alt="">
              <p>Uma pesquisa inédita da Faculdade de Medicina da UFMG (Universidade Federal de Minas Gerais) identificou 68 bebês que nasceram com anticorpos para a Covid-19 em cinco cidades mineiras.</p>
              <p>
                As mães não foram vacinadas, mas transmitiram os anticorpos gerados pelo próprio organismo após a infecção pelo Sars-Cov-2, durante a gestação, via transferência placentária. Já falamos de um bebê que nasceu com anticorpos, mas, no seu caso, a mãe já tinha recebido as duas doses da vacina Coronavac.

                A descoberta ocorreu por meio do teste do pezinho. Até o momento, foram testadas 506 mães e bebês. Destas, 68 geraram anticorpos e a maioria repassou para os bebês testados. Uma taxa de 13% que surpreende, pois a média geral na população é de 7% a 9%.
                
                O objetivo é testar 4 mil duplas ao final do estudo, que analisa uma gota de sangue tanto da mãe quanto do bebê. O teste não garante que os anticorpos tornam os bebês imunes ao coronavírus, mas indicam uma possibilidade.          
              </p>
            </article>
            <!-- Destaque 2 -->
            <article id="estudantes-de-sp-criam-app-que-alerta-sobre-o-coronavirus" class="destaque-card">
              <h2>Estudantes de SP criam app que alerta e ajuda a prevenir a propagação do Coronavírus</h2>
              <img src="assets/corona-app-5002734_1280-1068x601.jpeg" width="70%" alt="">
              <p>
                Os alunos da escola técnica de informática do Senac São Paulo, unidade Lapa Tito, desenvolveram um aplicativo capaz de monitorar os horários de pico de lugares públicos e alertar aos usuários se alguém contaminado pelo novo coronavírus esteve no local. O app foi premiado com o segundo lugar na competição internacional Made to Move Communities (Feito Para Mover Comunidades, em tradução livre), no qual o Senac São Paulo foi a única representante sul-americana..
              </p>
              <p>
                O aplicativo usa uma série de dados estatísticos para determinar se pessoas infectadas estiveram nestes locais públicos. Com estas informações, o usuário do app pode evitar passar por estes lugares ou até descobrir se é um possível transmissor do novo coronavírus.

                Um dos jovens que desenvolveram o app, Otávio Lemes Rodrigues contou ao site ABC do ABC que ser premiado em uma competição internacional o impulsiona a ajudar a mudar o mundo. Para ele, é um choque participar de algo tão grandioso ainda adolescente.

                “O sentimento de saber que eu participei da construção de um projeto, que o intuito era ajudar a nossa sociedade e ele foi reconhecido mundialmente é muito gratificante. Isso me inspira a ser melhor e fazer acontecer, mesmo eu sendo apenas um simples adolescente.”          
              </p>
            </article>

          </div>
        </section>

      <!-- Section Notícias Regulares -->
        <section class="sample-news">
          <div class="sample-news-container">
            <!-- Noticia 1 -->
            <div id="paciente-internado-covid-19-danca-som-beatles" class="news">
              <h2>Ao som de Beatles, paciente internado com Covid-19 há quase 2 meses começa a dançar</h2>
              <img src="assets/paciente-internado-covid-19-danca-som-beatles-1068x561.jpg" width="60%" alt="">
              <p>A cena é de arrepiar! Um enfermeiro compartilhou um vídeo emocionante que mostra um paciente com Covid-19, internado na UTI desde o dia 8 de abril, dançando ao som de Beatles. É isso mesmo e aconteceu em um hospital de Porto Alegre (RS).</p>
              <p>Se antes o paciente passava a maior parte do tempo imóvel, respirando com a ajuda de um pulmão artificial, desta vez, se sentiu em uma pista de dança! Novamente, vemos o poder da musicoterapia na recuperação de pacientes com doenças graves.

                A equipe de enfermagem colocou a música para tocar e quando viu o paciente curtindo Beatles, deve ter dado pulos de alegria – e dançado também!
                <br>
                <br>
                “Esse é um exemplo do poder que a enfermagem tem em mudar a vida das pessoas. Que orgulho desta Enfermagem que cuida com competência e muito amor, mesmo não sendo reconhecida por muitos e estar há tantos anos na luta por uma vida melhor”, escreveu o enfermeiro Gilmar Júnior na legenda do vídeo.</p>
            </div>
            <!-- Noticia 2 -->
            <div id="atendimento-psicologo-online-gratuito-familiares-vitimas-covid-19" class="news">
              <h2>De graça e online, ação social oferece apoio psicológico a familiares de vítimas da Covid-19</h2>
              <img src="assets/atendimento-psicologo-online-gratuito-familiares-vitimas-covid-19-1068x561.png" width="60%" alt="">
              <p>Quem perdeu um ente querido para a Covid-19 pode desenvolver ansiedade e depressão. Daí a importância dessas pessoas saberem que não estão sozinhas neste momento de dor.</p>
              <p>Para levar um pouco de conforto, a SulAmérica está oferecendo apoio emocional gratuito e online para maiores de 18 anos que perderam familiares para a doença ou que estão internados por complicações do vírus até o dia 31 de maio.

                Feito em parceria com a plataforma Psicologia Viva, o serviço também pode ser usado por profissionais que estão na linha de frente no combate ao novo coronavírus.
                
                Cada pessoa tem direito a até três sessões de 40 minutos a qualquer hora com sigilo e segurança. Quem decidirá a quantidade é o psicólogo que atenderá o solicitante.</p>
            </div>
            <!-- Noticia 3 -->
            <div id="professora-cria-varal-com-licoes-de-casa-para-seus-alunos" class="news">
              <h2>Professora cria ‘Varal de Lições’ para atender alunos sem acesso à internet no RS</h2>
              <img src="assets/professora-cria-varal-com-licoes-de-casa-para-seus-alunos-capa-1068x556.jpg" width="60%" alt="">
              <p>Uma professora gaúcha recorreu à uma ideia simples e eficaz para lidar com a dificuldade de pais e alunos em acessar o conteúdo das suas aulas pela internet.</p>
              <p>Vera Lúcia Lisboa, professora há quatro décadas, criou um varal onde literalmente estende as lições de casa para seus alunos pegarem e levarem para casa.

                Esse foi o jeito que a professora que vive em Vacaria (RS) encontrou para continuar ensinando seus 18 alunos, alguns deles que não possuem acesso à internet em casa ou cuja conexão é muito precária.</p>
            </div>

          </div>
        </section>
      
      <section id="newsletter" class="newsletter">
        <header class="newsletter-title">
          <h2>Assine o nosso Newsletter</h2>
        </header>
        <div class="newsletter-container">
        
          <img src="assets/undraw_subscribe_vspl.svg" alt="" width="250px">
          <div class="form">
          
            <h3>Assine e receba nossas boas notícias</h3>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
              <input type="email" name="email-txt">
              <button name="btn-enviar">Cadastrar E-mail</button>
            </form>
          </div>
        </div>
      </section>
     <script src="script.js"></script>
    </main>
</body>
</html>