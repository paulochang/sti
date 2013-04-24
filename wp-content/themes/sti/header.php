<!DOCTYPE html>
<html <?php language_attributes (); ?>>
    <head>
        <meta charset="<?php bloginfo ( 'charset' ); ?>" /> <!-- configura el conjunto de caracteres -->
        <meta name="viewport" content="width=1020, initial-scale=1, maximum-scale=1" /> <!-- configura el ancho de la pantalla -->
        <title><?php site_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo ( 'pingback_url' ); ?>" />
        <link rel="icon" type="image/ico" href="<?php echo theme_url ( 'img/favicon.ico' ); ?>">
        <?php wp_head (); ?>
        <script type="text/javascript">
          var Server = Server || { } ;
        // Misc Data
        Server.debug = true ;
        // Wordpress based URL's
        Server.url = { } ;
        Server.url.titulo = '<?php wp_title ( '|', true, 'right' ); ?>' ;
        Server.url.site = '<?php echo site_url (); ?>' ;
        Server.url.home = '<?php echo home_url (); ?>' ;
        Server.url.theme = '<?php echo theme_url (); ?>' ;
        Server.url.admin = '<?php echo admin_url (); ?>' ;
        Server.url.ajax = '<?php echo admin_url ( 'admin-ajax.php' ); ?>' ;
        </script>
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body <?php body_class (); ?> data-language="<?php bloginfo ( 'language' ); ?>">

        <div id="content-wrap" class="ChaletBook">
            <div id="header">                   
                <a id="header-logo" class="float-left" href="<?php echo home_url (); ?>">
                    <img src="<?php echo theme_url ( 'img/logo.png' ); ?>" alt="header-logo"/>
                </a>             
                <div id="header-navigation" class="uppercase float-right">
                    <ul id="link-container" class="inline">
                        <li class="link-single">
                            <a href="<?php echo home_url (); ?>">
                                <div class="link-border float-right">
                                    <div id="homeSel" class="link-selector float-right transition-width"></div><div class="clear"></div>
                                </div>
                                <p id="homeLink" class="link-txt txt-right float-right">HOME</p>
                                <div class="clear"></div>
                            </a>
                        </li>
                        <li class="link-single">
                            <a href="<?php echo home_url ('nosotros'); ?>">
                                <div class="link-border float-right">
                                    <div id="nosotrosSel" class="link-selector float-right transition-width"></div><div class="clear"></div>
                                </div>
                                <p id="nosotrosLink" class="link-txt txt-right float-right">NOSOTROS</p>
                                <div class="clear"></div>
                            </a>
                        </li>
                        <li class="link-single">
                            <a href="<?php echo get_post_type_archive_link( 'vivienda' ); ?>">
                                <div class="link-border float-right">
                                    <div id="viviendaSel" class="link-selector float-right transition-width"></div><div class="clear"></div>
                                </div>
                                <p id="viviendaLink" class="link-txt txt-right float-right">VIVIENDA</p>
                                <div class="clear"></div>
                            </a>
                        </li>
                        <li class="link-single">
                            <a href="<?php echo get_post_type_archive_link ( 'desarrollo' ); ?>">
                                <div class="link-border float-right">
                                    <div id="desarrolloSel" class="link-selector float-right transition-width"></div><div class="clear"></div>
                                </div>
                                <p id="desarrolloLink" class="link-txt txt-right float-right">DESARROLLOS</p>
                                <div class="clear"></div>
                            </a>
                        </li>
                        <li class="link-single">
                            <a href="<?php echo get_post_type_archive_link ( 'geotecnia' ); ?>">
                                <div class="link-border float-right">
                                    <div id="geotecniaSel" class="link-selector float-right transition-width"></div><div class="clear"></div>
                                </div>
                                <p id="geotecniaLink" class="link-txt txt-right float-right">GEOTECNIA</p>
                                <div class="clear"></div>
                            </a>
                        </li>
                        <li class="link-single">
                            <a href="<?php echo home_url ('contacto'); ?>">
                                <div class="link-border float-right">
                                    <div id="contactoSel" class="link-selector float-right transition-width"></div><div class="clear"></div>
                                </div>
                                <p id="contactoLink" class="link-txt txt-right float-right">CONTACTO</p>
                                <div class="clear"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div id="content">