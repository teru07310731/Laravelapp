<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book List</title>


 	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<style>
		body {
			font-family: 'Raleway';
			margin-top: 25px;
		}

		button .fa {
			margin-right: 6px;
		}

		.table-text div {
			padding-top: 6px;
		}
	</style>

	<script>
		$(function () {
			$('#book-name').focus();
		});
	</script>
</head>
<body>
    <div id="app-layout">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="{{ url('/') }}">
						Book list
					</a>
				</div>


                <div class="collapse navbar-collapse" id="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
		          	       <li><a href="{{ url('/login') }}">Login</a></li>
                           <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                	{{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i clas="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

       @yield('content')

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/js/bootstrap">
</body>
</html>