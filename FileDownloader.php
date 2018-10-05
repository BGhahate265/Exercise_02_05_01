<!doctype html>


<html>
    <head>
        <title>File Download Error</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
       <p>There was an error downloading "<?php echo htmlentities($_GET['filename']);?></p>
       <p><?php echo htmlentities($errorMsg) ?></p>
        <?php
        $dir = "../Exercise_02_03_01";
        ?> 
        
    </body>
</html>