<?php
namespace voidelement\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Utils;
use Elementor\Core\Schemes\Color as Scheme_Color;
use Elementor\Core\Schemes\Typography as Scheme_Typography;



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Style for header
 *
 *
 * @since 1.0.0
 */

class void_cf7 extends Widget_Base {

	// public function __construct( $data = [], $args = null ) {
	// 	parent::__construct( $data, $args );
	// 	$this->add_style_depends('void-cf7-elementor-js');
	// 	$this->add_script_depends('void-cf7-elementor-css');
	// }

	//this name is added to plugin.php of the root folder

	public function get_name() {
		return 'void-section-cf7';
	}

	public function get_title() {
		return 'Void Contact From 7';   // title to show on elementor
	}

	public function get_icon() {
		return 'eicon-mail';    //   eicon-posts-ticker-> eicon ow asche icon to show on elelmentor
	}

	public function get_categories() {
		return [ 'void-elements' ];    // category of the widget
	}
	public function get_keywords()
    {
        return [
            'contact form',
            'form styler',
            'cf7',
            'void',
            'void contact form 7',
        ];
    }

	public function is_reload_preview_required() {
		return true;
	}

	/**
	 * A list of scripts that the widgets is depended in
	 * @since 1.3.0
	 **/
protected function register_controls() {
		
//start of a control box
		$this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__( 'Contact Form 7', 'void' ),   //section name for controler view
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'cf7',
			[
				'label' => esc_html__( 'Select Contact Form', 'void' ),
                'description' => esc_html__('Contact form 7 - plugin must be installed and there must be some contact forms made with the contact form 7','void'),
				'type' => Controls_Manager::SELECT2,
				'multiple' => false,
				'label_block' => 1,
				'options' => get_contact_form_7_posts(),
			]
		);

		$this->add_control(
			'void_cf7_form_action_edit',
			[
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => sprintf( '<a href="#" id="void-cf7-edit-form-btn" style="color:#d30c5c; float: right;">Edit form</a>', 'void' ),
				'content_classes' => 'void-cf7-edit-form-btn',
			]
		);

