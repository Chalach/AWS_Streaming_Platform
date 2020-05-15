<?php 
require('db.php');
?>

<?php
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']); // removes backslashes
	$username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);

	$trn_date = date("Y-m-d H:i:s");
	$query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<div class='form'><h3>BENUTZER WURDE ANGELEGT!</h3></div>";
	}
}else{
?>
<div class="form">
<h2>Benutzer erstellen</h2><br>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Benutzername" required /><br><br>
<input type="email" name="email" placeholder="Email" /><br><br>
<input type="password" name="password" placeholder="Passwort" required /><br><br>
<button class="btn btn-primary" name="submit" type="submit">Erstellen</button>
</form>
</div>
<?php } ?>