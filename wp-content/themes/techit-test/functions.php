<?php
/**
 * TECHiT-test functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TECHiT-test
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function techit_test_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on TECHiT-test, use a find and replace
		* to change 'techit-test' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'techit-test', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'techit-test' ),
		)
	);

	register_nav_menus(
		array(
			'footer-menu' => esc_html__( 'footer-menu', 'techit-test' ),
		)
	);

	function social_customizer_setup( $wp_customize ) {
	
		/**
		 * Add Social Links Navigation Panel
		 */
		$wp_customize->add_panel( 'social_links_panel',
			array(
				'title' => __( 'Social Links' ),
				'description' => esc_html__( 'Control Where to show Social Links' ), // Include html tags such as 
	
				'priority' => 50, // Not typically needed. Default is 160
				'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
				'theme_supports' => '', // Rarely needed
				'active_callback' => '', // Rarely needed
			)
		);
	
		/**
		 * Add Social Links Url Section
		 */
		$wp_customize->add_section( 'social_url',
			array(
				'title' => __( 'Pages / Profile URL\'s' ),
				'description' => esc_html__( 'Add Social Url Links' ), // Include html tags such as 
				'panel' => 'social_links_panel', 
			)
		);
	
	
		// Footer Social Links
		$wp_customize->add_section( 'footer_social_links',
			array(
				'title' => __( 'Footer' ),
				'description' => esc_html__( 'Adjust your Footer Social Links.' ), // Include html tags such as 
				'panel' => 'social_links_panel', 
			)
		);
	
		// Share Social Links
		$wp_customize->add_section( 'share_social_links',
			array(
				'title' => __( 'Share' ),
				'description' => esc_html__( 'Adjust Share Social Links Customizer' ), // Include html tags such as 
				'panel' => 'social_links_panel', 
			)
		);
	
		
		
		// Show Share Social Links Customizer
		$wp_customize->add_setting( 'allow_share_option');
		$wp_customize->add_control( 'allow_share_option',
			array(
			'label' => __( 'Share Button' ),
			'description' => esc_html__( 'Click to show share Button in all pages' ),
			'section' => 'share_social_links',
			'type' => 'checkbox', 
			'input_attrs' => array( // Optional.
				'class' => 'number-field',
				'style' => 'border: 1px solid purple',
				'placeholder' => __( 'Share Button...' ),
				),
			)
		);
		
	
		/**
		 * Toggle to show social links in footer
		 */
		$wp_customize->add_setting( 'show_social_links_in_footer');
	
		// Toggle Social Links In Footer
		$wp_customize->add_control( 'show_social_links_in_footer',
			array(
			'label' => __( 'Social Links in footer' ),
			'description' => esc_html__( 'Do you want to show social links in footer' ),
			'section' => 'footer_social_links',
			'type' => 'checkbox', 
			'input_attrs' => array( // Optional.
				'class' => 'number-field',
				'style' => 'border: 1px solid purple',
				'placeholder' => __( 'Show Social Links...' ),
				),
			)
		);
	
		
		
		// Facebook Social Links
		$wp_customize->add_setting( 'facebook_social_link');
		$wp_customize->add_control( 'facebook_social_link',
			array(
			'label' => __( 'Facebook URL' ),
			'description' => esc_html__( 'Facebook Social Link' ),
			'section' => 'social_url',
			'type' => 'url', 
			'input_attrs' => array( // Optional.
				'class' => 'number-field',
				'style' => 'border: 1px solid purple',
				'placeholder' => __( 'Enter your facebook URL...' ),
				),
			)
		);
	
		// Instagram Social Links
		$wp_customize->add_setting( 'twitter_social_link');
		$wp_customize->add_control( 'twitter_social_link',
			array(
			'label' => __( 'Twitter URL' ),
			'description' => esc_html__( 'twitter Social Link' ),
			'section' => 'social_url',
			'type' => 'url', 
			'input_attrs' => array( // Optional.
				'class' => 'number-field',
				'style' => 'border: 1px solid purple',
				'placeholder' => __( 'Enter your twitter URL...' ),
				),
			)
		);
	
		// Youtube Social Links
		$wp_customize->add_setting( 'linkedin_social_link');
		$wp_customize->add_control( 'linkedin_social_link',
			array(
			'label' => __( 'Linkedin URL' ),
			'description' => esc_html__( 'Linkedin Social Link' ),
			'section' => 'social_url',
			'type' => 'url', 
			'input_attrs' => array( // Optional.
				'class' => 'number-field',
				'style' => 'border: 1px solid purple',
				'placeholder' => __( 'Enter your linkedin URL...' ),
				),
			)
		);
	
	}
	add_action( 'customize_register', 'social_customizer_setup' );

	function footer_customizer_setup($wp_customize) {
        /**
         * Add our Footer & Navigation Panel
         */
        $wp_customize->add_panel( 'footer_navigation_panel',
            array(
                'title' => __( 'Footer & Navigation' ),
                'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), // Include html tags such as 

                'priority' => 50, // Not typically needed. Default is 160
                'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
                'theme_supports' => '', // Rarely needed
                'active_callback' => '', // Rarely needed
            )
        );
        
        /**
         * Add our Footer & Navigation Section
         */
        $wp_customize->add_section( 'footer_navigation_section',
            array(
                'title' => __( 'Footer Section' ),
                'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), // Include html tags such as 
                'panel' => 'footer_navigation_panel', 
            )
        );

        /**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'address');

        /**
         * Add our Footer & Navigation Section
         */
            
        $wp_customize->add_control( 'address',
        array(
        'label' => __( 'Address' ),
        'description' => esc_html__( 'Enter Address Details Form that shows in footer' ),
        'section' => 'footer_navigation_section',
        'type' => 'textarea', 
        'input_attrs' => array( // Optional.
            'class' => 'address-field',
            'style' => 'border: 1px solid purple',
            'placeholder' => __( 'Enter Full address...' ),
            ),
            )
        );

		/**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'address_2');

        /**
         * Add our Footer & Navigation Section
         */
            
        $wp_customize->add_control( 'address_2',
        array(
        'label' => __( 'Address 2' ),
        'description' => esc_html__( 'Enter Address Details Form that shows in footer' ),
        'section' => 'footer_navigation_section',
        'type' => 'textarea', 
        'input_attrs' => array( // Optional.
            'class' => 'address-field',
            'style' => 'border: 1px solid purple',
            'placeholder' => __( 'Enter Full address...' ),
            ),
            )
        );

		/**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'address_header');

        /**
         * Add our Footer & Navigation Section
         */
            
        $wp_customize->add_control( 'address_header',
        array(
        'label' => __( 'Address_header' ),
        'description' => esc_html__( 'Enter Address Details Form that shows in footer' ),
        'section' => 'footer_navigation_section',
        'type' => 'textarea', 
        'input_attrs' => array( // Optional.
            'class' => 'address-field',
            'style' => 'border: 1px solid purple',
            'placeholder' => __( 'Enter Full address...' ),
            ),
            )
        );


		/**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'number_header');

        /**
         * Add our Footer & Navigation Section
         */
            
        $wp_customize->add_control( 'number_header',
        array(
        'label' => __( 'Number_header' ),
        'description' => esc_html__( 'Enter header Details Form that shows in footer' ),
        'section' => 'footer_navigation_section',
        'type' => 'textarea', 
        'input_attrs' => array( // Optional.
            'class' => 'number-field',
            'style' => 'border: 1px solid purple',
            'placeholder' => __( 'Enter Full Number Header Name...' ),
            ),
            )
        );

        /**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'phone_number');

        /**
         * Add our Footer & Navigation Section
         */
        $wp_customize->add_control( 'phone_number',
            array(
            'label' => __( 'Contact Number' ),
            'description' => esc_html__( 'Enter Working Phone Number to show on your website' ),
            'section' => 'footer_navigation_section',
            'type' => 'tel', 
            'input_attrs' => array( // Optional.
                'class' => 'number-field',
                'style' => 'border: 1px solid purple',
                'placeholder' => __( 'Enter phone number...' ),
                ),
            )
        );

		 /**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'phone_number_2');

        /**
         * Add our Footer & Navigation Section
         */
        $wp_customize->add_control( 'phone_number_2',
            array(
            'label' => __( 'Contact Number' ),
            'description' => esc_html__( 'Enter Working Phone Number to show on your website' ),
            'section' => 'footer_navigation_section',
            'type' => 'tel', 
            'input_attrs' => array( // Optional.
                'class' => 'number-field',
                'style' => 'border: 1px solid purple',
                'placeholder' => __( 'Enter phone number...' ),
                ),
            )
        );

		 /**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'phone_number_3');

        /**
         * Add our Footer & Navigation Section
         */
        $wp_customize->add_control( 'phone_number_3',
            array(
            'label' => __( 'Contact Number' ),
            'description' => esc_html__( 'Enter Working Phone Number to show on your website' ),
            'section' => 'footer_navigation_section',
            'type' => 'tel', 
            'input_attrs' => array( // Optional.
                'class' => 'number-field',
                'style' => 'border: 1px solid purple',
                'placeholder' => __( 'Enter phone number...' ),
                ),
            )
        );

		/**
        * Add our Footer & Navigation Settings
        */
        $wp_customize->add_setting( 'phone_number_4');

        /**
         * Add our Footer & Navigation Section
         */
        $wp_customize->add_control( 'phone_number_4',
            array(
            'label' => __( 'Contact Number' ),
            'description' => esc_html__( 'Enter Working Phone Number to show on your website' ),
            'section' => 'footer_navigation_section',
            'type' => 'tel', 
            'input_attrs' => array( // Optional.
                'class' => 'number-field',
                'style' => 'border: 1px solid purple',
                'placeholder' => __( 'Enter phone number...' ),
                ),
            )
        );

		 /**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'phone_number_5');

        /**
         * Add our Footer & Navigation Section
         */
        $wp_customize->add_control( 'phone_number_5',
            array(
            'label' => __( 'Contact Number' ),
            'description' => esc_html__( 'Enter Working Phone Number to show on your website' ),
            'section' => 'footer_navigation_section',
            'type' => 'tel', 
            'input_attrs' => array( // Optional.
                'class' => 'number-field',
                'style' => 'border: 1px solid purple',
                'placeholder' => __( 'Enter phone number...' ),
                ),
            )
        );

		/**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'our_plans');

        /**
         * Add our Footer & Navigation Section
         */
            
        $wp_customize->add_control( 'our_plans',
        array(
        'label' => __( 'our_plans' ),
        'description' => esc_html__( 'Enter our plans Details Form that shows in footer' ),
        'section' => 'footer_navigation_section',
        'type' => 'textarea', 
        'input_attrs' => array( // Optional.
            'class' => 'plan-field',
            'style' => 'border: 1px solid purple',
            'placeholder' => __( 'Enter Our Plan Header Name...' ),
            ),
            )
        );

        /**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'our_plan_1');

        /**
         * Add our Footer & Navigation Section
         */
            
        $wp_customize->add_control( 'our_plan_1',
        array(
        'label' => __( 'our plan 1' ),
        'description' => esc_html__( 'plan 1' ),
        'section' => 'footer_navigation_section',
        'type' => 'textarea', 
        'input_attrs' => array( // Optional.
            'class' => 'text-field-1',
            'style' => 'border: 1px solid purple',
            'placeholder' => __( 'our plan 1 Text...' ),
            ),
            )
        );

		/**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'our_plan_2');

        /**
         * Add our Footer & Navigation Section
         */
            
        $wp_customize->add_control( 'our_plan_2',
        array(
        'label' => __( 'our plan 2' ),
        'description' => esc_html__( 'plan 2' ),
        'section' => 'footer_navigation_section',
        'type' => 'textarea', 
        'input_attrs' => array( // Optional.
            'class' => 'text-field-2',
            'style' => 'border: 1px solid purple',
            'placeholder' => __( 'our plan 2 Text...' ),
            ),
            )
        );

		/**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'our_plan_3');

        /**
         * Add our Footer & Navigation Section
         */
            
        $wp_customize->add_control( 'our_plan_3',
        array(
        'label' => __( 'our plan 3' ),
        'description' => esc_html__( 'plan 3' ),
        'section' => 'footer_navigation_section',
        'type' => 'textarea', 
        'input_attrs' => array( // Optional.
            'class' => 'text-field-3',
            'style' => 'border: 1px solid purple',
            'placeholder' => __( 'our plan 3 Text...' ),
            ),
            )
        );

		/**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'our_plan_4');

        /**
         * Add our Footer & Navigation Section
         */
            
        $wp_customize->add_control( 'our_plan_4',
        array(
        'label' => __( 'our plan 4' ),
        'description' => esc_html__( 'plan 4' ),
        'section' => 'footer_navigation_section',
        'type' => 'textarea', 
        'input_attrs' => array( // Optional.
            'class' => 'text-field-4',
            'style' => 'border: 1px solid purple',
            'placeholder' => __( 'our plan 4 Text...' ),
            ),
            )
        );

        /**
         * Add our Footer & Navigation Settings
         */
        $wp_customize->add_setting( 'copyright');

        /**
         * Add our Footer & Navigation Section
         */
            
        $wp_customize->add_control( 'copyright',
        array(
        'label' => __( 'Copyright' ),
        'description' => esc_html__( 'Enter Text Details Form that shows in footer' ),
        'section' => 'footer_navigation_section',
        'type' => 'text', 
        'input_attrs' => array( // Optional.
            'class' => 'text-field-5',
            'style' => 'border: 1px solid purple',
            'placeholder' => __( 'Copyright Text...' ),
            ),
            )
        );
    }

    add_action( 'customize_register', 'footer_customizer_setup' );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'techit_test_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'techit_test_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function techit_test_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'techit_test_content_width', 640 );
}
add_action( 'after_setup_theme', 'techit_test_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function techit_test_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'techit-test' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'techit-test' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'techit_test_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function techit_test_scripts() {
	wp_enqueue_style( 'techit-test-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'techit-test-style', 'rtl', 'replace' );

	wp_enqueue_script( 'techit-test-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'techit_test_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

