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
			<div class="blog-header">
				<h1 class="blog-title">Roks, Power metāls un Nu metāls</h1>
				<p class="lead blog-description">
					Blogs, mācību procesa rezultātā.
				</p>
			</div>
			<div class="row">
				<div class="col-sm-12 blog-main">

					<!-- start blog-post -->
					<div class="blog-post">
						<h2 class="blog-post-title">Kaut kas par roku.</h2>
						<p class="blog-post-meta">
							14 Decembris, 2015 <a href="#">Admin</a>
						</p>
						<p><img src="images/led.jpg" style="max-width:100%;
							max-height:100%;;">
						</p>
						<p>
							<b><span style="font-family: Comic Sans MS;">Rokmūzika (angļu: rock music) ir daudzos novirzienos sazarojies mūsdienu mūzikas žanrs. Skaņdarbi ir vokāli instrumentāli un instrumentāli, raksturīgs akcentēts ritms, dinamiskums. Pamatā izmantotas elektriskās ģitāras (basģitāras, elektriskās ģitāras), sitaminstrumenti (bungas) un elektroniskie mūzikas instrumenti (sintezators).</span></b>
						</p>
						<hr>

						<!-- start blog-post -->
						<div class="blog-post">
							<h2 class="blog-post-title">Kaut kas par Power metālu</h2>
							<p class="blog-post-meta">
								14 Decembris, 2015 <a href="#">Admin</a>
							</p>

							<p><img src="images/Hammer.jpg" style="max-width:100%;
								max-height:100%;">.
							</p>
							<p>
								<b><span style="font-family: Comic Sans MS;">Power metal (burtiski tulkojot - Spēka metāls) ir smagā metāla mūzikas žanrs, kas attīstījās no trešmetāla, speed metal, smagā pankroka un NWOBHM. Tas sāka veidoties 20.gs. 80.gadu vidū. Pirmā Power metal grupa bija Manowar ar savu albumu Power Metal Par komerciāli veiksmīgu šis žanrs kļuva 2000. gados ar tādām grupām kā DragonForce, Nightwish, Manowar un Theocracy priekšgalā. Šajā žanrā bieži vien dominē skaļas,izteiksmīgas un ātras/ļoti ātras ģitāru un bungu partijas, tenoru/kontr-tenoru balsis (Tenors). Ļoti bieži šim stilam neatņemama sastāvdaļa ir arī ļoti spoži,izteiksmīgi, ātri un ar vibrato pārpildīti ģitāru solo. Lēni tempi šajā stilā ir ļoti reti. Tāpat ievērojami retāk sastopami ir basu un baritonu vokāli, kā arī growling paņēmieni ar balsi. Liriskās tēmas šajā stila ietver: burvestības, tumšos spēkus, gaišos spēkus, cerību, cīņas, bruņniecību, drosmi, mīlestību, reliģiju(visāda veida), pūķus, eņģeļus utt. </span></b>
							</p>
						</div><!-- end blog-post -->
						<hr>

						<!-- start blog-post -->
						<div class="blog-post">
							<h2 class="blog-post-title">Kaut kas par  Nu metālu</h2>
							<p class="blog-post-meta">
								14 Decembris, 2015 <a href="#">Admin</a>
							</p>

							<p><img src="images/disturbed.jpg" style="max-width:100%;
								max-height:100%;">.
							</p>
							<p>
								<b><span style="font-family: Comic Sans MS;">Ņūmetāls (angļu: nu metal) ir smagā metāla apakšžanrs, kas radies sajaucoties smagajam metālam ar hiphopu, fankmūziku un grandžu. Jēdziens nu metal pirmo reizi tika lietots 1995. gadā, Spin Coal Chamber koncerta apskatā. Daudzas ņūmetāla grupas nāca no Kalifornijas (kā Korn, Deftones un P.O.D.). </span></b>

						</div><!-- /.blog-main -->
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