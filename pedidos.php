<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fast Pizza</title>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/pedidos.css">
</head>
<body>
<header>
	<div class="container">
		<img id="logotipo" src="img/logotipo.PNG" alt="Logotipo">	
	</div>

	<div class="container">
	<div class="row">
	<nav id="menu" class="pull-right">
		<ul> 
		<li><a href="index.html">Home</a></li>
		<li><a href="cardapio.html">Cardápio</a></li>
		<li><a href="#">Bebidas</a></li>
		<li><a href="#">Cadastrar</a></li>
		<li><a href="pedidos.html">Pedidos</a></li>
		<li><a href="#">Contato</a></li>

	<li class="search">
	<div class="input-group">
	<input type="search" placeholder="search">
	<span class="input-group-btn">
	<button type="button"><i class="fa fa-search"></i></button>
		</span> 
		</div>
			</li>
			</ul>
			</nav>
			</div>
			</div>

<div class="form-group formulario">
	<div class="sabores">
		<label for="menu">Sabores de Pizzas</label>
		<select name="menu" id="Sabores">
		<optgroup>															
			<option value="menu"selected>4 Queijos</option>
			<option value="menu">Bacon</option>
			<option value="menu">Calabreza</option>	
			<option value="menu">Frango com Catupiri</option>
			<option value="menu">Camarão</option>	
			<option value="menu">mexicana</option>
			<option value="menu">Americana</option>	
			<option value="menu">A moda da casa</option>
			<option value="menu">Brocolis com bacon</option>
			<option value="menu">California</option>
			<option value="menu">Canadense</option>	
			<option value="menu">Columbina</option>
			<option value="menu">Coreana</option>	
			<option value="menu">Alho</option>
			<option value="menu">Atum</option>	
			<option value="menu">banana Caramelada</option>
			<option value="menu">batata Palha</option>	
			<option value="menu">Champignon</option>
		</optgroup>
		</select>
	</div>

	<div>
		<div class="tamanho">
		<label>Tamanho</label>
	   	<input type="radio" name="Tamanho" id="Pequeno" >
	    <label for="tamanho">Pequeno</label>
	    <input type="radio" name="Tamanho" id="Medio" >
	    <label for="tamanho">Medio</label>
	   	<input type="radio" name="Tamanho" id="Grande" >
	    <label for="tamanho">Grande</label>
	</div>
	</div>

	<div class="form-group2">
	<label for="menu">Quantidade</label>
	<select name="menu" id="Quantidade">
		<optgroup>		
			<option value="menu" selected>Quantidade</option>
			<option value="menu">1</option>	
			<option value="menu">2</option>
			<option value="menu">3</option>	
			<option value="menu">4</option>
			<option value="menu">5</option>	
			<option value="menu">6</option>
			<option value="menu">7</option>	
			<option value="menu">8</option>
			<option value="menu">9</option>	
			<option value="menu">10</option>
			<option value="menu">Outros Valores</option>
		</optgroup>
	</select>
	</div>
</div>
	<div class="button">
	<button type="submit" class="btn btn-primary">Finalizar Pedido</button>
	</div>
</header>		

<!-- <section>
	<div id="call-to-action">
	<div class="container">
	<div class="row text-center">
	</div>
					
		

	<div class="row">
		<hr>
	<h2>Vídeos</h2>
						
	<video src="mp4/past-pizz.mp4" controls></video>
		</div>
		</div>
		</div>
			
	</section> -->

		<footer>
			<div class="row row-vermelho">
			<div class="container">
			<div class="row">
			
		</div>
		<img class="massa-pizza" src="img/massa-pizza.PNG" alt="massa-pizza">
		<div class="col-md-10"><!-- col-md-10 siguinifica (ciluna ,Media de 10)-->
		<div class="row row-cols"><!--O row row-cols serve para locar as 3 colunas , col-md-4  col-popular-post ,col-md-4  col-links e col-md-4  col-get-in-touch . Assim fica um grid de 12 distribuido em 100% com 3x de col-md-4. -->
		<div class="col-md-4 col-popular-post">

		<h4>HORÁRIO DE PEDIDOS</h4>
		<ul class="list-unstyled">
		<li>
		<h5>HORÁRIO DE ENTREGAS</h5>
		<time>19:00 AS 23:30 HS</time>
		</li>
		<li>
		<h5>E-mail: fastpizza@gmail.com</h5>
		</li>
		</ul>
		</div>	<!-- Essa div fecha col-popular-post. -->


							
	<div class="col-md-4 col-get-in-touch">
		<h4>FAST PIZZA</h4>
		<address><!--A tag address serve para agrupar elementos embutidos en elementos em um documento, Ela não fornece nenhuma alteração visual ela fornece uma maneira de um gancho numa parte de um texto ou parte de um documento -->
	<i class="fa fa-map-marker"></i> <samp>PORTO ALEGRE R/S</samp>
		</address>
	<p><a href="tel:(51)3038 6575"><i class="fa fa-phone"></i>O51 3330 6575</a></p>
	<ul class="list-unstyled list-socials">
		<li>
	<a href="#" target="_blank"><i class="fa fa-facebook"></i></a><!-- -->						
		</li>
	<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>											
		</li>
	<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a>						
		</li>
										
		</ul>
		</dir>
		 </div>
		
		</div>

		</div>

		</div>

		</div>
	<div class="row row-cinza-escuro">
		<div class="container">
		<p class="pull-left">Todos os Direitos Reservados @FastPizza.</p>
		<p class="pull-right text-roxo">Creat Arnaldo-Ericson-Paula </p>
		</div>
		</div>
			</footer>


		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script>
		$(document).ready(function(){
				$("#logotipo").on("mouseover",function(){
					$("#banner h1").addClass("efeito");
				}).on("mouseout",function(){
					$("#banner h1").removeClass("efeito");
				});	
				$("#input-search").on("focus",function(){
					$("li.search").addClass("ativo");
				}).on("blur",function(){
					$("li.search").removeClass("ativo");
				}); 
				$(".thumbnails").owlCarousel({
					item : 4
				});		
			});
		</script>
</body>
</html>