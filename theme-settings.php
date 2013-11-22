<?php

/**
 * @file
 * Theme setting callbacks for the GO_BLANK theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function GO_BLANK_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['respondjs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Add !script to the page', array('!script' => 'Respond.js')),
    '#default_value' => theme_get_setting('respondjs'),
    '#weight' => 50,
  );
}
