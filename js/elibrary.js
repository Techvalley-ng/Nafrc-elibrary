//######################################################## anguler js ################################
var Nafrcelibrary = angular.module('Nafrcelibrary', ['ui.router','ngRoute']);
Nafrcelibrary.config(function($stateProvider, $urlRouterProvider,$routeProvider){
    $urlRouterProvider.otherwise("/login");
    $stateProvider
    .state('login', {
				url: '/login',
				views: {
				     'libraryview': {
				        controller: 'Nafrclibrary', 
                       templateUrl:"/pages/login.php"
                    }
                    
				}
				
			})
	.state('adminportal', {
				url: '/adminportal',
				views: {
				     'libraryview': {
				        controller: 'Nafrclibrary', 
                       templateUrl:"/pages/adminportal.php"
                    }
                    
				}
				
			})
	.state('workshopbooks', {
				url: '/workshopbooks',
				views: {
				     'libraryview': {
				        controller: 'Nafrclibrary', 
                       templateUrl:"/pages/workshopbooks.php"
                    }
                    
				}
				
			})
	.state('addnewbook', {
				url: '/addnewbook',
				views: {
				     'libraryview': {
				        controller: 'Nafrclibrary', 
                       templateUrl:"/pages/addnewbook.php"
                    }
                    
				}
				
			})
	.state('booklist', {
				url: '/booklist',
				views: {
				     'libraryview': {
				        controller: 'Nafrclibrary', 
                       templateUrl:"/pages/booklist.php"
                    }
                    
				}
				
			})
	.state('memberportal', {
				url: '/memberportal/:ctid',
				views: {
				     'libraryview': {
				        controller: 'Nafrclibrary', 
                       templateUrl:"/pages/memberportal.php"
                    }
                    
				}
				
			})		
	.state('onlinebooks', {
				url: '/onlinebooks',
				views: {
				     'libraryview': {
				        controller: 'Outportal', 
                        templateUrl:"/pages/onlinebooks.php"
                    }
                    
				}
				
			})
	.state('internet', {
				url: '/internet',
				views: {
				     'libraryview': {
				        controller: 'Outportal', 
                        templateUrl:"/pages/internet.php"
                    }
				}
			})
	.state('pdfviwer', {
				url: '/pdfviwer/:bookurl',
				views: {
				     'libraryview': {
				        controller: 'Pdfviwer', 
                        templateUrl:"/pages/pdfviewer.php"
                    }
				}
			});		
});   
//***************************************** controller *****************************
Nafrcelibrary.controller('Nafrclibrary', ["$scope","$http","$stateParams", function($scope,$http,$stateParams){
    	// ******************************************** LOGIN ***************************
	
	$(document).ready(function (){
	    //login with JS and validation
	    $("#login").click(function(event) {
	        var username = $("input[name='username']").val();
        	var password = $("input[name='password']").val();
        	
        		if(username == ""){
        		$('.login-box').shake();
        		$("input[name='username']").css("background-color","#cc0000");
        		$("input[name='username']").focus();
        		
        		$("input[name='username']").keypress(function(){
        		  $("input[name='username']").css("background-color","#ffffff");  
        		});
        	}
        	else if(password == ""){
        	    $('.login-box').shake();
        		$("input[name='password']").css("background-color","#cc0000");
        		$("input[name='password']").focus();
        		
        		$("input[name='password']").keypress(function(){
        		  $("input[name='password']").css("background-color","#ffffff");  
        		});
        	}
        	else {
        	    //username and password not empty
        	    if((username=="admin") && (password=="library")){
        	        //admin login
        	        window.alert("You Have Successfully Login As Admin");
        	       window.location.href="#!/adminportal";
        	        
        	    }
        	    else if((username=="library") && (password=="nafrc")){
        	        //menber login
        	         window.alert("You Have Successfully Login As Member");
        	        window.location.href = "#!/memberportal/g1";
        	        
        	    }
        	    else{
        	        //username or password not correct
        	        window.alert("Sorry Your Username Or Password Not Correct");
        	        
        	        $("input[name='username']").css("background-color","#cc0000");
        	        $("input[name='password']").css("background-color","#cc0000");
        	        
        	        
        	    }
        	    
        	}
	    });    	
	});
	// **********************************************  END OF LOGIN ******************
	
	$http.get('/json/bookscategory.json').then(function successCallback(response) {
    // this callback will be called asynchronously
    // when the response is available
         $scope.bookscategory=response.data;
      }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        window.alert(response.data);
      });
      
      
    $http.get('/json/section.json').then(function successCallback(response) {
    // this callback will be called asynchronously
    // when the response is available
	     $scope.librarysectiondata=response.data;
	   
	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	    window.alert(response.data);
	   
	  });
	  
	  $http.get('/json/books.json').then(function successCallback(response) {
    // this callback will be called asynchronously
    // when the response is available
	     $scope.booksdata=response.data;
	   
	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	    window.alert(response.data);
	   
	  });
    
   
      
	//checking the on click for tab
	$scope.whichcategory=$stateParams.ctid;
	
	$("#newbook").submit(function(event) {
		window.alert("You Have Successfully Added A New Book");
		});		

    
}]);

Nafrcelibrary.controller('Outportal', ["$scope","$http", function($scope,$http){
	
	
	
}]);

Nafrcelibrary.controller('Pdfviwer',["$scope", "$stateParams", function($scope, $stateParams){
	
	$scope.whichbook="../books/"+$stateParams.bookurl;
	
}]);




