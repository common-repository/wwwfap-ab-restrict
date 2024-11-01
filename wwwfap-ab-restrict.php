<?php
/*
Plugin Name: wwwFap AB Restrict
Description: Detects the use of ad blockers, restricts access with overlay and displays a notice to turn off ad-blocker. 
Version: 1.0.0
Author: wwwFap
Author URI: https://adultswag.com/ 
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
Text Domain: wwwfap-ab-restrict

This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
General Public License version 2, as published by the Free Software Foundation. You may NOT assume 
that you can use any other version of the GPL.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function wwwfap_ab_restrict_style() {
    echo '<style>
#UlwyVAzmnkYS {clear: both;display: none;position: fixed;width: 100%;height: 100%;top: 0;left: 0;bottom: 0;right: 0;z-index: 9999999999999;overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.8);}#UlwyVAzmnkYS .notice {position: absolute;top: 50%;left: 50%;-moz-transform: translate(-50%, -50%);-o-transform: translate(-50%, -50%);-webkit-transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);margin: 0;background-color: #fefefe;padding: 15px;border: 10px solid #d30000;width: 500px;max-width: calc(98% - 50px);color: #000;text-align: center;font-family: Arial, Helvetica, sans-serif;font-size: 18px;}#UlwyVAzmnkYS .red {color: #d30000;font-weight: bold;}#UlwyVAzmnkYS .big {font-size: 130%;}
</style>'."\n";
}
add_action('wp_head', 'wwwfap_ab_restrict_style');

function wwwfap_ab_restrict_notice() {
    echo '<div id="UlwyVAzmnkYS">
    <div class="notice"><span class="red big">It looks like you are using an ad-blocker!</span><br />Ad blockers may cause some areas of this website to malfunction. Please <span class="red">disable ad blocker and refresh page</span> to continue. Thank you!</div>
</div>

<script src="'.plugins_url( 'banner_ads_300_250.js', __FILE__ ).'" type="text/javascript"></script>
<script type="text/javascript">

if(!document.getElementById("VbatOlNCpWPT")){
  document.getElementById("UlwyVAzmnkYS").style.display="block";
}

</script>'."\n";
}
add_action('wp_footer', 'wwwfap_ab_restrict_notice');
