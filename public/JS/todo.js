$(document).ready(function(){
console.log("document loaded");
	$('#btn-new-item').click(function(event){
		event.preventDefault();
		var content = $("#content").val();
		var priority = $("#priority").val();
		var dateListed = $("#due_date").val();
		var rowString;

		var data = {
			"content":content,
			"priority": priority
		};
		$.post("todo-json.php", data, function(item){
			console.log(item);
		});
	});

	$('#btn-show-items').click(function(event){
		event.preventDefault();
		$.get("todo-json.php", function(items){
			items.forEach(function(element,index){
				console.log(items[0].content);


			})
			
			// console.log(items.length);
			// console.log(items.priority);
			// rowString = "";
			// rowString += "<tr>" + 
			// 			"<td>" +
			// 				items.content + 
			// 			"</td>" +
			// 			"<td>" + 
			// 				items.priority + 
			// 			"</td>" +
			// 			"</tr>";
			
			// $('#resultsRows').html(rowString);
		})
	});
});
