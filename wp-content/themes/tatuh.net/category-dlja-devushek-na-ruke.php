<?php
/**
 * Category Template: FSeoCatDljaDevushekNaRuke
 */
?>
<?php get_header();?>
<section class="content-area">
<main id="main" class="site-main" role="main">
<article>
<header class="page-header">
<h1 class="entry-title">
Татуировки на руке для девушек.
</h1>
</header>
<div class="entry-content">
Пряча кожу под очередным рисунком, ты всё больше оголяешь душу. Нанося крошечный значок на ладошку, ты даёшь ключик от своей души тому, кто возьмёт тебя за руку. Создавая вместе с тату-мастером новый узор, ты рассказываешь всему миру о том, какая ты на самом деле. Тот, кто увидит и поймёт, станет самым близким тебе человеком.
<br><br>
Философия женской декоративной татуировки – очень тонкая наука. Грань между ультрамодным и вульгарным, между концептуальным и общеупотребимым, между символом и трендом практически стёрлась. И только женщина с очень хорошим вкусом способна выбрать тот эскиз, который сделает её ещё прекраснее. И то место, на котором эта телесная «живопись» будет выглядеть в меру женственно, в меру эротично и не в меру круто.
<br><br>
Определяясь с рисунком и локацией, стоит обратить внимание на руки. Это удобная зона для демонстрации красивых тату.
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