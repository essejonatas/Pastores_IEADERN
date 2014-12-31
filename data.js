var app = angular.module("IEADERN",[]);

app.controller('setores', function($scope, $http){
	var sectors = [];
	var stop = false;
	function loadSectors(){
		for(var i = 1; i < 11; i++){
			

			$http.get('data/setor'+ i +'.json')
			.success(function(data){
				console.log(data);
				sectors[sectors.length] = data;
			})
			.error(function(data,status){
				console.log(status);
				stop = true;
			});

		}
	}
	loadSectors();
	$scope.sectors = sectors;
});
