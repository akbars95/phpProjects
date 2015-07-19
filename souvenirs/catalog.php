<?php

?>

<!DOCTYPE HTML>
<html ng-app="catalogApp">
<head>
    <?php
    include_once('pieces/p_head.php');
    include_once('pieces/p_css.php');
    include_once('pieces/p_js.php');
    ?>
    <title>Каталог</title>
</head>
<body ng-controller="catalogCtrl">

<?php include_once('pieces/p_menu.php');?>
<div class="left content" ng-init="initImages()">

    <div class="innerSider">
        <div class="left previous" ng-click="previousImage()"></div>
        <div class="left slider">
            <img class="catalogImg" ng-src="{{currentImage.pathImage}}">
            <p>Name - {{currentImage.nameImage}}</p>
            <p>Description - {{currentImage.descriptionImage}}</p>
        </div>
        <div class="left next" ng-click="nextImage()"></div>
        <div class="clear"></div>
    </div>
</div>
<?php include_once('pieces/p_footer.php');?>

</body>
</html>