<?php
    //conexion
	$conexion=mysqli_connect('localhost','root','','tienda');
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Listar Libros</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->

   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
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
<link href="css/font-awesome.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					}
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<div class="header">

		<div class="container">

			<div class="logo">
				<h1 ><a href="principal.html"><b>T<br>H<br>E</b>BL BOOK<span>LA MEJOR TIENDA DE LIBROS</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="index.html" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.html" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Registro</a></li>
				</ul>
			</div>


				<div class="nav-top">
					<nav class="navbar navbar-default">

					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>


					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li ><a  class="hyper " href="principal.html"><span>Inicio</span></a></li>
							<li><a href="contact.html" class="hyper"><span>Contacto</span></a></li>
							<li ><a href="libro.html" class="hyper"><span>A??adir libro</span></a></li>
                            <li ><a href="eliminar.html" class="hyper"><span></span>Eliminar libro </a></li>
                           <li ><a href="listar.php" class="hyper"><span></span>Listar proximos Titulos</a></li>
                           <li class="active"><a href="listarpedido.php" class="hyper"><span></span>Listar Pedidos</a></li>
						</ul>
					</div>
					</nav>
					 <div class="cart" >

						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>

				</div>
</div>
  <!---->

 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >PEDIDOS</h3>
		<h4><a >Inicio</a><label>/</label>Contacto</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>LISTA DE PEDIDOS</h3>
				<br><div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>

				<table style="width:100%" border="10" align="center">
            		<tr>
            		    <td>ID</td>
            			<td>Nombre</td>
            			<td>Email</td>
            			<td>Direccion</td>
            			<td> Ciudad </td>
            			<td>Estado</td>
            			<td>Codigo Postal</td>
            			<td>Status</td>
            		</tr>

            <?php
            		$sqll="SELECT * from pedidos";
            		$resultt=mysqli_query($conexion,$sqll);

            		while($mostrar=mysqli_fetch_array($resultt)){
            		 ?>

            		<tr>
            		    <td><?php echo $mostrar['id'] ?></td>
            			<td><?php echo $mostrar['nombre'] ?></td>
            			<td><?php echo $mostrar['email'] ?></td>
            			<td><?php echo $mostrar['direccion'] ?></td>
            			<td><?php echo $mostrar['ciudad'] ?></td>
            			<td><?php echo $mostrar['estado'] ?></td>
            			<td><?php echo $mostrar['codigopostal'] ?></td>
            			<td><?php echo $mostrar['status'] ?></td>
            		</tr>
            	<?php
            	}
            	 ?>
            	</table>
            	        <div class="container">
                            <div class="form-w3agile">
                                <br>
                                <h3>Modificar status de pedido</h3>
                                <form action="login_registro.php" method="post">
                                    <div class="key">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <input type="text" value="ID pedido" name="idpedido" onfocus="this.value = '';"
                                               onblur="if (this.value == '') {this.value = 'titulo';}" required="">
                                        <div class="clearfix"></div>
                                    </div>
                                    <div>
                                        Status:<br>
                                        <select name="status">

                                            <option>en tienda</option>
                                            <option>en proceso</option>
                                            <option>enviado</option>
                                            <option>entregado</option>

                                        </select>
                                        <br></br>
                                    </div>
                                    <input type="submit" name="btnstatus" value="Actualizar" >
                                </form>
                            </div>
                        </div>




				<!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>

			</div>

		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->

<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>Sobre nosotros</h3>
			<p>Somos una tienda de venta de libros enfocada 100%
				en facilitar la compra de libros, y fomentar la lectura en todas las
				personas que entren al sitio, nuestro compromiso es importante y por eso
				trabajamos todos los dias</p>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>Mi Cuenta</h3>
			<ul>
				<li><a href="index.html">Login</a></li>
				<li><a href="register.html">Registro</a></li>
				<li><a >Lista de deseos</a></li>

			</ul>
		</div>
		<div class="clearfix"></div>
		<div class="footer-bottom">
			<h2 ><a ><b>T<br>H<br>E</b>BL BOOK<span>LA MEJOR TIENDA DE LIBROS</span></a></h2>
			<p class="fo-para">???Un lector vive mil vidas antes de morir. Aquel que nunca lee vive solo una.???</p>
			<div class=" address">
				<div class="col-md-4 fo-grid1">
					<p><i class="fa fa-home" aria-hidden="true"></i>Blvd. Gral. Marcelino Garc??a Barrag??n 1421, Ol??mpica, 44430 Guadalajara, Jal.</p>
				</div>
				<div class="col-md-4 fo-grid1">
					<p><i class="fa fa-phone" aria-hidden="true"></i>+52 3317484377 , +52 3338099840</p>
				</div>
				<div class="col-md-4 fo-grid1">
					<p><a href="bryan.nunez2941@alumnos.udg.mx"><i class="fa fa-envelope-o" aria-hidden="true"></i>bryan.nunez2941@alumnos.udg.mx</a></p>
					<p><a href="luis.vazquez2941@alumnos.udg.mx"><i class="fa fa-envelope-o" aria-hidden="true"></i>luis.vazquez2941@alumnos.udg.mx</a></p>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
		<div class="copy-right">
			<p> &copy; 2021 BL BOOK. All Rights Reserved | Design by  <a> Luis & Daniel</a></p>
		</div>
	</div>
</div>
<!-- //footer-->
<!-- tabs -->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
		});
	</script>
<!-- //tabs -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>


</body>
</html>