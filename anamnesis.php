<?php include("./myhead.inc"); ?>



<div class="container">



  <h2 class="header-lined">Anamnesis de <?php echo $page->parent->title ." el dia ". $page->title ?>  </h2>


  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="row bottom-margin">
        <div class="col-md-4">
          <div class="blog-teaser animated-when-visible animated flipInX" data-animation-type="flipInX">
            <img alt="" src="<?php echo $page->anamnesisAnaliticas->first->url ?>">
            <h3>
              <span class="meta-item">
                <i class="icon-time"></i>
                Analíticas 17 Nov, 2013
              </span>
            </h3>
 
            <p>Resultados de la pruebas analíticas.</p>
            <ul class="list-checkmarked text-bigger">
            <?php foreach ($page->anamnesisAnaliticas as $analitica) {
              echo "<li><a href='{$analitica->url}' target='_blank'>{$analitica->description}</a></li>";
            } ?>
            </ul>

          </div>
        </div>
        <div class="col-md-4">
          <div class="blog-teaser animated-when-visible delay-animation-one animated flipInX" data-animation-type="flipInX">
            <img alt="" src="<?php echo $page->anamnesisRx->first->url ?>">
            <h3>
                            <span class="meta-item">
                <i class="icon-time"></i>
                Rx 17 Nov, 2013
              </span>
            </h3>

            <p>Resultados de la pruebas de rayos.</p>
            <ul class="list-checkmarked text-bigger">
            <?php foreach ($page->anamnesisRx as $analitica) {
              echo "<li><a href='{$analitica->url}' target='_blank'>{$analitica->description}</a></li>";
            } ?>
            </ul>

          </div>
        </div>
        <div class="col-md-4">
          <div class="blog-teaser animated-when-visible delay-animation-two animated flipInX" data-animation-type="flipInX">
            <img alt="" src="<?php echo $page->anamnesisElectro->first->url ?>">
            <h3>
                        <span class="meta-item">
                <i class="icon-time"></i>
                Electro 17 Nov, 2013
              </span>
            </h3>
 
            <p>Resultados de las pruebas de electro.</p>
            <ul class="list-checkmarked text-bigger">
            <?php foreach ($page->anamnesisElectro as $analitica) {
              echo "<li><a href='{$analitica->url}' target='_blank'>{$analitica->description}</a></li>";
            } ?>
            </ul>
   
          </div>
        </div>
      </div>
    </div>

  </div>

<div class="slogan text-center">
      <h2 class="header-highlighted">Observaciones</h2>
      <p><?php echo $page->anamnesisObservaciones ?>.</p>
      <div class="slogan-buttons">
     
      </div>
    </div>


  <h2 class="header-lined has-sub-header text-center" style="margin-bottom: -100px;">Valoración general</h2>

  <div class="row">
    <div class="col-md-3">
      <div class="skill">
        <div style="display:inline;width:200px;height:200px;"><canvas width="200" height="200"></canvas><input class="dial" data-fgcolor="#87ceeb" data-linecap="round" data-thickness=".2" type="text" value="<?php echo $page->anamnesisPorcentaje1 ?>" readonly="readonly" style="width: 104px; height: 66px; position: absolute; vertical-align: middle; margin-top: 66px; margin-left: -152px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 40px; line-height: normal; font-family: Arial; text-align: center; color: rgb(135, 206, 235); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
        <h4>Salud</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="skill">
        <div style="display:inline;width:200px;height:200px;"><canvas width="200" height="200"></canvas><input class="dial" data-fgcolor="#34bab3" data-linecap="round" data-thickness=".2" type="text" value="<?php echo $page->anamnesisPorcentaje2 ?>" readonly="readonly" style="width: 104px; height: 66px; position: absolute; vertical-align: middle; margin-top: 66px; margin-left: -152px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 40px; line-height: normal; font-family: Arial; text-align: center; color: rgb(52, 186, 179); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
        <h4>Recuperación</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="skill">
        <div style="display:inline;width:200px;height:200px;"><canvas width="200" height="200"></canvas><input class="dial" data-fgcolor="#e3ce9f" data-linecap="round" data-thickness=".2" type="text" value="<?php echo $page->anamnesisPorcentaje3 ?>" readonly="readonly" style="width: 104px; height: 66px; position: absolute; vertical-align: middle; margin-top: 66px; margin-left: -152px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 40px; line-height: normal; font-family: Arial; text-align: center; color: rgb(227, 206, 159); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
        <h4>Tratamiento</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="skill">
        <div style="display:inline;width:200px;height:200px;"><canvas width="200" height="200"></canvas><input class="dial" data-fgcolor="#d74681" data-linecap="round" data-thickness=".2" type="text" value="<?php echo $page->anamnesisPorcentaje4 ?>" readonly="readonly" style="width: 104px; height: 66px; position: absolute; vertical-align: middle; margin-top: 66px; margin-left: -152px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 40px; line-height: normal; font-family: Arial; text-align: center; color: rgb(215, 70, 129); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
        <h4>Salida</h4>
      </div>
    </div>
  </div>


</div>

<?php include("./myfoot.inc");  ?>