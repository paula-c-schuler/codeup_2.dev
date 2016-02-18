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
			console.log(item.content);
		});
	});

	$('#btn-show-items').click(function(event){
		event.preventDefault();
		$.get("todo-json.php", function(items){
			for(var i = 0; i < items.length; i++){
			// items.forEach(function(element,index){
				console.log(items[i].content);
				console.log(items.length);
				console.log(items.priority);
				rowString = "";
				rowString += "<tr>" + 
						"<td>" +
							items[i].content + 
						"</td>" +
						"<td>" + 
							items[i].priority + 
						"</td>" +
						"</tr>";
			
			$('#resultsRows').html(rowString);
			}
		})
	});
});
