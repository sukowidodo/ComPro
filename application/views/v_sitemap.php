<?php ob_start();
header('Content-type: application/xml; charset="ISO-8859-1"',true);?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url();?></loc>
     <priority>1.0</priority>
  </url>
  <?php foreach($produk as $data) { ?>
  <url>
     <loc><?php echo base_url('blogs/artikel').'/'.$data->slug;?></loc>
     <priority>0.5</priority>
     <lastmod><?php echo $data->date;?></lastmod>
  </url>
  <?php } ?>
  <?php foreach($buku as $data) { ?>
  <url>
     <loc><?php echo base_url('buku/detail').'/'.$data->slug;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>
  <?php foreach($slider as $data) { ?>
  <url>
     <loc><?php echo base_url('blog/s').'/'.$data->slug;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>
</urlset>
<?php ob_end_flush();?>