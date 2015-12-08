<?php
//Allows this page to read and edit session variables
session_start();
?>

<!-- Updated by Douglas Lueben -->

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>UMBC COEIT Engineering and Computer Science Advising Admin Sign In</title>
	<link rel='stylesheet' type='text/css' href='css/standard.css'/>
  </head>
  
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h1>UMBC COEIT Engineering and Computer Science Advising</h1>
		<h2>Admin Sign In</h2>

		<!-- Sign in form -->
        <form action="AdminProcessSignIn.php" method="POST" name="SignIn">

		<!-- Username field -->
	    <div class="field">
	      <label for="UserN">Username</label>
	      <input id="UserN" size="20" maxlength="50" type="text" name="UserN" required autofocus>
	    </div>

		<!-- Password field -->
	    <div class="field">
	      <label for="PassW">Password</label>
	      <input id="PassW" size="20" maxlength="50" type="password" name="PassW" required>
	    </div>

		<!-- Submit button -->
	    <div class="nextButton">
			<input type="submit" name="next" class="button large go" value="Next">
	    </div>
		
	</div>
	</form>
  </body>
  <?php include("footer.html"); ?>
  
</html>
