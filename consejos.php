<?php include("./myhead.inc"); ?>

<?php  foreach($page->children() as $consejo) {  ?>
<div class='container'>
  <div class='row post-loop'>
    <div class='col-md-2 col-md-offset-1'>
      <div class='post-loop-author-info'>
        <div class=''>
          <img alt='' src='<?php echo $consejo->imagen_caso_clinico->first()->url ?>' width="180px">
        </div>
      </div>
    </div>
    <div class='col-md-8'>
      <div class='post-loop-content'>
        <h2 class='has-sub-header'>
          <a href='<?php echo $consejo->url ?>'><?php echo $consejo->title?></a>
        </h2>
        
        <p>
			<?php 
			//Función de extracción de texto
			$texto = $consejo->descripcion_caso_clinico;
			$textoresumen = substr($texto,0,strrpos(substr($texto,0,250)," "));
			echo $textoresumen;
			
			?>...
        </p>
        
      </div>
    </div>
  </div>
 </div>
 
<?php }?>



<?php include("./myfoot.inc");  ?>