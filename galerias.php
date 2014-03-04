<?php include("./myhead.inc"); ?>
<div class='container'>
  <div class='slogan'>
    <h1>Galerias</h1>
    <h3>Pasa el ratón por encima de la galeria y haz click en ella para visualizarla.</h3>
    <div class='slogan-buttons'>
    </div>
  </div>
 
  <div class='isotope-w'>
  <?php foreach( $page->children() as $galeria ) { ?>
    <div class='item filter-html filter-logo'>
      <div class='portfolio-item portfolio-style-3'>
       <div class='frame-browser' style="min-height:226px !important">
        <figure>
           <a href='<?php echo $galeria->url ?>'><img width="360px" alt='' src='<?php echo $galeria->images->first()->url ?>'></a>
            <figcaption>
              <h5 class='fp-title'>
                <?php echo $galeria->title ?>
              </h5>
              <div class='fp-content'><?php echo $galeria->descripcion_galerias ?></div>
              <div class='fp-buttons'>
                <a class='btn btn-default btn-sm fp-details-btn' href='<?php echo $galeria->url ?>'>
                  <?php echo $galeria->title ?>
                </a>
              </div>
            </figcaption>
          </figure>
       </div>
     </div>
    </div>
    <?php } ?> 
    </div>
 </div>
 <div class='clearfix'>
 </div>
<?php include("./myfoot.inc");  ?>
