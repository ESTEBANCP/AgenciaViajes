<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>LUGARES TURISTICOS EN YUCATÁN</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>

<?php

function contador(){
	$archivo = "contador.txt";
	$f = fopen($archivo, "r");
	$contador = 0;
	if($f){
		$contador = fread($f, filesize($archivo));
		$contador = $contador + 1;
		fclose($f);
	}

	$f = fopen($archivo, "w+");
	if($f){
		fwrite($f, $contador);
		fclose($f);
	}
	return $contador;
}

$visitate = contador();

echo "";
echo "Eres el visitante numero: ".$visitate;
?>


<!-- -->

	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Palanca de navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php"> LUGARES TURISTICOS<span> EN YUCATÁN</span><p class="logo_w3l_agile_caption">YUCATÁN</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Inicio</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">Acerca de</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Equipo</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Galería</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Lugares</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contáctenos</a></li>
							 <li>
                        <a  href="admin/home.php"><i class="fa fa-qrcode"></i>Administrador</a>
                    </li>


							<!--<li class="menu__item"><a href="#contact" class="menu__link scroll">Administrador</a></li>-->
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
	
<!--//Header-->
<!-- //Modal1 -->






	<div class="container">
      <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->

          <div class="carousel-inner">
            <div class="item active">

              <img src="images/img_bg_2.jpg" alt="Los Angeles" style="width:100%; margin:auto;">
            </div>
      
            <div class="item"> 
              <img src="images/img_bg_1.jpg" alt="Chicago" style="width:100%; margin:auto;">
            </div>
          
            <div class="item">
              <img src="images/img_bg_2.jpg" alt="New york" style="width:100%; margin:auto;">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
							


<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">
	<a href="admin/reservation.php"><h2>LUGARES TURISTICOS EN YUCATÁN
CENTRO HISTÓRICO, VALLADOLID, YUC.
</h2></a>
</div>
<div class="clearfix"> </div>
</div>



<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3><span>Reserve habitación para vacaciones familiares </span> HOTEL DE LUJO</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<!-- -->
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">Viaje asombroso</h4>
							<span class="cbp-ig-category">LUGARES</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<!---->
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">Reserve su viaje</h4>
							<span class="cbp-ig-category">LUGARES</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<!--<span class="cbp-ig-icon w3_users"></span>-->
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">Internet</h4>
							<span class="cbp-ig-category">LUGARES</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">

							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">Buen apoyo</h4>
							<span class="cbp-ig-category">LUGARES</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- /about -->
 	<div class="about-wthree" id="about">
		  <div class="container">
				   <div class="ab-w3l-spa">
                            <h3 class="title-w3-agileits title-black-wthree">ACERCA DE LOS LUGARES</h3> 
						   <p class="about-para-w3ls">La aplicación está dirigida al sector turístico en Yucatán donde ofrecerá 
						   información de los distintos lugares que estén registrados en la aplicación y se realizará 
						   reservas de paquetes (dependerá del lugar ya que algunos manejan paquetes que incluyen cenote, buffet etc.) 
</p>
						   <img src="images/2.jpg" class="img-responsive" alt="Hair Salon">
										<div class="w3l-slider-img">
											<img src="images/c1.jpg" class="img-responsive" alt="Hair Salon">
										</div>
                                       <div class="w3ls-info-about">
										    <h4>LUGARES que ofrecen!</h4>
											<p>Selecciona para registrarte en los Lugares</p>
										</div>
		          </div>
		   	<div class="clearfix"> </div>
    </div>
</div>
 	<!-- //about -->
<!--sevices-->
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
				<h3 class="title-w3-agileits">Servicios</h3>
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>Hotel de lujo</h4>
			 		<p>Lugares a visitar.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Reservas</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Personas</p>
			 		
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
			 		<h4>Viajes
</h4>
			 		<p>Participacion de actividades
.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Restaurantes
</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Aventuras
</p>
			 	</div>
			 </div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->
<!-- team -->
<!--<div class="team" id="team">
	<div class="container">
			
			<div id="horizontalTab">
					<ul class="resp-tabs-list">
					<li>
						<img src="images/cc26.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/cc27.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/cc28.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/cc29.jpg" alt=" " class="img-responsive" />
					</li>
					</ul>
					<div class="resp-tabs-container">
					
</div> -->
<!-- //team -->
<!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">
 <h3 class="title-w3-agileits title-black-wthree"></h3>
		 <h3 class="title-w3-agileits title-black-wthree">Destino popular</h3>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
