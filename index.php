<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Où est-ce qu’on bouffe à midi ?</title>
<meta name="description" content="Où est-ce qu’on bouffe à midi ?">
<meta name="keywords" content="Où est-ce qu’on bouffe à midi ?">
<link rel="shortcut icon" type="image/x-icon" href="/bouffe/new_cv/img/favico.png">
<link rel="stylesheet" type="text/css" href="/bouffe/style.css">
<script type="text/javascript">
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-15185486-2']);
				_gaq.push(['_trackPageview']);
				(function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
			</script>
</head>
<body style="background-image:url(/bouffe/img/bg_<?php echo rand(1,26); ?>.jpg), url(/bouffe/new_cv/img/trame.png);" onClick="window.location.reload( true );">
<div id="wrapper">
<div id="cv">
<h1>Où est-ce qu’on bouffe à midi ?</h1>
<?php
$input = array(
				"Subway", 
				"Pita", 
				"Lekker", 
				"Kebab", 
				"McDo", 
				"Sushi Shop", 
				"Jap", 
				"Aris", 
				"la boulange du métro", 
				"la boulange Louise Michel", 
				"la boulange Niel",
				"la boulange secrète",
				"la boulange en face de Sushi Shop",
				"au Briard",
				"Bagel secret",
				"On a faim !",
				"Trattoria", 
				"Bibimbap",
				"Le Lotus Bleu",
				"Damas", 
				"le chinois",
				"La petite assiette",
				"Pizzeria Torino"
				);
$rand_keys = array_rand($input, 2);?>
<p>Ben on a qu’à aller chez <strong><?php echo $input[$rand_keys[0]];?></strong>,<br /> Ou au pire chez <strong><?php echo $input[$rand_keys[1]];?></strong>.</p>
</div>
</div><!-- fin wrapper -->
</body>
</html>