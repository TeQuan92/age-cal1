<?php

// Add shortcode for age calculation.
function calculate_years_shortcode( $atts ) {
   $years = '';
   // Attributes
   $atts = shortcode_atts(
      array(
         'datestring' => '',
      ),
      $atts
   );
   if ($atts['datestring'] != '') {
      $beginningdate = new DateTime($atts['datestring']);
      $today = new DateTime(date('m/d/Y'));
      $diff = $today->diff($beginningdate);
      $years = $diff->y;
   }
   return $years;
}
add_shortcode( 'calculate_years', 'calculate_years_shortcode' );

?>

