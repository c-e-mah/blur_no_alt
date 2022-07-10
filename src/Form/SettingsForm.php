<?php

namespace Drupal\blur_no_alt\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Configure Blur No-Alt settings for this site.
 */
class SettingsForm extends ConfigFormBase {
  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'blur_no_alt_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['blur_no_alt.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('blur_no_alt.settings');
    $form['message_settings'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Blur No-Alt Message Display Editor Settings'),
    ];

    // The options to display in our form radio buttons.
    $options = [
      'show_message' => $this->t('Show Message'),
      'hide_message' => $this->t('Hide Message'),
    ];

    $form['message_settings']['toggle_radio'] = [
      '#type' => 'radios',
      '#title' => $this->t('Message explaining blurred images at top of editor page'),
      '#options' => $options,
      '#default_value' => empty($config->get('enable_message')) ? 'hide_message' : $config->get('enable_message'),
      '#description' => $this->t('Show or hide the message explaining the blurred images.'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('blur_no_alt.settings')
      ->set('enable_message', $form_state->getValue('toggle_radio'))
      ->save();
    parent::submitForm($form, $form_state);
  }

}
