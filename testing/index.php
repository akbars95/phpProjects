<?php
include_once "com/mtsmda/testing/pieces/Pieces.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php Pieces::getStyles(); ?>
</head>
<body>

<?php
Pieces::getHeader();
Pieces::getMenu();
?>


    <div class="left"></div>
    <div class="content"></div>

<?php
Pieces::getFooterMenu();
Pieces::getFooter();
?>
</body>
</html>