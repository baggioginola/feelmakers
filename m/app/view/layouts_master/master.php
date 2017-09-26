<!DOCTYPE html>
<html lang="es">
<head>
    <title>Feelmakers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Fredericka+the+Great|Allura|Amatic+SC|Arizonia|Averia+Sans+Libre|Cabin+Sketch|Francois+One|Jacques+Francois+Shadow|Josefin+Slab|Kaushan+Script|Love+Ya+Like+A+Sister|Merriweather|Offside|Open+Sans|Open+Sans+Condensed|Oswald|Over+the+Rainbow|Pacifico|Romanesco|Sacramento|Seaweed+Script|Special+Elite">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Spinnaker|Roboto:300,400">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS ?>site.css">

    <link media="screen" href="<?php echo JS; ?>jqueryui/jquery-ui-1.8.16.custom.css" rel="stylesheet"/>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <link rel="shortcut icon"
          href="<?php echo IMAGES; ?>feelmakers_icon.png">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" id="header">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php echo DOMAIN; ?>"><img src="<?php echo IMAGES; ?>logo.png" width="100px">Feelmakers</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Categorías <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        {% for category  in categories %}
                        <li><a href="{{ settings.DOMAIN }}categoria/{{ category.id }}">{{ category.nombre }}</a>
                        </li>
                        {% endfor %}
                    </ul>
                </li>
                <li><a href="{{ settings.DOMAIN }}quienes-somos">¿Quiénes Somos?</a></li>
                <li><a href="{{ settings.DOMAIN }}contacto">Contacto</a></li>
                <li><a href="{{ settings.DOMAIN }}carrito-compra"><img src="{{ settings.IMG }}/cart.png" width="20px"> |
                        <span id="cart_productos">{% if cart_products == 0 %}Vacío {% else %}{{ cart_products }} producto(s){% endif %}</span></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<?php echo $yield; ?>
</body>
<script type="text/javascript" src="<?php echo JS; ?>custom/contact.js"></script>
</html>