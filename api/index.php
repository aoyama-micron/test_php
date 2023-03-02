<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<h1>Hello php</h1>

	<ul>
	<?php
	for($i=0;$i<100;$i++){
		echo '<li>';
		echo $i;
		echo '</li>';
	}
	?>
</ul>
	<img src="https://aoym.noah2.com/pc/src/images/i_user_recom_header.webp">
</body>
</html>
