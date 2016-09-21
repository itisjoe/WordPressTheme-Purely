<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="content-language" content="zh-tw">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php echo wp_get_document_title(); ?></title>
    <meta lang="zh-tw" name="keywords" content="<?php bloginfo('keywords');?>">
    <meta lang="zh-tw" name="description" content="<?php bloginfo('description');?>">
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <div class="content">
            <a href="<?php bloginfo('url');?>" class="site-title">
                <img id="avatar" src="<?php echo purely_get_logo(); ?>" alt="<?php bloginfo('name');?>">
            </a>
            <h1>
                <strong><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></strong>
                <?php bloginfo('description');?>
            </h1>
        </div>
    </header>
    <div id="main">
        <?php wp_nav_menu(array('theme_location'=>'primary'));?>