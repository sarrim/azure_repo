
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- <h1 class="text-center">Hello World</h1> -->
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
		<div class="span4 offset4 well">
			<legend>Please Sign In</legend>
          	<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div>
			<form method="POST" action="" accept-charset="UTF-8">
			<input type="text" id="username" class="span4" name="username" placeholder="Username">
			<input type="password" id="password" class="span4" name="password" placeholder="Password">
            <label class="checkbox">
            	<input type="checkbox" name="remember" value="1"> Remember Me
            </label>
			<button type="submit" name="submit" class="btn btn-info btn-block">Sign in</button>
			</form>    
		</div>
	</div>
</div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
