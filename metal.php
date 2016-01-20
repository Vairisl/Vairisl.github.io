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
	<?php
	$template = new templateClass();
	$template->getMenu();
	?>

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
		                <a class="thumbnail fancybox" rel="gallery" href="images/3146.jpg">
		                    <img class="img-responsive th" src="images/3146.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/a2.jpg">
		                    <img class="img-responsive th" src="images/a2.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/lal.jpg">
		                    <img class="img-responsive th" src="images/lal.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/mow.jpg">
		                    <img class="img-responsive th" src="images/mow.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/rof.jpg">
		                    <img class="img-responsive th" src="images/rof.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/images.jpg">
		                    <img class="img-responsive th" src="images/slip.jpg" alt="bilde">
		                </a>
		            </div>
		            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		                <a class="thumbnail fancybox" rel="gallery" href="images/sonata.jpg">
		                    <img class="img-responsive th" src="images/sonata.jpg" alt="bilde">
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