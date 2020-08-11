<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="startGame.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Snakes and Ladders</title>
</head>
<body>
	<h2>Snakes and Ladders</h2>
	<div class="container">
		<div class="flex-items">
			<form class="standard-form" method="get" action="board.php">
				<div class="dimensions">
					<div>Dimensions</div>
					<div> 
						<label>Rows</label>
						<input type="number" name="row">
					</div>
					<div>
						<label>Columns</label>
						<input type="number" name="col">
					</div>
				</div>
				<div class="players">
					<div>Num of Players</div>
					<label>Players</label>
					<input type="number" name="players">
				</div>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
</body>
</html> 