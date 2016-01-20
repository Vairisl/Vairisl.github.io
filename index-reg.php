<?php
include ('class/base.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!--HEAD SĀKUMS -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Darbs</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

		<link href="css/style.css" rel="stylesheet" type="text/css" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- JQUERY CSS -->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

		<!--FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	</head>
	<!-- HEAD BEIGAS -->

	<body>
    <?php
    $template = new templateClass();
    $template->getLogMenu();
    ?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 blog-main">
					<div class="container">
						<h1>Sveicināti!</h1>
						<hr>
						<div class="row">
							<!-- left column -->
							<div class="col-md-3">
								<div class="text-center">
									<img src="images/index.jpg" class="avatar img-circle" alt="avatar">
								</div>
							</div>
							<!-- edit form column -->
							<div class="col-md-9 personal-info">
								<h3>Uzstādījumi</h3>

								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-lg-3 control-label">Vārds/Uzvārds:</label>
										<div class="col-lg-8">
											<input class="form-control" value="Vārds/Uzvārds" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">E-pasts:</label>
										<div class="col-lg-8">
											<input class="form-control" value="example@inbox.com" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Adrese:</label>
										<div class="col-lg-8">
											<input class="form-control" value="Adrese" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Jaunā parole:</label>
										<div class="col-md-8">
											<input class="form-control" value="" type="password">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Atkārtot paroli:</label>
										<div class="col-md-8">
											<input class="form-control" value="" type="password">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label"></label>
										<div class="col-md-8">
											<input class="btn" value="Save Changes" type="button">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<hr>

				</div><!-- /.row -->
			</div><!-- /.container -->
		</div>
		</div>
		<!--JQUERY -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

		<!--JQUERY UI -->
		<script type="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
		crossorigin="anonymous"></script>
	</body>
</html>