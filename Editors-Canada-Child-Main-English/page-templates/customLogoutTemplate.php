
<?php 
 /* Template Name: Custom Logout */ 

    session_start();
    wp_clear_auth_cookie();
     do_action( 'clear_auth_cookie' );


    unset($_SESSION['USER_EMAIL']);
    unset($_SESSION['USER_NAME']);
    
    echo 'Called!';
    
?>




