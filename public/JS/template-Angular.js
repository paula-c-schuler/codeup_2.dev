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
})();
