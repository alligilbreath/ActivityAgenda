<!--  George Hughes -->
<!-- Alli Gilbreath -->

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Activity Agenda</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="header">
<ul>
<li><a href="./home.php?mode=home">Home</a></li>
<li><a href="./login.php?mode=login">Login</a></li>
<li><a href="./register.php?mode=register">Sign Up</a></li>
</ul>
</div>
<hr>
<div id="body">
<h1>Welcome to your Activity Agenda</h1>
<div id="login_prompt"><h3>Login or sign up to start tracking your excercise!</h3><br></div>
<div id="hider">
<div id="add">
<form><fieldset>
<legend>Add Exercise</legend>
<label>Choose Activity </label><select id="activity">
<option id="1" value = "1" disabled>one</option>
<option id="2" value = "2" disabled>two</option>
<option id="3" value = "3" disabled>three</option>
</select>
<label>Time(min) </label><input type="number" id="time" min="1" max="180" disabled>
</fieldset></form>
</div>
<br>
<div id="table">
<h3>Activity Log</h3>
<table>
<tr><th>Activity</th><th>Time</th><th>Calories Burned</th></tr>
<tr><td>~</td><td>0 min</td><td>0</td></tr>
<tr><td>~</td><td>0 min</td><td>0</td></tr>
<tr><td>~</td><td>0 min</td><td>0</td></tr>
<tr><th>Totals:</th><th>0 min</th><th>0 Calories Burned</th></tr>
</table>
</div>
</div>
</div>
</body>

<script>
//Will need AJAX calls in here
	

</script>
</html>