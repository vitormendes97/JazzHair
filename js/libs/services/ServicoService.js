jazzapp.service("ServicoService" , function($http){
	this.getSalonServices = function() {
		return $http.get("http://apidev.salaovip.com.br/salao/6318/servicos");
	}
})