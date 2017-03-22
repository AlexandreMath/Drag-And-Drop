app.controller('MainCtrl', function ($scope) {
  $scope.centerAnchor = true;
  $scope.toggleCenterAnchor = function () {$scope.centerAnchor = !$scope.centerAnchor}
  $scope.draggableObjects = [{name:'subject1'}];
  $scope.droppedObjects1 = [];
  $scope.onDropComplete1=function(data,evt){
    var index = $scope.droppedObjects1.indexOf(data);
    if (index == -1){
      $scope.droppedObjects1.push(data);
    }
  }
  $scope.onDragSuccess1=function(data,evt){
    console.log("133","$scope","onDragSuccess1", "", evt);
    var index = $scope.droppedObjects1.indexOf(data);
    if (index > -1) {
      $scope.droppedObjects1.splice(index, 1);
    }
  }
  var inArray = function(array, obj) {
    var index = array.indexOf(obj);
  }
});
