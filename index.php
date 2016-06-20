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
				<aside class = "col-md-3">
					<?php
						if($user->getSessionStatus()==true){
							$template->getUserpanel();
						}

					?>

				</aside>
				<main class="col-md-6 jumbotron">
					<article>
					<h1>Saules sistēma</h1>
					<p style="text-align:center">Šī mājaslapa satur nelielu aprakstu par katru Saules sistēmas planētu.</p>
					</article>
				</main>
				<aside class="col-md-3">
					<!--
					<form role="form" action="index.php" method="post">
						<div class="form-group">
							<label for="usr">Ievadiet lietotājvārdu:</label>
							<input type="text" class="form-control" id="usr" name="userNickname">
						</div>
						<div class="form-group">
							<label for="email">Ievadiet e-pastu:</label>
							<input type="email" class="form-control" id="email" name="userMail">
						</div>
						<div class="form-group">
							<label for="pwd">ievadiet paroli:</label>
							<input type="password" class="form-control" id="pwd" name="userPw">
						</div>

						<div class="form-group">
							<label for="name">Ievadiet savu vārdu:</label>
							<input type="text" class="form-control" id="name" name="userName">
						</div>
						<div class="form-group">
							<label for="surname">Ievadiet savu uzvārdu:</label>
							<input type="text" class="form-control" id="surname" name="userSurname">
						</div>
						<div class="checkbox">
							<div class="radio">
								<label class="radio-inline"><input type="radio" name="sex" value="m">Vīrietis</label>
								<label class="radio-inline"><input type="radio" name="sex" value="f">Sieviete</label>
							</div>
							<label><input type="checkbox"> Piekrītu noteikumiem</label>
						</div>
						<button name="save" type="submit" class="btn btn-default">Iesniegt</button>
					</form>
					<?php
						/*if(isset($_POST['save'])){
							$user = new userClass();
							$hash = $user->convertPassword($_POST['userPw']);
							echo $hash;
							if (password_verify('qwerty', $hash)) {
							echo 'Password is valid!';
							} else {
								echo 'Invalid password.';
							}
							$user->insertUser($_POST['userNickname'], $_POST['userMail'],
								$hash, $_POST['userName'], $_POST['userSurname'], $_POST['sex']);
						}
						*/
					?>
					-->
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