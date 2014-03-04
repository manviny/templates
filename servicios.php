<?php include("./myhead.inc"); ?>

<?php  foreach($page->children() as $seccion) {  ?>
		<li>
          <a href='<?php echo $seccion->url ?>'><?php echo $seccion->title ?></a>
        </li>
<?php } ?>



<?php include("./myfoot.inc");  ?>
