$(document).ready(function(){
console.log("document loaded");
	$("#btn-new-item").click(function(event){
		event.preventDefault();
		var content = $("#content").val();
		var priority = $("#priority").val();
		var due = $("#dueDate").val();

		var data = {
			"content":content
		};
		$.post("todo-json.php", data, function(item){
			console.log(item);
		});
	});

	$("#btn-show-items").click(function(event){
		event.preventDefault();
		$.get("todo-json.php", function(items){
			console.log(items);
		});
	});
});
