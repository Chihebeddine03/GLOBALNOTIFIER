<?php
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message']) ) {

  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }
  
  
        $headers =  "From: ".$_POST["name"]."<".$_POST["email"].">\r\n";
        $headers .= "Reply-To: <".$_POST["email"].">\r\n";
        $headers .= "Mime-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n\r\n"; 

		$Message= $_POST['message'].$_POST['telefon'].$headers ;

  //
        mail( "bluegiga@compusoft.cz",'CompuSoft',$Message,$headers );

  //      ^
  //  Replace with your email
}
?>

