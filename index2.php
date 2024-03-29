<?php
include_once "./includes/connection.php";
session_start();

$sql = "SELECT * FROM imoveis WHERE destaque = 1";
$result = $conn->query($sql);

$status = [
    "For Sale" => "Venda",
    "For Rent" => "Aluguel",
    "Sale/Rent" => "Venda/Aluguel",
];
?>

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Ghaya Imóveis">
    <!-- <link href="assets/images/favicon/favicon.png" rel="icon"> -->

    <!-- Fonts
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Ghaya Imóveis</title>
</head>

<body>
    <link rel="stylesheet" href="https://cdn.positus.global/production/resources/robbu/whatsapp-button/whatsapp-button.css">
    <a id="robbu-whatsapp-button" target="_blank" href="https://api.whatsapp.com/send?phone=5511999431095" style="z-index: 999;">
        <div class="rwb-tooltip">Fale conosco pelo Whatsapp!</div>
        <img src="https://cdn.positus.global/production/resources/robbu/whatsapp-button/whatsapp-icon.svg">
    </a>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
            <nav id="primary-menu" class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="index.php">
                            <img src="./assets/images/logo/logo-ghaya.png" alt="Land Logo" style="z-index: 1; max-width: 150px;" loading="lazy">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                        <ul class="nav navbar-nav nav-pos-center navbar-left">
                            <!-- Home Menu -->
                            <li class="">
                                <a href="index.php">HOME</a>
                            </li>
                            <!-- li end -->

                            <!-- Properties Menu-->
                            <li class="">
                                <a href="properties-grid.html">IMÓVEIS</a>
                                <!-- <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Properties grid</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="properties-grid.html">properties grid</a>
                                            </li>
                                            <li>
                                                <a href="properties-grid-split.html">properties grid split</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> -->
                            </li>
                            <!-- li end -->

                            <!-- Pages Menu-->
                            <li class="">
                                <a href="page-about.html">SOBRE NÓS</a>
                            </li>
                            <!-- <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">agents</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="agents.html">All Agents</a>
                                            </li>
                                            <li>
                                                <a href="agent-profile.html">agent profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">agencies</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="agency-list.html">all agencies</a>
                                            </li>
                                            <li>
                                                <a href="agency-profile.html">agency profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="blog.html">blog Grid</a>
                                            </li>
                                            <li>
                                                <a href="blog-sidebar-right.html">blog Grid Right </a>
                                            </li>
                                            <li>
                                                <a href="blog-sidebar-left.html">blog Grid Left </a>
                                            </li>
                                            <li>
                                                <a href="blog-single.html">blog single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="page-about.html">page about</a></li>
                                    <li><a href="page-contact.html">page contact</a></li>
                                    <li><a href="page-faq.html">page FAQ</a></li>
                                    <li><a href="page-404.html">page 404</a></li>
                                </ul> -->
                            </li>
                            <!-- li end -->
                            <li>
                                <a href="agents.html">CORRETORES</a>
                            </li>
                            <!-- Profile Menu-->
                            <!-- <li class="has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Profile</a>
                                <ul class="dropdown-menu">
                                    <li><a href="user-profile.html">user profile</a></li>
                                    <li><a href="social-profile.html">social profile</a></li>
                                    <li><a href="my-properties.html">my properties</a></li>
                                    <li><a href="favourite-properties.html">favourite properties</a></li>
                                    <li><a href="add-property.html">add property</a></li>
                                </ul>
                            </li> -->
                            <!-- li end -->

                            <li><a href="page-contact.html">CONTATO</a></li>

                            <?php if (isset($_SESSION["user"])) { ?>
                                <li><a href="./cadastro/cadastro.php">CADASTRAR IMÓVEL</a></li>
                            <?php } ?>
                        </ul>

                        <!-- Module Consultation  -->
                        <!-- <div class="module module-property pull-left">
                            <a href="add-property.html" target="_blank" class="btn"><i class="fa fa-plus"></i> add
                                property</a>
                        </div> -->
                        <?php if (!isset($_SESSION["user"])) { ?>
                            <a href="./admin/index.php" style="color: #fff;">
                                LOGIN ADM
                            </a>
                        <?php } ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

        </header>
        <!-- Hero Search
