<?php

function startupgrowth_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['#attached']['library'][] = 'startupgrowth/theme-settings';

  $form['mtt_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('MtT Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );

  $form['mtt_settings']['tabs'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'basic_tab',
  );

  $form['mtt_settings']['basic_tab']['basic_settings'] = array(
    '#type' => 'details',
    '#title' => t('Basic Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['breadcrumb_separator'] = array(
    '#type' => 'textfield',
    '#title' => t('Breadcrumb separator'),
    '#description'   => t('Enter the class of the icon you want from the Font Awesome library e.g.: fa-angle-right. A list of the available classes is provided here: <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet" target="_blank">http://fortawesome.github.io/Font-Awesome/cheatsheet</a>.'),
    '#default_value' => theme_get_setting('breadcrumb_separator', 'startupgrowth'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop'] = array(
      '#type' => 'fieldset',
      '#title' => t('Scroll to top'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop']['scrolltop_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show scroll-to-top button'),
    '#description'   => t('Use the checkbox to enable or disable scroll-to-top button.'),
    '#default_value' => theme_get_setting('scrolltop_display', 'startupgrowth'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop']['scrolltop_icon'] = array(
    '#type' => 'textfield',
    '#title' => t('Scroll To Top icon'),
    '#description'   => t('Enter the class of the icon you want from the Font Awesome library e.g.: fa-long-arrow-up. A list of the available classes is provided here: <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet" target="_blank">http://fortawesome.github.io/Font-Awesome/cheatsheet</a>.'),
    '#default_value' => theme_get_setting('scrolltop_icon','startupgrowth'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['mtt_settings']['looknfeel_tab']['looknfeel'] = array(
    '#type' => 'details',
    '#title' => t('Look\'n\'Feel'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['looknfeel_tab']['looknfeel']['color_scheme'] = array(
    '#type' => 'select',
    '#title' => t('Color Schemes'),
    '#description'   => t('From the drop-down menu, select the color scheme you prefer.'),
    '#default_value' => theme_get_setting('color_scheme', 'startupgrowth'),
    '#options' => array(
    'gray-blue' => t('Gray Blue (Default)'),
    'gray-green' => t('Gray Green'),
    'gray-orange' => t('Gray Orange'),
    'gray-pink' => t('Gray Pink'),
    'gray-purple' => t('Gray Purple'),
    'gray-red' => t('Gray Red'),
    ),
  );

  $form['mtt_settings']['looknfeel_tab']['looknfeel']['form_style'] = array(
    '#type' => 'select',
    '#title' => t('Form styles of contact page'),
    '#description'   => t('From the drop-down menu, select the form style that you prefer.'),
    '#default_value' => theme_get_setting('form_style', 'startupgrowth'),
    '#options' => array(
    'form-style-1' => t('Style-1 (default)'),
    'form-style-2' => t('Style-2'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions'] = array(
    '#type' => 'details',
    '#title' => t('Region settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['regions_tab']['regions']['animations_state'] = array(
    '#type' => 'checkbox',
    '#title' => t('Animations'),
    '#description'   => t('Enable or disable animations globally. You can further adjust this for individual regions below.'),
    '#default_value' => theme_get_setting('animations_state', 'startupgrowth'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header']['header_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Container'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('header_layout_container', 'startupgrowth'),
    '#options' => array(
    'container-fluid' => t('Full Width'),
    'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['header']['fixed_header'] = array(
    '#type' => 'checkbox',
    '#title' => t('Fixed Header'),
    '#description'   => t('Use the checkbox to apply fixed position to the header.'),
    '#default_value' => theme_get_setting('fixed_header', 'startupgrowth'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top'] = array(
      '#type' => 'fieldset',
      '#title' => t('Content Top'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top']['content_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('content_top_layout_container', 'startupgrowth'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top']['content_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('content_top_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top']['content_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('content_top_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted'] = array(
      '#type' => 'fieldset',
      '#title' => t('Content Top Highlighted'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('content_top_highlighted_layout_container', 'startupgrowth'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('content_top_highlighted_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('content_top_highlighted_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['main_content'] = array(
      '#type' => 'fieldset',
      '#title' => t('Main Content'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['main_content']['main_content_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('main_content_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_first'] = array(
      '#type' => 'fieldset',
      '#title' => t('Sidebar First'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_first']['sidebar_first_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('sidebar_first_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_second'] = array(
      '#type' => 'fieldset',
      '#title' => t('Sidebar Second'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_second']['sidebar_second_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('sidebar_second_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_bottom'] = array(
      '#type' => 'fieldset',
      '#title' => t('Content Bottom'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_bottom']['content_bottom_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('content_bottom_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_bottom']['content_bottom_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('content_bottom_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted'] = array(
      '#type' => 'fieldset',
      '#title' => t('Highlighted'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted']['highlighted_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('highlighted_layout_container', 'startupgrowth'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted']['highlighted_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('highlighted_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted']['highlighted_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('highlighted_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_bottom'] = array(
      '#type' => 'fieldset',
      '#title' => t('Highlighted Bottom'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_bottom']['highlighted_bottom_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('highlighted_bottom_layout_container', 'startupgrowth'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_bottom']['highlighted_bottom_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('highlighted_bottom_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_bottom']['highlighted_bottom_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('highlighted_bottom_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top'] = array(
      '#type' => 'fieldset',
      '#title' => t('Featured Top'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top']['featured_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('featured_top_layout_container', 'startupgrowth'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top']['featured_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('featured_top_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top']['featured_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('featured_top_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured'] = array(
      '#type' => 'fieldset',
      '#title' => t('Featured'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured']['featured_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('featured_layout_container', 'startupgrowth'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured']['featured_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('featured_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured']['featured_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('featured_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom'] = array(
      '#type' => 'fieldset',
      '#title' => t('Featured Bottom'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('featured_bottom_layout_container', 'startupgrowth'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('featured_bottom_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('featured_bottom_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_top'] = array(
      '#type' => 'fieldset',
      '#title' => t('Footer Top'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_top']['footer_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('footer_top_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black')
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_top']['footer_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('footer_top_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer'] = array(
      '#type' => 'fieldset',
      '#title' => t('Footer'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer']['footer_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('footer_layout_container', 'startupgrowth'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer']['footer_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('footer_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer']['footer_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('footer_animation_effect', 'startupgrowth'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['subfooter'] = array(
      '#type' => 'fieldset',
      '#title' => t('Subfooter'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['subfooter']['subfooter_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('subfooter_layout_container', 'startupgrowth'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['subfooter']['subfooter_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('subfooter_background_color', 'startupgrowth'),
    '#options' => array(
    'white-region' => t('White'),
    'light-gray-region' => t('Light Gray'),
    'light-colored-region' => t('Light Colored'),
    'colored-region' => t('Colored'),
    'colored-region dark' => t('Colored Dark'),
    'colored-region black' => t('Black'),
    ),
  );

  $form['mtt_settings']['post_tab']['post'] = array(
    '#type' => 'details',
    '#title' => t('Post'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['post_tab']['post']['reading_time'] = array(
    '#type' => 'checkbox',
    '#title' => t('Time to read'),
    '#description'   => t('Use the checkbox to enable or disable the "Time to read" indicator.'),
    '#default_value' => theme_get_setting('reading_time', 'startupgrowth'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['post_tab']['post']['post_progress'] = array(
    '#type' => 'checkbox',
    '#title' => t('Read so far'),
    '#description'   => t('Use the checkbox to enable or disable the reading progress indicator.'),
    '#default_value' => theme_get_setting('post_progress', 'startupgrowth'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['post_tab']['post']['affix'] = array(
    '#type' => 'fieldset',
    '#title' => t('Affix configuration'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#description'   => t('If you add or remove blocks from the header please change the corresponding values bellow to make the affix implementation work as expected.'),
  );

  $form['mtt_settings']['post_tab']['post']['affix']['affix_admin_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Admin toolbar height (px)'),
    '#default_value' => theme_get_setting('affix_admin_height', 'startupgrowth'),
    '#description'   => t('The height of the admin toolbar in pixels'),
  );

  $form['mtt_settings']['post_tab']['post']['affix']['affix_fixedHeader_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Fixed header height (px)'),
    '#default_value' => theme_get_setting('affix_fixedHeader_height', 'startupgrowth'),
    '#description'   => t('The height of the header when fixed at the top of the window in pixels'),
  );

  $form['mtt_settings']['layout_tab']['layout_modes'] = array(
      '#type' => 'details',
      '#title' => t('Theme Layout'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#group' => 'tabs',
  );

  $form['mtt_settings']['layout_tab']['layout_modes']['layout_mode'] = array(
    '#type' => 'select',
    '#title' => t('Global Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer. This global setting overrides the individual region-specific layout settings.'),
    '#default_value' => theme_get_setting('layout_mode', 'startupgrowth'),
    '#options' => array(
      'wide' => t('Wide'),
      'boxed' => t('Boxed'),
    ),
  );

  $form['mtt_settings']['font_tab']['font'] = array(
    '#type' => 'details',
    '#title' => t('Font Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['font_tab']['font']['font_title'] = array(
    '#type' => 'item',
    '#markup' => 'For every region pick the <strong>font-family</strong> that corresponds to your needs.',
  );

  $form['mtt_settings']['font_tab']['font']['sitename_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Site name'),
    '#default_value' => theme_get_setting('sitename_font_family', 'startupgrowth'),
    '#options' => array(
      'sff-31' => t('Alegreya SC, Georgia, Times, Times New Roman, Serif'),
      'sff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'sff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'sff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'sff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'sff-16' => t('Cinzel, Georgia, Times, Serif'),
      'sff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'sff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'sff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'sff-13' => t('Georgia, Times, Serif'),
      'sff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'sff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'sff-36' => t('Julius Sans One, Arial, Helvetica Neue, Sans-serif'),
      'sff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'sff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'sff-01' => t('Merriweather, Georgia, Times, Serif'),
      'sff-32' => t('Montserrat SC, Arial, Helvetica Neue, Sans-serif'),
      'sff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'sff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'sff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'sff-15' => t('Philosopher, Georgia, Times, Serif'),
      'sff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'sff-14' => t('Playfair Display, Times, Serif'),
      'sff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'sff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'sff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'sff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'sff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'sff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'sff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'sff-30' => t('Times, Times New Roman, Serif'),
      'sff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'sff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'sff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'sff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'sff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
    ),
  );

  $form['mtt_settings']['font_tab']['font']['slogan_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Slogan'),
    '#default_value' => theme_get_setting('slogan_font_family', 'startupgrowth'),
    '#options' => array(
      'slff-31' => t('Alegreya SC, Georgia, Times, Times New Roman, Serif'),
      'slff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'slff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'slff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'slff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'slff-16' => t('Cinzel, Georgia, Times, Serif'),
      'slff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'slff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'slff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'slff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'slff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'slff-13' => t('Georgia, Times, Serif'),
      'slff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'slff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'slff-36' => t('Julius Sans One, Arial, Helvetica Neue, Sans-serif'),
      'slff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'slff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'slff-01' => t('Merriweather, Georgia, Times, Serif'),
      'slff-32' => t('Montserrat SC, Arial, Helvetica Neue, Sans-serif'),
      'slff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'slff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'slff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'slff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'slff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'slff-15' => t('Philosopher, Georgia, Times, Serif'),
      'slff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'slff-14' => t('Playfair Display, Times, Serif'),
      'slff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'slff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'slff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'slff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'slff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'slff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'slff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'slff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'slff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'slff-30' => t('Times, Times New Roman, Serif'),
      'slff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'slff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'slff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'slff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'slff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
    ),
  );

  $form['mtt_settings']['font_tab']['font']['headings_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Headings'),
    '#default_value' => theme_get_setting('headings_font_family', 'startupgrowth'),
    '#options' => array(
      'hff-31' => t('Alegreya SC, Georgia, Times, Times New Roman, Serif'),
      'hff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'hff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'hff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'hff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'hff-16' => t('Cinzel, Georgia, Times, Serif'),
      'hff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'hff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'hff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'hff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'hff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'hff-13' => t('Georgia, Times, Serif'),
      'hff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'hff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'hff-36' => t('Julius Sans One, Arial, Helvetica Neue, Sans-serif'),
      'hff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'hff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'hff-01' => t('Merriweather, Georgia, Times, Serif'),
      'hff-32' => t('Montserrat SC, Arial, Helvetica Neue, Sans-serif'),
      'hff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'hff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'hff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'hff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'hff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'hff-15' => t('Philosopher, Georgia, Times, Serif'),
      'hff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'hff-14' => t('Playfair Display, Times, Serif'),
      'hff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'hff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'hff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'hff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'hff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'hff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'hff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'hff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'hff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'hff-30' => t('Times, Times New Roman, Serif'),
      'hff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'hff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'hff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'hff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'hff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
    ),
  );

  $form['mtt_settings']['font_tab']['font']['paragraph_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Paragraph'),
    '#default_value' => theme_get_setting('paragraph_font_family', 'startupgrowth'),
    '#options' => array(
      'pff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'pff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'pff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'pff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'pff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'pff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'pff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'pff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'pff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'pff-13' => t('Georgia, Times, Serif'),
      'pff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'pff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'pff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'pff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'pff-01' => t('Merriweather, Georgia, Times, Serif'),
      'pff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'pff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'pff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'pff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'pff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'pff-15' => t('Philosopher, Georgia, Times, Serif'),
      'pff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'pff-14' => t('Playfair Display, Times, Serif'),
      'pff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'pff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'pff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'pff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'pff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'pff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'pff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'pff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'pff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'pff-30' => t('Times, Times New Roman, Serif'),
      'pff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'pff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'pff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'pff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'pff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow'] = array(
    '#type' => 'details',
    '#title' => t('Slideshow Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen'] = array(
      '#type' => 'fieldset',
      '#title' => t('Full Screen (Slider Revolution)'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_effect', 'startupgrowth'),
    '#options' => array(
      'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_effect_time', 'startupgrowth'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_bullets_position', 'startupgrowth'),
    '#options' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['transparent_header_state'] = array(
    '#type' => 'checkbox',
    '#title' => t('Transparent Header'),
    '#description'   => t('Use the checkbox to display the header over the slideshow in a transparent style.'),
    '#default_value' => theme_get_setting('transparent_header_state', 'startupgrowth'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['transparent_header_opacity'] = array(
    '#type' => 'textfield',
    '#title' => t('Transparent Header Background Opacity'),
    '#description'   => t('Set the % opacity for the background of the transparent header over the full screen slideshow.'),
    '#default_value' => theme_get_setting('transparent_header_opacity', 'startupgrowth'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth'] = array(
      '#type' => 'fieldset',
      '#title' => t('Full Width (Slider Revolution)'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth']['rs_slideshow_fullwidth_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullwidth_effect', 'startupgrowth'),
    '#options' => array(
    'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth']['rs_slideshow_fullwidth_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_fullwidth_effect_time', 'startupgrowth'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth']['rs_slideshow_fullwidth_initial_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Initial Height (px)'),
    '#default_value' => theme_get_setting('rs_slideshow_fullwidth_initial_height', 'startupgrowth'),
    '#description'   => t('Set the initial height, in pixels.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth']['rs_slideshow_fullwidth_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullwidth_bullets_position', 'startupgrowth'),
    '#options' => array(
      'left' => t('Left'),
      'center' => t('Center'),
      'right' => t('Right'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth'] = array(
      '#type' => 'fieldset',
      '#title' => t('Boxed Width (Slider Revolution)'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_effect', 'startupgrowth'),
    '#options' => array(
      'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_effect_time', 'startupgrowth'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_initial_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Initial Height (px)'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_initial_height', 'startupgrowth'),
    '#description'   => t('Set the initial height, in pixels.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_bullets_position', 'startupgrowth'),
    '#options' => array(
      'left' => t('Left'),
      'center' => t('Center'),
      'right' => t('Right'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal'] = array(
      '#type' => 'fieldset',
      '#title' => t('Internal Banner (Slider Revolution)'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_effect', 'startupgrowth'),
    '#options' => array(
      'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_effect_time', 'startupgrowth'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_initial_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Initial Height (px)'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_initial_height', 'startupgrowth'),
    '#description'   => t('Set the initial height, in pixels.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_bullets_position', 'startupgrowth'),
    '#options' => array(
      'left' => t('Left'),
      'center' => t('Center'),
      'right' => t('Right'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['in_page_slider'] = array(
    '#type' => 'fieldset',
    '#title' => t('In Page Images Slider (Flexslider)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['in_page_slider']['in_page_slider_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('in_page_slider_effect', 'startupgrowth'),
    '#options' => array(
    'fade' => t('fade'),
    'slide' => t('slide'),
    ),
  );

  $form['mtt_settings']['parallax_tab']['parallax_and_video_bg'] = array(
    '#type' => 'details',
    '#title' => t('Parallax/Video Background region'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['parallax_tab']['parallax_and_video_bg']['highlighted_bottom'] = array(
    '#type' => 'fieldset',
    '#title' => t('Highlighted Bottom Region'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );

  $form['mtt_settings']['parallax_tab']['parallax_and_video_bg']['highlighted_bottom']['parallax_and_video_bg_state'] = array(
    '#type' => 'select',
    '#title' => t('Select Background effect'),
    '#default_value' => theme_get_setting('parallax_and_video_bg_state', 'startupgrowth'),
    '#options' => array(
      'none' => t('None'),
      'parallax' => t('Parallax Background Effect'),
      'video' => t('Video Background'),
    ),
  );

  $form['mtt_settings']['parallax_tab']['parallax_and_video_bg']['highlighted_bottom']['parallax_and_video_bg_opacity'] = array(
    '#type' => 'textfield',
    '#title' => t('Parallax Background/Video Background Opacity'),
    '#description'   => t('Set the % opacity for the background of the parallax/video background region.'),
    '#default_value' => theme_get_setting('parallax_and_video_bg_opacity', 'startupgrowth'),
  );

  $form['mtt_settings']['isotope_tab'] = array(
    '#type' => 'details',
    '#title' => t('Isotope Filters'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['isotope_tab']['isotope_layout_mode'] = array(
    '#type' => 'select',
    '#title' => t('Layout modes'),
    '#default_value' => theme_get_setting('isotope_layout_mode', 'startupgrowth'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#options' => array(
      'masonry' => t('Masonry'),
      'fitRows' => t('Fit Rows'),
    ),
  );

  $form['mtt_settings']['isotope_tab']['isotope_filters_text'] = array(
    '#type' => 'textfield',
    '#title' => t('Text of isotope "All" filter'),
    '#default_value' => theme_get_setting('isotope_filters_text', 'startupgrowth'),
    '#description'   => t('Change the text of "All" filter'),
  );

  $form['mtt_settings']['google_maps_tab'] = array(
    '#type' => 'details',
    '#title' => t('Google Maps Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['google_maps_tab']['google_maps_key'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Maps API Key'),
    '#description'   => t('Google requires an API key to be included to all calls to Google Maps API. Please create an API key and populate the above field.'),
    '#default_value' => theme_get_setting('google_maps_key','startupgrowth'),
    '#size'          => 50,
    '#maxlength'     => 50,
  );

}
