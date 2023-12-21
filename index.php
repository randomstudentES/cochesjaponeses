<!DOCTYPE html>
<html>
<head>
	<?php include("codes/metadata.php")?>
	<title>COCHES JAPONESES</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<meta name="description" content="Esta Web es un ejemplo del tutorial de desarrollo web de Abrirllave.com"/>
	<meta name="keywords" content="recurinfor, recursos de informatica, web de ejemplo, abrirllave"/>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function () {
		  var audio = new Audio('sonido/music.mp3');
		  audio.loop = true;
		  function playAudio() {
		    if (audio.paused || audio.ended) {
		      audio.play();
		    }
		  }

		  // Add a click event listener to the entire document
		  document.addEventListener('click', playAudio);
});
	</script>
</head>
<body class="container">
<?php include("codes/header.php")?>
<?php include("codes/nav2.php")?>
<main>
	<ul>
		<li><a href=".">Inicio</a> &raquo; Coches Japoneses</li>
	</ul>
	<article>
		<h1>Coches Japoneses</h1>
		<aside>
			<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
				<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
				<a class="a2a_button_facebook"></a>
				<a class="a2a_button_whatsapp"></a>
				<a class="a2a_button_twitter"></a>
				<a class="a2a_button_pinterest"></a>
				<a class="a2a_button_print"></a>
			</div>
		</aside>
		<script async src="https://static.addtoany.com/menu/page.js"></script>
		<?php include("codes/article-aside.php")?>
		<p>Este sitio web es un proyecto de <a href="https://my-names-not-rick.netlify.app/craziestmoments" target="_blank">Coches Japoneses</a> de <a href="https://my-names-not-rick.netlify.app/craziestmoments" target="_blank">Javier Liras</a>, donde se muestras los mejores coches para hacer drifting, los más baratos y más.</p>
		<img src="images/Mazda RX-7.png" alt="Mazda RX-7" height="250px" width="500px">
		<h2>Haz click para escuchar música:D</h2>
		<p>Credits: J.I.D - Surround Sound</p>
	</article>
</main>
<?php include("codes/aside.php")?>
<?php include("codes/footer.php")?>
</body>
</html>