============================================= -->
        <section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="slider--content">
                            <div class="text-center">
                                <h1>Encontre o que procura aqui</h1>
                            </div>
                            <form class="mb-0">
                                <div class="form-box search-properties">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-location" id="select-location">
                                                        <option>Bairro</option>
                                                        <option>Saúde</option>
                                                        <option>Moema</option>
                                                        <option>Vila Mariana</option>
                                                        <option>Vila Buarque</option>
                                                        <option>Santa Cecília</option>
                                                        <option>Barra Funda</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-type" id="select-type">
                                                        <option>Tipo do imóvel</option>
                                                        <option>Apartamento</option>
                                                        <option>Casa</option>
                                                        <option>Conjunto Comercial</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-status" id="select-status">
                                                        <option>Para venda ou locação?</option>
                                                        <option>Venda</option>
                                                        <option>Locação</option>
                                                        <option>Venda e Locação</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="submit" value="Buscar" name="submit" class="btn btn--primary btn--block">
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-beds" id="select-beds">
                                                        <option>Quartos</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-baths" id="select-baths">
                                                        <option>Banheiros</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-6 option-hide">
                                            <div class="filter mb-30">
                                                <p>
                                                    <label for="amount">Preço : </label>
                                                    <input id="amount" type="text" class="amount" readonly>
                                                </p>
                                                <div class="slider-range"></div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <a href="#" class="less--options">Mais opções</a>
                                        </div>
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- .form-box end -->
                            </form>
                        </div>
                    </div>
                    <!-- .container  end -->
                </div>
                <!-- .slider-text end -->
            </div>
            <div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
                <!-- Slide #1 -->
                <div class="slide--item bg-overlay bg-overlay-dark3">
                    <div class="bg-section">
                        <img src="assets/images/slider/img-slide3.jpg" alt="background" loading="lazy">
                    </div>
                </div>
                <!-- .slide-item end -->
                <!-- Slide #2 -->
                <div class="slide--item bg-overlay bg-overlay-dark3">
                    <div class="bg-section">
                        <img src="assets/images/slider/img-slide1.jpg" alt="background" loading="lazy">
                    </div>
                </div>
                <!-- .slide-item end -->
                <!-- Slide #3 -->
                <div class="slide--item bg-overlay bg-overlay-dark3">
                    <div class="bg-section">
                        <img src="assets/images/slider/img-slide2.jpg" alt="background" loading="lazy">
                    </div>
                </div>
                <!-- .slide-item end -->
            </div>
        </section>
        <!-- #property-single-slider end -->

        <!-- properties-carousel
============================================= -->
        <section id="properties-carousel" class="properties-carousel pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Relevantes</h2>
                            <p class="heading--desc">OS IMÓVEIS MAIS CLICADOS DA SEMANA!</p>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                            <!-- .property-item #1 -->
                            <?php while ($destaque = $result->fetch_assoc()) { ?>
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="#">
                                            <img src="assets/images/properties/3.jpg" alt="property image" class="img-responsive" loading="lazy">
                                            <span class="property--status"><?php echo isset($status[$destaque["negocio"]]) ? $status[$destaque["negocio"]] : "" ?></span>
                                        </a>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="#"><?php echo $destaque["titulo"] ?></a></h5>
                                            <p class="property--location"><?php echo $destaque["endereco"] . ", " .$destaque["bairro"] ?></p>
                                            <p class="property--price"><?php echo $destaque["preco"] ?></p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0" style="margin-bottom: 10px !important;">
                                                <li><span class="feature">Condomínio:</span><span class="feature-num"><?php echo $destaque["condominio"] ?></span></li>
                                                <li><span class="feature">Iptu:</span><span class="feature-num"><?php echo $destaque["iptu"] ?></span></li>
                                            </ul>
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Quartos:</span><span class="feature-num"><?php echo $destaque["quartos"] ?></span></li>
                                                <li><span class="feature">Banheiros:</span><span class="feature-num"><?php echo $destaque["banheiros"] ?></span></li>
                                                <li><span class="feature">Vagas:</span><span class="feature-num"><?php echo $destaque["vagas"] ?></span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- .property item end -->

                            <!-- .property-item #2 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                                        <img src="assets/images/properties/11.jpg" alt="property image" class="img-responsive" loading="lazy">
                                        <span class="property--status">Venda</span>
                                    </a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title">Villa in Chicago IL</h5>
                                        <p class="property--location">1445 N State Pkwy, Chicago, IL 60610</p>
                                        <p class="property--price">$235,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">3</span>
                                            </li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">2</span>
                                            </li>
                                            <li><span class="feature">Area:</span><span class="feature-num">1120 sq
                                                    ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #3 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                                        <img src="assets/images/properties/5.jpg" alt="property image" class="img-responsive" loading="lazy">
                                        <span class="property--status">Aluguel</span>
                                    </a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title">2750 House in Urban St.</h5>
                                        <p class="property--location">2750 Urban Street Dr, Anderson, IN 46011</p>
                                        <p class="property--price">$1,550<span class="time">month</span></p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span>
                                            </li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">2</span>
                                            </li>
                                            <li><span class="feature">Area:</span><span class="feature-num">1390 sq
                                                    ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #4 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                                        <img src="assets/images/properties/4.jpg" alt="property image" class="img-responsive" loading="lazy">
                                        <span class="property--status">Venda</span>
                                    </a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">House in Kent Street</a></h5>
                                        <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                        <p class="property--price">$130,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span>
                                            </li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">2</span>
                                            </li>
                                            <li><span class="feature">Area:</span><span class="feature-num">587 sq
                                                    ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #5 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                                        <img src="assets/images/properties/2.jpg" alt="property image" class="img-responsive" loading="lazy">
                                        <span class="property--status">Aluguel</span>
                                    </a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">Villa in Oglesby Ave</a></h5>
                                        <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                        <p class="property--price">$130,000<span class="time">month</span></p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">4</span>
                                            </li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">3</span>
                                            </li>
                                            <li><span class="feature">Area:</span><span class="feature-num">800 sq
                                                    ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #6 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                                        <img src="assets/images/properties/3.jpg" alt="property image" class="img-responsive" loading="lazy">
                                        <span class="property--status">Venda</span>
                                    </a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                        <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                        <p class="property--price">$70,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span>
                                            </li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">1</span>
                                            </li>
                                            <li><span class="feature">Area:</span><span class="feature-num">200 sq
                                                    ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                        </div>
                        <!-- .carousel end -->
                    </div>
                    <!-- .col-md-12 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #properties-carousel  end  -->

        <!-- Feature
============================================= -->
        <section id="feature" class="feature feature-1 text-center bg-white pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Facilidade em adquirir seu imóvel</h2>
                            <p class="heading--desc">EM APENAS TRÊS PASSOS</p>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- feature Panel #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="assets/images/features/icons/5.png" alt="icon img" loading="lazy">
                            </div>
                            <div class="feature--content">
                                <h3>Procure pelo imóvel perfeito!</h3>
                                <p>Seja a mudança que você quer ver no mundo, comece pelo imóvel ;)</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- feature Panel #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="assets/images/features/icons/6.png" alt="icon img" loading="lazy">
                            </div>
                            <div class="feature--content">
                                <h3>Escolha seu imóvel favorito</h3>
                                <p>Nossa equipe está a disposição para ajudá-lo nesse processo</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- feature Panel #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="assets/images/features/icons/7.png" alt="icon img" loading="lazy">
                            </div>
                            <div class="feature--content">
                                <h3>Pegue as chaves</h3>
                                <p>Após assinar o contrato, a chave dos seus sonhos em suas mãos</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- .feature end -->
        <!-- city-property
