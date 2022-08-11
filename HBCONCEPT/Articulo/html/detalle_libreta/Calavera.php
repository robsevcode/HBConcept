<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HB CONCEPT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="author" content=""/>

        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../../css/shop.css" type="text/css" media="screen" property="" />
	<link href="../../css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../../css/flexslider.css" type="text/css" media="screen" />
	<link href="../../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="../../css/jquery-ui1.css">
	<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="../../css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	
	<script>
		$(function(){
			$("#verCarrito").load("../../php/vistas/verCarrito.php");
		});
	</script>
</head>

<body>					
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="../../../html/servicios.html"><span>HB</span> <i>Concept</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>	
							<li><a href="../../../index.html" class="active">Inicio</a></li>
							<li><a href="../../../html/servicios.html">Servicios</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- //cart details -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="../../../html/servicios.html">Inicio</a><i>|</i></li>
					<li>Detalle del Articulo</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">

						<ul class="slides">
							<li data-thumb="../../../images/libretas/Calavera3.png">
								<div class="thumb-image"> <img src="../../../images/libretas/Calavera3.png" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="../../../images/libretas/Calavera1.png">
								<div class="thumb-image"> <img src="../../../images/libretas/Calavera1.png" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="../../../images/libretas/Calavera2.png">
								<div class="thumb-image"> <img src="../../../images/libretas/Calavera2.png" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3>Cuaderno Calavera</h3>
				<p><span class="item_price">$150</span>
					<del>$280</del>
				</p>
				<div class="rating1">
					<ul class="stars">
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="../../php/libretas/Calavera.php" method="POST">
							<div class="color-quality">
								<div class="color-quality-right">										
										<h5 style="margin-top:20px">Material:</h5>
										<select name="Material" class="frm-field required sect">
												<option value="Nogal" required>Nogal</option>
												<option value="Encino" required>Encino</option> 
												<option value="Maple" required>Maple</option>					
												<option value="Cherry" required>Cherry</option>								
										</select>
										<h5 style="margin-top:20px">Estilo de Hojas:</h5>
										<select name="EstiloHojas" class="frm-field required sect">
												<option value="Rayadas" required>Rayadas</option>
												<option value="Cuadriculadas" required>Cuadriculadas</option> 
												<option value="Blancas" required>Blancas</option>					
												<option value="Recicladas" required>Recicladas</option>								
										</select>
										<h5 style="margin-top:20px">Color:</h5>
										<select name="Color" class="frm-field required sect">
												<option value="Amarillo" required>Amarillo</option>
												<option value="Azul" required>Azul</option> 
												<option value="Verde" required>Verde</option>					
												<option value="Negro" required>Negro</option>
												<option value="Magenta" required>Magenta</option>	
												<option value="Gris" required>Gris</option>	
												<option value="Blanco" required>Blanco</option>									
										</select>										
								</div>
										<input type="hidden" name="Cortado" value="Calavera">
										<input type="hidden" name="amount" value="150.00">
										<input style="margin-top:20px" type="submit" name="Carrito" value="Agregar al Carrito">
										<input type="submit" name="Compra" value="Realizar Compra">
							</div>	
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
			
			<!-- /new_arrivals -->
			<div class="new_arrivals">
				<h3>Otros Productos</h3>
				<!-- /womens -->
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="../../../images/libretas/Rombo.png" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="#" class="link-product-add-cart">Ver Detalles</a>
									</div>
								</div>
								<span class="product-new-top">Nuevo</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="#">Cuaderno Rombo</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$280.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<input type="hidden" name="shoe_item" value="Cuaderno Rombo">
										<input type="hidden" name="amount" value="280.00">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="../../../images/libretas/Campbell.png" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="#" class="link-product-add-cart">Ver Detalles</a>
									</div>
								</div>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="#">Cuaderno Campbell</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$280.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<input type="hidden" name="shoe_item" value="Cuaderno Campbell">
										<input type="hidden" name="amount" value="280.00">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="../../../images/libretas/Medusa.png" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="#" class="link-product-add-cart">Ver Detalles</a>
									</div>
								</div>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="#">Cuaderno Medusa</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$280.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<input type="hidden" name="shoe_item" value="Cuaderno Medusa">
										<input type="hidden" name="amount" value="280.00">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="../../../images/libretas/Piña.png" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="Piña.html" class="link-product-add-cart">Ver Detalles</a>
									</div>
								</div>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="#">Cuaderno Piña</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$280.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<input type="hidden" name="shoe_item" value="Cuaderno Piña">
										<input type="hidden" name="amount" value="280.00">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- //womens -->
				<div class="clearfix"></div>
			</div>
			<!--//new_arrivals-->


		</div>
	</div>
	<!-- //top products -->

	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="../../../html/servicios.html"><span>HB</span>Concept</a></h2>
				<p>Venta de cuadernos artesanales y locales.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="https://www.facebook.com/concepthb/" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/hbconceptstudio/" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-5 sign-gd-two">
						<h4>Información de <span>la tienda</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Numero Telefonico</h6>
									<p>+1 664 198 2246</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Correo Electronico</h6>
									<p><a href="mailto:hbconcept@gmail.com"> hbconcept@gmail.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>

			<p class="copy-right-w3ls-agileits">&copy 2018 HB Concept. Todos los derechos reservados | Diseñado por <a href="http://fcqi.tij.uabc.mx/">FCQI</a></p>
		</div>
	</div>
	</div>
	<!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="../../js/minicart.js"></script>
	<script>
		shoe.render();
		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;
			if (this.subtotal() > 0) {
				items = this.items();
				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="../../js/modernizr-2.6.2.min.js"></script>
	<script src="../../js/classie.js"></script>
	<script src="../../js/demo1.js"></script>
	<!-- //nav -->
	<!-- single -->
	<script src="../../js/imagezoom.js"></script>
	<!-- single -->
	<!-- script for responsive tabs -->
	<script src="../../js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
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
	<!-- FlexSlider -->
	<script src="../../js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->
</body>
</html>