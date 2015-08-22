<?php
/**
 * Category Template: FSeoCatDljaDevushekNaRuke
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
Подбор татуировки на руке для девушек
</h1>
<div class="header-links">
<a href="http://tatuh.net/vybor-tatu/dlya-devushek/na-ruke/na-ladoni.html">
<span class="label-link label-main">ладонь</span>
</a>
<a href="http://tatuh.net/vybor-tatu/dlya-devushek/na-ruke/na-zapyaste.html">
<span class="label-link label-main">запястье</span>
</a>
<a href="http://tatuh.net/vybor-tatu/dlya-devushek/na-ruke/na-lokte.html">
<span class="label-link label-main">локоть</span>
</a>
<a href="http://tatuh.net/vybor-tatu/dlya-devushek/na-ruke/na-pleche-i-predpleche.html">
<span class="label-link label-main">плечо</span>
</a>
<a href="http://tatuh.net/vybor-tatu/dlya-devushek/na-ruke/na-pleche-i-predpleche.html">
<span class="label-link label-main">предплечье</span>
</a>
<a href="http://tatuh.net/vybor-tatu/dlya-devushek/na-ruke/rukava.html">
<span class="label-link label-main">рукава</span>
</a>
</div>
</header>
<div class="entry-content">
Пряча кожу под очередным рисунком, ты всё больше оголяешь душу. Нанося крошечный значок на ладошку, ты даёшь ключик от своей души тому, кто возьмёт тебя за руку. Создавая вместе с тату-мастером новый узор, ты рассказываешь всему миру о том, какая ты на самом деле. Тот, кто увидит и поймёт, станет самым близким тебе человеком.
</div>
</article>
<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php semplicemente_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>
</main>
</section>
<?php get_sidebar(); ?>

<?php get_footer();?>