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
<option disabled>Gym Activities</option>
<option id="weight" value = "1" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Weight Lifting</option>
<option id="aerobics" value = "2" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Aerobics</option>
<option id="treadmill" value = "3" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Treadmill</option>
<option id="elliptical" value = "4" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Elliptical</option>
<option id="stat_bike" value = "5" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Stationary Bicycling</option>
<option id="stat_row" value = "6" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Stationary Rowing</option>
<option disabled>Outdoor / Sports</option>
<option id="running" value = "7" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Running</option>
<option id="bike" value = "8" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Bicycling</option>
<option id="soccer" value = "9" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Soccer</option>
<option id="golf" value = "10" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Golf</option>
<option id="volleyball" value = "11" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Volleyball</option>
<option id="softball" value = "12" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Softball</option>
<option id="tennis" value = "13" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Tennis</option>
<option id="swimming" value = "14" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Swimming</option>
<option disabled>Other</option>
<option id="easy" value = "15" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Easy Activity</option>
<option id="moderate" value = "16" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Moderate Activity</option>
<option id="vigorous" value = "17" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Vigorous Activity</option>
</select>
<label>Time(min) </label><input type="number" id="time" min="1" max="180" disabled>
<input type="submit" disabled>
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