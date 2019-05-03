<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible content=IE=edge">
	<meta name="viewport" content="width=devide-width, initial-scale=1">

	<title>Book app</title>

	<link href="https://fonts.googlepist.com/css/?family=Railway:300,400,500,700" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrap.com"/font-awesome/4.4.0/css/font-awsome.min.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrap.com/">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrap.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<style>
		body {
			font-family: 'Raleway';
			margin-top:25px;
		}

		buttom .fa {
			margin-right: 6px;
		}

		.table-text div {
			padding-top: 6px;
		}
	</style>

	<script>
		$(function() {
			$('#book-name').focus();
		});
	</script>
</head>
<body>
	<div class="cotainar">
		<nav class="coteinar-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-toggle"navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-bland href="#">Reading List</a>
			</div>
			<div class="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					&nbsp;
				</ul>
			</div>
		</nav>
	</div>
	@yield('content')
</body>
</html>
