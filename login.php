<!DOCTYPE html>
<html lang="en">
<head>
	<title>La Rustique - Log in</title>
	<?php include 'head.php'; ?>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container-fluid padding-top">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="center">
					<div class="fw login-div-1">
						<div class="center">
							<div class="bg-light login-div-2">
								<div class="row center">
									<div class="col-sm-3"></div>
									<div class="col-sm-6">
										<form class="form-signin" action="loginDef.php" method="POST">
											<div class="login-image-1">
												<a href="index.php">
													<img src="images/larustique.png"  width="225" height="125" alt="La Rustique">
												</a>
											</div>
											<input name="emailaddress" type="email" id="inputEmail" class="form-control" placeholder="E-mailadres" autofocus="" tabindex="1" required><br>
											<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Wachtwoord" tabindex="2" required><br>
											<!--<div class="checkbox">
												<label>
													<input type="checkbox" value="remember-me"> Onthoud mij
												</label>
											</div><br>-->
											<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Log in</button>
										</form>
									</div>
									<div class="col-sm-3"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</body>
</html>	