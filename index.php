<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<?php 
		
		if (($_POST["name"] != "") && ($_POST["email"] !="") && ($_POST["message"] != "")) {

			$message = "Вам пришло сообщение с сайта:\n"
				."Имя отправителя: ".$_POST["name"]."\n"
				."Email отправителя: ".$_POST["email"]."\n"
				."Сообщение отправителя:\n".$_POST["message"];
			$header = "From: lkv@gmail.com";	

			mail ("lkv@gmail.com", "Сообщение с сайта", $message, $header); 
			echo "<h2>Сообщение отправлено!</h2>";
				
		}else {

			echo "<h2>Сообщение не отправлено! Все поля должны быть заполнены!</h2>";

		}
	?>

	<form action="index.php" method="post">
		<input class="input" type="text" name="name" placeholder="Введите имя"><br>
		<input class="input" type="email" name="email" placeholder="Ввдите email"><br>
		<textarea class="textarea" name="message" placeholder="Сообщение..."></textarea><br>
		<input type="submit" value="Отправить">
	</form>
	
</body>
</html>

