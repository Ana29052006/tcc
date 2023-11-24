<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Carrinho de compras| Menu </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Bom Gosto</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="home.php" class="nav-item nav-link">Home</a>
                        <a href="" class="nav-item nav-link"></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="carrinho.php" class="dropdown-item">Meu carrinho</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="user-box"> 
                    <a href="cadastro.php" class="user-btn">
                        <img src="bx-user.svg" alt="usuario" height="20" width="20"></a>
                      </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Meu Carrinho</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Carrinho</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Suco de laranja</span>
                <img src="produtos/suco1.png" alt="" class="img-item">
                <span class="precio-item">R$15,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Suco de melancia</span>
                <img src="produtos/Suco2.jpg" alt="" class="img-item">
                <span class="precio-item">R$13,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Suco de morango</span>
                <img src="produtos/Suco3.jpg" alt="" class="img-item">
                <span class="precio-item">R$15,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Suco de uva</span>
                <img src="produtos/suco4.jpg" alt="" class="img-item">
                <span class="precio-item">R$14,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Suco de abacaxi</span>
                <img src="produtos/suco5.jpg" alt="" class="img-item">
                <span class="precio-item">R$12,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Suco de melão</span>
                <img src="produtos/suco6.jpg" alt="" class="img-item">
                <span class="precio-item">R$14,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Coca-cola lata</span>
                <img src="produtos/coca.jpg" alt="" class="img-item">
                <span class="precio-item">R$5,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Fanta de laranja lata</span>
                <img src="produtos/fanta.jpg" alt="" class="img-item">
                <span class="precio-item">R$5,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Pepsi lata</span>
                <img src="produtos/pepsi.jpg" alt="" class="img-item">
                <span class="precio-item">R$5,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Marmita Espanhola</span>
                <img src="produtos/marmita1.jpg" alt="" class="img-item">
                <span class="precio-item">R$20,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Marmita da casa</span>
                <img src="produtos/marmita2.jpg" alt="" class="img-item">
                <span class="precio-item">R$35,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">marmita churrasco</span>
                <img src="produtos/marmita3.jpg" alt="" class="img-item">
                <span class="precio-item">R$25,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">Bife a Cavalo</span>
                <img src="produtos/marmita4.jpg" alt="" class="img-item">
                <span class="precio-item">R$29,90</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">espetinho empanado</span>
                <img src="produtos/marmita5.jpg" alt="" class="img-item">
                <span class="precio-item">R$36,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">marmita especial</span>
                <img src="produtos/marmita6.jpg" alt="" class="img-item">
                <span class="precio-item">R$46,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            <div class="item">
                <span class="titulo-item">marmita de verão</span>
                <img src="produtos/marmita92.png" alt="" class="img-item">
                <span class="precio-item">R$46,00</span>
                <button class="boton-item">Adicionar ao carrinho</button>
            </div>
            
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Seu carrinho</h2>
            </div>

            <div class="carrito-items">
                
                <div class="carrito-item">
                    <img src="produtos/suco1.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Suco de laranja</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">R$15,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="produtos/suco1.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Suco de laranja</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">R$15,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Seu Total</strong>
                    <span class="carrito-precio-total">
                        R$30,00
                    </span>
                </div>
                <button class="btn-pagar">Finalizar Compra <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
        <!-- Menu End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="home.php">Home</a>
                        <a class="btn btn-link" href="cadastro.php">cadastro</a>
                        <a class="btn btn-link" href="login.php">Login</a>
                        <a class="btn btn-link" href="carrinho.php">Carrinho</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contato</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sol Nascente, 274 Egído Ortiz, Garça-sp</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> (14) 99119-0570</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://instagram.com/eliana.marmitaria?igshid=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/elianafranciscadelima.sores?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://wa.me/5514991190570"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Aberto</h4>
                        <h5 class="text-light fw-normal">Segunda - Terça- Quarta- Quinta - Sexta - Sabádo</h5>
                        <p>07h- 15h</p>
                        <h5 class="text-light fw-normal">Domingo</h5>
                        <p>11h - 14h</p>
                    </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <a class="border-bottom" href="#"></a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="home.php">Home</a>
                                <a href="login.php">Login</a>
                                <a href="cadastro.php">Cadastro</a>
                                <a href="carrinho.php">Carrinho</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="app.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>