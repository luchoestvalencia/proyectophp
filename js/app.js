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
						}).when('/loteria',{
							templateUrl : 'loteria.html'
						}).when('/chance',{
							templateUrl : 'chance.html'
							}).when('/cuatro_cifras',{
								templateUrl : 'cuatro_cifras.html'
							}).when('/tres_cifras',{
									templateUrl : 'tres_cifras.html'
							}).when('/dos_cifras',{
									templateUrl : 'dos_cifras.html'
							}).when('/una_cifra',{
									templateUrl : 'una_cifra.html'
						}).when('/zodiaco',{
								templateUrl : 'zodiaco.html'
							}).when('/cuatro_zodiaco',{
									templateUrl : 'cuatro_zodiaco.html'
							}).when('/tres_zodiaco',{
								templateUrl : 'tres_zodiaco.html'
							}).when('/dos_zodiaco',{
								templateUrl : 'dos_zodiaco.html'
						}).when('/resultado',{
							templateUrl : 'resultado.html'
						})
						.otherwise({redirectTo: '/home'});
						

							

					}]);