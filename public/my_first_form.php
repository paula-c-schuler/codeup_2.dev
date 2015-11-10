<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<html>

<!-- EXERCISE 1.4.1 -->
<!-- EXERCISE 1.4.2 -->
<!-- EXERCISE 1.4.4 NOT DONE-->

<head>
	<title>My First HTML Form</title>
	<style type="text/css">
		body	{
			margin-left: 5%;
			font-size: 1.5rem;
		}
		input {
			font-size: 1.25rem;
		}
		button {
			padding: 4px;
			background-color: #2e26666;
			color: black;
			font-size: 1.25rem;
		}
		select {
			/*font-size: 1.25;*/
			/*padding: 5px;*/
			height: 10px;
		}
	</style>
</head>
	<body>
		<!-- USER LOGIN FORM  -->
		<h2>User Login</h2>
		<form method="POST">
		    <p>
		        <label for="username">Username</label>
		        <input id="username" name="username" type="text" placeholder="Enter your Username">
		    </p>
		    <p>
		        <label for="password">Password</label>
		        <input id="password" name="password" type="password" placeholder="Enter your Password">
		    </p>
		    <p>
		        <button type="submit">Submit</button>
		    </p>
		</form>
		<br>
		<!-- COMPOSE AN EMAIL FORM  -->
		<h2>Compose an Email</h2>
		<form method="POST">
		    <p>
		        <label for="recipient">TO: </label>
		        <input id="recipient" name="recipient" type="text">
		    </p>
		    <p>
		        <label for="sender">FROM: </label>
		        <input id="sender" name="sender" type="text">
		    </p>
		    <p>
		        <label for="subject">SUBJECT: </label>
		        <input id="subject" name="subject" type="text">
		    </p>
		    <p>
		        <label for="message">YOUR MESSAGE:</label>
		        <input id="message" name="message" type="textarea" placeholder="Write your Message">
		    </p>
			    <p>Do you want to send yourself a copy?</p>
			    <label for="sendCopy">Yes
			    	<input type="checkbox" value="yes" checked>
			    </label>
			    <br>
		    <p>      
		        <button type="submit" id="send" name="send" value="login">Send It! </button>
		    </p>
		</form>
		<br>
		<!-- MULTIPLE CHOICE TEST first way I learned -->
		<form>
			<h2>Multiple Choice Test:</h2>
			<p><h3>Which city is your choice to visit?</h3></p>
			<label for="Seattle">Polcinego</label>
			<input type="checkbox" value="Seattle" name="visitArray">
			<label for="New_York_City">New York City</label>
			<input type="checkbox" value="New York City" name="visitArray">
			<label for="London">London</label>
			<input type="checkbox" value ="London" name="visitArray">
			<button type="submit">Submit</button>
			<br>
			<br>
			<!-- Using cityArray[] for creating an array -->
			<p><h3>What is your cityArray choice?</h3></p>
			<label>Seattle
				<input type="checkbox" value="Seattle" name="cityArray[]">
			</label>
			<label>New York City
				<input type="checkbox" value="New York City" name="cityArray[]">
			</label>
			<label>London
				<input type="checkbox" value="London" name="cityArray[]">
			</label>
			<button type="submit">Submit</button>
			<br>
			<br>

			<!-- CHECKBOXES ON FORM -->
			<p><h3>Where would you want to live?</h3></p>
			<label>San Antonio
				<input type="checkbox" for"SanAntonio" class="home" name="homeArray[]">
			</label>
			<label>Boston
				<input type="checkbox" for"Boston" class="home" name="homeArray[]">
			</label>
			<label>Helotes
				<input type="checkbox" for"Helotes" class="home" name="homeArray[]">
			</label>
			<br>
			<button type="submit">Submit</button>
			<br>
			<br>

			<!-- CHECKBOXES ON FORM -->
			<p><h3>Which are your lodging preferences?</h3></p>
			<label>Pets Allowed
				<input type="radio" name="petsAllowed">
			</label>
			<label>Kitchenette
				<input type="radio" name="kitchenette">
			</label>
			<label>Handicap Access
				<input type="radio" name="handicap">
			</label>
			<label>Downtown
				<input type="radio" name="downtown">
			</label>
			<label>Airport
				<input type="radio" name="airport">
			</label>
			<br>
			<button type="submit">Submit</button>
			<br>
			<br>
		
			<!-- TEXTAREA TAG -->
			<p><h2>Tell Us What You Think</h2></p>
				<textarea id="comments" name="comments" rows="10" cols="50"></textarea>
				<button type="submit">Submit</button>
			<br>
			<br>

			<!-- SELECT AND OPTION TAGS = Drop Down and Select Option -->
			<label for="state">State
				<select id="state" name="state">
					<option>AL</option>
					<option>AK</option>
					<option>CO</option>
					<option>LA</option>
					<option>OK</option>
					<option>TX</option>
				</select>
			</label>
			<br>
			<br>
			<button type="submit">Submit</button>


		</form>	
	</body>
</html>
