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
        <h1 class="blog-title">Autorizācija</h1>
      </div>
      <div class="row">
        <div class="col-sm-12 blog-main">
          <form role="form">
            <div class="form-group">
              <label for="email">E-pasts</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Parole:</label>
              <input type="password" class="form-control" id="pwd">
            </div>
            <button type="button" id="csgo" class="btn btn-default">
              Autorizēties
            </button>
          </form>
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

<script type="text/javascript">
    $(function() {
      $( "#csgo" ).click(function() {
        window.location.href="index-reg.php";
      });
    });
</script>
  </body>
</html>