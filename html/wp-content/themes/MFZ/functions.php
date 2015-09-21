<?php
 
function add_heading() {
 
  // Echo an alert box
  echo '<div id="header-title-container">
  			<a href="http://mzf.com.s195315.gridserver.com/">
	  			<h1 id="header-title">Midwest Zonal Forum</h1>
				<h2 id="header-sub-title">of Narcotics Anonymous</h2>
			</a>
		</div>';
} 
add_action( 'woo_header_inside', 'add_heading' );

function st_author_bio() {
 return false;
}

remove_filter( 'tribe_get_country', $output );

function my_login_logo() { ?>
    <style type="text/css">
    	body {
    		background: #3809a9;
    	}

    	#login {
		    width: 500px;
		    padding: 2% 0 0;
		    max-width: 100%;
		}

        .login h1 a {
            background-image: url('http://mzf.com.s195315.gridserver.com/wp-content/uploads/2015/09/login.png');
            background-size: 100%;
            padding-bottom: 30px;
            width: 100%;
            height: 350px;
        }

        form#loginform {
		    width: 300px;
		    margin: auto;
		    background-color: #3809a9;
		    box-shadow: none;
		    padding: 15px 24px 30px;
		}

		.login label {
		    color: #fbec04;
		}

		.wp-core-ui .button-primary {
			color: #fbec04;
		}

        p#nav {
		    width: 300px;
		    margin: 24px auto 0!important;
		    color: #fbec04;
		}

		p#backtoblog {
			width: 300px;
		    margin: 10px auto 0 !important;
		    color: #fbec04;
		}

		p#nav a, p#backtoblog a {
			color: #fbec04 !important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


add_filter( 'ms_controller_shortcode_membership_login_atts', 'ms_controller_shortcode_membership_login_atts_cb', 99, 1 );
function ms_controller_shortcode_membership_login_atts_cb( $arr ){
    $arr['autofocus'] = false;
    return $arr;
}

add_filter( 'ms_shortcode_logout_message', 'custom_message', 10, 2 );
function custom_message( $msg, $member ) {
    return 'Logged in as ' . $member->name . ' | ' . do_shortcode('[ms-membership-account-link label="Account"]');
}

add_filter('ms_url_after_login', 'redirect_after_login', 100,1);
function redirect_after_login() {
	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	return $url;
}

add_filter('woo_footer_left', 'custom_footer', 10,1);
function custom_footer(){
	$footer_message = '<p>&copy; 2002 &ndash; '.date('Y').' Midwest Zonal Forum &nbsp;All Rights Reserved</p>';
	return $footer_message;
}

?>