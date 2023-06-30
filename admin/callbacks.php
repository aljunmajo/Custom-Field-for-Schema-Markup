<?php
/*
 * Need to install ACF plugin and create custom field
 * Create custom field for the JSON LD Schema
 * ACF Field Name value: custom_json_ld_schema
 */
function add_custom_schema_markup() {

    $adm_custome_schema = get_post_meta( get_the_ID(), 'custom_json_ld_schema', true );


    // Check if the custom field has a value.
    if ( ! empty( $adm_custome_schema ) ) {
      ?>
      <!-- START: Custom Schema Markup -->

      <?php

      echo $adm_custome_schema;

      ?>

      <!-- END: Custom Schema Markup -->
      <?php
    }


}

add_action('wp_head', 'add_custom_schema_markup', 99);
