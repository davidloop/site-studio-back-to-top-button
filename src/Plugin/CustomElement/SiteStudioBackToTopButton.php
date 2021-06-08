<?php

namespace Drupal\ss_back_to_top_button\Plugin\CustomElement;

use Drupal\cohesion_elements\CustomElementPluginBase;

/**
 * Back to top button for Site Studio.
 *
 * @CustomElement(
 *   id = "back_to_top",
 *   label = @Translation("Back To Top Button")
 * )
 */

class SiteStudioBackToTopButton extends CustomElementPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getFields() {
    return [
      'display' => [
        'htmlClass' => 'col-xs-12',
        'type' => 'checkbox',
        'title' => 'Display the back to top button',
        'notitle' => FALSE,
        'defaultValue' => TRUE,
      ],
      'duration' => [
        'htmlClass' => 'col-xs-12',
        'title' => 'How far to scroll before the button appears (pixels)',
        'type' => 'textfield',
        'defaultValue' => '500',
      ],
      'title' => [
        'htmlClass' => 'col-xs-12',
        'title' => 'Button title',
        'type' => 'textfield',
        'defaultValue' => 'Back to top',
      ],
      'size' => [
        'htmlClass' => 'col-xs-3',
        'type' => 'select',
        'title' => 'Button size',
        'nullOption' => FALSE,
        'options' => [
          'small' => 'Small (32x32)',
          'medium' => 'Medium (44x44)',
          'large' => 'Large (56x56)',
        ],
        'defaultValue' => 'medium',
      ],
      'position' => [
        'htmlClass' => 'col-xs-3',
        'type' => 'select',
        'title' => 'Button position',
        'nullOption' => FALSE,
        'options' => [
          'right' => 'Bottom Right',
          'left' => 'Bottom Left',
        ],
        'defaultValue' => 'right',
      ],
      'offsetSide' => [
        'htmlClass' => 'col-xs-3',
        'title' => 'Side offset (pixels)',
        'type' => 'textfield',
        'defaultValue' => '30',
      ],
      'offsetBottom' => [
        'htmlClass' => 'col-xs-3',
        'title' => 'Bottom offset (pixels)',
        'type' => 'textfield',
        'defaultValue' => '30',
      ],
      'buttonStyle' => [
        'htmlClass' => 'col-xs-4',
        'type' => 'select',
        'title' => 'Button style',
        'nullOption' => FALSE,
        'options' => [
          'square' => 'Square',
          'circle' => 'Circle',
        ],
        'defaultValue' => 'square',
      ],
      'backgroundStyle' => [
        'htmlClass' => 'col-xs-4',
        'type' => 'select',
        'title' => 'Background style',
        'nullOption' => FALSE,
        'options' => [
          'light' => 'Light',
          'dark' => 'Dark',
        ],
        'defaultValue' => 'light',
      ],
      'iconStyle' => [
        'htmlClass' => 'col-xs-4',
        'type' => 'select',
        'title' => 'Icon style',
        'nullOption' => FALSE,
        'options' => [
          'chevron-up-white.svg' => 'Up Angle - Light',
          'chevron-up-black.svg' => 'Up Angle - Dark',
          'arrow-up-white.svg' => 'Up Arrow - Light',
          'arrow-up-black.svg' => 'Up Arrow - Dark',
        ],
        'defaultValue' => 'chevron-up-black.svg',
      ],
      'componentStyle' => [
        'htmlClass' => 'col-xs-12',
        'type' => 'checkbox',
        'title' => 'Override default styles and use component styles (does not affect Icon style)',
        'notitle' => FALSE,
        'defaultValue' => FALSE,
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function render($element_settings, $element_markup, $element_class, $element_context = []) {
    return [
      '#theme' => 'ss_back_to_top_button',
      '#template' => 'ss-back-to-top-button',
      '#elementSettings' => $element_settings,
      '#elementMarkup' => $element_markup,
      '#elementContext' => $element_context,
      '#elementClass' => $element_class,
    ];
  }
}
