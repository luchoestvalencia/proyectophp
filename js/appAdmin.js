//creamos el primer modulo llamado app, por ahora no incluiremos o inyectaremos ninguna dependencia
var appModule = angular.module('app',["ngRoute"]);

//Establecemos una configuracion inicial 

//ESte metodo se ejecutará al cargar el modulo por primera vez
appModule.config(['$routeProvider', '$locationProvider',
					function($routeProvider,$locationProvider ){

						//Agrega una regla para que al aparecer esta url,
						//el componente con ng-view cargue el template Blog.html
						$routeProvider.when('/home',{
							templateUrl : 'home.html'

						}).when('/empleados',{
							templateUrl : 'empleados.html'
						}).when('/adminChance',{
							templateUrl : 'adminChance.html'
							}).when('/loteriasAdmin',{
								templateUrl : 'loteriasAdmin.html'
							})
						.when('/estadistica',{
							templateUrl : 'estadistica.html'
						})

						.when('/misApuestas',{
							templateUrl : 'misApuestas.html'
						})
						.when('/loteria',{
							templateUrl : 'loteria.html'
						}).when('/resultado',{
							templateUrl : 'resultado.html'
						})



						.otherwise({redirectTo: '/home'});							

					}]);

