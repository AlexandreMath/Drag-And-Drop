/*Controller qui gère les articles, une première fonctionnalité qui sert à aller chercher les articles dans le json*/
app.controller('ArticlesCtrl', function($scope, $http){
  $http.get( "views/ViewArticle.php").then(function(response){
    $scope.articles = response.data });
    console.log($scope.articles);
    $scope.search = {};
});