============================================= -->
        <section id="city-property" class="city-property text-center pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Bairros em alta</h2>
                            <p class="heading--desc">ESCOLHA O BAIRRO DE SUA PREFERÊNCIA</p>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- City #1 -->
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="property-city-item">
                            <div class="property--city-img">
                                <a href="#">
                                    <img src="./assets/images/properties/img-ibirapuera.jpg" alt="city" class="img-responsive" loading="lazy">
                                    <div class="property--city-overlay">
                                        <div class="property--item-content">
                                            <h5 class="property--title">Moema</h5>
                                            <p class="property--numbers">16 Imóveis</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .property-city-img end -->
                        </div>
                        <!-- . property-city-item end -->
                    </div>
                    <!-- .col-md-8 end -->
                    <!-- City #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="property-city-item">
                            <div class="property--city-img">
                                <a href="#">
                                    <img src="./assets/images/properties/img-martineli.jpg" alt="city" class="img-responsive" loading="lazy">
                                    <div class="property--city-overlay">
                                        <div class="property--item-content">
                                            <h5 class="property--title">Barra Funda</h5>
                                            <p class="property--numbers">14 Imóveis</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .property-city-img end -->
                        </div>
                        <!-- . property-city-item end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
                <div class="row">

                    <!-- City #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="property-city-item">
                            <div class="property--city-img">
                                <a href="#">
                                    <img src="./assets/images/properties/img-luz.jpg" alt="city" class="img-responsive" loading="lazy">
                                    <div class="property--city-overlay">
                                        <div class="property--item-content">
                                            <h5 class="property--title">Vila Buarque</h5>
                                            <p class="property--numbers">18 Imóveis</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .property-city-img end -->
                        </div>
                        <!-- . property-city-item end -->
                    </div>
                    <!-- .col-md-8 end -->
                    <!-- City #4 -->
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="property-city-item">
                            <div class="property--city-img">
                                <a href="#">
                                    <img src="./assets/images/properties/img-st-efigenia.jpeg" alt="city" class="img-responsive" loading="lazy">
                                    <div class="property--city-overlay">
                                        <div class="property--item-content">
                                            <h5 class="property--title">Santa Cecília</h5>
                                            <p class="property--numbers">10 Imóveis</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .property-city-img end -->
                        </div>
                        <!-- . property-city-item end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- .city-property end -->

        <!-- agents
