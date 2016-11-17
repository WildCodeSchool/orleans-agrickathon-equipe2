<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agrenter - Dis moi où?</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-home" aria-hidden="true"><img class="homeLogo" src="img/logo_agrenter(1).png"></i>
                    <!--span class="light">Accueil</span-->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#signIn">S'inscrire</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Se connecter</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img class="logo" src="img/logo_agrenter(1).png" alt='Agrenter - Dis moi où ?'>
                        <div class="col-lg-12">
                            <p class="texttop">Le réseau Agrenter est composé d’acteurs de la filière alimentaire. Qu’ils soient agriculteurs, artisans, transformateurs ou même distributeurs, ils ont tous à cœur de présenter leur métier à un public de consommateur et de partager leurs savoir-faire. </p>
                            <p>Géolocalisez-vous pour découvrir nos propositions.</p>
                            <p id="msg"></p>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-4 form-group form-group-lg">
                                <input class="form-control" type="text" id="ville" placeholder="Ville">
                            </div>
                            <div class="col-lg-4 form-group form-group-lg">
                                <input class="form-control" type="text" id="date" name="date" placeholder="Date">
                            </div>
                            <div class="col-lg-4 form-group form-group-lg">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span id="title">Public</span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Adultes</a></li>
                                        <li><a href="#">Enfants</a></li>
                                        <li><a href="#">Groupes</a></li>
                                        <li><a href="#">Ecoles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a id="bp" href="#theMap" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <!--section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>C'est quoi AGRENTER ?</h2>
                <p>Agrenter est une plateforme web permettant de faciliter les relations entre les consommateurs et les acteurs des filiaires agricole, agronome etc..</p>
            </div>
        </div>
    </section-->

    <section id="theMap">
        <div id="wrapMap">
            <iframe id="myMap" src="http://umap.openstreetmap.fr/en/map/dis-moi-ou_112092#4/" frameborder="0" width="800px" height="800px"></iframe>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contactez nous:</h2>

                <p><a href="mailto:contact@agrenter.com">contact@agrenter.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <script
        src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
        crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

    <script>
        $(function () {
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    $('#msg').text('Désolé mais, la géolocalisation n\'est pas supportée par votre navigateur');
                }
            }
            function showPosition(position) {
                var lat = position.coords.latitude;
                var lon =position.coords.longitude;
                console.log(lat+' '+lon);
                var element=document.getElementById('myMap');
                element.setAttribute('src','http://umap.openstreetmap.fr/en/map/dis-moi-ou_112092#10/'+lat+'/'+lon);
                $('html, body').animate({
                    scrollTop: $("#theMap").offset().top
                }, 2000);
                /*$.ajax({
                 method: "post",
                 url: "geo.php",
                 data:{lat: lat,lon: lon},
                 success:
                 });*/
            }
            getLocation();

            $('#date').datepicker({
                dateFormat: "dd/mm/yy",

            });
        });
    </script>

</body>

</html>
