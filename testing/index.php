<?php
include_once "com/mtsmda/testing/pieces/Pieces.php";
include_once "com/mtsmda/testing/DAO/UserDAO.php";
include_once "com/mtsmda/testing/model/User.php"
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php
    Pieces::getStyles();
    Pieces::getJSs();
    ?>
</head>
<body>

<?php
Pieces::getHeader();
Pieces::getMenu();


?>

<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"

    </div>
</div>

    <div class="row content">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <?php
        $userDAO = new UserDAO();
        echo "count - " . count($userDAO->selectAll());
        ?>
    </div>
</div>

<?php
Pieces::getFooterMenu();
Pieces::getFooter();
?>
</body>
</html>