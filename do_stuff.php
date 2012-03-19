<?php
include("../../../wp-blog-header.php");



//get the options and send back to ajax call
$large = get_option('ioslider_large_ids');
$large = str_replace(' ','',$large);
$medium = get_option('ioslider_medium_ids');
$medium = str_replace(' ','',$medium);
$small =get_option('ioslider_small_ids');
$small = str_replace(' ','',$small);

echo $large."|".$medium."|".$small;


?>