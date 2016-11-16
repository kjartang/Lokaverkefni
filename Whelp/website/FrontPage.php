<!DOCTYPE html>
<html>
	<head>
		<title>Whelp</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="http://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet" type="text/css" />
		<?php include "connect.php" ?>
	</head>

	<body>	
		<!--Font setting fyrir headerinn -->
		<style>
		nav {
			font-family: 'Shrikhand';
			font-size: 15px;
		}
		</style>

		<!-- Installation fyrir browser: https://github.com/adampresley/sublime-view-in-browser/wiki/Getting-Started -->
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="Frontpage.php">Whelp</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Um Okkur<span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Skrifa umsögn</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bæjarfélög<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Veitingastadur..">
		        </div>
		        <button type="submit" class="btn btn-default">Leita</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		      	<a href="#" class="btn btn-default navbar-btn" role="button">Innskrá</a>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<script src="//code.jquery.com/jquery.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
	  	
	</body>
</html>