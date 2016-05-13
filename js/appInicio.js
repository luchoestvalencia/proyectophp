//creamos el primer modulo llamado app, por ahora no incluiremos o inyectaremos ninguna dependencia
var appModule = angular.module('app',["ngRoute"]);

//Establecemos una configuracion inicial 

//ESte metodo se ejecutará al cargar el modulo por primera vez
appModule.config(['$routeProvider', '$locationProvider',
					function($routeProvider,$locationProvider ){

						//Agrega una regla para que al aparecer esta url,
						//el componente con ng-view cargue el template Blog.html
						$routeProvider.when('/registrarU',{
							templateUrl : 'registrarU.html'
						}).when('/registrarAdmin',{
							templateUrl : 'registrarAdmin.html'
						}).when('/iniciar',{
							templateUrl : 'iniciar.html'
							}).otherwise({redirectTo: '/iniciar'});							

					}]);