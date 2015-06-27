"use strict";

(function() {                                  
    var app = angular.module("controllerTest", []);
    
    app.controller("CartController", function() {

    	this.items = [];
    	this.newItem = {
    		"quantity": 1
    	};

    	this.items.push(this.newItem);
    	this.newItem = {
    		"quantity": 1
    	};

    });
})();
