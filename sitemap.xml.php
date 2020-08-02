<?php
header('Content-Type: application/xml; charset=utf-8');
include("classes/zstore.class.php");
$zstore = new zstore();

//get all Products and Categories
$productsMapData = $zstore->getProductsMapData();

?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
	if ($productsMapData) {
		foreach ($productsMapData as $pCats) {
			foreach ($pCats["products"] as $item) {
				echo '<url>
			    <loc>' . $zstore->instUrl . $item->url . '</loc>
			  </url>';
			}
		}

	}
?>
</urlset>