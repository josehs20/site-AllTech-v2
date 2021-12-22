<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>ALL TECH SISTEMAS</title>
  <link rel="shortcut icon" href="../assets/img/logo-titulo.jpg" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header class="home-background">

    @include('components/navbar')

    <div class="container">
      <div class="home-banner d-flex justify-content-center">
        <div style="margin-top: 20px;" id="carouselExampleCaptions" class="carousel slide w-75" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ url('/assets/img/logo-background.jpeg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ url('/assets/img/slider1.jpg') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="titulo">SISTEMA DE GESTÃO EMPRESARIAL</h5>
                <p class="titulo">Assuma definitivamente o controle gerencial, fiscal e financeiro da sua empresa.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ url('/assets/img/loja-roupa.jpg') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="titulo">SISTEMAS PARA LOJAS</h5>
                <p class="titulo">Integra todas suas lojas com nossa solução Multi Lojas.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp movercard">
            <div class="header">
              <img src="../assets/img/cliente.png" alt="Logo para ilustrar area do cliente">
            </div>
            <div class="body">
              <h5 class="text-secondary">ÁREA DO CLIENTE</h5>
              <p>Consulte sua empresa.</p>
              <a href="https://app.alltechsistemas.com.br/login" class="btn btn-custom">Acesso ao portal</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp movercard">
            <div class="header">
              <img src="../assets/img/suporte.png" alt="Logo para ilustrar suporte">
            </div>
            <div class="body">
              <h5 class="text-secondary">SUPORTE</h5> <br>
              <p> <i class="mai-call"> </i> (22) 3823-7761 / 3824-5260</p>
              <a href="https://api.whatsapp.com/send?phone=5522999238245&text=Olá, gostaria de mais informações." class="btn btn-custom-whatsapp"><i class="mai-logo-whatsapp"> </i> Whatsapp </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp movercard">
            <div class="header">
              <img src="../assets/img/xml.png" alt="Logo para ilustrar baixar xml">
            </div>
            <div class="body">
              <h5 class="text-secondary">BAIXAR XML</h5>
              <p>Site da SEFAZ.</p>
              <a href="http://www.nfe.fazenda.gov.br/portal/principal.aspx" class="btn btn-custom">Clique aqui</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead">Sobre nós</span>
          <h2 class="title-section">A solução perfeita para sua empresa.</h2>
          <div class="divider"></div>

          <p> &nbsp; &nbsp; &nbsp; Com mais de 14 anos de experiência no mercado de Automação Comercial, a ALL TECH SISTEMAS tem como principal objetivo criar soluções inovadoras que ajudam a total integração entre diversos setores de uma empresa e nos momentos de decisão, possibilitando assim, maior competitividade no seu segmento de mercado. Possuímos uma gama de serviços que visam contribuir com o desenvolvimento e o sucesso de nossos clientes.</p>
          <a href="{{ route('quem-somos') }}" class="btn btn-custom mt-3">Leia mais</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="../assets/img/sobrenos.jpeg" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="titulopage">Uma plataforma completa aliada ao seu negócio</div>
        <h2 class="title-section">Características da nossa solução</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row">
        <div class="col-sm py-3 wow zoomIn">
          <div class="features">
            <div class="header mb-3">
              <img src="../assets/img/fiscal.png" alt="Logo ilustrando adequação fiscal." />
            </div>
            <h5>Adequação fiscal</h5>
            <p>Em conformidade com a legislação vigente, homolagado e autorizado pelo Confaz, compatível com a NF-e, NFC-e, PAF-ECF (Cupom Fiscal), MDF-e, SINTEGRA e SPED.</p>
          </div>
        </div>
        <div class="col-sm py-3 wow zoomIn">
          <div class="features">
            <div class="header mb-3">
              <img src="../assets/img/estoque.png" alt="Logo ilustrando estoque.">
            </div>
            <h5>Controle de Estoque</h5>
            <p>Tenha um controle de estoque preciso e integrado com vendas e financeiro, resultando em ajustes e conferências eficientes para sua empresa.</p>
          </div>
        </div>
        <div class="col-sm py-3 wow zoomIn">
          <div class="features">
            <div class="header mb-3">
              <img src="../assets/img/vendas.png" alt="Logo ilustrando vendas.">
            </div>
            <h5>Gestão de Vendas</h5>
            <p>Administre os processos de venda com praticidade, tenha tudo registrado em uma listagem de vendas e gerencie com precisão a comissão de vendedores.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm py-3 wow zoomIn">
          <div class="features">
            <div class="header mb-3">
              <img src="../assets/img/cfinanceiro.png" alt="Logo ilustrando controle financeiro.">
            </div>
            <h5>Controle Financeiro</h5>
            <p>Acompanhe as movimentações financeiras do seu negócio, com tudo integrado no sistema de gestão, o gerenciamento das suas contas será muito mais confiável.</p>
          </div>
        </div>
        <div class="col-sm py-3 wow zoomIn">
          <div class="features">
            <div class="header mb-3">
              <img src="../assets/img/resultados.png" alt="Logo ilustrando resultados.">
            </div>
            <h5>Acompanhe seus resultados</h5>
            <p>Planeje-se melhor com os relatórios gerenciais detalhados, disponibilizamos os melhores relatórios para que sua tomada de decisão seja mais eficiente que nunca!</p>
          </div>
        </div>
        <div class="col-sm py-3 wow zoomIn">
          <div class="features">
            <div class="header mb-3">
              <img src="../assets/img/sup.png" alt="Logo ilustrando suporte.">
            </div>
            <h5>Suporte Técnico</h5>
            <p>Os clientes da ALL TECH SISTEMAS contam com uma equipe especializada, que está à disposição para prestar um suporte técnico de qualidade.</p>
          </div>
        </div>
      </div>

    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section" style="background-color: #000;">
    <div class="wrap bg-image" style="background-image: url(../assets/img/tecnologyyy.png);">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-4">
            <div style="background-color: #fff" class="card-service wow fadeInUp">
              <div class="header">
                <span class="mai-location"></span>
              </div>
              <div class="body">
                <h5 class="text-secondary">ITAPERUNA - RJ</h5> <br>
                <a class="text-secondary" href="https://goo.gl/maps/KHS25j13L1cjD4zA9" target="_blank"> <i class="mai-locate"></i> Rua 10 de Maio Nº 348, Sala 101 - Centro - 28.300-000 Itaperuna - RJ.</a>
                <p>Telefone (22) 3823-7761 / 3824-5260</p>
                
                <a href="https://api.whatsapp.com/send?phone=5522999238245&text=Olá, gostaria de mais informações." class="btn btn-custom-whatsapp"><i class="mai-logo-whatsapp"> </i> Whatsapp </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div style="background-color: #fff" class="card-service wow fadeInUp">
              <div class="header">
                <span class="mai-location"></span>
              </div>
              <div class="body">
                <h5 class="text-secondary">CAMPOS DOS GOYTACAZES - RJ</h5> <br>
                <a class="text-secondary" href="https://goo.gl/maps/DeoiR2Y9zp4YCRYs7" target="_blank"> <i class="mai-locate"></i>Rua Antônio Alves Cordeiro, 63 Pq Rosário - 28.027-050 | Campos dos Goytacazes - RJ. </a>
                <p>Telefone (22) 9.9926-1829</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div style="background-color: #fff" class="card-service wow fadeInUp">
              <div class="header">
                <span class="mai-location"></span>
              </div>
              <div class="body">
                <h5 class="text-secondary">RIO DAS OSTRAS - RJ</h5>
                <a class="text-secondary" href="https://goo.gl/maps/MB66GRCJsoDcVzBg6" target="_blank"> <i class="mai-locate"></i> Rua Joaquim José Caridade 753 Casa 14 Chácara Marileia - 28895 886 | Rio das Ostras - RJ</a>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .wrap -->
  </div> <!-- .page-section -->

  <footer style="background-color: #fff; margin-top: 10px">
    <div class="container">
      <p class="text-center" id="copyright">Copyright &copy; <?= date('Y') ?>. All Tech Sistemas Todos Direitos Reservados.</p>
    </div>
  </footer>

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/js/google-maps.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>

</body>

</html>