<?php
/**
 * Include all ACF fields/options through this file
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_55bf77413206a',
	'title' => 'Blog Layout',
	'fields' => array (
		array (
			'key' => 'field_55f5e34d70179',
			'label' => 'Blog layout',
			'name' => 'blog_type',
			'type' => 'radio',
			'instructions' => 'Select a Blog Layout (default is List)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'list' => 'List',
				'grid' => 'Grid',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
		),
		array (
			'key' => 'field_55bf77471acd2',
			'label' => 'Blog columns',
			'name' => 'blog_columns',
			'type' => 'radio',
			'instructions' => 'Display grid in 2, 3 or 4 columns',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55f5e34d70179',
						'operator' => '==',
						'value' => 'grid',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				2 => '2 Columns',
				3 => '3 Columns',
				4 => '4 Columns',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 2,
			'layout' => 'horizontal',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'posts_page',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5514864997520',
	'title' => 'Page slider',
	'fields' => array (
		array (
			'key' => 'field_57b61b85f96a4',
			'label' => 'Slides',
			'name' => 'slides',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_54bce505c530b',
			'label' => 'Image slides',
			'name' => 'slide',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add Slide',
			'sub_fields' => array (
				array (
					'key' => 'field_54bce51dc530c',
					'label' => 'Image',
					'name' => 'slidebg_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 100,
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_55b0de6d47227',
					'label' => 'Small heading',
					'name' => 'slide_top_heading',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_54bee675bd14b',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array (
						'width' => 100,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55ca06f5b822d',
					'label' => 'Heading',
					'name' => 'slide_heading',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_54bee675bd14b',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array (
						'width' => 100,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '3',
					'new_lines' => 'br',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_54bce55fc530e',
					'label' => 'Content',
					'name' => 'slide_text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_54bee675bd14b',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array (
						'width' => 100,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => 0,
				),
				array (
					'key' => 'field_573e19ceaa1fe',
					'label' => 'Link slide',
					'name' => 'link_slide',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_54bee675bd14b',
								'operator' => '!=',
								'value' => '1',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_573e19ecaa1ff',
					'label' => 'Link target',
					'name' => 'link_target',
					'type' => 'radio',
					'instructions' => 'Open link in new browser tab?',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_54bee675bd14b',
								'operator' => '!=',
								'value' => '1',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'yes' => 'Yes',
						'no' => 'No',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => 'yes',
					'layout' => 'horizontal',
					'allow_null' => 0,
				),
			),
		),
		array (
			'key' => 'field_57b61b95f96a5',
			'label' => 'Settings',
			'name' => '_copy',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_57349e20490bd',
			'label' => 'Slide animation',
			'name' => 'slide_animation',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'carousel-slide' => 'Slide',
				'carousel-fade' => 'Fade',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'carousel-slide',
			'layout' => 'horizontal',
			'allow_null' => 0,
		),
		array (
			'key' => 'field_54bee675bd14b',
			'label' => 'Slide captions',
			'name' => 'slide_captions',
			'type' => 'true_false',
			'instructions' => 'Enable captions for each slide',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
		),
		array (
			'key' => 'field_55ca02e43bc06',
			'label' => 'Caption alignment',
			'name' => 'caption_align',
			'type' => 'radio',
			'instructions' => 'Align the caption on the slides',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_54bee675bd14b',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'allow_null' => 0,
		),
		array (
			'key' => 'field_54c7832068bbc',
			'label' => 'Auto cycle',
			'name' => 'auto_cycle',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Automatically cycle slider',
			'default_value' => 1,
		),
		array (
			'key' => 'field_54c7833568bbd',
			'label' => 'Slide interval',
			'name' => 'slide_interval',
			'type' => 'number',
			'instructions' => 'Cycle interval (1s = 1000ms)',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_54c7832068bbc',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 6000,
			'placeholder' => '',
			'prepend' => '',
			'append' => 'ms',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b36734b33c4',
			'label' => 'Slide indicators',
			'name' => 'slide_indicators',
			'type' => 'true_false',
			'instructions' => 'Display the bottom slide indicators',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-front-fullslider.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55ae81bbeabb1',
	'title' => 'Gallery Images',
	'fields' => array (
		array (
			'key' => 'field_55b0fd27b4149',
			'label' => 'Gallery layout',
			'name' => 'gallery_layout',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'split' => 'Split (Content left and gallery right )',
				'fullwidth' => 'Full width (Gallery top and content bottom)',
			),
			'default_value' => array (
				'split' => 'split',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_55ae8436d1ab0',
			'label' => 'Gallery columns',
			'name' => 'gallery_columns',
			'type' => 'select',
			'instructions' => 'Select amount of columns for the gallery images',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				1 => 1,
				2 => 2,
				3 => 3,
				4 => 4,
				5 => 5,
			),
			'default_value' => array (
				'' => '',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_5892367bf7637',
			'label' => 'Gallery images gap',
			'name' => 'gallery_images_gap',
			'type' => 'select',
			'instructions' => 'Select gap between the images in the gallery',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				0 => '0px',
				1 => '1px',
				2 => '2px',
				3 => '3px',
				4 => '4px',
				5 => '5px',
				10 => '10px',
				15 => '15px',
				20 => '20px',
				25 => '25px',
				30 => '30px',
				35 => '35px',
			),
			'default_value' => 15,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_55b23f535ff85',
			'label' => 'Gallery images',
			'name' => 'gallery_field',
			'type' => 'gallery',
			'instructions' => 'Select the images to display in the grid',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'png, jpg',
		),
		array (
			'key' => 'field_5899a7965000c',
			'label' => 'Extra textfield position',
			'name' => 'extra_textarea_position',
			'type' => 'radio',
			'instructions' => 'Set the position of the extra textfield to above or below the gallery images',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'above' => 'Above images',
				'below' => 'Below images',
				'hide' => 'Hide',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'below',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_55b5f88c965b1',
			'label' => 'Extra textfield',
			'name' => 'extra_textarea',
			'type' => 'wysiwyg',
			'instructions' => 'Used to add the before and after slider under the gallery images',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_5899a7965000c',
						'operator' => '==',
						'value' => 'above',
					),
				),
				array(
					array (
						'field' => 'field_5899a7965000c',
						'operator' => '==',
						'value' => 'below',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 1,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'portfolio',
			),
		),
	),
	'menu_order' => 3,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_57b5d592c82b0',
	'title' => 'Front page header',
	'fields' => array (
		array (
			'key' => 'field_57b5d59d3b01a',
			'label' => 'Header layout',
			'name' => 'home_header_layout',
			'type' => 'select',
			'instructions' => 'Set the header layout for the front page',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'null' => 'Inherit from theme customizer',
				'default' => 'Default',
				'wide' => 'Default Wide',
				'transparent' => 'Transparent',
				'sidebar' => 'Sidebar',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-front-fullslider.php',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-front-slider-alt.php',
			),
		),
	),
	'menu_order' => 8,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));


acf_add_local_field_group(array (
	'key' => 'group_55a57b09e49da',
	'title' => 'Header Settings',
	'fields' => array (
		array (
			'key' => 'field_56040f12455f8',
			'label' => 'Settings',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_579a769295f8d',
			'label' => 'Header layout',
			'name' => 'header_layout',
			'type' => 'select',
			'instructions' => 'Set the header layout for this specific page/post',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'null' => 'Inherit from theme customizer',
				'default' => 'Default',
				'wide' => 'Default Wide',
				'transparent' => 'Transparent',
				'sidebar' => 'Sidebar',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_55ec43552f9a5',
			'label' => 'Topbar',
			'name' => 'topbar',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'null' => 'Inherit from theme customizer',
				'show' => 'Show',
				'hide' => 'Hide',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_55f71e5830c20',
			'label' => 'Page header',
			'name' => 'page_title_area',
			'type' => 'select',
			'instructions' => 'Set the page header layout, add a custom padding or hide it from this post/page',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'null' => 'Inherit from theme customizer',
				'header-small' => 'Small',
				'header-large' => 'Large',
				'header-custom' => 'Custom',
				'header-hide' => 'Hide',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_57b614b98652d',
			'label' => 'Page header padding top',
			'name' => 'page_area_padding_top',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55f71e5830c20',
						'operator' => '==',
						'value' => 'header-custom',
					),
				),
			),
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'px',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array (
			'key' => 'field_57b614f58652e',
			'label' => 'Page header padding bottom',
			'name' => 'page_area_padding_bottom',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55f71e5830c20',
						'operator' => '==',
						'value' => 'header-custom',
					),
				),
			),
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'px',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array (
			'key' => 'field_55c12598baaa0',
			'label' => 'Page header alignment',
			'name' => 'header_text_align',
			'type' => 'select',
			'instructions' => 'Set the position of the page title and subtitle',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'null' => 'Inherit from theme customizer',
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_5734b0693e910',
			'label' => 'Page title',
			'name' => 'display_page_title',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'show' => 'Show',
				'hide' => 'Hide',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_55f195ea251f3',
			'label' => 'Page title color',
			'name' => 'page_title_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array (
			'key' => 'field_5734afbd978a3',
			'label' => 'Subtitle color',
			'name' => 'sub_title_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array (
			'key' => 'field_57bca87a3d78e',
			'label' => 'Breadcrumbs',
			'name' => 'display_breadcrumbs',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'null' => 'Inherit from theme customizer',
				'show' => 'Show',
				'hide' => 'Hide',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_56040f8abb138',
			'label' => 'Background',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_55a57b185845b',
			'label' => 'Background image',
			'name' => 'header_bgimage',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_5604016e34433',
			'label' => 'Background image horizontal position',
			'name' => 'header_bg_horizontal',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'allow_null' => 0,
			'return_format' => 'value',
		),
		array (
			'key' => 'field_560401a934434',
			'label' => 'Background image vertical position',
			'name' => 'header_bg_vertical',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'top' => 'Top',
				'center' => 'Center',
				'bottom' => 'Bottom',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'allow_null' => 0,
			'return_format' => 'value',
		),
		array (
			'key' => 'field_55a790b5df629',
			'label' => 'Background image size',
			'name' => 'header_bgsize',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'auto' => 'Auto',
				'cover' => 'Cover',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'auto',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_55a57c74b5b40',
			'label' => 'Background image attachment',
			'name' => 'header_bgattachment',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'scroll' => 'Normal',
				'fixed' => 'Fixed',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_55a57bad6eb75',
			'label' => 'Background color',
			'name' => 'header_bgcolor',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'portfolio',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'template-front-fullslider.php',
			),
			array (
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'template-front-slider-alt.php',
			),
			array (
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55db6ad236d49',
	'title' => 'Page slider alternative',
	'fields' => array (
		array (
			'key' => 'field_55db6fe0f415f',
			'label' => 'Add Slider',
			'name' => 'add_slider',
			'type' => 'radio',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'rev' => 'Revolution Slider',
				'layer' => 'Layer Slider',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'rev',
			'layout' => 'horizontal',
		),
		array (
			'key' => 'field_55db6aec90ea2',
			'label' => 'Revolution Slider',
			'name' => 'revolution_slider_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55db6fe0f415f',
						'operator' => '==',
						'value' => 'rev',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55db6f8ce1399',
			'label' => 'Layer Slider',
			'name' => 'layer_slider_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55db6fe0f415f',
						'operator' => '==',
						'value' => 'layer',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-front-slider-alt.php',
			),
		),
	),
	'menu_order' => 5,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55148649cb0e9',
	'title' => 'Display sidebar',
	'fields' => array (
		array (
			'key' => 'field_550aeac522177-2',
			'label' => 'Sidebar position',
			'name' => 'display_sidebar',
			'type' => 'radio',
			'instructions' => 'Set the position of the sidebar on this page',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Hide' => 'Hide',
				'Left' => 'Left',
				'Right' => 'Right',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array (
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'template-front-fullslider.php',
			),
			array (
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'template-front-slider-alt.php',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 6,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55a2c548011cb',
	'title' => 'Subtitle',
	'fields' => array (
		array (
			'key' => 'field_55a2ca8d285f0',
			'label' => '',
			'name' => 'subtitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => 'Subtitle',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array (
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'template-front-fullslider.php',
			),
			array (
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'template-front-slider-alt.php',
			),
		),
		array(
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'portfolio',
			),
		),
	),
	'menu_order' => 7,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;