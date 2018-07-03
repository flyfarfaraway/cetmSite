<?php
/**
 * WordPress Generic Request (POST/GET) Handler
 *
 * Intended for form submission handling in themes and plugins.
 *
 * @package WordPress
 * @subpackage Administration
 */

function curllink($linkrep,$datab){

    //create cURL connection
    $curl_connection =   curl_init($linkrep);
    //set options
    curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_USERAGENT,
                "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
    curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);

    //set data to be posted
    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $datab);
    curl_setopt($curl_connection, CURLOPT_ENCODING, "UTF-8" );
    curl_setopt($curl_connection, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8'));
    //perform our request
    $result3 = curl_exec($curl_connection);

    //show information regarding the request
//      print_r(curl_getinfo($curl_connection));
    //close the connection
//    return function_exists('curl_version');
    curl_close($curl_connection);

}
$linkrep ='https://docs.google.com/forms/u/1/d/e/1FAIpQLSeqN2Hvum45zBohZZUUAB4w1XATshovxIvh4FKBSK8aTfGTZw/formResponse';



/** We are located in WordPress Administration Screens */
if ( ! defined( 'WP_ADMIN' ) ) {
	define( 'WP_ADMIN', true );
}

if ( defined('ABSPATH') )
	require_once(ABSPATH . 'wp-load.php');
else
	require_once( dirname( dirname( __FILE__ ) ) . '/wp-load.php' );

/** Allow for cross-domain requests (from the front end). */
send_origin_headers();
require_once(ABSPATH . 'wp-admin/includes/admin.php');

nocache_headers();
echo '<div class="aten-spa">';
echo "<br />";
    $name = urlencode($_REQUEST['name']);
    $phone = urlencode($_REQUEST['phone']);
    $email = urlencode($_REQUEST['email']);    
    $message = urlencode($_REQUEST['message']);    
    $type = urlencode($_REQUEST['type']);
    $home_url = home_url();
    $data = "entry.1217132035=$name&entry.845469800=$phone&entry.698820063=$email&entry.1213400364=$message&entry.1880658388=$type";
    curllink($linkrep,$data);
//    echo "<div style=\"text-align: center;padding-top: 75px\"><img src=\"$home_url/wp-content/themes/cetm/assets/images/thankyou.png\" /></div>";
//    echo "<h2 style=\"text-align: center\">Cảm ơn bạn đã đăng ký nhận thông tin.</h2>";
    echo "<h2 style=\"text-align: center\"><a href='$home_url'>Xin chờ trong giây lát ...</a></h2>";
//echo "<br /><br /><br /><br /><br /><br />";
//echo '</div>';
echo "<script>

    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = \"http://miraway-cetm.com/dang-ki-thanh-cong/\";
    }, 200);

</script>";
?>