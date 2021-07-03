// START - USED SERVICES
/*
 *	CompanyService.delete
 *		PARAMS: 
 *					ObjectId id - Id Company
 *		
 *
 *	CompanyService.list
 *		PARAMS: 
 *		
 *
 */
// END - USED SERVICES

// START - REQUIRED RESOURCES
/*
 * CompanyService  
 */
// END - REQUIRED RESOURCES


//CRUD LIST FOR [object Object]

app.controller('CompanyListController', ['$scope', 'CompanyService',
    function ($scope, CompanyService ) {
		
    	$scope.list = CompanyService.query();
    	
}]);