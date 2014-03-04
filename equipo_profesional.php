<?php include("./myhead.inc"); ?>
<div class='container'>
 <div class='row bottom-margin'>
  <?php  foreach($page->children() as $empleado) {  ?>
    <div class='col-md-3'>
      <div class='team-member animated-when-visible' data-animation-type='bounceInUp' style="min-height:450px">
        <div class='member-avatar'>
          <img alt='' src='<?php echo $empleado->equipoImagen->url; ?>'>
        </div>
        <h3><?php echo $empleado->title; ?></h3>
        <p><?php echo $empleado->equipoCargo; ?></p>
        <div class='member-social'>
          <a href='#'>
            <i class='icon-facebook'></i>
          </a>
          <a href='#'>
            <i class='icon-twitter'></i>
          </a>
          <a href='#'>
            <i class='icon-linkedin'></i>
          </a>
          <a href='mailto:<?php echo $empleado->equipoEmail ?>'>
            <i class='icon-envelope'></i>
          </a>
        </div>
      </div>
    </div>
    <?php } ?>  
</div>
</div>
      
<?php include("./myfoot.inc");  ?>      