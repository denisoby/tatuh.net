<?php

function bwg_update($version) {
  global $wpdb;
  if (version_compare($version, '1.0.1') == -1) {
    // Add thumb title option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `image_title_show_hover` varchar(8) NOT NULL DEFAULT 'none'");
    // Add image title theme options.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `thumb_title_shadow` varchar(32) NOT NULL DEFAULT '0px 0px 0px #888888'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `thumb_title_margin` varchar(32) NOT NULL DEFAULT '2px'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `thumb_title_font_weight` varchar(8) NOT NULL DEFAULT 'bold'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `thumb_title_font_size` int(4) NOT NULL DEFAULT 16");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `thumb_title_font_style` varchar(16) NOT NULL DEFAULT 'segoe ui'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `thumb_title_font_color` varchar(8) NOT NULL DEFAULT 'CCCCCC'");
    // Add thumb upload dimensions.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `upload_thumb_height` int(4) NOT NULL DEFAULT 300");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `upload_thumb_width` int(4) NOT NULL DEFAULT 300");
  }
  if (version_compare($version, '1.1.10') == -1) {
    // Add image right click option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `image_right_click` tinyint(1) NOT NULL DEFAULT 0");
    // Add popup fullscreen option
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `popup_fullscreen` tinyint(1) NOT NULL DEFAULT 0");
  }
  if (version_compare($version, '1.1.12') == -1) {
    // Add image title position.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `thumb_title_pos` varchar(8) NOT NULL DEFAULT 'bottom'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_compact_thumb_title_pos` varchar(8) NOT NULL DEFAULT 'bottom'");
	  // Add popup autoplay option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `popup_autoplay` tinyint(1) NOT NULL DEFAULT 0");
	  // Add album view type option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `album_view_type` varchar(16) NOT NULL DEFAULT 'thumbnail'");
  }
  if (version_compare($version, '1.1.14') == -1) {
    // Add Pinterest, Tumblr share buttons enable options.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `popup_enable_pinterest` tinyint(1) NOT NULL DEFAULT 0");
	  $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `popup_enable_tumblr` tinyint(1) NOT NULL DEFAULT 0");
	  // Add image title/description theme options.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_info_pos` varchar(8) NOT NULL DEFAULT 'top'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_info_align` varchar(8) NOT NULL DEFAULT 'right'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_info_bg_color` varchar(8) NOT NULL DEFAULT '000000'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_info_bg_transparent` int(4) NOT NULL DEFAULT 70");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_info_border_width` int(4) NOT NULL DEFAULT 1");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_info_border_style` varchar(8) NOT NULL DEFAULT 'none'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_info_border_color` varchar(8) NOT NULL DEFAULT '000000'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_info_border_radius` varchar(32) NOT NULL DEFAULT '5px'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_info_padding` varchar(32) NOT NULL DEFAULT '5px'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_info_margin` varchar(32) NOT NULL DEFAULT '15px'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_title_color` varchar(8) NOT NULL DEFAULT 'FFFFFF'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_title_font_style` varchar(16) NOT NULL DEFAULT 'segoe ui'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_title_font_weight` varchar(8) NOT NULL DEFAULT 'bold'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_title_font_size` int(4) NOT NULL DEFAULT 18");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_description_color` varchar(8) NOT NULL DEFAULT 'FFFFFF'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_description_font_style` varchar(16) NOT NULL DEFAULT 'segoe ui'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_description_font_weight` varchar(8) NOT NULL DEFAULT 'normal'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_description_font_size` int(4) NOT NULL DEFAULT 14");
  }
  if (version_compare($version, '1.1.15') == -1) {
    // Add search box option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `show_search_box` tinyint(1) NOT NULL DEFAULT 0");
    // Add search box width option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `search_box_width` int(4) NOT NULL DEFAULT 180");
    // Add info enable/disable option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `popup_enable_info` tinyint(1) NOT NULL DEFAULT 1");
  }
  if (version_compare($version, '1.1.18') == -1) {
    // Add rate enable/disable option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `popup_enable_rate` tinyint(1) NOT NULL DEFAULT 0");
    // Add image rate table.
    $bwg_image_rate = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "bwg_image_rate` (
      `id` bigint(20) NOT NULL AUTO_INCREMENT,
      `image_id` bigint(20) NOT NULL,
      `rate` float(16) NOT NULL,
      `ip` varchar(64) NOT NULL,
      `date` varchar(64) NOT NULL,
      PRIMARY KEY (`id`)
    ) DEFAULT CHARSET=utf8;";
    $wpdb->query($bwg_image_rate);
    // Add average rating, rating count, hit counter to image table.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_image ADD `avg_rating` float(20) NOT NULL DEFAULT 0");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_image ADD `rate_count` bigint(20) NOT NULL DEFAULT 0");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_image ADD `hit_count` bigint(20) NOT NULL DEFAULT 0");
    // Add image rating theme options.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_rate_pos` varchar(8) NOT NULL DEFAULT 'bottom'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_rate_align` varchar(8) NOT NULL DEFAULT 'right'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_rate_icon` varchar(8) NOT NULL DEFAULT 'star'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_rate_color` varchar(8) NOT NULL DEFAULT 'F9D062'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_rate_size` int(4) NOT NULL DEFAULT 20");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_rate_stars_count` int(4) NOT NULL DEFAULT 5");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_rate_padding` varchar(32) NOT NULL DEFAULT '15px'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_rate_hover_color` varchar(8) NOT NULL DEFAULT 'F7B50E'");
    // Add thumb click action.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `thumb_click_action` varchar(16) NOT NULL DEFAULT 'open_lightbox'");
    // Add target='_blank' if thumb click redirects to url.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `thumb_link_target` tinyint(1) NOT NULL DEFAULT 1");
    // Add comment moderation option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `comment_moderation` tinyint(1) NOT NULL DEFAULT 0");
    // Add redirect url for image.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_image ADD `redirect_url` varchar(255) NOT NULL DEFAULT '#'");
    // Add info always show option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `popup_info_always_show` tinyint(1) NOT NULL DEFAULT 0");
    // Add hit counter show option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `popup_hit_counter` tinyint(1) NOT NULL DEFAULT 0");
    // Add image hit counter theme options.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_pos` varchar(8) NOT NULL DEFAULT 'bottom'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_align` varchar(8) NOT NULL DEFAULT 'left'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_bg_color` varchar(8) NOT NULL DEFAULT '000000'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_bg_transparent` int(4) NOT NULL DEFAULT 70");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_border_width` int(4) NOT NULL DEFAULT 1");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_border_style` varchar(8) NOT NULL DEFAULT 'none'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_border_color` varchar(8) NOT NULL DEFAULT '000000'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_border_radius` varchar(32) NOT NULL DEFAULT '5px'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_padding` varchar(32) NOT NULL DEFAULT '5px'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_margin` varchar(32) NOT NULL DEFAULT '0 5px'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_color` varchar(8) NOT NULL DEFAULT 'FFFFFF'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_font_style` varchar(16) NOT NULL DEFAULT 'segoe ui'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_font_weight` varchar(8) NOT NULL DEFAULT 'normal'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `lightbox_hit_font_size` int(4) NOT NULL DEFAULT 14");
  }
  if (version_compare($version, '1.1.19') == -1) {
    // Add preload option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `preload_images` tinyint(1) NOT NULL DEFAULT 1");
    // Add search box width option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `preload_images_count` int(4) NOT NULL DEFAULT 10");
  }
  if (version_compare($version, '1.1.26') == -1) {
    // Add import from media library option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `enable_ML_import` tinyint(1) NOT NULL DEFAULT 0");
  }
  if (version_compare($version, '1.1.30') == -1) {
    // Add enable/disable showing album or thumbnail names.
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `showthumbs_name` tinyint(1) NOT NULL DEFAULT 0");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `show_album_name` tinyint(1) NOT NULL DEFAULT 0");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `show_image_counts` tinyint(1) NOT NULL DEFAULT 0");
  }
  if (version_compare($version, '1.2.0') == -1) {
    $bwg_shortcode = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "bwg_shortcode` (
      `id` bigint(20) NOT NULL,
      `tagtext` mediumtext NOT NULL,
      PRIMARY KEY (`id`)
    ) DEFAULT CHARSET=utf8;";
    $wpdb->query($bwg_shortcode);
  }
  if (version_compare($version, '1.2.2') == -1) {
    // Upload images with custom size.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `upload_img_width` int(4) NOT NULL DEFAULT 1200");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `upload_img_height` int(4) NOT NULL DEFAULT 1200");
  }
  if (version_compare($version, '1.2.3') == -1) {
    // Add enable/disable option for play icon on video thumbnail.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `play_icon` tinyint(1) NOT NULL DEFAULT 1");
  }
  if (version_compare($version, '1.2.4') == -1) {
    // Add enable/disable showing masonry thumb description.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `show_masonry_thumb_description` tinyint(1) NOT NULL DEFAULT 0");
    // Add masonry description styles option.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `masonry_description_font_size` int(4) NOT NULL DEFAULT 12");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `masonry_description_color` varchar(8) NOT NULL DEFAULT 'CCCCCC'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `masonry_description_font_style` varchar(16) NOT NULL DEFAULT 'segoe ui'");
  }
  if (version_compare($version, '1.2.6') == -1) {
    // Add enable/disable option for slideshow image title full width.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `slideshow_title_full_width` tinyint(1) NOT NULL DEFAULT 1"); 
	// Add enable/disable option for lightbox info full width.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `popup_info_full_width` tinyint(1) NOT NULL DEFAULT 1");
  }
	if (version_compare($version, '1.2.7') == -1) {
		// Add masonry album theme options.
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_back_font_color` varchar(8) NOT NULL DEFAULT '000000'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_back_font_style` varchar(16) NOT NULL DEFAULT 'segoe ui'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_back_font_size` int(4) NOT NULL DEFAULT 16");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_back_font_weight` varchar(8) NOT NULL DEFAULT 'bold'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_back_padding` varchar(32) NOT NULL DEFAULT '0'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_title_font_color` varchar(8) NOT NULL DEFAULT 'CCCCCC'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_title_font_style` varchar(16) NOT NULL DEFAULT 'segoe ui'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_title_pos` varchar(8) NOT NULL DEFAULT 'bottom'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_title_font_size` int(4) NOT NULL DEFAULT 14");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_title_font_weight` varchar(8) NOT NULL DEFAULT 'bold'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_title_margin` varchar(32) NOT NULL DEFAULT '2px'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_title_shadow` varchar(32) NOT NULL DEFAULT '0px 0px 0px #888888'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_margin` int(4) NOT NULL DEFAULT 4");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_padding` int(4) NOT NULL DEFAULT 0");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_border_radius` varchar(32) NOT NULL DEFAULT '0'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_border_width` int(4) NOT NULL DEFAULT 0");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_border_style` varchar(8) NOT NULL DEFAULT 'none'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_border_color` varchar(8) NOT NULL DEFAULT 'CCCCCC'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_bg_color` varchar(8) NOT NULL DEFAULT 'FFFFFF'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumbs_bg_color` varchar(8) NOT NULL DEFAULT 'FFFFFF'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_bg_transparent` int(4) NOT NULL DEFAULT 0");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_box_shadow` varchar(32) NOT NULL DEFAULT '0px 0px 0px #888888'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_transparent` int(4) NOT NULL DEFAULT 100");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_align` varchar(8) NOT NULL DEFAULT 'center'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_hover_effect` varchar(64) NOT NULL DEFAULT 'scale'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_hover_effect_value` varchar(64) NOT NULL DEFAULT '1.1'");
		$wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `album_masonry_thumb_transition` tinyint(1) NOT NULL DEFAULT 0");
	}
	if (version_compare($version, '1.2.12') == -1) {
	  // Add sorting images on frontend.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `show_sort_images` tinyint(1) NOT NULL DEFAULT 0");
    // Add options and themes for mosaic view style. 
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `mosaic` varchar(255) NOT NULL DEFAULT 'vertical'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `resizable_mosaic` tinyint(1) NOT NULL DEFAULT 0");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `mosaic_total_width` int(4) NOT NULL DEFAULT 100");

    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_padding` int(4) NOT NULL DEFAULT 4");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_border_radius` varchar(32) NOT NULL default '0'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_border_width` int(4) NOT NULL DEFAULT 0");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_border_style` varchar(8) NOT NULL DEFAULT 'none'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_border_color` varchar(8) NOT NULL DEFAULT 'CCCCCC'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumbs_bg_color` varchar(8) NOT NULL DEFAULT 'FFFFFF'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_bg_transparent` int(4) NOT NULL DEFAULT 0");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_transparent` int(4) NOT NULL DEFAULT 100");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_align` varchar(8) NOT NULL DEFAULT 'center'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_hover_effect` varchar(64) NOT NULL DEFAULT 'scale'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_hover_effect_value` varchar(64) NOT NULL DEFAULT '1.1'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_title_shadow` varchar(32) NOT NULL DEFAULT '0px 0px 0px #888888'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_title_margin` varchar(32) NOT NULL DEFAULT '2px'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_title_font_weight` varchar(8) NOT NULL DEFAULT 'bold'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_title_font_size` int(4) NOT NULL DEFAULT 16");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_title_font_style` varchar(16) NOT NULL DEFAULT 'segoe ui'");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_theme ADD `mosaic_thumb_title_font_color` varchar(8) NOT NULL DEFAULT 'CCCCCC'");
	}
	if (version_compare($version, '1.2.16') == -1) {
	  // Add Embeds and instagram galleries.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `autoupdate_interval` int(4) NOT NULL DEFAULT 30");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `instagram_client_id` varchar(40) NOT NULL DEFAULT ''");  
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_gallery ADD `gallery_type` varchar(32) NOT NULL DEFAULT ''");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_gallery ADD `gallery_source` varchar(64) NOT NULL DEFAULT ''");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_gallery ADD `update_flag` varchar(32) NOT NULL DEFAULT ''");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_gallery ADD `autogallery_image_number` int(4) NOT NULL DEFAULT 12");
    /*auto-filling image meta description*/
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `description_tb` tinyint(1) NOT NULL DEFAULT 1");

    /*convert old videos with "YOUTUBE" and "VIMEO" videos to new EMBED format*/
    $wpdb->update($wpdb->prefix . 'bwg_image', array('filetype' => 'EMBED_OEMBED_YOUTUBE_VIDEO', 'size' => '', 'resolution' => '480 x 360 px' ), array('filetype' => 'YOUTUBE'));
    $wpdb->update($wpdb->prefix . 'bwg_image', array('filetype' => 'EMBED_OEMBED_VIMEO_VIDEO', 'size' => '', 'resolution' => '480 x 360 px' ), array('filetype' => 'VIMEO'));
	}
  
	if (version_compare($version, '1.2.18') == -1) {
	  // Add load all images on frontend.
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `enable_seo` tinyint(1) NOT NULL DEFAULT 1");
    // Navigation buttons autohide option
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `autohide_lightbox_navigation` tinyint(1) NOT NULL DEFAULT 1");
    $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `autohide_slideshow_navigation` tinyint(1) NOT NULL DEFAULT 1");
    // Load image metadata.
        $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option CHANGE `description_tb` `read_metadata` tinyint(1) NOT NULL DEFAULT 1");
  }
	if (version_compare($version, '1.2.32') == -1) {
	  // Add load all images on frontend.
      $wpdb->query("ALTER TABLE " . $wpdb->prefix . "bwg_option ADD `enable_loop` tinyint(1) NOT NULL DEFAULT 1");
  }
  return;
}

?>
