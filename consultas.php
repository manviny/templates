<?php include("./myhead.inc"); ?>


<div class='container'>
<table class="table table-striped">  
        <thead>  
          <tr>  
            <th>Mascota</th>  
            <th>Nombre</th>  
            <th>Nombre del dueño</th>  
            <th>Fecha 1er ingreso</th>  
          </tr>  
        </thead>  
        <tbody>  
        <?php 
		$out = "";
        $mascotas = $pages->find("template=mascota");
		
        foreach ($mascotas as $key => $mascota) {
			$ingreso = $mascota->children->first->title;
			$dia = substr($ingreso,-2);
			$mes = substr($ingreso,-4,2);
			$año = substr($ingreso,-8,4);
        	$out .= 
		        	"<tr>  
			            <td><img src='{$mascota->mascotaImagen->url}' alt='' width='90px'></td>  
			            <td><a href='{$mascota->url}'>{$mascota->title}</a></td>  
			            <td>{$pages->get('id='.$mascota->mascotaPropietario)->title}</td>  
			            <td>{$dia}/{$mes}/{$año}</td>  
		            </tr>  ";
        	
        }
		echo $out;

         ?>

        </tbody>  
      </table> 

</div>
<?php include("./myfoot.inc");  ?>