jazzapp.controller("ServicoController" , function($scope , ServicoService , $q){

	var _self = this;

	$scope.hairService = [];
	$scope.makeService = [];
	$scope.nailService = [];
	$scope.menService  = [];
	$scope.esthetics   = [];
	$scope.depil 	   = [];

	$scope.currentPage = 1;
	$scope.filteredService = [];
	$scope.numPerPage = 5;
	$scope.controll = '';



	_self.getSalonServices = function(){
		var defer = $q.defer();

		ServicoService.getSalonServices().then(function(response){
			return defer.resolve(response.data);
		});
		return defer.promise;
	}

	_self.getSalonServices().then(function(allServices){
		_self.serviceCategory(allServices.data.salonServices);
	});




	_self.serviceCategory = function(servicos) {
		
		var servico;

		for(i = 0; i < servicos.length; i++ ){
			servico = servicos[i];

			if(servico.categoria_id == 1 && servico.agendamento_online == true) {
				$scope.hairService.push(servico);
			}
			else if(servico.categoria_id == 4 && servico.agendamento_online == true){
				$scope.nailService.push(servico);
			}
			else if(servico.categoria_id == 2 && servico.agendamento_online == true){
				$scope.depil.push(servico);
			}
			else if(servico.servico.search(/masculino/i) != -1 && servico.agendamento_online == true) {
				$scope.menService.push(servico);
			}
			else if(servico.categoria_id == 5 && servico.agendamento_online == true) {
				$scope.makeService.push(servico);
			}
		}
	}




	$scope.changePage = function(array){

		var inicio = (($scope.currentPage - 1) * $scope.numPerPage);
		var final = inicio + $scope.numPerPage;
		$scope.filteredService = array.slice(inicio,final);

		$scope.controll = array;
	}
});