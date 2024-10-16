<?php 
   /* Template Name: Custom Login */ 
   
    
    session_start();
session_set_cookie_params(0, '/', '.editors.ca');
    $access = "_member_" . $_GET["membership_level"];

    echo '<script>';
    echo 'console.log("Member signed in: ' . $access . '")';
    echo '</script>';
    
    
       $user = get_user_by('email', 'info@editors.ca');
       $user_id = $user->ID;

       wp_set_current_user( $user_id, $user->user_login );
       wp_set_auth_cookie( $user_id );
       do_action( 'wp_login', $user->user_login, $user );



       $_SESSION['USER_EMAIL'] = 'member';
       $_SESSION['USER_NAME'] = $_GET["userName"];

       echo '<script>';
       echo 'console.log("Session set: ' . $_SESSION['USER_EMAIL'] . '")';
       echo '</script>';
    	
    exit();
?>
