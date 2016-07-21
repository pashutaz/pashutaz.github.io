<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <?php wp_head() ?>
    <title><?php bloginfo('name')?><?php wp_title('|')?></title>
</head>
<body>


<div class="container">
    <a href="/" title="Main page">
        <img id="logo" src="<?php echo get_template_directory_uri()?>/img/hotslogo.jpg" alt="HotsMaster logo">
    </a>

    <nav class="navbar navbar-default">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

<!--        <!-- Collect the nav links, forms, and other content for toggling -->
<!--        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--            <ul class="nav navbar-nav">-->
<!--                <li><a href="#">Link1</a></li>-->
<!--                <li><a href="#">Link2</a></li>-->
<!---->
<!--            </ul>-->
<!---->
<!--        </div><!-- /.navbar-collapse -->
    <?php wp_nav_menu([
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'menu_class' => 'nav navbar-nav',
        'theme_location' => 'header_menu'
    ])?>
</nav>
    <div class="row">