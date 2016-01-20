<?php
/**
 * Created by PhpStorm.
 * User: Vairis
 * Date: 2016.01.19.
 * Time: 11:15
 */
class templateClass{
    function getMenu(){
        echo '		<!-- BODY SĀKUMS -->
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
		</nav>';
    }
    function getLogMenu(){
echo '<!-- BODY SĀKUMS -->
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
</nav>';
    }
    
}
?>
