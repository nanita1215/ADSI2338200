<?php

/**
 * Plugin Name: Void Contact Form 7 Widget For Elementor Page Builder
 * Description: Adds Contact Form 7 widget element to Elementor page builder for easy drag & drop the created contact forms with Contact Form 7
 * Version:     2.1.1
 * Author:      voidCoders
 * Plugin URI:  https://voidcoders.com/product/contact-form7-widget-for-elementor-free/
 * Author URI:  https://voidcoders.com
 * Text Domain: void
 * Elementor tested up to: 3.6.4
 * Elementor Pro tested up to: 3.6.5
 */

use Account\AccountDataFactory;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

define('CF7_WIDGET_E_VERSION', '2.1');
define('CF7_WIDGET_E_PLUGIN_URL', trailingslashit(plugin_dir_url(__FILE__)));
define('CF7_WIDGET_E_PLUGIN_DIR', trailingslashit(plugin_dir_path(__FILE__)));

function void_cf7_widget()
{
    // Load localization file
    load_plugin_textdomain('void');

    // Notice if the Elementor is not active
    if (!did_action('elementor/loaded')) {
        return;
    }

    // Check version required
    $elementor_version_required = '3.0';
    if (!version_compare(ELEMENTOR_VERSION, $elementor_version_required, '>=')) {
        return;
    }

    // Require the main plugin file
    require(__DIR__ . '/plugin.php');   //loading the main plugin
    include CF7_WIDGET_E_PLUGIN_DIR . 'custom-editor/init.php';
    // helper file for this plugin. currently used for gettings all contact form of cf7. also used for ajax request handle
    require __DIR__ . '/helper/helper.php';
}
add_action('plugins_loaded', 'void_cf7_widget');

