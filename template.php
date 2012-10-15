<?php
/**
 * @file
 *   Theme implementation functions for IM Glädjeshoppen.
 */

// Add html meta here
// $tags = array();
// foreach ($tags as $key => $val) {
//   drupal_add_html_head($val, $key);
// }

// Overriden theme functions from Drupal and contrib modules.
include_once './' . drupal_get_path('theme', 'GO_BLANK') . '/functions/theme-overrides.inc';

// Add conditional stylesheets for IE
drupal_add_css(drupal_get_path('theme', 'GO_BLANK') . '/stylesheets/ie.css', array(
  'group' => CSS_THEME,
  'browsers' => array(
      'IE' => 'lte IE',
      '!IE' => FALSE
    ),
  'preprocess' => FALSE,
));

/**
 * Remove unwnated css
 */
function GO_BLANK_css_alter(&$css) {
  unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
  unset($css[drupal_get_path('module', 'user') . '/user.css']);
  unset($css[drupal_get_path('module', 'field_collection') . '/field_collection.theme.css']);
}

/**
 * Implements hook_preprocess().
 */
function GO_BLANK_preprocess(&$vars, $hook) {
  // Static variable used for passing data from preprocess functions,
  // e.g from preprocess-view to preprocess-page.
  $_shared = &drupal_static(__FUNCTION__, array());
  $vars['shared'] = $_shared;
  // Dynamic preprocess file split-up
  $path = sprintf(
    '%s/preprocess/preprocess-%s.inc',
    drupal_get_path('theme', 'GO_BLANK'),
    $hook
  );

  if (file_exists($path)) {
    include($path);
  }

  $_shared = $vars['shared'];
}
