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
		<link href="fancybox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet" type="text/css" />
		
	</head>
	<!-- HEAD BEIGAS -->

	<body>
		<!-- BODY SĀKUMS -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><i class="fa fa-home"></i></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#"><i class="fa fa-phone"></i> Kontakti</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-picture-o"></i> Galerija <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li role="separator" class="divider"></li>
								<li>
									<a href="rock.php"><i class="fa fa-hand-rock-o"></i> Rock</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="metal.php"><i class="fa fa-star-o"></i> Power Metal</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="numetal.php"><i class="fa fa-star"></i> Nu Metal</a>
								</li>
								<li role="separator" class="divider"></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="register.php"><i class="fa fa-users"></i> Reģistrēties</a>
						</li>
						<li>
							<a href="login.php"><i class="fa fa-user-secret"></i> Ielogoties</a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div class="container">
			<div class="blog-header">
				<h1 class="blog-title">Galerija</h1>
				<p class="lead blog-description">
					Metāls
				</p>
			</div>
			<div class="row">
				<div class="col-sm-12 blog-main">
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/disturbed2.jpg">
		                    <img class="img-responsive th" src="images/disturbed2.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/korn.jpg">
		                    <img class="img-responsive th" src="images/korn.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/lp.jpg">
		                    <img class="img-responsive th" src="images/lp.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/images.png">
		                    <img class="img-responsive th" src="images/images.png" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/godsmack.jpg">
		                    <img class="img-responsive th" src="images/godsmack.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/papa.jpg">
		                    <img class="img-responsive th" src="images/papa.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/limp.jpg">
		                    <img class="img-responsive th" src="images/limp.jpg" alt="bilde">
		                </a>
		            </div>


		             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/mud.jpg">
		                    <img class="img-responsive th" src="images/mud.jpg" alt="bilde">
		                </a>
		            </div>

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

		<script language="javascript" type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
		<script>
			$(function() {
				$(".fancybox").fancybox({
					helpers: {
						overlay: {
							locked: false
						}
					}
				});
			});			
		</script>

	</body>
</html>