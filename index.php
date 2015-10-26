<html ng-app="myApp">
    <head>
		<title>MyTask - A small Task Management Application</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/taskman.css"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">

    </head>
    <body ng-controller="tasksController">
    

	<div class="row">
    	<div class="container">
    		<blockquote>
				<h1>
					<a href="#">Welcome to MyTask
					</a>
				</h1>
			</blockquote>
    		<div class="col-sm-9">
    			<div ng-include src="'partials/task.html'"></div>
    		</div>
    	
    	</div>
    </div>
    	
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="app/app.js"></script>
    </body>
</html>
