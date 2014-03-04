<?php include("./myhead.inc"); ?>
    	 
         
<div class='container'>         
<div class='carousel-inner'>


        <div class='item active'>
        
          <div class='row bottom-margin'>
          <?php foreach($page->children as $producto) { ?>
              <div class='col-md-4'>
              <div class='blog-teaser animated-when-visible' data-animation-type='flipInX'>
                <img alt='' src='<?php echo $producto->imagen_producto->first()->url ?>' height="200px" weight="200px">
                <h3>
                  <a href='<?php echo $producto->url?>'><?php echo $producto->title ?></a>
                </h3>
                <p>
					<?php 
					//Función de extracción de texto
					$texto = $producto->descripcion_producto;
					$textoresumen = substr($texto,0,strrpos(substr($texto,0,125)," "));
					echo $textoresumen;
			
					?>...
            	</p>
                <a class='continue-reading-link' href='<?php echo $producto->url?>'>Continuar leyendo...</a>
              </div>
            </div>
            <?php } ?>    
            </div>
                    
            </div>

          </div>
          
 </div>
 


<?php include("./myfoot.inc");  ?>