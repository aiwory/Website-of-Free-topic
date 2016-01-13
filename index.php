<?php
	include("./class/template.php");
	$template=new template_class();
?>

<!DOCTYPE html>
<html lang="lv">
	<head>
		<?php
			$template->getHead();
		?>

		<title>Sākums</title>
	</head>
	<body>
		<section class = "container-fluid">
			<section class = "row main-menu">
				<?php
					$template->getMenu();
				?>
			</section>
			<section class = "row main-content">
				<aside class = "col-md-1">

				</aside>
				<main class="col-md-10 jumbotron">
					<article>
					<h1>Saules sistēma</h1>
					<p style="text-align:center">Šī mājaslapa satur nelielu aprakstu par katru Saules sistēmas planētu.</p>
					</article>
				</main>
				<aside class="col-md-1">

				</aside>
			</section>

			<section class = "row">
				<?php
					$template->getFooter();
				?>
			</section>
		</section>

		<?php
			$template->getRegistration();
			$template->getLogin();
		?>


		<?php
			$template->getJS();
		?>

	</body>
</html>