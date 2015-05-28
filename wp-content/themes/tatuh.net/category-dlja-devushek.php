<?php
/**
 * Category Template: FSeoCatDljaDevushek
 */
?>
<?php get_header();?>
<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<section class="content-area">
<main id="main" class="site-main" role="main">
<article>
<header class="page-header">
<h1 class="entry-title">
Подбор татуировки для девушек
</h1>
</header>
<div class="entry-content">
<div class="img-overlay">
<a href=dlya-devushek/na-ruke><img class="thumbnail" src="/wp-content/themes/tatuh.net/images/choice/women/hand.jpg" />
<span>На руке</span>
</a>
</div>
<div class="img-overlay">
<a href="dlya-devushek/intimnye/tatu-na-intimnyh-mestah-zhenskie.html"><img class="thumbnail" src="/wp-content/themes/tatuh.net/images/choice/women/intimate-thumb.jpg" />
<span>Интимные</span>
</a>
</div>
</div>
</article>
</main>
</section>
<?php get_sidebar(); ?>

<?php get_footer();?>