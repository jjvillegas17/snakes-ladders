<?php 

session_start();
require 'vendor/autoload.php';
require 'src/endpoints/initBoard.php';

?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="board.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Snakes and Ladders</title>
</head>
<body>
	<h2>Snakes and Ladders</h2>
	<div class="board">
		<div class="cell">
			<span>21</span>
			<div class="player">
				<svg width="100" height="100">
				  <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
				</svg>
			</div>
		</div>
		<div class="cell">22</div>
		<div class="cell">23</div>
		<div class="cell">24</div>
		<div class="cell">25</div>
		<div class="cell">16</div>
		<div class="cell">17</div>
		<div class="cell">
			<span>18</span>
			<div class="line">
				<svg height="300" width="300">
						<line x1="0" y1="0" x2="300" y2="300" style="stroke:rgb(255,0,0);stroke-width:2" />
				</svg>
			</div> 
		</div>
		<div class="cell">
			<span>19</span>
			<div class="player">
				<svg width="100" height="100">
				  <circle cx="50" cy="50" r="40" stroke="red" stroke-width="4" fill="blue" />
				</svg>
			</div>
		</div>
		<div class="cell">20</div>
		<div class="cell">11</div>
		<div class="cell">12</div>
		<div class="cell">13</div>
		<div class="cell">14</div>
		<div class="cell">15</div>
		<div class="cell">6</div>
		<div class="cell">7</div>
		<div class="cell">8</div>
		<div class="cell">9</div>
		<div class="cell">10</div>
		<div class="cell">1</div>
		<div class="cell">2</div>
		<div class="cell">3</div>
		<div class="cell">4</div>
		<div class="cell">5</div>
	</div>
	<div class="controls">
		<div class="turn">
			<p data-turn="1">Turn: Player 1</p>
		</div>
		<div class="roll">
			<button class="primary-button">Roll</button> 
		</div>
	</div> 
	<script src="board.js"></script>
</body>
</html>  -->

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="board.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<title>Snakes and Ladders</title>
	</head>
	<body>
		<h2>Snakes and Ladders</h2>
		<div class="board">
			<?php
				$k = $data["row"] * $data["col"];  
				for ($i = $data["row"] ; $i > 0 ; $i--) { 
					for ($j = $data["col"] ; $j > 0 ; $j--) { ?>
						<div class="cell"><?php echo $k--; ?></div>
					<?php }
				} ?>
		</div>
	</body>
</html>