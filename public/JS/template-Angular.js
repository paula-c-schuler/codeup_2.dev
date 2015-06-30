// NEED TODO: ADD SOME EXAMPLE FUNCTIONS AND ADD DEPENDENCIES

"use strict";

(function() {                                  
    var app = angular.module("templateTest", []);
    // a filter for capitalizing first letter of words in string
    	app.filter('capitalize', function()) {
    		if (input!=null)
    		input = input.toLowerCase();
    		return input.substring(0,1).toUpperCase()+input.substring(1);
    	}
    });

	app.controller("ApolloController", )
		this.users = [];

		this.newUser = {};

		this.saveUser = function(userForm) {

			this.users.push(this.newUser);

			this.newUser = {};
		}

	// using service -- code not finished
	app.controller("ApolloController", ["$log", function($log) {
		this.users = [];

		this.newUser = {};

		this.saveUser = function(userForm) {

			this.users.push(this.newUser);

			this.newUser = {};
	}])
})();
