<?php
     $quotes = [
            0 => 'Even if you&#39;re on the right track, you&#39;ll get run over if you just sit there',
            1 => 'Trust yourself. You know more than you think you do',
            2 => 'You&#39;re going to fall down, but the world doesn&#39;t care how many times you fall down, as loong as it&#39;s one fewer than the number of times you get back up'
        ]
?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Chantal Thomas</title>
	<meta charset="utf-8">
	<link href='css/main.css' rel='stylesheet'>
	<link href='css/normalize.css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
	<div class="container">
		<h1>Chantal Thomas</h1>
		
		<img src='images/me_v2.jpg' alt='Chantal'>

		<h2>About Me</h2>
			<div class="aboutMe">
				<p>
					In a nutshell, my name is Chantal (pronounced Shawn-Tall)! Though, my family and close friends simply call me Tal. And no, I am not tall! I was born,
					and still reside in the D.C, Maryland, Virginia (DMV) area. And with pride, will admit I love this city! A few fun facts about me... I have two fur babies, 
					that I absolutely adore! A French Bulldog named Kobe and a Siamese cat name Kiwi (together they are KK). I referee basketball professionally, I love 
					traveling, I love to eat, and generally just love being surrounded by good vibes!
				</p>
			</div>
		<h2>Random Quote</h2>
		<blockquote>
		<?php echo $quotes[rand(0,2)]; ?>
		</blockquote>

	</div>
</body>
</html>
