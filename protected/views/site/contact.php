<script>

var app = angular.module("myApp", []);

app.controller("myCtrl", function($scope) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
});

</script>
<div ng-app="myApp" ng-controller="myCtrl">
	{{ firstName + " " + lastName }}
</div>