// display activation notice for depended plugin
function void_cf7_widget_notice()
{ ?>

    <?php if (!is_plugin_active('contact-form-7/wp-contact-form-7.php') || !did_action('elementor/loaded')) : ?>
        <div class="notice notice-warning is-dismissible">

            <?php if (file_exists(WP_PLUGIN_DIR . '/elementor/elementor.php') && !did_action('elementor/loaded')) : ?>
                <p><?php echo sprintf(__('<a href="%s" class="button button-primary">Active</a> <b>Elementor Page Builder</b> now for working with <b>"Void Contact Form 7 Widget"</b>'),  wp_nonce_url('plugins.php?action=activate&plugin=elementor/elementor.php&plugin_status=all&paged=1', 'activate-plugin_elementor/elementor.php')); ?></p>
            <?php elseif (!file_exists(WP_PLUGIN_DIR . '/elementor/elementor.php')) : ?>
                <p><?php echo sprintf(__('<b>Elementor Page Builder</b> must be installed for <b>"Void Contact Form 7 Widget"</b> to work. <a href="%s" class="button button-primary">Install Now</a>'),  wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=elementor'), 'install-plugin_elementor')); ?></p>
            <?php endif; ?>

            <?php if (file_exists(WP_PLUGIN_DIR . '/contact-form-7/wp-contact-form-7.php') && !is_plugin_active('contact-form-7/wp-contact-form-7.php')) : ?>
                <p><?php echo sprintf(__('<a href="%s" class="button button-primary">Active</a> <b>Contact Form 7</b> now to start working with <b>"Void Contact Form 7 Widget"</b>'), wp_nonce_url('plugins.php?action=activate&plugin=contact-form-7/wp-contact-form-7.php&plugin_status=all&paged=1', 'activate-plugin_contact-form-7/wp-contact-form-7.php')); ?></p>
            <?php elseif (!file_exists(WP_PLUGIN_DIR . '/contact-form-7/wp-contact-form-7.php')) : ?>
                <p><?php echo sprintf(__('<b>Contact Form 7</b>  must be installed and activated for <b>"Void Contact Form 7 Widget"</b> to work. <a href="%s" class="button button-primary">Install Now</a>'), wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=contact-form-7'), 'install-plugin_contact-form-7')); ?></p>
            <?php endif; ?>

        </div>
    <?php endif; ?>

    <?php }
add_action('admin_notices', 'void_cf7_widget_notice');

function void_cf7_widget_promotional_notice()
{
    // notice dismiss date form database
    $db_dismiss_date = get_option('dismissed-void-cf7-promotion-notice-ele-query-at');
    // create a date object from database date
    $dismiss_date = date_create($db_dismiss_date);
    // create a current date object
    $current_date = date_create(date('Y-m-d'));
    // get difference of both date
    $diff = date_diff($dismiss_date, $current_date);
    // make conditional days. if date found in database, it will be 30.
    // otherwise it will be 0. Becase difference return 0 if there was no data on database
    $conditional_days = ($db_dismiss_date) ? 15 : 0;
    // elementor pro install check
    if (file_exists(WP_PLUGIN_DIR . '/elementor-pro/elementor-pro.php') || did_action('elementor_pro/init')) :
        $url = 'https://elequerybuilder.com?click=cf7-promo';
        // different day condition. notice will again show if dismiss interval is more than equal 30 days
        if (!get_option('dismissed-void-cf7-promotion-notice-ele-query-never', FALSE)) :

            // different day condition. notice will again show if dismiss interval is more than equal 30 days
            if ($diff->days >= $conditional_days) :
                $url .= (($conditional_days == 15) ? '&discount=INSIDE10E' : '');
    ?>
                <div class="cf7-widget-promotion-notice notice is-dismissible" data-notice="void-cf7-promotion-notice-ele-query" data-nonce="<?php echo wp_create_nonce('wp_rest'); ?>">
                    <div class="cf7-widget-message-inner">
                        <div class="cf7-widget-message-icon">
                            <img class="cf7-widget-notice-icon" src="https://elequerybuilder.com/wp-content/uploads/2020/05/EQ-Banner.png" alt="voidCoders promotional banner">
                        </div>
                        <div class="cf7-widget-message-content">
                            <?php if ($conditional_days == 15) : ?>
                                <p><?php esc_html_e('Here is a Little gift for you!', 'void'); ?></p>
                                <p><?php esc_html_e('Get', 'void'); ?> <strong><?php esc_html_e('Ele Query Builder', 'void'); ?></strong> <?php esc_html_e('to build custom query without code with', 'void'); ?> <strong><?php esc_html_e('10% Discount', 'void'); ?></strong>. <strong><?php esc_html_e('Use Coupon - INSIDE10E', 'void'); ?></strong></p>
                            <?php else : ?>
                                <p><?php esc_html_e('We noticed you have', 'void'); ?> <strong><?php esc_html_e('Elementor Pro', 'void'); ?></strong> <?php esc_html_e('on your site.', 'void'); ?></p>
                                <p><?php esc_html_e('Get our', 'void'); ?> <strong><?php esc_html_e('Ele Query Builder', 'void'); ?></strong> <?php esc_html_e('to use custom query by using postmeta, ACF/PODS', 'void'); ?></p>
                                <p><?php esc_html_e('Woocommerce meta and events calendar with no CODE', 'void'); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="cf7-widget-message-action">
                            <a class="cf7-widget-button" target="__blank" href="<?php echo esc_url($url); ?>"><?php esc_html_e('Check Now', 'void'); ?></a>
                            <!-- <a class="cf7-widget-remind-later" href="#">Remind me later -> </a> -->
                            <a class="cf7-widget-never-show" href="#"><?php esc_html_e('Never show again ->', 'void'); ?> </a>
                        </div>
                    </div>
                </div>
            <?php endif;
        endif;
    endif;
}
add_action('admin_notices', 'void_cf7_widget_promotional_notice');

// add plugin activation time

function void_cf7_activation_time()
{
    $get_installation_time = strtotime("now");
    update_option('void_cf7_elementor_activation_time', $get_installation_time);
}
register_activation_hook(__FILE__, 'void_cf7_activation_time');

//check if review notice should be shown or not

function void_cf7_check_installation_time()
{

    $spare_me = get_option('void_cf7_spare_me');
    if (!$spare_me) {
        $install_date = get_option('void_cf7_elementor_activation_time');
        $past_date = strtotime('-7 days');

        if ($past_date >= $install_date) {

            add_action('admin_notices', 'void_cf7_display_admin_notice');
        }
    }

    if ( 'yes' !== get_option( 'void_cf7_with_elementor_ran_never' ) ) {
        if ( strtotime( '-15 days' ) >= get_option( 'void_cf7_with_elementor_ran_time', strtotime( '-15 days' ) ) ) {
            add_action( 'admin_notices', 'void_cf7_with_elementor_recomended_admin_notice' );
        }
    }
}
add_action('admin_init', 'void_cf7_check_installation_time');

/**
 * Display Admin Notice, asking for a review
 **/
function void_cf7_display_admin_notice()
{
    // wordpress global variable 
    global $pagenow;
    if ($pagenow == 'index.php') {

        $dont_disturb = esc_url( get_admin_url() . '?spare_me2=1' );
        $plugin_info = get_plugin_data( __FILE__, true, true );
        $reviewurl = esc_url( 'https://wordpress.org/support/plugin/cf7-widget-elementor/reviews/#new-post' );
        $void_url = esc_url( 'https://voidcoders.com/shop/' );

        printf(__('<div class="void-cf7-review wrap">You have been using <b> %s </b> for a while. We hope you liked it ! Please give us a quick rating, it works as a boost for us to keep working on the plugin ! Also you can visit our <a href="%s" target="_blank">site</a> to get more themes & Plugins<div class="void-cf7-review-btn"><a href="%s" class="button button-primary" target=
            "_blank">Rate Now!</a><a href="%s" class="void-cf7-review-done"> Already Done !</a></div></div>', $plugin_info['TextDomain']), $plugin_info['Name'], $void_url, $reviewurl, $dont_disturb);
    }
}

/**
 * Display Admin Notice, for elemailer banner
 */
function void_cf7_with_elementor_recomended_admin_notice()
{
    $temporary_hide = esc_url( get_admin_url() . '?void_cf7_with_elementor_ran=1' );
    $dont_disturb   = esc_url( get_admin_url() . '?void_cf7_with_elementor_ran_never=1' );
    
    if ( is_plugin_active( 'elemailer-lite/elemailer-lite.php' ) || is_plugin_active( 'elemailer/elemailer.php' ) ) {
        return true;
    }

    $install_url = wp_nonce_url( add_query_arg( array( 'action' => 'activate', 'plugin' => urlencode( 'elemailer-lite/elemailer-lite.php' ) ), admin_url( 'plugins.php' ) ), 'activate-plugin_elemailer-lite/elemailer-lite.php' );
    $text = esc_html__( 'Active Elemailer Lite', 'void' );

    if ( is_wp_error( validate_plugin( 'elemailer-lite/elemailer-lite.php' ) ) ) {
        $install_url = wp_nonce_url( add_query_arg( array( 'action' => 'install-plugin', 'plugin' => 'elemailer-lite' ), admin_url( 'update.php' ) ), 'install-plugin_elemailer-lite' );
        $text        = esc_html__( 'Install Elemailer Lite', 'void' );
    }
    ?>
    <div class="notice error void-cf7-license-notice">
        <div class="void-cf7-license-notice__logo">
            <img src="<?php echo CF7_WIDGET_E_PLUGIN_URL; ?>/assets/elemailer-logo.png" alt="Elemailer Logo">
        </div>
        <div class="void-cf7-license-notice__message">
            <h3><?php esc_html_e( 'Design your contact form 7 emails with Elementor', 'void' ); ?></h3>
            
            <a class="button" target="_blank" href="<?php echo esc_url( 'https://wordpress.org/plugins/elemailer-lite/' ); ?>"><?php esc_html_e( 'View Details', 'void' ); ?></a>
        </div>

        <div class="void-cf7-license-notice__button">
            <a class="button" href="<?php echo $install_url; ?>"><?php echo esc_html( $text ); ?></a>
        </div>

        <a href="<?php echo $temporary_hide; ?>">
            <button type="button" class="notice-dismiss"><span class="screen-reader-text"> <?php esc_html_e( 'Dismiss this notice.', 'void' ); ?></span></button>
        </a>
        <a href="<?php echo $dont_disturb; ?>"><span class="void-cf7-elemailer-promotion-never-show" style="position: absolute; right: 37px; bottom: 10px; color: #696969a8;"><?php esc_html_e( 'Never show again', 'void' ) ?></span></a>
    </div>

    <style>
        .notice.void-cf7-license-notice {
            display: flex;
            align-items: center;
            padding: 15px 10px;
            border: 1px solid #e4e4e4;
            border-left: 4px solid #fb6e76;
            background-repeat: no-repeat;
            background-position: bottom right;
            position: relative;
        }

        .void-cf7-license-notice__logo {
            margin-right: 50px;
        }

        .void-cf7-license-notice__logo img {
            width: 200px;
            height: auto;
        }

        .void-cf7-license-notice__message {
            flex-basis: 100%;
        }

        .void-cf7-license-notice__button {
            padding: 0 25px;
        }

        .void-cf7-license-notice__button .button {
            background: #071C74;
            color: #fff;
            border-color: #071C74;
            font-size: 15px;
            padding: 3px 15px;
        }

        .void-cf7-license-notice__button .button:hover {
            background: #1538cb;
            color: #fff;
            border-color: #1538cb;
        }
    </style>
    <?php
}

// remove the notice for the user if review already done or if the user does not want to
function void_cf7_spare_me()
{
    if (isset($_GET['spare_me2']) && !empty($_GET['spare_me2'])) {
        $spare_me = $_GET['spare_me2'];
        if ($spare_me == 1) {
            update_option( 'void_cf7_spare_me', TRUE);
        }
    }

    if ( isset( $_GET['void_cf7_with_elementor_ran'] ) && ! empty( $_GET['void_cf7_with_elementor_ran'] ) ) {
        if ( 1 === absint( $_GET['void_cf7_with_elementor_ran'] ) ) {
            update_option( 'void_cf7_with_elementor_ran', 'yes' );
            update_option( 'void_cf7_with_elementor_ran_time', strtotime("now") );
        }
    }

    if ( isset( $_GET['void_cf7_with_elementor_ran_never'] ) && ! empty( $_GET['void_cf7_with_elementor_ran_never'] ) ) {
        if ( 1 === absint( $_GET['void_cf7_with_elementor_ran_never'] ) ) {
            update_option( 'void_cf7_with_elementor_ran_never', 'yes' );
        }
    }

    delete_option( 'void_cf7_elep_2021_temporary' );
    delete_option( 'void_cf7_elep_2021_temporary_time' );
    delete_option( 'void_cf7_elep_2021_never' );
    delete_option( 'void_cf7_email_with_elementor_never' );
    delete_option( 'void_cf7_email_with_elementor' );
    delete_option( 'void_cf7_email_with_elementor_time' );
}
add_action('admin_init', 'void_cf7_spare_me', 5);

//add admin css
function void_cf7_admin_css()
{

    global $pagenow;
    if ($pagenow == 'index.php' || file_exists(WP_PLUGIN_DIR . '/elementor-pro/elementor-pro.php') || did_action('elementor_pro/init') || !get_option('dismissed-void-cf7-promotion-notice-ele-query-never', FALSE)) {
        wp_enqueue_style('void-cf7-admin', CF7_WIDGET_E_PLUGIN_URL . 'assets/css/void-cf7-admin.css', [], CF7_WIDGET_E_VERSION, 'all');
        wp_enqueue_script('void-cf7-admin', CF7_WIDGET_E_PLUGIN_URL . 'assets/js/void-cf7-admin.js', ['jquery'], CF7_WIDGET_E_VERSION, true);
    }
}
add_action('admin_enqueue_scripts', 'void_cf7_admin_css');

// opt in track
require_once 'analyst/main.php';

analyst_init(array(
    'client-id' => 'nwmkv57dvw5blag6',
    'client-secret' => 'd76789221c6c0faec9b684a1ad75cb970a89a8df',
    'base-dir' => __FILE__
));

// notice for track
function void_cf7_opt_in_user_data_track()
{
    // get data factory instance
    $account_data_factory = AccountDataFactory::instance();
    // get account data by using datafactory object
    $account_data = $account_data_factory->getAccountDataByBasePath(plugin_basename( __FILE__ ));
    // retrun if account data is not present for this folder
    if(!isset($account_data)){ return; } 
    // account has private property
    // so, use this object to get those by it's public method
    $opted_in = $account_data->isOptedIn();
    $is_signed = $account_data->isSigned();
    $id = $account_data->getId();

    // notice dismiss date form database
    $db_dismiss_date = get_option('dismissed-void-cf7-usage-data-track-at');
    // create a date object from database date
    $dismiss_date = date_create($db_dismiss_date);
    // create a current date object
    $current_date = date_create(date('Y-m-d'));
    // get difference of both date
    $diff = date_diff($dismiss_date, $current_date);
    // make conditional days. if date found in database, it will be 30.
    // otherwise it will be 0. Becase difference return 0 if there was no data on database
    $conditional_days = ($db_dismiss_date) ? 15 : 0;

    if (!$opted_in && $diff->days >= $conditional_days) : ?>
        <div class="notice notice-warning is-dismissible void-cf7-widget-data-track-notice" data-notice="void-cf7-usage-data-track" data-nonce="<?php echo wp_create_nonce('wp_rest'); ?>">
            <p class="void-cf7-notice-text"><?php esc_html_e('We hope that you enjoy using our plugin Contact Form 7 Widget For Elementor Page Builder. If you agree we want to get some', 'void'); ?></p>
            <div class="void-cf7-non-sensitive"><?php esc_html_e('non sensitive', 'void'); ?>
                <span class="void-cf7-non-sensitive-tooltip">
                    <ul>
                        <li><?php esc_html_e('Your profile information (name and email).', 'void'); ?></li>
                        <li><?php esc_html_e('Your site information (URL, WP version, PHP info, plugins & themes).', 'void'); ?></li>
                        <li><?php esc_html_e('Plugin notices (updates, announcements, marketing, no spam)', 'void'); ?></li>
                        <li><?php esc_html_e('Plugin events (activation, deactivation and uninstall)', 'void'); ?></li>
                    </ul> ​
                ​</span>
            </div>
            <p class="void-cf7-notice-text"><?php esc_html_e('data from you to improve our plugin and keep you updated with security and other fixes time to time.', 'void'); ?></p>
            <p class="void-cf7-notice-text"><a class="analyst-action-opt analyst-opt-in" analyst-plugin-id="<?php echo esc_attr($id); ?>" analyst-plugin-signed="<?php echo esc_attr($is_signed); ?>"><?php esc_html_e('Opt In', 'void'); ?></a></p>
        </div>
<?php endif;
}

add_action('admin_notices', 'void_cf7_opt_in_user_data_track');
