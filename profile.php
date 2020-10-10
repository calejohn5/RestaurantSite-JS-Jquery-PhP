<?php 
// This page lets a user check view their profile information
//This also calculates how points they are away from a free entree using javascript 

$page_title = 'Change Your Password';
include('includes/header.html');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require('mysqli_connect.php'); // Connect to the db.

	$errors = []; // Initialize an error array.

// Check for an entered email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($conn, trim($_POST['email']));
	}
// Check for an entered password:
	if (empty($_POST['pass'])) {
		$errors[] = 'You forgot to enter your current password.';
	} else {
		$p = mysqli_real_escape_string($conn, trim($_POST['pass']));
	}
	
	if (empty($errors)) { // If everything's OK.
		// Check that they've entered the right email address/password combination:
		$q = "SELECT * FROM users WHERE (email='$e' AND pass='$p')";
		$r = @mysqli_query($conn, $q);
		$num = @mysqli_num_rows($r);
		$info = "";
		if ($num == 1) { // Match was made.

// Get the users info:
            $row = $r->fetch_assoc(); 
            $info .= "<p> First Name : ".$row["first_name"]."</p>";
            $info .= "<p> Last Name :".$row["last_name"]."</p>";
            $info .= "<p> Email : ".$row["email"]."</p>";
            $info .= "<p> Points : ".$row["points"]."</p>";
            $points=$row["points"];
            
// get returned points value from our function that subtracts to find how many more points are needed
            $pdiff= subNums($points); 
        	$info.= "<br><br>Points away from free entree : ".$pdiff;
    
		} 
// Incase of wrong user info
		else { 
			echo '<p class="error">The email address and/or password invalid.</p>';
		}
		mysqli_close($conn); // Close the database connection.

	 } else { // Report the errors.

		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br>\n";
		}
		echo '</p><p>Please try again.</p><p><br></p>';
	} // End of if (empty($errors)) IF.
	mysqli_close($conn); // Close the database connection.
} // End of the main Submit conditional.

// function that calculates needed user points for free entree
function subNums(int $points) {
    return 20 - $points;
}
?>
<h1>View Profile</h1>
<form  method="post">
	<p>Email Address: <input type="email" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">  
	 &nbsp&nbsp Current Password: <input type="password" name="pass" size="20" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>"> &nbsp&nbsp 
	 <input type="submit" name="submit" value="Submit"></p>
<!-- Display our finished variable to display "points away from free entree: x -->
	 <?php
	 echo $info;
     ?>
</form>
<?php 
include('includes/footer.html'); ?> 