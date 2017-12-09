//######################################################## anguler js ################################

var Nafrcelibrary = angular.module('Nafrcelibrary', ['ui.router']);

Nafrcelibrary.config(function($stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise("/login");
    $stateProvider
    
    .state('login', {
				url: '/login',
				views: {
				     'libraryview': {
				        controller: 'Libraryportal', 
                       templateUrl:"/pages/login.php"
                    }
                    
				}
				
			})
	.state('memberportal', {
				url: '/memberportal',
				views: {
				     'libraryview': {
				        controller: 'Libraryportal', 
                       templateUrl:"/pages/memberportal.php"
                    }
                    
				}
				
			})
	.state('pdfviewer', {
				url: '/pdfviewer',
				views: {
				     'libraryview': {
				        controller: 'Pdfviewercontroller', 
                       templateUrl:"/pages/pdfviewer.php"
                    }
                    
				}
				
			})	
	.state('onlinebooks', {
				url: '/onlinebooks',
				views: {
				     'libraryview': {
				        controller: 'Pdfviewercontroller', 
                        templateUrl:"/pages/onlinebooks.php"
                    }
                    
				}
				
			})	
	.state('internet', {
				url: '/internet',
				views: {
				     'libraryview': {
				        controller: 'Pdfviewercontroller', 
                        templateUrl:"/pages/internet.php"
                    }
                    
				}
				
			})		
	.state('adminportal', {
				url: '/adminportal',
				views: {
				     'libraryview': {
				        controller: 'Libraryportal', 
                       templateUrl:"/pages/adminportal.php"
                    }
                    
				}
				
			})	
	.state('workshopbooks', {
				url: '/workshopbooks',
				views: {
				     'libraryview': {
				        controller: 'Libraryportal', 
                       templateUrl:"/pages/workshopbooks.php"
                    }
                    
				}
				
			})
	.state('addnewbook', {
				url: '/addnewbook',
				views: {
				     'libraryview': {
				        controller: 'Addnewbook', 
                       templateUrl:"/pages/addnewbook.php"
                    }
                    
				}
				
			})	
	.state('booklist', {
				url: '/booklist',
				views: {
				     'libraryview': {
				        controller: 'Libraryportal', 
                       templateUrl:"/pages/booklist.php"
                    }
                    
				}
				
			});		
    
}); 

//***************************************** controller *****************************
Nafrcelibrary.controller('Libraryportal', function($scope){
	
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
        	        window.location.href = "#!/memberportal";
        	        
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
    
});

Nafrcelibrary.controller('Pdfviewercontroller', function($scope){
	
});
    
Nafrcelibrary.controller('Addnewbook', function($scope){
	
});    









