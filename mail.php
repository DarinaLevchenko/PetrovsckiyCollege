<?php
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_POST['email']) && isset($_POST['name'])  && isset($_POST['message'])) {
 
  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }
  
  //
  mail( "test@gmail.com", $_POST['name'], $_POST['message'], "From:" . $_POST['email'] );
 
  //			^
  //  Replace with your email 
}
?>