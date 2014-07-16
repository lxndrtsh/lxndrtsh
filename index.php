<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>lxndrtsh | Kansas Web Developer</title>
	<meta name="author" content="Alexander Tash" />
	<meta name="description" content="kansas city web developer" />
	<meta name="keywords"  content="kansas city web developer, php developer, html developer, css developer, javascript developer, programmer" />
	<meta name="Resource-type" content="Document" />

	
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link href='http://fonts.googleapis.com/css?family=Nunito|Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/custom.css" />
	<link rel="stylesheet" type="text/css" href="css/snippet.min.css" />
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
	
	<script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/snippet.min.js"></script>
	<script type="text/javascript">

		var snippets = {
			"javascript" : "snippets/javascript.txt",
			"php" : "snippets/php.txt"
		};

		$(document).ready(function() {
			$('#fullpage').fullpage();

			$.ajax({
				type: "GET",
				url: snippets.javascript,
				success: function(data) {
					$('pre.js').html(data).snippet("javascript",{style:"ide-eclipse",transparent:false,showNum:false});
				}
			});

			$.ajax({
				type: "GET",
				url: snippets.php,
				success: function(data) {
					$('pre.php').html(data).snippet("php",{style:"ide-eclipse",transparent:false,showNum:false});
				}
			});

		});	
	</script>

</head>
<body>

<div id="fullpage">
	<div class="section " id="section0"><h1>Hello World!</h1><h2>I'm Alexander, and I'm a nerd.</h2></div>
	<div class="section" id="section1">
	    <div class="slide" id="slide1"><h1>I can speak in programming languages.</h1></div>
	    <div class="slide" id="slide2"><pre class="le-snippet js"></pre></div>
	    <div class="slide" id="slide3"><pre class="le-snippet php"></pre></div>
	</div>
	<div class="section" id="section2">
		<div class="intro">
			<h1>Feel free!</h1>
			<p>Using CSS3 gradients you can play as much as you want with graduated colors</p>
		</div>
	</div>
</div>


</body>
</html>