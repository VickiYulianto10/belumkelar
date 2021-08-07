<!DOCTYPE html>
<html>
<head>
	<title>My Account</title>
</head>

	<style type="text/css">
		body{
			background: url('http://127.0.0.1:8000/pictures/cat.jpg');
			background-repeat: no-repeat;
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		.text1{
			background: -webkit-linear-gradient(30deg, #FFD700, #880000);
   			-webkit-background-clip: text;
   			-webkit-text-fill-color: transparent;
			text-align: center;
			position: absolute;
			top: 70%;
			right: 39%;
			font-size: 30px;
			font-weight: bold;
		}
		.box1{
			position: absolute;
			top: 85%;
			right: 41%;
			font-size: 20px;

		}
		li{
			display: inline-block;
		}
		li a{
			text-decoration: none;
    		color: white;
    		padding: 5px 20px;
    		border: 1px solid transparent;
		}
		ul{
			list-style: none;

		}
		ul :hover{
			background:-webkit-linear-gradient(30deg, #FFD700, #880000);;
			color: black;
		}
	</style>

<body>
	<div class="container">
		<div class="text1">
			<h1> LARAVEL v.8 </h1>
		</div>

		<div class="box1">
			<ul>
				<li class="{{ Request::is('route/beranda')? "active" : "" }}">
					<a href="{{ url('../route/beranda') }}">Beranda</a>
				</li>

				<li class="{{ Request::is('route/beranda')? "active" : "" }}">
					<a href="{{ url('../route/galeri') }}">Galeri</a>
				</li>

				<li class="{{ Request::is('route/beranda')? "active" : "" }}">
					<a href="{{ url('../route/profile') }}">Profile</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>