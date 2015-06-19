<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package semplicemente
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter30607612 = new Ya.Metrika({
                    id: 30607612,
                    webvisor: true,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="//mc.yandex.ru/watch/30607612" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- Google counter -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-64145115-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- /Google counter -->

<div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img
                    src="/wp-content/themes/tatuh.net/images/header.png"></a>
        </div>
    </header>
    <div class="tatuh_top_nav">
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle"><?php _e('Menu', 'semplicemente'); ?><i class="fa fa-align-justify"></i>
            </button>
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            <a href="#" class="top-search">&nbsp;</a>
            <?php if (!$se_options['hidesearch']) : ?>
                <i class="fa spaceLeftDouble fa-search"></i>
            <?php endif; ?>
            <?php if (!$se_options['hidesearch']) : ?>
                <div class="topSearchForm">
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
        </nav>
    </div>
    <div id="content" class="site-content">