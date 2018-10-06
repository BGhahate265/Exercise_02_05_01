<?php
$dir = "../Exercise_02_04_01";
if (isset($_GET['fileName'])) {
    $fileToGet = $dir . "/" . stripslashes($_GET['fileName']);
    if (is_readable($fileToGet)) {
        $errorMsg = "";
        $showErrorPage = false;
        header("Content-Description: File Transfer");
        header("Content-Type: appilcation/force-download");
        header("Content-Disposition: attachment; filename=\"" . $_GET['fileName'] . "\"");
        header("Content-Transfer-Encoding: base64");
        header("Content-Length: " . filesize($fileToGet));
        readfile($fileToGet);
    }
    else {
        $errorMsg = "Cannot read \"$fileToGet\"";
        $showErrorPage = true;
    }
}
else {
    $errorMsg = "No file name specified";
    $showErrorPage = true;
}
if ($showErrorPage) {
               

?>
<!doctype html>


<html>

<head>
    <title>File Download Error</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>There was an error downloading "<?php echo htmlentities($_GET['fileName']);?>"</p>
    <p><?php echo htmlentities($errorMsg); ?></p>
</body>

</html>
<?php
}
?>
