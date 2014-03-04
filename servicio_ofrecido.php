<?php include("./myhead.inc"); ?>


<div class='container'>
  <div class='row'>
    <div class='col-md-4'>
      <div class='post-side-bar'>
        <div class='widget widget-author'>
          <div class=''>
            <img alt='' src='<?php echo $page->images->first()->url ?>' width="340px">
          </div>
          <div class='author-meta'>
            <h4 class='author-name' align="center"><?php echo $page->title ?></h4>
             <div class='widget widget-author2'>
            	<?php  foreach($page->siblings as $leftmenu) {  ?>
            	<li>
         			<a href='<?php echo $leftmenu->url ?>'><?php echo $leftmenu->title ?></a>
       			</li>
           		<?php } ?>
            </div>
          </div>
        </div>
       </div>
    </div>
    <div class='col-md-8'>
      <div class='post-single'>

        <h1 class='has-sub-header'><?php echo $page->title ?></h1>

          <hr></hr>                    

        <p>
        <?php echo $page->body ?>
        </p>
        <div class='under-post'>
          <div class='pull-right'>
            <a class='read-next-link' href='<?php echo $page->next->url ?>'>
              Siguiente servicio
              <i class='icon-angle-right'></i>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("./myfoot.inc");  ?>