<?php require("validation.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>2. periood 5. praktikum</title>
	<style>
		.form_message{
			font-weight:bold;
		}
	</style>
</head>
<body>
	<pre>
		<?php print_r($_POST); ?>
	</pre>
	<form action="index.php" method="post">
		<div>
			<div class="form_message">
				<?php 
				if ($isSubmitted){
					echo $usernameMessage;
				}
				?>
			</div>
			<span>Kasutajanimi:</span>
			<input type="text" name="username">
		</div>
		<div>
			<input type="submit" name="submit" value="Saada">
		</div>
	</form>
</body>
</html>