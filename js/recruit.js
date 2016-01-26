angular.module('RecruitApp', [])
  .controller('RecruitAppController', ['$http', '$scope', function($http, $scope) {
  var vm = this;
  vm.searchname = searchname;
  vm.searchrepo = searchrepo;
  vm.addnotes = addnotes;
  vm.init = init;
  vm.userarr = [];
  vm.userid = [];

  function init() {
    vm.userarr = [];
  }


  function searchname(search) {
    vm.init();

    $http.get('https://api.github.com/search/users?q=' + search).
    then(function(response) {
      vm.response = response.data;
    });

  }

  function addnotes(notes) {
    //vm.init();
    var ab = notes;
    console.log('asfas', ab);
    $http.get('https://api.github.com/search/users?q=' + search).
    then(function(response) {
      vm.response = response.data;
    });

  }

  function searchrepo(repos) {
    vm.init();
    $http.get('https://api.github.com/users/' + repos + '/repos').
    then(function(repositories) {
      vm.repositories = repositories.data;


      for (var i = 0; i < vm.repositories.length; i++) {
        var object = vm.repositories[i];

        vm.userarr.push(object.name);

      }

    });
  }

}]);


function showDiv() {
  document.getElementById('welcomeDiv').style.display = "block";
}