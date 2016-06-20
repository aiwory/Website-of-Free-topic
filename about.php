<?php
include("./class/template.php");
include("./class/DB_Class.php");
include("./class/userClass.php");
$user=new userClass();
$user->sessionCheck();

$template=new template_class();
?>

<!DOCTYPE html>
<html lang="lv">
	<head>
		<?php
			$template->getHead();
		?>

		<title>Par autoru</title>
	</head>
	<body>
		<section class = "container-fluid">
			<section class = "row main-menu">
				<?php
					$template->getMenu();
				?>
			</section>

			<section class = "row main-content">
				<aside class = "col-md-3">
					<h1  class = "hide">Foto</h1>
					<a href="images/mypic2.jpg" rel="lightbox[myself]" title="Nakts pastaiga pa Vecrīgu"><img id="my-photo" class="img-responsive img-thumbnail" src="images/mypic2.jpg"></a>

					<div class="form-group">
						<label for="comment">Pievienot komentāru:</label>
						<input type="text" id="checkListItem" class="form-control" id="usr">
						<button id="submit_button" type="button" class="btn btn-default">Iesniegt</button>
					</div>
					<div id="list">
					</div>
				</aside>
				<main class="col-md-6 jumbotron">
					<article>
						<h2>Kas es esmu?</h2>
						<p> Mani sauc Aigars Ivaņenko. Esmu dzimis 1993. gada 5. jūlijā. Šobrīd apgūstu programmēšanas tehniķa profesiju Rīgas Valsts tehnikumā.</p>
					</article>
					<article>
						<h2>Kāpēc planētas?</h2>
						<p>Kad biju mazs, mani ļoti interesēja visuma uzbūve. Tāpēc par attiecīgo tēmu lasīju visus pieejamos materiālus, kādus vien varēju dabūt. Arī pieaugušam esot interese nav pilnībā zudusi, tāpēc arī uztaisīju lapu par šo tēmu.</p>
					</article>
				</main>
				<aside class="col-md-3">
					<h1  class = "hide">Google map</h1>
					<div id="map" class="img-responsive" style="width:400px;height:400px">
						<script src="https://maps.googleapis.com/maps/api/js"></script>
						<script>
							var myCenter=new google.maps.LatLng(56.9359921,24.16445580000004);

							function initialize()
							{
								var mapProp = {
								  center:myCenter,
								  zoom:15,
								  mapTypeId:google.maps.MapTypeId.ROADMAP
							};

							var map=new google.maps.Map(document.getElementById("map"),mapProp);

							var marker=new google.maps.Marker({
								position:myCenter,
								title: 'Kopmītnes Rēznas ielā 10a'

							});

						marker.setMap(map);
						}

						google.maps.event.addDomListener(window, 'load', initialize);
						</script>
					</div>
				</aside>
			</section>

			<section class = "row">
				<?php
					$template->getFooter();
				?>
			</section>

			<?php
				$template->getRegistration();
				$template->getLogin();
			?>
		</section>

		<?php
			$template->getJS();
		?>
	</body>
</html>