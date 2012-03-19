<?php  
    if($_POST['ioslider_hidden'] == 'Y') {  
        $ioslider_large_ids = $_POST['ioslider_large_ids'];
        update_option('ioslider_large_ids', $ioslider_large_ids);

        $ioslider_medium_ids = $_POST['ioslider_medium_ids'];
        update_option('ioslider_medium_ids', $ioslider_medium_ids);

        $ioslider_small_ids = $_POST['ioslider_small_ids'];
        update_option('ioslider_small_ids', $ioslider_small_ids);
		?>
<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>  		
 <?php   } else {  
        //Normal page display  
		$ioslider_large_ids = get_option('ioslider_large_ids');
		$ioslider_medium_ids = get_option('ioslider_medium_ids');
		$ioslider_small_ids = get_option('ioslider_small_ids');
    }  
?>  

<div class="wrap">
<h2>ioslider Options</h2>
<form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
<input type="hidden" name="ioslider_hidden"value="Y" />
<h3>Select the ids that you wish to use for the various size of ioslider</h3>
<h3>Large slide size - 250px x 374px</h3>
<p>Type ids seperated by commas: <input type="text" name="ioslider_large_ids" size="50" value="<?php echo $ioslider_large_ids; ?>" /> <em>Example ioslider_large, my_gallery_large</em></p>
<h3>Medium slide size - 167px x 250px</h3>
<p>Type ids seperated by commas: <input type="text" name="ioslider_medium_ids" size="50" value="<?php echo $ioslider_medium_ids; ?>" /> <em>Example ioslider_medium, my_gallery_medium</em></p>
<h3>Small slide size - 125px x 187px</h3>
<p>Type ids seperated by commas: <input type="text" name="ioslider_small_ids" size="50" value="<?php echo $ioslider_small_ids; ?>" /> <em>Example ioslider_small, my_gallery_small</em></p>
<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
</form>
</div>
