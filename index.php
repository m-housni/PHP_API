
<html>
	<head>
		<title>API Example</title>
	</head>
	<body>
		<div id="container">
			<h2>API Form POST</h2>
			<form method="POST" action="api/client">
				<div>
					<label for="name">Name:</label>
					<input type="text" name="name" id="name" placeholder="Name"/> 
				</div>
				<div>
					<label for="age">Age:</label>
					<input type="text" name="age" id="age" placeholder="Age"/>
				</div>
				<div>
					<label for="gender">Gender:</label>
					<select name="gender" id="gender">
						<option value="M">Male</option>
						<option value="F">Female</option>
					</select>
				</div>
				<div>
					<input type="submit" value="Send" name="btn"  /> 
				</div>
			</form>
		</div>
	</body>
</html>