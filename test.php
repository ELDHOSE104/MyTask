<html ng-app="myApp">
	<head>

		<title>MyTask - A simple Task Manager</title>
		<meta name="theme-color" content="#ffffff">
		<meta content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes" name="viewport">
		<link rel="stylesheet" href="css/tidy.css">
		<link rel="stylesheet" href="css/animate.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
		<script src="bower_components/webcomponentsjs/webcomponents.js"></script>
        <link href="//cdn.rawgit.com/noelboss/featherlight/1.3.2/release/featherlight.min.css" type="text/css" rel="stylesheet" title="Featherlight Styles" />
        <script src="//cdn.rawgit.com/noelboss/featherlight/1.3.2/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
		<link rel="import" href="bower_components/paper-ripple/paper-ripple.html">
		<link rel="import" href="bower_components/paper-fab/paper-fab.html">
		<link rel="import" href="bower_components/iron-icons/iron-icons.html">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
            <link rel="stylesheet" type="text/css" href="css/taskman.css"/>
	</head>
	<body ng-controller="tasksController">
	
		<div class="container" style="width: 100%">
			<!-- COVER IMAGE AND FLOATING BUTTON -->
			<div class="cover-image"></div>

			

			<div class="wow fadeInUp content-card">


				<div class="row">
                    	<div class="container cont">
                    		<blockquote>
                				<h1>
                					<a href="#">Welcome to MyTask..
                					</a>
                				</h1>
                			</blockquote>
                    		<div class="col-sm-9">
                    			<div ng-include src="'partials/task.html'"></div>
                    		</div>

                    	</div>
                    </div>
			</div>

		
		<!-- SPACE BELOW DETAILS -->	
		<div class="empty-space">
			<div class="meta-container wow fadeInUp">
				<div class="wow fadeInUp detail-item watermark credits">
						<span class="text-description credits-text" style="color: #ffffff">Developed By <a href="#" style="color: #fff; font-weight: 700">ELDHOSE K SHIBU</a></span>
				</div>
			</div>	
		</div>
			
			
		<!-- JAVASCRIPT -->

		<!-- Animations -->

		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		
		<!-- Scrollwheel Smoothing -->
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
	<script type="text/javascript" src="app/app.js"></script>
	</body>
</html>	