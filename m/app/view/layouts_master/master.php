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
    <link href="http://vjs.zencdn.net/5.16.0/video-js.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://player.vimeo.com/api/player.js"></script>
    <link rel="shortcut icon"
          href="<?php echo IMAGES; ?>feelmakers_icon.png">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" id="header" role="navigation">
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

            <a class="navbar-brand" href="<?php echo DOMAIN; ?>"><img src="<?php echo IMAGES; ?>logo.png" width="200" alt="Feelmakers"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo DOMAIN; ?>#save-the-date">SAVE THE DATE</a>
                </li>
                <li><a href="<?php echo DOMAIN; ?>#feel-session">FEEL SESSION</a></li>
                <li><a href="<?php echo DOMAIN; ?>#wedding-day">WEDDING DAY</a></li>
                <li><a href="<?php echo DOMAIN; ?>#trash-the-dress">TRASH THE DRESS</a></li>
                <li><a href="<?php echo DOMAIN; ?>#life">LIFE</a></li>
                <li><a href="<?php echo DOMAIN; ?>#recomendaciones">RECOMENDACIONES</a></li>
                <li><a href="<?php echo DOMAIN; ?>#acerca">NUESTRO EQUIPO</a></li>
                <li><a href="<?php echo DOMAIN; ?>#contacto">CONTACTO</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<?php echo $yield; ?>
</body>
<script type="text/javascript" src="<?php echo JS; ?>vimeo.js"></script>
<script type="text/javascript" src="<?php echo JS; ?>swipe.min.js"></script>
<script type="text/javascript" src="<?php echo JS; ?>custom/config.js"></script>
<script type="text/javascript" src="<?php echo JS; ?>custom/main.js"></script>
<script src="http://vjs.zencdn.net/6.4.0/video.js"></script>
<script type="text/javascript" src="<?php echo JS; ?>custom/video.js"></script>
</html>