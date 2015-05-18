<?php
/**
 * Category Template: FSeoCat
 */
?>

<?php get_header();?>

<p>Текущий раздел: <strong><?php single_cat_title(); ?></strong></p>

Подразделы:нварпыпвыапывап
<ul>
<?php
$id = get_query_var('cat');
$args = array(	'parent' => $id );
foreach (get_categories($args) as $cat) : ?>
<li>
<a href="<?php echo get_category_link($cat->term_id); ?>">
	<strong><?php echo $cat->cat_name; ?></strong>
</a>
</li>
<?php endforeach; ?>
</ul>

<?php get_sidebar(); ?>

<?php get_footer();?>