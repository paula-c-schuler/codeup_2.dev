<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<html>
<head>
	<title>My First HTML Form</title>
</head>
	<body>
		<h2>User Login</h2>
		<form method="POST" action="/process-form.php">
		    <p>
		        <label for="username">Username</label>
		        <input id="username" name="username" type="text" placeholder="Enter your Username">
		    </p>
		    <p>
		        <label for="password">Password</label>
		        <input id="password" name="password" type="password" placeholder="Enter your Password">
		    </p>
		    <p>
		        <input type="submit">
		    </p>
		</form>
		<h2>Compose an Email</h2>
		<form method="POST" action="/process-form.php">
		    <p>
		        <label for="recipient">To: </label>
		        <input id="recipient" name="recipient" type="text" placeholder="Enter Recipient's Email">
		    </p>
		    <p>
		        <label for="sender">From: </label>
		        <input id="sender" name="sender" type="text" placeholder="Enter your Email">
		    </p>
		    <p>
		        <label for="subject">Subject: </label>
		        <input id="subject" name="subject" type="text" placeholder="Enter your Subject">
		    </p>
		    <p>
		        <label for="message">Username</label>
		        <input id="message" name="message" type="textarea" placeholder="Write your Message">
		    </p>
		    <p>
		    	<label for="send">Send</label>
		        <input type="submit" id="send">
		    </p>
		</form>
	</body>
</html>
