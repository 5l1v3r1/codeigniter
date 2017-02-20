<?php header("Content-type: text/xml; charset=utf-8"); ?>
<?= '<?xml version="1.0" encoding="UTF-8"?>'."\n"; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<url>
	<loc><?php echo base_url(); ?></loc>
	<changefreq>daily</changefreq>
	<priority>1.0</priority>
</url>

<url>
	<loc><?php echo base_url().$hakkimizda; ?></loc>
	<changefreq>weekly</changefreq>
	<priority>0.8</priority>
</url>

<url>
	<loc><?php echo base_url().$iletisim; ?></loc>
	<changefreq>weekly</changefreq>
	<priority>0.8</priority>
</url>

<?php // Sorgu
foreach ($sorgu as $sorgular) : ?>
	<url>
		<loc><?php echo base_url().$sorgular->slug; ?></loc>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
<?php endforeach; ?>

</urlset>