E</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g7.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g8.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
					<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LUGARES
</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->
	 <!-- rooms & rates -->
      <div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">RESERVAR LUGARES DESTACADOS</h3>
						<div class="priceing-table-main">
				 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/hotel-3.jpg" alt=" " class="img-responsive" />
							<h4>CHICHE ITZA</h4>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									
							</div>
							<div class="price-selet">	
													
								<a href="admin/reservation.php" >Registrar
</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/cover-img-5.jpg" alt=" " class="img-responsive" />
							<h4>VALLADOLID</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
									
							</div>
							<div class="price-selet">
								
								<a href="admin/reservation.php" >Registrar
</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/hotel-2.jpg" alt=" " class="img-responsive" />
							<h4>TULUM</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								
							</div>
							<div class="price-selet">
								
								<a href="admin/reservation.php" >Registrar
</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/hotel-3.jpg" alt=" " class="img-responsive" />
							<h4>CENOTES</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								
							</div>
							<div class="price-selet">
								
								<a href="admin/reservation.php" >Registrar
</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	 <!--// rooms & rates -->
  <!-- visitors -->
	<div class="w3l-visitors-agile" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">LUGARES VISITADOS</h3> 
		</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/2.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c44.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								Bienvenidos</h4>

								<p>Actividades de aprendizaje. </p>
								<h5>LUGARES</h5>
								<p>Instructor</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/3.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>Bienvenidos</h4>

								<p>Actividades de aprendizaje. </p>
								<h5>LUGARES</h5>
								<p>Instructor</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/about.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c46.png" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								Bienvenidos</h4>

								<p>Actividades de aprendizaje. </p>
								<h5>LUGARES</h5>
								<p>Instructor</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/2.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c44.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								Bienvenidos</h4>

								<p>Actividades de aprendizaje. </p>
								<h5>LUGARES</h5>
								<p>Instructor</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>	
	</div>
  <!-- visitors -->


  

  <script language="JavaScript">
function mueveReloj(){
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()

    horaImprimible = hora + " : " + minuto + " : " + segundo

    document.form_reloj.reloj.value = horaImprimible

    setTimeout("mueveReloj()",1000)
}
</script>
</head>

<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Registrar para Lugares
</h4>
				<p class="contact-agile2">Inscribíte en las actividades
</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Nombre completo
:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Número de teléfono
:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Dirección de correo electrónico:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Enviar" class="btn btn-primary">	
				</form>
				<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Conectate con nosotros
</h4>
			<p class="contact-agile1"><strong>Teléfono :</strong>(01) (985) 121 68 35</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="luis.chipech@itsva.edu.mx">luis.chipech@itsva.edu.mx</a></p>
			<p class="contact-agile1"><strong>Direccion :</strong> LUGARES TURISTICOS EN YUCATAN</p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
							</ul>
			</div>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662" ></iframe>
			
		</div>
		<div class="clearfix"></div>
	</div>
</section>




<style> 
  	  #map {
        height: 100%;
      }
     
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
	</style> 
</head>  
	<body>
		<div id ="map"> </div> 
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCKiIqCdZGrVxx06LSbe7uG3zXOq1Cz5k&callback=initMap" async defer></script>
	<script>
		
      var map;
  	 function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
		  center: {lat: 43.5293, lng: -5.6773},
          zoom: 13,
        });
        var marker = new google.maps.Marker({
          position: {lat: 43.542194, lng: -5.676875},
          map: map,
	  title: 'Acuario de Gijón'
        });
      }
	</script>
	</body> 

<!-- /contact -->
			<div class="copy">
		        <p>2019  <a href="index.php">Lugares</a> </p>
		    </div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"

							//FUNCION DE Diapositivas responsivas

						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>



<body onload="mueveReloj()">

Horario de la Pagina

<form name="form_reloj">
<input type="text" name="reloj" size="10">
</form>

</body>
</html>





<!-- 

		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>SUN RISE</h4>
									<h3>Sabemos lo que amas</h3>
										<p>Bienvenido a nuestros hoteles
</p>

									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>AMANECER</h4>
									<h3>Quédate con amigos y familias</h3>
										<p>Ven y disfruta un momento precioso con nosotros</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>AMANECER</h4>
								<h3>wquiero unas vacaciones lujosas?</h3>
										<p>Obtenga alojamiento hoy</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div> -->








