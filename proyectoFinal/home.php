<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="css/style.css" rel="stylesheet">
	<title>BRONX</title>
</head>

<body>
	<!-- HEADER -->
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<img id="comp-jadduam9imgimage" style="object-position: 50% 50%; width: 195px; height: 54px; object-fit: cover;" alt="" data-type="image" itemprop="image"
				src="https://static.wixstatic.com/media/36efdc_5a49fbf9400e46bcaa1f89c065243e3b~mv2.png/v1/fill/w_390,h_108,al_c,q_80,usm_0.66_1.00_0.01/36efdc_5a49fbf9400e46bcaa1f89c065243e3b~mv2.webp">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="register.php">REGISTER</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">LOGIN</a>
					</li>
					</li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PRODUCTOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Mesas</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sillas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sillones</a>
        </div>
      </li>
				</ul>
			</div>
		</nav>

		<div class="cuadrado">

			<!-- LOGO QUE GIRA -->
		

			<div class="logogif">
				<img id="comp-jyuim62timgimage" style="object-position: 50% 50%; width:400px; height: 400px; object-fit: cover;" alt="giphy.gif" data-type="image" itemprop="image"
					src="https://static.wixstatic.com/media/36efdc_9fea52cf5b7d4d2b9a07f1f6744102ab~mv2.gif">
			</div>
			<!--Carrousel de fotos -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="productos/zetaperfo.jpg" class="d-block w-100" alt="img">
    </div>
    <div class="carousel-item">
      <img src="productos/sillon.jpg" class="d-block w-100" alt="img">
    </div>
    <div class="carousel-item">
      <img src="productos/trianglemini.jpg" class="d-block w-100" alt="img">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

			<!-- Fotos decoracion -->

			<div class="banner">
				<img src="productos/fondo1.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="banner">
				<img src="productos/fondo4.jpg" class="img-fluid" alt="Responsive image">
			</div>


			<!--productos venta-->
			<section class="vip-products row">
				<article class="product">
					<div class="photo-container">
						<img class="photo" src="productos/sillon.jpg" alt="pdto 01">
					</div>
					<h2>Sillon Freddy</h2>
					<p>Sillón Freddy. Fabricación propia. Elegi medidas, color de base y Medidas: 170 x 85 x 65h cm. Nuestros productos son de fabricación artesanal.
						Pintados con pintura al horno en polvo. Colores disponibles base: Negro y Blanco.Otros colores: Dorado, Cobre Rose, Rosa, Menta, Cielo, Lila, Coral.
						Somos fabricantes! </p>
				</article>

				<article class="product">
					<div class="photo-container">
						<img class="photo" src="productos/eva.jpg" alt="pdto 02">
					</div>
					<h2>Recibidor Eva</h2>
					<p>Recibidor hierro con estante bajo. Medidas: 100 x 28 x 90h cm. Nuestros productos son de fabricación artesanal.
						Pintados con pintura al horno en polvo. Colores disponibles base: Negro y Blanco. Otros colores: Dorado, Cobre Rose, Rosa, Menta, Cielo, Lila, Coral. Somos Fabricantes! </p>
				</article>

				<article class="product">
					<div class="photo-container">
						<img class="photo" src="productos/rocks2.jpg" alt="pdto 03">
					</div>
					<h2>Mesa Rocks Nido</h2>
					<p>Mesas bajas realizadas en chapa 3 mm. Medidas: 48 x 37 x 40h cm. Nuestros productos son de fabricación artesanal. Pintados con pintura al horno en polvo.
						Colores disponibles base: Negro y Blanco. Otros colores: Dorado, Cobre Rose, Rosa, Menta, Cielo, Lila, Coral. Somos Fabricantes! </p>
				</article>

				<article class="product">
					<div class="photo-container">
						<img class="photo" src="productos/trianglemini.jpg" alt="pdto 04">
					</div>
					<h2>Espejo Triangle</h2>
					<p>Espejo con marco de planchuela de hierro de 9cm de ancho y 3mm de espesor Medidas 80 x 70 cm. Nuestros productos son de fabricación artesanal. Pintados con pintura al horno en polvo. Colores disponibles base: Negro y Blanco. Otros
						colores: Dorado, Cobre Rose, Rosa, Menta, Cielo, Lila, Coral. Somos Fabricantes! </p>
				</article>
		 </section>

			<!-- hasta aca van los productos-->

			<!-- Footer -->
			<footer class="page-footer font-small stylish-color-dark pt-4">
				<!-- Footer Links -->
				<div class="container text-center">

					<!-- Grid row -->
					<div class="">

						<!-- Grid column -->
						<div class="">

							<div class="">
								<h5 class="font-weight-bold text-uppercase mt-3 mb-4">WELCOME TO THE BRONX</h5>
							</div>
							<div class="row col-12">
								<div class="col-4">
									<p>Somos un emprendimiento de muebles y objetos de decoración. Realizamos todos nuestros productos de forma artesanal alrededor de la nobleza y durabilidad del hierro. Nuestro objetivo es combinar diseño, funcionalidad, minimalismo,
										robustez y durabilidad.
										Eso es Bronx!</p>
								</div>
								<div class="col-4">
									<ul class="text-uppercase">
										<li>
											<p href="#!">Contacto</p>
										</li>
										<li>
											<a href="#!"></a>
										</li>
										<li>
											<p>Estomba 2887, Coghlan</p>
										</li>
										<li>
											<p>Buenos Aires, Argentina</p>
										</li>
									</ul>
								</div>
								<div class="col-4">

									<ul class="text-uppercase mt-3 mb-4">
										<li>
											<p>Mie-Sab 15 a 20</p>
										</li>
										<li>
											<p>Tel 1165075229</p>
										</li>
										<li>
											<p>hola@broxdecor.com.<br>ar</p>
										</li>
									</ul>
								</div>
							</div>

						</div>
						<!-- Grid column -->

						<hr class="clearfix w-100 d-md-none">

						<!-- Grid column -->
						<div class="">
							<!-- Links -->
						</div>
						<!-- Grid column -->
						<hr class="clearfix w-100 d-md-none">
						<!-- Grid column -->
						<div class="">

						</div>
						<!-- Grid column -->
						<hr class="clearfix w-100 d-md-none">

					</div>
					<!-- Grid row -->
				</div>
				<!-- Footer Links -->
			</footer>
			<div class="">
				<ul class="social-media">
					<li><a href="#"><span class="ion-social-facebook"></span></a></li>
					<li><a href="#"><span class="ion-social-twitter"></span></a></li>
					<li><a href="#"><span class="ion-social-instagram"></span></a></li>
				</ul>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</div>
</body>

</html>
