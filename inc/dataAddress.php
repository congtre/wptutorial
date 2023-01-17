<?php

function acf_load_province_field_choices( $field ) {
    // reset choices
    $field['choices'] = array();
    
    // load data from local
    $json_data = file_get_contents(get_template_directory_uri().'/data/tinh_tp.json');
    $choices = json_decode($json_data, true);
    
    // loop through array and add to field 'choices'
    foreach( $choices as $choice ) {
        $field['choices'][$choice['code']] = $choice['name'];
    }
    
    return $field;
}

add_filter('acf/load_field/name=project_info_address_province', 'acf_load_province_field_choices');

function acf_load_district_field_choices( $field ) {
    // reset choices
    $field['choices'] = array();
    
    // load data from local
    $json_data = file_get_contents(get_template_directory_uri().'/data/quan_huyen.json');
    $choices = json_decode($json_data, true);
    
    // loop through array and add to field 'choices'
    foreach( $choices as $choice ) {
        $field['choices'][$choice['code']] = $choice['name'];
    }
    
    return $field;
}

add_filter('acf/load_field/name=project_info_address_district', 'acf_load_district_field_choices');

function acf_load_ward_field_choices( $field ) {
    // reset choices
    $field['choices'] = array();
    
    // load data from local
    $json_data = file_get_contents(get_template_directory_uri().'/data/xa_phuong.json');
    $choices = json_decode($json_data, true);
    
    // loop through array and add to field 'choices'
    foreach( $choices as $choice ) {
        $field['choices'][$choice['code']] = $choice['name'];
    }
    
    return $field;
}

add_filter('acf/load_field/name=project_info_address_ward', 'acf_load_ward_field_choices');

function dataAddress() {
    $get_file = file_get_contents(get_template_directory_uri() . '/data/tree.json');
    $json_to_array = json_decode($get_file, true);
    die (json_encode($json_to_array));
}
add_action('wp_ajax_dataAddress', 'dataAddress');
add_action('wp_ajax_nopriv_dataAddress', 'dataAddress');

function my_acf_admin_enqueue_scripts() {
    wp_enqueue_script('acf-select-address-js', get_template_directory_uri() . '/dist/js/admin/selectAddress.js', false, '1.0.0');
    wp_localize_script('acf-select-address-js', 'dataAddress', array('ajaxUrl' => admin_url('admin-ajax.php')));
}
add_action('acf/input/admin_enqueue_scripts', 'my_acf_admin_enqueue_scripts');
