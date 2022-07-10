# Blur No-Alt

Author: Carole Mah

Blur images in the Drupal 9 editor interface if they don't have alt text. Socially engineer your Drupal content developers to write alt text for images.

Based on the [blur_no-alt WordPress module](https://github.com/kerri-hicks/blur_no-alt) by [Kerri Hicks](https://kerri.is)

This version now handles both legacy file image editing and media library image editing.

## Description

This plugin blurs images in the default Drupal 9 CKEditor interface if there is no alt text on the image, or if the alt text contains .jpg, .png, or .gif. **Site visitors** still see the image just fine, but **editors** will see a blurred image in the dashboard. Hovering or selecting the image removes the blur effect.

### Note: Unblurring Decorative Images

Note: This will blur __all__ images in the editing UI that don't have alt text — even decorative images that should not have alt text, or images that are described elsewhere in the text. If you have such an image, you can give the img element the class `noalt` and it will not blur.

### Settings

This plugin creates a "Blur No-Alt Message Display" options screen in the "Settings" with one option to toggle the informative message at the top of any ckEditor. This includes legacy file image embeds, as well as media library modals and media image edits.

## Installation

To use this plugin:

1. Since this is just a draft, please manually install this module in your modules/custom directory.
2. Enable as usual with `drush en blur_no_alt` or in the admin interface.

## Credits

This module is entirely the brainchild of [Kerri Hicks](https://kerri.is); this is just my attempt to port it from WordPress to Drupal.

## Upcoming

This version addresses only legacy file images.

The next version will include handling of new Drupal 8/9/10 media library images.

## Changelog

### v0.3 (10 July 2022)

- Fix StringTranslationTrait deprecations.
- Removed media embed check (don't need it).
- New hooks for media image edit form and media library modal dialog form.
- PHP CodeSniffer fixes for Drupal coding standards, fixing spacing, comments, array declarations.
- Updated several portions of the README.
