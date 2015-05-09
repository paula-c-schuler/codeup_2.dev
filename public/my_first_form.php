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
</head>
	<body>
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
		        <input type="submit">
		    </p>
		</form>
		<h2>Compose an Email</h2>
		<form method="POST">
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
		    <label for="sendCopy">Do you want to send a copy to your Sent folder?</label>
		    <input type="checkbox" value="yes" checked>
		    <p>
		    	<label for="send">Send</label>
		        <!-- <input type="submit" id="send" name="send" value="login"> -->
		        <button type="submit" id="send" name="send" value="login"></button>
		    </p>
		</form>

		<form>
			<p>Multiple Choice Test: Which city is your choice to visit?<br>
			<label for="Seattle" class="visit">Seattle</label>
			<input type="checkbox" name="Seattle">
			<label for="New_York_City" class="visit">New York City</label>
			<input type="checkbox" name="New_York_City">
			<label for="London" class="visit">London</label>
			<input type="checkbox" name="London">

			</p>
			<p>Where would you want to live?<br>
			<label for="sanAntonio" class="home">San Antonio</label>
			<input type="checkbox" name="sanAntonio">
			<label for="bigSandy" class="home">Big Sandy</label>
			<input type="checkbox" name="bigSandy">
			<label for="everett" class="home">San Antonio</label>
			<input type="checkbox" name="everett">
			<br>
			<input type="submit">
			</p>

		<form>
			<p>Which are your lodging preferences?<br>
			<label for="petsAllowed" class="visit">Pets Allowed</label>
			<input type="radio" name="petsAllowed">
			<label for="kitchenette" class="preferences">Kitchenette</label>
			<input type="radio" name="kitchenette">
			<label for="handicap" class="preferences">Handicap Access</label>
			<input type="radio" name="handicap">
			<label for="downtown" class="preferences">Downtown</label>
			<input type="radio" name="downtown">
			<label for="airport" class="preferences">Airport</label>
			<input type="radio" name="airport">
			<label for="exercise" class="preferences">Exercise Room</label>
			<input type="radio" name="exercise">
			<br>
			<input type="submit">
			</p>
		</form>
			<p>Select Testing NOT WORKING ON SUBMIT. OTHER SUBMIT BUTTONS WORK
			<label for="testing1">Check box for Yes</label>
			<input type="checkbox" name="testing1" value="1" checked>
			<br>
			<!-- <input type="submit"> -->
			
			</p>
		</form>
	</body>
</html>
