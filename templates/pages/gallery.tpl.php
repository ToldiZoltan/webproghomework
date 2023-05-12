<?php
    // Application logic:
    //include('./includes/config.inc.php');
    
    // Collecting data:    
    $images = array();
    $reader = opendir($FOLDER);
    while (($file = readdir($reader)) !== false) {
        if (is_file($FOLDER.$file)) {
            $end = strtolower(substr($file, strlen($file)-4));
            if (in_array($end, $TYPES)) {
                $images[$file] = filemtime($FOLDER.$file);
            }
        }
    }
    closedir($reader);
    
    // Visualization logic:
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <style type="text/css">
        div#gallery {margin: 0 auto; width: 620px;}
        div.image { display: inline-block; }
        div.image img { width: 200px; }
    </style>
    
</head>
<body>
    <div id="gallery">
    <h1>Gallery</h1>
    <?php
    arsort($images);
    foreach($images as $file => $date)
    {
    ?>
        <div class="image">
            <a href="<?php echo $FOLDER.$file ?>">
                <img src="<?php echo $FOLDER.$file ?>">
            </a>            
            <p>Name:  <?php echo $file; ?></p>
            <p>Date:  <?php echo date($DATEFORMAT, $date); ?></p>
        </div>
    <?php
    }
    ?>
    
    </div>
</body>
</html>
