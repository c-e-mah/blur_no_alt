<?php

namespace Drupal\blur_no_alt;

use Drupal\editor\Entity\Editor;

/**
 * Provides hook_alter() methods for Blur No-Alt.
 */
class BlurNoAltAlter {

  /**
   * Implements hook_ckeditor_css_alter().
   */
  public static function ckeditorCssAlter(array &$css, Editor $editor) {
    $path = base_path() . drupal_get_path('module', 'blur_no_alt');
    $css[] = $path . '/css/blur_no-alt.ckeditor.css';
  }

}
