<?php
   /*
   Plugin Name: Bakker Technologies Custom Login Logo
   Plugin URI: https://bakkertechnologies.com
   description: This plugin changes the default login logo.
   Version: 1.0
   Author: Haakon Bakker
   Author URI: https://bakkertechnologies.com
   License: GPL3
   */


function bt_custom_login_logo() { ?>

    <style type="text/css">

    /* Change background color and font family */
    body {
      background: #f1f1f1;
      font-family: Arial,Verdana,sans-serif;
    }

    /* Change Width and Height of Logo Image + Add Custom Image File */
    .login h1 a {
      background-image: url('<?php echo plugin_dir_url( __FILE__ ) . 'images/godtnaboskap.png'; ?>');
      width: 250px !important;
      height: 130px !important;
      background-size: 250px 130px;
      padding-bottom: 25px;
    }

    /* Add a few changes to the color and style of form itself */
    .login label {
      color: #454545;
      display: block;
      margin-bottom: 1em;
      font-weight: bold;
    }

    .login form .input {
      font-weight: normal;
    }

    .login form {
      /* box-shadow: 0 0 5px rgba(0,0,0,.8); */
    }

    .login #backtoblog a, .login #nav a {
      color: #008ec2;
    }

    .wp-core-ui .button-primary {
      background: #008dbf;
    }


    .login input[type="submit"] {
    background: #fff;
    color: #fff;
    margin: 7px 0 7px;
    height: 46px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    font: normal 15px "Roboto", sans-serif;
    color: #fff;
    width: 100%;
    }

    .login form .input{
        margin-top: 20px;
        margin-left: 0;
        padding: 0 24px 12px;
        padding-top: 12px;
        background: #fff;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large {
        height: 30px;
        line-height: 28px;
        padding: 0 12px 2px;
    }

    .wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large {
        height: 46px;
        line-height: 0;
        background: #008ec2;
    }


/* Comment out if you want box around top logo and id=backtoblog. Does not respect footer.*/
    /* #login {
        margin-top: 2%;
        background: #fff;
        position: relative;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 0 15px rgba(0,0,0,.8);
        box-shadow: 0 0 15px rgba(0,0,0,.8);
        max-width: 350px;
        padding: 26px 26px 6px 26px;
        width: 100%;
    } */


    #login {
        padding-top: 2%;
    }

    </style>




<?php }
add_action( 'login_head', 'bt_custom_login_logo' );

function bt_custom_login_logo_url() {
    $source = get_bloginfo( 'name' );
    return 'https://www.bakkertechnologies.no?utm_source='.$source;

}
add_filter( 'login_headerurl', 'bt_custom_login_logo_url' );

function bt_custom_login_logo_url_title() {

    return 'Bakker Technologies';

}
add_filter( 'login_headertitle', 'bt_custom_login_logo_url_title' );
?>
