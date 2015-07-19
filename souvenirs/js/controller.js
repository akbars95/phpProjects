catalogApp.controller('catalogCtrl', function ($scope, $http) {

    $scope.getAllImagesURL = "getAllImages.php";

    $scope.images = {};
    $scope.currentImage = {};
    $scope.currentImageIndex = 0;

    $scope.initImages = function(){
        var response = $http.get($scope.getAllImagesURL);

        response.success(function (data, status, headers, config) {
            $scope.images = data;
            $scope.changeImage();
        });

        response.error(function (data, status, headers, config) {
            alert("Error")
        });
    };

    $scope.previousImage = function(){
        $scope.currentImageIndex--;
        if($scope.currentImageIndex < 0){
            $scope.currentImageIndex = 0;
        }
        $scope.changeImage();
    };

    $scope.nextImage = function(){
        $scope.currentImageIndex++;
        if($scope.currentImageIndex > $scope.images.length - 1){
            $scope.currentImageIndex = $scope.images.length - 1;
        }
        $scope.changeImage();
    };

    $scope.changeImage = function(){
        $scope.currentImage = $scope.images[$scope.currentImageIndex];
    }

});