		$this->add_control(
			'void_cf7_form_action_add',
			[
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => sprintf( '<a href="#" id="void-cf7-add-form-btn" style="color:#d30c5c; float: right;">+ Add new form</a>', 'void' ),
				'content_classes' => 'void-cf7-add-form-btn',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_stype',
			[
				'label' => esc_html__( 'Advanced Style (legacy)', 'void' ),   //section name for controler view
				'description'  => esc_html__( 'This area is intended for developers who knows CSS or for users who already have used this feature before. You should move to Style tab and use given controls to do the style more easily', 'void' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
	

		$this->add_control(
			'vcf7_depri',
			[
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => __('This area is intended for developers who knows CSS or for users who already have used this feature before. You should move to Style tab and use given controls to do the style more easily','void'),
				'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
			]
		);


		$this->add_control(
			'cf7_direct_css',
			[
				'label' => __( 'Global CSS For all fields', 'void' ),
				'description' => __( 'This is the global css for all fields of cf7. It will not effect the other fileds but if you want to define things such as color, background color use this.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'color:#000;',
				'selectors' => [
					'{{WRAPPER}} ' => '{{VALUE}}',
				],
			]
		);

		$this->add_control(
			'alllabel',
			[
				'label' => __( 'All Label CSS', 'void' ),
				'description' => __( 'Changes might not sometimes show in the live preview but check in the front end to see the changes.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'color:#fff;',
				'selectors' => [
					'{{WRAPPER}} label' => '{{VALUE}}',
				],
			]
		);	
		$this->add_control(
			'allinput',
			[
				'label' => __( 'All Input CSS', 'void' ),
				'description' => __( 'Changes might not sometimes show in the live preview but check in the front end to see the changes.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'width:100%;
							      background:red;',
				'selectors' => [
					'{{WRAPPER}} input' => 'height:auto;',
					'{{WRAPPER}} input' => '{{VALUE}}',
					
				],
			]
		);

		$this->add_control(
			'textinput',
			[
				'label' => __( 'Input Type Text CSS', 'void' ),
				'description' => __( 'Changes might not sometimes show in the live preview but check in the front end to see the changes.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'width:100%;
							      background:red;',
				'selectors' => [
					'{{WRAPPER}} .wpcf7-text' => 'height:auto;',
					'{{WRAPPER}} .wpcf7-text' => '{{VALUE}}',
				],
			]
		);	
		$this->add_control(
			'textarea',
			[
				'label' => __( 'Textarea CSS', 'void' ),
				'description' => __( 'Changes might not sometimes show in the live preview but check in the front end to see the changes.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'height:100px; 
								  width:100%;',
				'selectors' => [
					'{{WRAPPER}} textarea' => 'height:auto;',
					'{{WRAPPER}} textarea' => '{{VALUE}}',
				],
			]
		);

		$this->add_control(
			'checkbox',
			[
				'label' => __( 'Checkbox/ Radio CSS', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'display: block;',
				'selectors' => [
					'{{WRAPPER}} .wpcf7-list-item' => '{{VALUE}}',
				],
			]
		);	

		$this->add_control(
			'selectcss',
			[
				'label' => __( 'Dropdown/ Select Box css', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'width: 100;',
				'selectors' => [
					'{{WRAPPER}} select' => '{{VALUE}}',
				],
			]
		);	
		$this->add_control(
			'selectoptionscss',
			[
				'label' => __( 'Select Options Css', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'color: red;',
				'selectors' => [
					'{{WRAPPER}} select option' => '{{VALUE}}',
				],
			]
		);		

		$this->add_control(
			'file',
			[
				'label' => __( 'File CSS', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'display: block;',
				'selectors' => [
					'{{WRAPPER}} input[type="file"]' => '{{VALUE}}',
				],
			]
		);	
		$this->add_control(
			'date',
			[
				'label' => __( 'Date CSS', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'display: block;',
				'selectors' => [
					'{{WRAPPER}} .wpcf7-date' => '{{VALUE}}',
				],
			]
		);	
		$this->add_control(
			'inputsubmit',
			[
				'label' => __( 'Submit Button CSS', 'void' ),
				'description' => __( 'Changes might not sometimes show in the live preview but check in the front end to see the changes.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'width:100%;
							      background:red;',
				'selectors' => [
					'{{WRAPPER}} input[type="submit"]' => '{{VALUE}}',
				],
			]
		);		
		$this->add_control(
			'inputsubmithover',
			[
				'label' => __( 'Submit Button Hover CSS', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'background:#fff;',
				'selectors' => [
					'{{WRAPPER}} input[type="submit"]:hover' => '{{VALUE}}',
				],
			]
		);

		$this->add_control(
			'responce',
			[
				'label' => __( 'Responce CSS', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'color:red;',
				'selectors' => [
					'{{WRAPPER}} .wpcf7-response-output' => '{{VALUE}}',
				],
			]
		);


		$this->end_controls_section();



		$this->start_controls_section(
			'section_redirect',
			[
				'label' => esc_html__( 'After Submit Redirect Setting', 'void' ),   //section name for controler view
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
	
		$this->add_control(
			'cf7_redirect_external',
			[
				'label' => __( 'On Success External URL Redirect', 'void' ),
				'description' => esc_html__('Insert the external URL where you want users to redirect to when the contact form is submitted and is successful. Leave Blank to Disable','void'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'https://voidcoders.com', 'void' ),
				'label_block' => 1,
			]
		);

		$this->add_control(
			'cf7_redirect_page',
			[
				'label' => esc_html__( 'On Success Internal Redirect', 'void' ),
                'description' => esc_html__('Select a page within the site which you want users to redirect to when the contact form is submitted and is successful. Leave Blank to Disable','void'),
				'type' => Controls_Manager::SELECT2,
				'multiple' => false,
				'label_block' => 1,
				'options' => void_get_all_pages(),
				'condition' =>
				[
					'cf7_redirect_external' => '',
				],	
			]
		);

	
		$this->end_controls_section();

		$this->start_controls_section(
			'vcf7_section_email',
			[
				'label' => esc_html__( 'Design Email', 'void' ),   //section name for controler view
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'vcf7_elemailer_promo',
				[
					'type' => \Elementor\Controls_Manager::RAW_HTML,
					'raw' => 'Drag & Drop Elementor Email builder for contact form 7 for free with <a target="_blank" href="https://elemailer.com/now-you-can-edit-your-contact-form-7-email-using-elementor/">Elemailer Lite </a><br><br>
					✨Elemailer Gives you more✨ <br><br>
					<ul>
					<li>🔥Subscriber</li>
					<li>🔥Campaign</li>
					<li>🔥Lists</li>
					<li>🔥Woocommerce emails(coming..)</li>
					<li>🔥Campaign</li>
					<li>🔥Welcome emails</li>
					<li>🔥Many more..</li>
					</ul><br>
					 <a target="_blank" href="https://elemailer.com?utm_source=site&utm_medium=editor&utm_campaign=editor_inside&utm_id=cf7elemailer"><img src="https://elemailer.com/wp-content/uploads/2021/11/element_02.png"></a>. <br>',
				]
			);


		$this->end_controls_section();


		// Our style tab
	        $this->start_controls_section(
	            'vcf7_form_section_style',
	            [
	                'label' => __( 'General Style', 'void' ),
	                'tab' => Controls_Manager::TAB_STYLE,
	            ]
	        );
	            

	            $this->add_responsive_control(
	                'vcf7_form_section_align',
	                [
	                    'label' => __( 'Alignment', 'void' ),
	                    'type' => Controls_Manager::CHOOSE,
	                    'options' => [
	                        'left' => [
	                            'title' => __( 'Left', 'void' ),
	                            'icon' => 'eicon-text-align-left',
	                        ],
	                        'center' => [
	                            'title' => __( 'Center', 'void' ),
	                            'icon' => 'eicon-text-align-center',
	                        ],
	                        'right' => [
	                            'title' => __( 'Right', 'void' ),
	                            'icon' => 'eicon-text-align-right',
	                        ],
	                        'justify' => [
	                            'title' => __( 'Justified', 'void' ),
	                            'icon' => 'eicon-text-align-justify',
	                        ],
	                    ],
	                    'selectors' => [
	                        '{{WRAPPER}}' => 'text-align: {{VALUE}};',
	                    ],
	                    'separator' =>'before',
	                ]
	            );

	        $this->end_controls_section();

	        // Input Field style tab start
	        $this->start_controls_section(
	            'vcf7_vcf7_input_style',
	            [
	                'label'     => __( 'Input', 'void' ),
	                'tab'       => Controls_Manager::TAB_STYLE,
	            ]
	        );


			$this->start_controls_tabs('input_style_tabs'); //start input area Normal/focus tabs

				// Input Normal tab start
				$this->start_controls_tab(
				    'input_style_normal_tab',
				    [
				        'label' => __( 'Normal', 'void' ),
				    ]
				);

					$this->add_responsive_control(
					'vcf7_input_box_height',
					[
					    'label' => __( 'Height', 'void' ),
					    'type'  => Controls_Manager::SLIDER,
					    'size_units' => [ 'px', 'vh', 'vw' ],
					    'range' => [
					        'px' => [
					            'max' => 400,
					        ],
					    ],
					    

					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]'   => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]'  => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]'    => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]'    => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]'   => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select'         => 'height: {{SIZE}}{{UNIT}};',
					    ],
					]
					);

					$this->add_responsive_control(
					'vcf7_input_box_width',
					[
					    'label' => __( 'Width', 'void' ),
					    'type'  => Controls_Manager::SLIDER,
					    'size_units' => [ 'px', 'vw', 'vh' ],
					    'range' => [
					        'px' => [
					            'max' => 2000,
					        ],
					    ],
					    

					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]'   => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]'  => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]'    => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]'    => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]'   => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select'         => 'width: {{SIZE}}{{UNIT}};',
					    ],
					]
					);

					$this->add_group_control(
						\Elementor\Group_Control_Background::get_type(),
					[
					    'name' => 'vcf7_input_box_bg_grd',
					    'types' => [ 'classic', 'gradient'],
					    'label' => esc_html__( 'Background', 'void' ),
					    'selector' => 
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"],
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"],
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"],
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"],
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"],
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"],
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select',
					    
					]
					);

					$this->add_control(
					'vcf7_input_box_text_color',
					[
					    'label'     => __( 'Text Color', 'void' ),
					    'type'      => Controls_Manager::COLOR,
					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]'   => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]'  => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]'    => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]'    => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]'   => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select'         => 'color: {{VALUE}};',
					    ],
					]
					);

					$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
					    'name' => 'vcf7_input_box_border',
					    'label' => __( 'Border', 'void' ),
					    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select',
					]
					);

					$this->add_responsive_control(
					'vcf7_input_box_border_radius',
					[
					    'label' => __( 'Border Radius', 'void' ),
					    'type' => Controls_Manager::DIMENSIONS,
					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					    ],
					    'separator' =>'after',
					]
					);

				$this->end_controls_tab(); // input Normal tab end

				// Input Focus tab start
				$this->start_controls_tab(
				    'input_style_focus_tab',
				    [
				        'label' => __( 'Focus', 'void' ),
				    ]
				);

					$this->add_responsive_control(
					'vcf7_input_box_height_f',
					[
					    'label' => __( 'Height', 'void' ),
					    'type'  => Controls_Manager::SLIDER,
					    'size_units' => [ 'px', 'vh', 'vw' ],
					    'range' => [
					        'px' => [
					            'max' => 400,
					        ],
					    ],
					    

					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]:focus'   => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]:focus'  => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]:focus'    => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]:focus' => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]:focus'    => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]:focus'   => 'height: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select:focus'         => 'height: {{SIZE}}{{UNIT}};',
					    ],
					]
					);

					$this->add_responsive_control(
					'vcf7_input_box_width_f',
					[
					    'label' => __( 'Width', 'void' ),
					    'type'  => Controls_Manager::SLIDER,
					    'size_units' => [ 'px', 'vw', 'vh' ],
					    'range' => [
					        'px' => [
					            'max' => 2000,
					        ],
					    ],
					    

					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]:focus'   => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]:focus'  => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]:focus'    => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]:focus' => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]:focus'    => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]:focus'   => 'width: {{SIZE}}{{UNIT}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select:focus'         => 'width: {{SIZE}}{{UNIT}};',
					    ],
					]
					);

					$this->add_group_control(
						\Elementor\Group_Control_Background::get_type(),
					[
					    'name' => 'vcf7_input_box_bg_grd_f',
					    'types' => [ 'classic', 'gradient'],
					    'label' => esc_html__( 'Background', 'plugin-name' ),
					    'selector' => 
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]:focus,
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]:focus,
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]:focus,
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]:focus,
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]:focus,
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]:focus,
					        {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select:focus',
					    
					]
					);

					$this->add_control(
					'vcf7_input_box_text_color_f',
					[
					    'label'     => __( 'Text Color', 'void' ),
					    'type'      => Controls_Manager::COLOR,
					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]:focus'   => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]:focus'  => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]:focus'    => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]:focus' => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]:focus'    => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]:focus'   => 'color: {{VALUE}};',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select:focus'         => 'color: {{VALUE}};',
					    ],
					]
					);

					$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
					    'name' => 'vcf7_input_box_border_f',
					    'label' => __( 'Border', 'void' ),
					    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]:focus, {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]:focus, {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]:focus, {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]:focus, {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]:focus, {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]:focus, {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select:focus',
					]
					);

					$this->add_responsive_control(
					'vcf7_input_box_border_radius_f',
					[
					    'label' => __( 'Border Radius', 'void' ),
					    'type' => Controls_Manager::DIMENSIONS,
					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]:focus' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]:focus' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]:focus' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]:focus' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]:focus' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]:focus' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select:focus' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					    ],
					]
					);

					$this->add_control(
					'vcf7_input_transition',
					[
					    'label'     => __( 'Transition Control', 'void' ),
					    'type'      => Controls_Manager::TEXT,
					    'placeholder' => 'width .35s ease-in-out',
					    'description' => __( 'input your desired transition effect for focus. Remember one single line can set all types of transition values. <a target="_blank" href="https://css-tricks.com/almanac/properties/t/transition/">Example</a>', 'void' ),
					    'selectors' => [
					    	'{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select' =>'transition:{{VALUE}};-webkit-transition:{{VALUE}};-o-transition:{{VALUE}}',

					 
					    ],
					    'separator' =>'after',

					]
					);

				$this->end_controls_tab(); // input Focus tab end				

			$this->end_controls_tabs(); // end text area Normal/focus tabs


			$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
			    'name' => 'vcf7_input_box_typography',
			    
			    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select',
			]
			);


			$this->add_control(
			'vcf7_input_box_placeholder_color',
			[
			    'label'     => __( 'Placeholder Color', 'void' ),
			    'type'      => Controls_Manager::COLOR,
			    'selectors' => [
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]::-moz-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]::-moz-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]::-moz-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]::-moz-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]::-moz-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]::-moz-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select'      => 'color: {{VALUE}};',
			    ],
			]
			);


			$this->add_responsive_control(
			'vcf7_input_box_padding',
			[
			    'label' => __( 'Padding', 'void' ),
			    'type' => Controls_Manager::DIMENSIONS,
			    'size_units' => [ 'px', '%', 'em' ],
			    'selectors' => [
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			    ],
			    'separator' =>'before',
			]
			);

			$this->add_responsive_control(
			'vcf7_input_box_margin',
			[
			    'label' => __( 'Margin', 'void' ),
			    'type' => Controls_Manager::DIMENSIONS,
			    'size_units' => [ 'px', '%', 'em' ],
			    'selectors' => [
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			    ],
			    'separator' =>'before',
			]
			);

	        $this->end_controls_section(); // Input Field style tab end

		 // Textarea style tab start
		$this->start_controls_section(
		    'vcf7_textarea_style',
		    [
		        'label'     => __( 'Textarea', 'void' ),
		        'tab'       => Controls_Manager::TAB_STYLE,
		    ]
		);

			$this->start_controls_tabs('textarea_style_tabs'); //start text area Normal/focus tabs

				// Input Normal tab start
				$this->start_controls_tab(
				    'text_normal_tab',
				    [
				        'label' => __( 'Normal', 'void' ),
				    ]
				);	 

					$this->add_responsive_control(
					'vcf7_textarea_box_height',
					[
					    'label' => __( 'Height', 'void' ),
				            'type'  => Controls_Manager::SLIDER,
				            'size_units' => [ 'px', 'vh', 'vw' ],
				            'range' => [
				                'px' => [
				                    'max' => 900,
				                ],
				            ],

					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea'   => 'height: {{SIZE}}{{UNIT}};',
					    ],
					]
					);
					$this->add_responsive_control(
					'vcf7_textarea_box_width',
					[
					    'label' => __( 'Width', 'void' ),
				            'type'  => Controls_Manager::SLIDER,
				            'size_units' => [ 'px', 'vw', 'vh' ],
				            'range' => [
				                'px' => [
				                    'max' => 2000,
				                ],
				            ],

					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea'   => 'width: {{SIZE}}{{UNIT}};',
					    ],
					]

					);

					$this->add_group_control(
					\Elementor\Group_Control_Background::get_type(),
					[
					    'name' => 'vcf7_textarea_box_bg_grd',
					    'types' => [ 'classic', 'gradient'],
					    'label' => esc_html__( 'Background', 'void' ),
					    'selector' => 
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea',	        
					]

					);

					$this->add_control(
					'vcf7_textarea_box_text_color',
					[
					    'label'     => __( 'Text Color', 'void' ),
					    'type'      => Controls_Manager::COLOR,
					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea'   => 'color: {{VALUE}};',
					    ],
					]
					);

					$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
					    'name' => 'vcf7_textarea_box_border',
					    'label' => __( 'Border', 'void' ),
					    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea',
					]
					);

					$this->add_responsive_control(
					'vcf7_textarea_box_border_radius',
					[
					    'label' => __( 'Border Radius', 'void' ),
					    'type' => Controls_Manager::DIMENSIONS,
					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					    ],
					    'separator' =>'after',
					]
					);


				$this->end_controls_tab(); // Textarea Normal tab end	


				// Input Focus tab start
				$this->start_controls_tab(
				    'text_focus_tab',
				    [
				        'label' => __( 'Focus', 'void' ),
				    ]
				);	 
					$this->add_responsive_control(
					'vcf7_textarea_box_height_f',
					[
					    'label' => __( 'Height', 'void' ),
				            'type'  => Controls_Manager::SLIDER,
				            'size_units' => [ 'px', 'vh', 'vw' ],
				            'range' => [
				                'px' => [
				                    'max' => 900,
				                ],
				            ],

					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea:focus'   => 'height: {{SIZE}}{{UNIT}};',
					    ],
					]
					);
					$this->add_responsive_control(
					'vcf7_textarea_box_width_f',
					[
					    'label' => __( 'Width', 'void' ),
				            'type'  => Controls_Manager::SLIDER,
				            'size_units' => [ 'px', 'vw', 'vh' ],
				            'range' => [
				                'px' => [
				                    'max' => 2000,
				                ],
				            ],

					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea:focus'   => 'width: {{SIZE}}{{UNIT}};',
					    ],
					]

					);

					$this->add_group_control(
						\Elementor\Group_Control_Background::get_type(),
					[
					    'name' => 'vcf7_textarea_box_bg_grd_f',
					    'types' => [ 'classic', 'gradient'],
					    'label' => esc_html__( 'Background', 'void' ),
					    'selector' => 
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea:focus',	        
					]
					
					);

					$this->add_control(
					'vcf7_textarea_box_text_color_f',
					[
					    'label'     => __( 'Text Color', 'void' ),
					    'type'      => Controls_Manager::COLOR,
					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea:focus'   => 'color: {{VALUE}};',
					    ],
					]
					);

					$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
					    'name' => 'vcf7_textarea_box_border_f',
					    'label' => __( 'Border', 'void' ),
					    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea:focus',
					]
					);

					$this->add_responsive_control(
					'vcf7_textarea_box_border_radius_f',
					[
					    'label' => __( 'Border Radius', 'void' ),
					    'type' => Controls_Manager::DIMENSIONS,
					    'selectors' => [
					        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea:focus' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
					    ],
					    'separator' =>'after',
					]
					);

					$this->add_control(
					'vcf7_textarea_transition',
					[
					    'label'     => __( 'Transition Control', 'void' ),
					    'type'      => Controls_Manager::TEXT,
					    'placeholder' => 'width .35s ease-in-out',
					    'description' => __( 'input your desired transition effect for focus. Remember one single line can set all types of transition values. <a target="_blank" href="https://css-tricks.com/almanac/properties/t/transition/">Example</a>', 'void' ),
					    'selectors' => [
					    	'{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea' =>'transition:{{VALUE}};-webkit-transition:{{VALUE}}',

					 
					    ],
					    'separator' =>'after',

					]
					);				

				$this->end_controls_tab(); // Textarea Focus tab end				
			
			$this->end_controls_tabs(); //end text area Normal/focus tabs				


			$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
			    'name' => 'vcf7_textarea_box_typography',
			    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea',
			]
			);



			$this->add_control(
			'vcf7_textarea_box_placeholder_color',
			[
			    'label'     => __( 'Placeholder Color', 'void' ),
			    'type'      => Controls_Manager::COLOR,
			    'selectors' => [
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea::-webkit-input-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea::-moz-placeholder'  => 'color: {{VALUE}};',
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea:-ms-input-placeholder'  => 'color: {{VALUE}};',
			    ],
			]
			);


			$this->add_responsive_control(
			'vcf7_textarea_box_padding',
			[
			    'label' => __( 'Padding', 'void' ),
			    'type' => Controls_Manager::DIMENSIONS,
			    'size_units' => [ 'px', '%', 'em' ],
			    'selectors' => [
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			    ],
			    'separator' =>'before',
			]
			);

			$this->add_responsive_control(
			'vcf7_textarea_box_margin',
			[
			    'label' => __( 'Margin', 'void' ),
			    'type' => Controls_Manager::DIMENSIONS,
			    'size_units' => [ 'px', '%', 'em' ],
			    'selectors' => [
			        '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			    ],
			    'separator' =>'before',
			]
			);

	        $this->end_controls_section(); // Textarea style tab end

	        // Label style tab start
	        $this->start_controls_section(
	            'vcf7_cf7_label_style',
	            [
	                'label'     => __( 'Label', 'void' ),
	                'tab'       => Controls_Manager::TAB_STYLE,
	            ]
	        );

	            $this->add_control(
	                'vcf7_label_background',
	                [
	                    'label'     => __( 'Background Color', 'void' ),
	                    'type'      => Controls_Manager::COLOR,
	                    'selectors' => [
	                        '{{WRAPPER}}  form.wpcf7-form label'   => 'background-color: {{VALUE}};',
	                    ],
	                ]
	            );

	            $this->add_control(
	                'vcf7_label_text_color',
	                [
	                    'label'     => __( 'Text Color', 'void' ),
	                    'type'      => Controls_Manager::COLOR,
	                    'selectors' => [
	                        '{{WRAPPER}}  form.wpcf7-form label'   => 'color: {{VALUE}};',
	                    ],
	                ]
	            );

	            $this->add_group_control(
	                \Elementor\Group_Control_Typography::get_type(),
	                [
	                    'name' => 'vcf7_label_typography',
	                    'selector' => '{{WRAPPER}}  form.wpcf7-form label',
	                ]
	            );

	            $this->add_group_control(
	                \Elementor\Group_Control_Border::get_type(),
	                [
	                    'name' => 'vcf7_label_border',
	                    'label' => __( 'Border', 'void' ),
	                    'selector' => '{{WRAPPER}}  form.wpcf7-form label',
	                ]
	            );

	            $this->add_responsive_control(
	                'vcf7_label_border_radius',
	                [
	                    'label' => __( 'Border Radius', 'void' ),
	                    'type' => Controls_Manager::DIMENSIONS,
	                    'selectors' => [
	                        '{{WRAPPER}}  form.wpcf7-form label' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
	                    ],
	                    'separator' =>'before',
	                ]
	            );

	            $this->add_responsive_control(
	                'vcf7_label_padding',
	                [
	                    'label' => __( 'Padding', 'void' ),
	                    'type' => Controls_Manager::DIMENSIONS,
	                    'size_units' => [ 'px', '%', 'em' ],
	                    'selectors' => [
	                        '{{WRAPPER}}  form.wpcf7-form label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	                    ],
	                    'separator' =>'before',
	                ]
	            );

	            $this->add_responsive_control(
	                'vcf7_label_margin',
	                [
	                    'label' => __( 'Margin', 'void' ),
	                    'type' => Controls_Manager::DIMENSIONS,
	                    'size_units' => [ 'px', '%', 'em' ],
	                    'selectors' => [
	                        '{{WRAPPER}}  form.wpcf7-form label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	                    ],
	                    'separator' =>'before',
	                ]
	            );

	        $this->end_controls_section(); // 
	        // Label style tab end

	        // Input submit button style tab start
	        $this->start_controls_section(
	            'vcf7_inputsubmit_style',
	            [
	                'label'     => __( 'Button', 'void' ),
	                'tab'       => Controls_Manager::TAB_STYLE,
	            ]
	        );


	            $this->add_responsive_control(
	                'vcf7_button_text_align',
	                [
	                    'label' => __( 'Text Alignment', 'void' ),
	                    'type' => Controls_Manager::CHOOSE,
	                    'options' => [
	                        'left' => [
	                            'title' => __( 'Left', 'void' ),
	                            'icon' => 'eicon-text-align-left',
	                        ],
	                        'center' => [
	                            'title' => __( 'Center', 'void' ),
	                            'icon' => 'eicon-text-align-center',
	                        ],
	                        'right' => [
	                            'title' => __( 'Right', 'void' ),
	                            'icon' => 'eicon-text-align-right',
	                        ],
	                        'justify' => [
	                            'title' => __( 'Justified', 'void' ),
	                            'icon' => 'eicon-text-align-justify',
	                        ],
	                    ],
	                    'selectors' => [
	                        '{{WRAPPER}} .wpcf7-form input[type=submit]' => 'text-align: {{VALUE}};',
	                    ],
	                    'separator' =>'before',
	                ]
	            );


	            $this->add_responsive_control(
	                'vcf7_button_align',
	                [
	                    'label' => __( 'Button Float', 'void' ),
	                    'type' => Controls_Manager::CHOOSE,
	                    'options' => [
	                        'left' => [
	                            'title' => __( 'Left', 'void' ),
	                            'icon' => 'eicon-text-align-left',
	                        ],
	                        
	                        'right' => [
	                            'title' => __( 'Right', 'void' ),
	                            'icon' => 'eicon-text-align-right',
	                        ],	                     
	                    ],
	                    'selectors' => [
	                        '{{WRAPPER}} .wpcf7-form input[type=submit]' => 'float: {{VALUE}};',
	                    ],
	                    'separator' =>'after',
	                ]
	            );
	            
	            $this->start_controls_tabs('submit_style_tabs');

	                // Button Normal tab start
	                $this->start_controls_tab(
	                    'submit_style_normal_tab',
	                    [
	                        'label' => __( 'Normal', 'void' ),
	                    ]
	                );

	                    $this->add_responsive_control(
	                        'input_submit_height',
	                        [
				    'label' => __( 'Height', 'void' ),
			            'type'  => Controls_Manager::SLIDER,
			            'size_units' => [ 'px', 'vh', 'vw' ],
			            'range' => [
			                'px' => [
			                    'max' => 900,
			                ],
			            ],
	                        
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]' => 'height: {{SIZE}}{{UNIT}};',
	                            ],
	                        ]
	                    );
	                    $this->add_responsive_control(
	                         'input_submit_width',
	                        [
				    'label' => __( 'Width', 'void' ),
			            'type'  => Controls_Manager::SLIDER,
			            'size_units' => [ '%','px', 'vw' ],
			            'range' => [
			                'px' => [
			                    'max' => 1000,
			                ],
			            ],
	                        
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]' => 'width: {{SIZE}}{{UNIT}};',
	                            ],
	                        ]
	                    );

	                    $this->add_group_control(
	                        \Elementor\Group_Control_Typography::get_type(),
	                        [
	                            'name' => 'input_submit_typography',
	                            'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-submit',
	                        ]
	                    );

	                    $this->add_control(
	                        'input_submit_text_color',
	                        [
	                            'label'     => __( 'Text Color', 'void' ),
	                            'type'      => Controls_Manager::COLOR,
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]'  => 'color: {{VALUE}};',
	                            ],
	                        ]
	                    );

	           

					    $this->add_group_control(
						\Elementor\Group_Control_Background::get_type(),
						[
						    'name' => 'input_submit_bg_grd',
						    'types' => [ 'classic', 'gradient'],
						    'label' => esc_html__( 'Background', 'void' ),
						    'selector' => 
						        '{{WRAPPER}} .wpcf7-form input[type=submit]',	        
						]
					    );

	                    $this->add_responsive_control(
	                        'input_submit_padding',
	                        [
	                            'label' => __( 'Padding', 'void' ),
	                            'type' => Controls_Manager::DIMENSIONS,
	                            'size_units' => [ 'px', '%', 'em' ],
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	                            ],
	                            'separator' =>'before',
	                        ]
	                    );

	                    $this->add_responsive_control(
	                        'input_submit_margin',
	                        [
	                            'label' => __( 'Margin', 'void' ),
	                            'type' => Controls_Manager::DIMENSIONS,
	                            'size_units' => [ 'px', '%', 'em' ],
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	                            ],
	                            'separator' =>'before',
	                        ]
	                    );

	                    $this->add_group_control(
	                        \Elementor\Group_Control_Border::get_type(),
	                        [
	                            'name' => 'input_submit_border',
	                            'label' => __( 'Border', 'void' ),
	                            'selector' => '{{WRAPPER}} .wpcf7-form input[type=submit]',
	                        ]
	                    );

	                    $this->add_responsive_control(
	                        'input_submit_border_radius',
	                        [
	                            'label' => __( 'Border Radius', 'void' ),
	                            'type' => Controls_Manager::DIMENSIONS,
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
	                            ],
	                            'separator' =>'before',
	                        ]
	                    );

	                    $this->add_group_control(
	                        \Elementor\Group_Control_Box_Shadow::get_type(),
	                        [
	                            'name' => 'vcf7_input_submit_box_shadow',
	                            'label' => __( 'Box Shadow', 'void' ),
	                            'selector' => '{{WRAPPER}} .wpcf7-form input[type=submit]',
	                        ]
	                    );

	                $this->end_controls_tab(); // Button Normal tab end

	                // Button Hover tab start
	                $this->start_controls_tab(
	                    'submit_style_hover_tab',
	                    [
	                        'label' => __( 'Hover', 'void' ),
	                    ]
	                );

	                    $this->add_responsive_control(
	                        'input_submit_height_h',
	                        [
				    'label' => __( 'Height', 'void' ),
			            'type'  => Controls_Manager::SLIDER,
			            'size_units' => [ 'px', 'vh', 'vw' ],
			            'range' => [
			                'px' => [
			                    'max' => 900,
			                ],
			            ],
	                        
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]:hover' => 'height: {{SIZE}}{{UNIT}};',
	                            ],
	                        ]
	                    );
	                    $this->add_responsive_control(
	                         'input_submit_width_h',
	                        [
				    'label' => __( 'Width', 'void' ),
			            'type'  => Controls_Manager::SLIDER,
			            'size_units' => [ '%','px', 'vw' ],
			            'range' => [
			                'px' => [
			                    'max' => 1000,
			                ],
			            ],
	                        
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]:hover' => 'width: {{SIZE}}{{UNIT}};',
	                            ],
	                        ]
	                    );

	                    $this->add_group_control(
	                        \Elementor\Group_Control_Typography::get_type(),
	                        [
	                            'name' => 'input_submit_typography_h',
	                            'selector' => '{{WRAPPER}} .wpcf7-form input[type=submit]:hover',
	                        ]
	                    );

	                    $this->add_control(
	                        'input_submit_text_color_h',
	                        [
	                            'label'     => __( 'Text Color', 'void' ),
	                            'type'      => Controls_Manager::COLOR,
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]:hover'  => 'color: {{VALUE}};',
	                            ],
	                        ]
	                    );

	           

					    $this->add_group_control(
							\Elementor\Group_Control_Background::get_type(),
						[
						    'name' => 'input_submit_bg_grd_h',
						    'types' => [ 'classic', 'gradient'],
						    'label' => esc_html__( 'Background', 'void' ),
						    'selector' => 
						        '{{WRAPPER}} .wpcf7-form input[type=submit]:hover',	        
						]
					    );

	                    $this->add_responsive_control(
	                        'input_submit_padding_h',
	                        [
	                            'label' => __( 'Padding', 'void' ),
	                            'type' => Controls_Manager::DIMENSIONS,
	                            'size_units' => [ 'px', '%', 'em' ],
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	                            ],
	                            'separator' =>'before',
	                        ]
	                    );

	                    $this->add_responsive_control(
	                        'input_submit_margin_h',
	                        [
	                            'label' => __( 'Margin', 'void' ),
	                            'type' => Controls_Manager::DIMENSIONS,
	                            'size_units' => [ 'px', '%', 'em' ],
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
	                            ],
	                            'separator' =>'before',
	                        ]
	                    );

	                    $this->add_group_control(
	                        \Elementor\Group_Control_Border::get_type(),
	                        [
	                            'name' => 'input_submit_border_h',
	                            'label' => __( 'Border', 'void' ),
	                            'selector' => '{{WRAPPER}} .wpcf7-form input[type=submit]:hover',
	                        ]
	                    );

	                    $this->add_responsive_control(
	                        'input_submit_border_radius_h',
	                        [
	                            'label' => __( 'Border Radius', 'void' ),
	                            'type' => Controls_Manager::DIMENSIONS,
	                            'selectors' => [
	                                '{{WRAPPER}} .wpcf7-form input[type=submit]:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
	                            ],
	                            'separator' =>'before',
	                        ]
	                    );

	                    $this->add_group_control(
	                        \Elementor\Group_Control_Box_Shadow::get_type(),
	                        [
	                            'name' => 'vcf7_input_submit_box_shadow_h',
	                            'label' => __( 'Box Shadow', 'void' ),
	                            'selector' => '{{WRAPPER}} .wpcf7-form input[type=submit]:hover',
	                        ]
	                    );

	                    $this->add_control(
							'vcf7_button_h_animation',
							[
							    'label'     => __( 'Hover Animation', 'void' ),
							    'type'      => Controls_Manager::TEXT,
							    'placeholder' => 'all .25s linear 0s',
							    'default' => 'all .25s linear 0s',
							    'description' => __( 'input your desired transition effect for focus. Remember one single line can set all types of transition values. <a target="_blank" href="https://css-tricks.com/almanac/properties/t/transition/">Example</a>', 'void' ),
							    'selectors' => [
							    	'{{WRAPPER}} .wpcf7-form input[type=submit]' =>'transition:{{VALUE}};-webkit-transition:{{VALUE}};-o-transition:{{VALUE}}',
							    ],
							    'separator' =>'after',

							]
						);

	                $this->end_controls_tab(); // Button Hover tab end

	            $this->end_controls_tabs(); //ens submit style tabs

	        $this->end_controls_section(); 
	        // end out style tab

			    // After submit styles

	        $this->start_controls_section(
	            'vcf7_section_after_submit',
	            [
	                'label' => __('After Submit message', 'void'),
	                'tab' => Controls_Manager::TAB_STYLE,
	            ]
	        );

				$this->start_controls_tabs('vcf7_after_s_style_tabs');
					// Success tab start
					$this->start_controls_tab(
					    'vcf7_after_submit_su_tab',
					    [
					        'label' => __( 'Success', 'void' ),
					    ]
					);

						$this->add_control(
				            'contact_form_after_submit_s_color',
				            [
				                'label' => __('Success Text Color', 'void'),
				                'type' => Controls_Manager::COLOR,
				                'selectors' => [
				                    '{{WRAPPER}} .wpcf7 form.sent .wpcf7-response-output' => 'color: {{VALUE}}',
				                ],
				            ]
				        );

				        $this->add_group_control(
				            \Elementor\Group_Control_Background::get_type(),
				            [
				                'name' => 'vcf7_after_submit_background',
				                'label' => __('Background', 'void'),
				                'types' => ['classic', 'gradient'],
				                'selector' => '{{WRAPPER}} .wpcf7 form.sent .wpcf7-response-output',
				            ]
				        );

				        $this->add_group_control(
				            \Elementor\Group_Control_Border::get_type(),
				            [
				                'name' => 'vcf7_after_submit_border',
				                'label' => __('Border', 'void'),
				                'placeholder' => '1px',
				                'default' => '1px',
				                'selector' => '{{WRAPPER}} .wpcf7 form.sent .wpcf7-response-output',
				            ]
				        );

				        $this->add_responsive_control(
				            'vcf7_after_submit_border_radius',
				            [
				                'label' => esc_html__('Radius', 'void'),
				                'type' => Controls_Manager::SLIDER,
				                'size_units' => ['px', 'em', '%'],
				                'range' => [
				                    'px' => [
				                        'min' => 10,
				                        'max' => 1500,
				                    ],
				                    'em' => [
				                        'min' => 1,
				                        'max' => 80,
				                    ],
				                ],
				                'selectors' => [
				                    '{{WRAPPER}} .wpcf7 form.sent .wpcf7-response-output' => 'border-radius: {{SIZE}}{{UNIT}};',
				                ],
				                'separator' =>'after',

				            ]
				        );
					$this->end_controls_tab();				

					// Fail tab start
					$this->start_controls_tab(
					    'vcf7_after_submit_fa_tab',
					    [
					        'label' => __( 'Failed', 'void' ),
					    ]
					);

						$this->add_control(
						    'contact_form_after_submit_n_color',
						    [
						        'label' => __('Fail Text Color', 'void'),
						        'type' => Controls_Manager::COLOR,
						        'selectors' => [
						            '{{WRAPPER}} .wpcf7 form.invalid .wpcf7-response-output, {{WRAPPER}} .wpcf7 form.unaccepted .wpcf7-response-output, {{WRAPPER}} .wpcf7 form.payment-required .wpcf7-response-output' => 'color: {{VALUE}}',
						        ],
						    ]
						);

				        $this->add_group_control(
				            \Elementor\Group_Control_Background::get_type(),
				            [
				                'name' => 'vcf7_after_submit_er_background',
				                'label' => __('Background', 'void'),
				                'types' => ['classic', 'gradient'],
				                'selector' => '.wpcf7 form.invalid .wpcf7-response-output, {{WRAPPER}} .wpcf7 form.unaccepted .wpcf7-response-output, {{WRAPPER}} .wpcf7 form.payment-required .wpcf7-response-output',
				            ]
				        );

				        $this->add_group_control(
				            \Elementor\Group_Control_Border::get_type(),
				            [
				                'name' => 'vcf7_after_submit_er_border',
				                'label' => __('Border', 'void'),
				                'placeholder' => '1px',
				                'default' => '1px',
				                'selector' => '.wpcf7 form.invalid .wpcf7-response-output, {{WRAPPER}} .wpcf7 form.unaccepted .wpcf7-response-output, {{WRAPPER}} .wpcf7 form.payment-required .wpcf7-response-output',
				            ]
				        );

				        $this->add_responsive_control(
				            'vcf7_after_submit_er_border_radius',
				            [
				                'label' => esc_html__('Radius', 'void'),
				                'type' => Controls_Manager::SLIDER,
				                'size_units' => ['px', 'em', '%'],
				                'range' => [
				                    'px' => [
				                        'min' => 10,
				                        'max' => 1500,
				                    ],
				                    'em' => [
				                        'min' => 1,
				                        'max' => 80,
				                    ],
				                ],
				                'selectors' => [
				                    '.wpcf7 form.invalid .wpcf7-response-output, {{WRAPPER}} .wpcf7 form.unaccepted .wpcf7-response-output, {{WRAPPER}} .wpcf7 form.payment-required .wpcf7-response-output' => 'border-radius: {{SIZE}}{{UNIT}};',
				                ],
				            	'separator' =>'after',
    
				            ]
				        );						

					$this->end_controls_tab();
					
				$this->end_controls_tabs();

		        $this->add_group_control(
		            \Elementor\Group_Control_Typography::get_type(),
		            [
		                'name' => 'vcf7_after_submit_typography',
		                'label' => __('Typography', 'void'),
		                'selector' => '{{WRAPPER}} .wpcf7-mail-sent-ng, {{WRAPPER}} .wpcf7-mail-sent-ok, {{WRAPPER}} .wpcf7-response-output',
		                'separator' => 'before',
		            ]
		        );

		        $this->add_responsive_control(
		            'vcf7_after_submit_margin',
		            [
		                'label' => esc_html__('Margin', 'void'),
		                'type' => Controls_Manager::DIMENSIONS,
		                'size_units' => ['px', 'em', '%'],
		                'selectors' => [
		                    '{{WRAPPER}} .wpcf7-mail-sent-ng' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		                    '{{WRAPPER}} wpcf7-mail-sent-ok' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		                    '{{WRAPPER}} .wpcf7-response-output' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		                ],
		            ]
		        );

		        $this->add_responsive_control(
		            'vcf7_after_submit_padding',
		            [
		                'label' => esc_html__('Padding', 'void'),
		                'type' => Controls_Manager::DIMENSIONS,
		                'size_units' => ['px', 'em', '%'],
		                'selectors' => [
		                    '{{WRAPPER}} .wpcf7-mail-sent-ng' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		                    '{{WRAPPER}} .wpcf7-mail-sent-ok' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		                    '{{WRAPPER}} .wpcf7-response-output' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		                ],
		            ]
		        );

		    $this->end_controls_section();	    


	}


	protected function render() {				//to show on the fontend 
		static $v_veriable=0;

		$settings = $this->get_settings();

        if(!empty($settings['cf7'])){
    	   echo'<div class="void-cf7-form-widget-wrapper elementor-shortcode void-cf7-'.$v_veriable.'" data-void-cf7-contact-form-id="'. $settings['cf7'] .'">';
                echo do_shortcode('[contact-form-7 id="'.$settings['cf7'].'"]');    
           echo '</div>';  
    	}

		if(!empty($settings['cf7_redirect_page']) || !empty($settings['cf7_redirect_external']) ) {  ?>
 			<script>
 			        var theform = document.querySelector('.void-cf7-<?php echo $v_veriable; ?>');
						theform.addEventListener( 'wpcf7mailsent', function( event ) {
					    location = '<?php 
					    if( !empty($settings['cf7_redirect_external']) ){
							echo $settings['cf7_redirect_external'];
					    }else{
					    	 echo get_permalink( $settings['cf7_redirect_page'] );
					    }
					    ?>';
					}, false );
			</script>

		<?php  $v_veriable++;
 		}
    }
}