============================================= -->
        <section id="agents" class="agents bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Nossos Corretores</h2>
                            <p class="heading--desc">TREINADOS E APTOS PARA DAR O MELHOR SUPORTE</p>
                        </div>
                        <!-- .heading end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row" style="display: flex; justify-content: center; align-items: center;">
                    <!-- agent #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="agent">
                            <div class="agent--img">
                                <img src="assets/images/agents/img-mara.jpeg" alt="agent" loading="lazy" />
                                <div class="agent--details">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A praesentium corporis
                                        inventore</p>
                                    <div class="agent--social-links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .agent-img end -->
                            <div class="agent--info">
                                <h5 class="agent--title">Mara Lima</h5>
                                <h6 class="agent--position">Corretora Ghaya</h6>
                            </div>
                            <!-- .agent-info end -->
                        </div>
                        <!-- .agent end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- agent #2 -->
                    <!-- <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="agent">
                            <div class="agent--img">
                                <img src="assets/images/agents/grid/2.png" alt="agent" />
                                <div class="agent--details">
                                    <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore dolore.</p>
                                    <div class="agent--social-links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div> -->
                    <!-- .agent-img end -->
                    <!-- <div class="agent--info">
                                <h5 class="agent--title">Mark Smith</h5>
                                <h6 class="agent--position">Selling Agent</h6>
                            </div> -->
                    <!-- .agent-info end -->
                    <!-- </div> -->
                    <!-- .agent end -->
                    <!-- </div> -->
                    <!-- .col-md-4 end -->
                    <!-- agent #3 -->
                    <!-- <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="agent">
                            <div class="agent--img">
                                <img src="assets/images/agents/grid/3.png" alt="agent" />
                                <div class="agent--details">
                                    <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore dolore.</p>
                                    <div class="agent--social-links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div> -->
                    <!-- .agent-img end -->
                    <!-- <div class="agent--info">
                                <h5 class="agent--title">Ryan Printz</h5>
                                <h6 class="agent--position">Real Estate Broker</h6>
                            </div> -->
                    <!-- .agent-info end -->
                    <!-- </div> -->
                    <!-- .agent end -->
                    <!-- </div> -->
                    <!-- .col-md-4 end -->

                </div>
            </div>
        </section>
        <!-- #agents end  -->

        <!-- cta #1
============================================= -->
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background" loading="lazy"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Fale com nosso time de profissionais e nós te ajudaremos!</h3>
                        <a href="#" class="btn btn--primary">Contate-nos</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #cta1 end -->

        <!-- Footer #1
============================================= -->
        <footer id="footer" class="footer footer-1 bg-white">
            <!-- Widget Section
	============================================= -->
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 widget--about">
                            <div class="widget--content">
                                <div class="footer--logo">
                                    <img src="./assets/images/logo/logo-ghaya.png" alt="logo" style="max-width: 150px;" loading="lazy">
                                </div>
                                <p>Rua Doutor Cesário Mota Júnior, 369 - Conjunto 23</p>
                                <div class="footer--contact">
                                    <ul class="list-unstyled mb-0">
                                        <li>(11) 5055-5598</li>
                                        <li><a href="mailto:contact@land.com">contato@ghayaimoveis.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->
                        <div class="col-xs-12 col-sm-3 col-md-2 col-md-offset-1 widget--links">
                            <div class="widget--title">
                                <h5>Links</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Imóveis</a></li>
                                    <li><a href="#">Sobre nós</a></li>
                                    <li><a href="#">Corretores</a></li>
                                    <li><a href="#">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->
                        <div class="col-xs-12 col-sm-3 col-md-2 widget--links">
                            <div class="widget--title">
                                <h5>Saiba mais</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Privacidade</a></li>
                                    <li><a href="#">Termos e condições</a></li>
                                    <li><a href="#">Conta</a></li>
                                    <li><a href="#">Perguntas recentes</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget--newsletter">
                            <div class="widget--title">
                                <h5>newsletter</h5>
                            </div>
                            <div class="widget--content">
                                <form class="newsletter--form mb-40">
                                    <input type="email" class="form-control" id="newsletter-email" placeholder="Endereço de Email">
                                    <button type="submit"><i class="fa fa-arrow-right"></i></button>
                                </form>
                                <h6>Siga-nos nas redes sociais!</h6>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-4 end -->

                    </div>
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-widget end -->

            <!-- Copyrights
	============================================= -->
            <div class="footer--copyright text-center">
                <div class="container">
                    <div class="row footer--bar">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <span>© 2023 <a href="https://github.com/lucasmatutani">Design by Lucas Matutani</a>, Todos
                                os direitos reservados</span>
                        </div>

                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-copyright end -->
        </footer>
    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>