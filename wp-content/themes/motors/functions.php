<?php
if(is_admin()) {
require_once get_template_directory() . '/admin/admin.php';
/* Phone Number Patch */
require_once(get_template_directory() . '/inc/autoload.php');
}

define( 'STM_TEMPLATE_URI', get_template_directory_uri() );
define( 'STM_TEMPLATE_DIR', get_template_directory() );
define( 'STM_THEME_SLUG', 'stm' );
define( 'STM_INC_PATH', get_template_directory() . '/inc' );
define( 'STM_CUSTOMIZER_PATH', get_template_directory() . '/inc/customizer' );
define( 'STM_CUSTOMIZER_URI', get_template_directory_uri() . '/inc/customizer' );


//	Include path
$inc_path = get_template_directory() . '/inc';

//	Widgets path
$widgets_path = get_template_directory() . '/inc/widgets';


define('motors', 'motors');

// Theme setups
require_once STM_CUSTOMIZER_PATH . '/customizer.class.php';

// Custom code and theme main setups
require_once( $inc_path . '/setup.php' );

// Enqueue scripts and styles for theme
require_once( $inc_path . '/scripts_styles.php' );

// Multiple Currency
require_once( $inc_path . '/multiple_currencies.php' );

// Custom code for any outputs modifying
require_once( $inc_path . '/custom.php' );

// Required plugins for theme
require_once( $inc_path . '/tgm/tgm-plugin-registration.php' );

// Visual composer custom modules
if ( defined( 'WPB_VC_VERSION' ) ) {
	require_once( $inc_path . '/visual_composer.php' );
}

// Custom code for any outputs modifying with ajax relation
require_once( $inc_path . '/stm-ajax.php' );

// Custom code for filter output
//require_once( $inc_path . '/listing-filter.php' );
require_once( $inc_path . '/user-filter.php' );

//User
if(is_listing()) {
	require_once( $inc_path . '/user-extra.php' );
}

require_once( $inc_path . '/stm_single_dealer.php' );

//email template manager
require_once( $inc_path . '/email_template_manager/email_template_manager.php' );

//value my car
if(is_listing(array('listing_two', 'listing_three'))) require_once ($inc_path . '/value_my_car/value_my_car.php');

// Custom code for woocommerce modifying
if( class_exists( 'WooCommerce' ) ) {
    require_once( $inc_path . '/woocommerce_setups.php' );
    if(stm_is_rental()) {
        require_once( $inc_path . '/woocommerce_setups_rental.php' );
    }

    if((get_theme_mod('dealer_pay_per_listing', false) || get_theme_mod('dealer_payments_for_featured_listing', false)) && is_listing()) {
        require_once $inc_path . '/perpay.php';
    }
}

if(class_exists('\\STM_GDPR\\STM_GDPR')) {
    if (stm_is_use_plugin('stm-gdpr-compliance/stm-gdpr-compliance.php')) {
        require_once($inc_path . '/motors-gdpr.php');
    }
}


remove_filter('authenticate', 'wp_authenticate_username_password', 20);

add_filter('authenticate', function($user, $email, $password){
//Check for empty fields
    if(empty($email) || empty ($password)){        
        //create new error object and add errors to it.
        $error = new WP_Error();

        if(empty($email)){ //No email
            $error->add('empty_username', __('<strong>ERROR</strong>: Email field is empty.'));
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Invalid Email
            $error->add('invalid_username', __('<strong>ERROR</strong>: Email is invalid.'));
        }

        if(empty($password)){ //No password
            $error->add('empty_password', __('<strong>ERROR</strong>: Password field is empty.'));
        }

        return $error;
    }

    //Check if user exists in WordPress database
    $user = get_user_by('email', $email);

    //bad email
    if(!$user){
        $error = new WP_Error();
        $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
        return $error;
    }
    else{ //check password
        if(!wp_check_password($password, $user->user_pass, $user->ID)){ //bad password
            $error = new WP_Error();
            $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
            return $error;
        }else{
            return $user; //passed
        }
    }
}, 20, 3);