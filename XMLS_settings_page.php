<div class="wrap">
<h2><?php print XMLS_PUGIN_NAME ." ". XMLS_CURRENT_VERSION. "<sub>(Build ".XMLS_CURRENT_BUILD.")</sub>"; ?></h2>

<form method="post" action="options.php">
    <?php
		settings_fields( 'XMLS-settings-group' );
	?>
    <table class="form-table">
       
        <tr valign="top">
        <th scope="row"><a target="_blank" href="<?php echo site_url(); ?>/sitemap.xml">Click here</a> to view your XML Sitemap</th>
        <td></td>
        </tr>
    </table>
    
    <p class="submit">
    
    Plugin provided by <a target="_blank" href="http://www.sitemaps.io">Sitemaps.io</a>
    </p>

</form>
</div>