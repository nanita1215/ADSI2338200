<?php

if ( ! function_exists( 'get_contact_form_7_posts' ) ) :
  function get_contact_form_7_posts(){

    $args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
  
      $cf7_form_list=[];
      
      if( $cf7_forms = get_posts($args)){
        foreach ( $cf7_forms as $form ) {
          (int)$cf7_form_list[$form->ID] = $form->post_title;
        }
      }
      else{
          (int)$cf7_form_list['0'] = esc_html__('No contect From 7 form found', 'void');
      }
    return $cf7_form_list;
  }
endif;


// ajax request handler
if( !function_exists('get_contact_form_7_posts_by_ajax')) {

  function get_contact_form_7_posts_by_ajax(){
	$cf7_form_list = get_contact_form_7_posts();
	echo json_encode($cf7_form_list);
	wp_die();
  }

}

//ajax action
add_action( 'wp_ajax_void_cf7_data', 'get_contact_form_7_posts_by_ajax' );


if ( ! function_exists( 'void_get_all_pages' ) ) :

  function void_get_all_pages(){

  $args = array('post_type' => 'page', 'posts_per_page' => -1);

    $catlist=[];
    
    if( $categories = get_posts($args)){
      foreach ( $categories as $category ) {
        (int)$catlist[$category->ID] = $category->post_title;
      }
    }
    else{
        (int)$catlist['0'] = esc_html__('No Pages Found!', 'void');
    }
  return $catlist;
  }

endif;


if( !function_exists('promotional_notice_dismiss_handler')){
  
  function promotional_notice_dismiss_handler(){
    // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
    $type = $_POST['type'];
  
    $status = $_POST['status'];
  
    if($status == 'remind-me-later'){
      // Store it in the options table
      update_option( 'dismissed-' . $type . "-at", date('Y-m-d') );
  
    }elseif( $status == 'never-show'){
  
      update_option( 'dismissed-'. $type . '-never', TRUE );
  
    }else{
      update_option( 'dismissed-'. $type . '-never', TRUE );
    }
  }
}

add_action('wp_ajax_dismissed_promotional_notice_handler', 'promotional_notice_dismiss_handler');

if( !function_exists('dismissed_usage_data_track_void_cf7')){
  
  function dismissed_usage_data_track_void_cf7(){
    // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
    $type = sanitize_text_field($_POST['type']);
  
    $status = sanitize_text_field($_POST['status']);
  
    if($status == 'remind-me-later'){
      // Store it in the options table
      update_option( 'dismissed-' . $type . "-at", date('Y-m-d') );
  
    }
  }
}

add_action('wp_ajax_dismissed_usage_data_track_void_cf7', 'dismissed_usage_data_track_void_cf7');