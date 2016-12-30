<!DOCTYPE html>
<html lang="es" dir="ltr" data-tcc-ignore="">
<head><title>Feelmakers</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Fredericka+the+Great|Allura|Amatic+SC|Arizonia|Averia+Sans+Libre|Cabin+Sketch|Francois+One|Jacques+Francois+Shadow|Josefin+Slab|Kaushan+Script|Love+Ya+Like+A+Sister|Merriweather|Offside|Open+Sans|Open+Sans+Condensed|Oswald|Over+the+Rainbow|Pacifico|Romanesco|Sacramento|Seaweed+Script|Special+Elite">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Spinnaker|Roboto:300,400">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS ?>site.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS ?>fixed.css">

    <link media="screen" href="<?php echo JS; ?>jqueryui/jquery-ui-1.8.16.custom.css" rel="stylesheet"/>

    <script type="text/javascript" src="<?php echo JS; ?>jquery/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo JS; ?>jqueryui/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo JS; ?>jquery.hoverIntent.minified.js"></script>


    <link rel="shortcut icon"
          href="<?php echo IMAGES; ?>feelmakers_icon.png">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<div class="wsb-canvas body">
    <div class="wsb-canvas-page-container">
        <?php echo $yield; ?>
        <?php require_once TEMPLATE . 'footer.php'; ?>
    </div>
</div>
</body>
<script type="text/javascript" src="<?php echo JS; ?>custom/contact.js"></script>
</html>