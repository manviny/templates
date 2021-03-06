
<!DOCTYPE HTML>
<!--
/*
 * Bootstrap Image Gallery Demo 3.0.1
 * https://github.com/blueimp/Bootstrap-Image-Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>Bootstrap Image Gallery</title>
<meta name="description" content="Bootstrap Image Gallery is an extension to blueimp Gallery, a touch-enabled, responsive and customizable image and video gallery. It displays images and videos in the modal dialog of the Bootstrap framework, features swipe, mouse and keyboard navigation, transition effects, fullscreen support and on-demand content loading and can be extended to display additional content types.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $config->urls->templates?>assets/css/bootstrap2.min.css">
<link rel="stylesheet" href="<?php echo $config->urls->templates?>assets/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="<?php echo $config->urls->templates?>assets/css/bootstrap-image-gallery.css">
<link rel="stylesheet" href="<?php echo $config->urls->templates?>assets/css/demo.css">
</head>
<body>

<div class="container">
    <header>
        <h1><?php echo $page->title ?></h1>

    </header>

    <br>
    <!-- The container for the list of example images -->
    <div id="links">
        
    <div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
        
        <?php foreach($page->images as $i=>$imagen) { ?>
            <a data-gallery="gallery" href="<?php echo $imagen->url ?>" title="<?php echo $imagen->description ?>" >
                <img src="<?php echo $imagen->size(100,100)->url ?>" >
            </a>    
        <?php } ?>    

    </div>        
    </div>
    <br>
</div>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">



    <br>
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $config->urls->templates?>assets/js/jquery.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
<script src="<?php echo $config->urls->templates?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $config->urls->templates?>assets/js/jquery.blueimp-gallery.min.js"></script>
<script src="<?php echo $config->urls->templates?>assets/js/bootstrap-image-gallery.js"></script>
<script src="<?php echo $config->urls->templates?>assets/js/demo.js"></script>
</body> 
</html>
