<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="flex-container">

	<div class="header"> <?php include 'header.inc.php' ?> </div>

	<h1> <?php echo $greeting ?> </h1>
	<div class="about">
		<div> <?php echo $myPhoto ?> </div>
		<p>
			Меня зовут <?php echo $name, ' ', $surname ?> <br>
			город <?php echo $city ?> <br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
            Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
        </p>
	</div>
	<div class="knowledge"> <?php include 'knowledge.inc.php' ?>  </div>
	<div class="footer"> <?php include 'footer.inc.php' ?> </div>
</div>
</body>
</html>