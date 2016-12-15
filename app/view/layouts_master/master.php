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
    <link rel="shortcut icon"
          href="<?php echo IMAGES; ?>feelmakers_icon.png">
</head>
<body>
<div class="wsb-canvas body">
    <div class="wsb-canvas-page-container">
        <?php echo $yield; ?>
        <?php require_once TEMPLATE . 'footer.php'; ?>
    </div>
</div>
</body>
</html>