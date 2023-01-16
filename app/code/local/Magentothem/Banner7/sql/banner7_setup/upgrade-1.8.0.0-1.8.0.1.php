<?php
/*------------------------------------------------------------------------
# Websites: http://www.magentothem.com/
-------------------------------------------------------------------------*/ 
$installer = $this;

$installer->startSetup();
try {
		
	$installer->getConnection()->insertMultiple(
		$installer->getTable('admin/permission_block'),
		array(
				array('block_name' => 'banner7/banner7', 'is_allowed' => 1),
				array('block_name' => 'bestsellerproductslider/bestsellerproductslider', 'is_allowed' => 1),
				array('block_name' => 'brandslider/brandslider', 'is_allowed' => 1),
				array('block_name' => 'featuredproductslider/featuredproductslider', 'is_allowed' => 1),
				array('block_name' => 'testimonial/sidebar', 'is_allowed' => 1),
				array('block_name' => 'onsaleslider/onsaleslider', 'is_allowed' => 1),
				array('block_name' => 'producttabs/producttabs', 'is_allowed' => 1),
				array('block_name' => 'blog/menu_sidebar', 'is_allowed' => 1),
				array('block_name' => 'timer/timer', 'is_allowed' => 1),
				array('block_name' => 'catalog/product_list_related', 'is_allowed' => 1),
				array('block_name' => 'page/html', 'is_allowed' => 1),			
				array('block_name' => 'cms/block', 'is_allowed' => 1),
				array('block_name' => 'newsletter/subscribe', 'is_allowed' => 1),
				array('block_name' => 'newproductslider/newproductslider', 'is_allowed' => 1),
				
			)
		);
} catch (Exception $e) {
    Mage::logException($e);
}

$installer->endSetup();