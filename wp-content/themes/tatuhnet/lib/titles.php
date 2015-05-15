<?php
/**
 * Page titles
 */
function daisyblue_title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'daisy-blue');
    }
  } elseif (is_archive()) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    if ($term) {
      return apply_filters('single_term_title', $term->name);
    } elseif (is_post_type_archive()) {
      return apply_filters('the_title', get_queried_object()->labels->name);
    } elseif (is_day()) {
      return sprintf(__('Daily Archives: %s', 'daisy-blue'), get_the_date());
    } elseif (is_month()) {
      return sprintf(__('Monthly Archives: %s', 'daisy-blue'), get_the_date('F Y'));
    } elseif (is_year()) {
      return sprintf(__('Yearly Archives: %s', 'daisy-blue'), get_the_date('Y'));
    } elseif (is_author()) {
      $author = get_queried_object();
      return sprintf(__('Author Archives: %s', 'daisy-blue'), $author->display_name);
    } else {
      return single_cat_title('', false);
    }
  } elseif (is_search()) {
    return sprintf(__('Результаты поиска для %s', 'daisy-blue'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'daisy-blue');
  } else {
    return get_the_title();
  }
}