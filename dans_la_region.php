<!DOCTYPE HTML>
<html>
	<head>
		 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
		<meta charset="UTF-8">
		<style>
			#title {
				margin-top: 10%;
				text-align:center;
			}
			
			#c1 {
				margin-top: 2%;
			}
			
			#c1 img {
				width:100%;
				height: auto;
			}
			#c1 p {
				text-align: justify;
			}
		</style>
	</head>
	<body>

		<?php include('menu.html');?>
		<h1 style="text-align: center; font-family: 'Oswald', sans-serif;" id="title">Transports dans la région</h1>
		<div class="container2" id="c1">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<p>La mobilité est très bien développé au sein de la région PACA, principalement grâce aux bus.<br>
						Ils permettent facilement de se déplacer à l'intérieur d’une ville ou même d’une ville à une autre.<br>
						Pour vos trajets dans la région, il suffit simplement de se rendre sur ce site :<br>
						<a href="https://www.pacamobilite.fr/index.asp">https://www.pacamobilite.fr/index.asp</a>
					</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="img/cartebus.jpg" width="600px">
				</div>
			</div>
		</div>
		<?php include('footer.html');?>
	</body>
</html>