$(document).ready(function(){
console.log("document loaded");

	$('#btn-new-item').click(function(event){
		event.preventDefault();
		// assigning extracted data to variables for easy manipulation
		var content = $("#content").val();
		var priority = $("#priority").val();
		var datListed = $("#due_date").val();
		var rowString;
		// This variable holds JSON specific values extracted from .click on #btn-new-item
		var data = {
			"content": content,
			"priority": priority,
		};

		// data and funtion portions are optional 
		// funtion is optional
		$.post("todo-json.php", data, function(item){
			console.log(item);
			console.log(item.content);
			console.log(item.priority);

			rowString = "";
			rowString += "<tr>" + 
					"<td>" +
						item.content + 
					"</td>" +
					"<td>" + 
						item.priority + 
					"</td>" +
					"</tr>";
			
			$('#resultsRows').html(rowString);
		});
	});

	$('#btn-show-items').click(function(event){
		event.preventDefault();
		$.get("todo-json.php", function(data){
			console.log(data);
			$.each(data, function(index, element){
				console.log(element);

			});

			// $.each(data(function(element, index){
			// 	console.log(element);
			// 	// console.log(item.content);
			// 	// console.log(item.length);
			// 	// console.log(item.priority);
			
			// }));
		});
	});
});
