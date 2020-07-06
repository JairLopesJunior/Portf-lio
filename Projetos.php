<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

	<!--CSS EXTERNO-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style type="text/css">
		body{
		  background-color: white;
		  overflow-x: hidden;
		  display: flex;
		  min-height: 100vh;
		  flex-direction: column;
		}

		main{
		  flex: 1 0 auto;
		}
		
		footer{
		    position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
		}

	</style>
</head>
<body>

	<!-- MENU -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  		<a id="itensNavCor" class="navbar-brand js-scroll-trigger" href="index.php">JL</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    		<span class="navbar-toggler-icon"></span>
  		</button>
	  		<div class="collapse navbar-collapse"  id="navbarNavDropdown">
		</div>
	</nav>

	<!-- PORTFÓLIO -->
  <section id="portifolio" style="margin-top: 15vh; margin-bottom: 3em">
    <div class="container">
      	<div class="row justify-content-center">
       		<div>
          		<h2 style="margin-bottom: 3vh" id="eventoTitulos">PROJETOS</h2>
        	</div>
      	</div>
    	<div class="row" align="center" style="position: relative;align-items: center;"> 
			<div class="card-group" width: 18rem;>
			    <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
    				<div class="card" style="margin: 0 2em 0 2em; margin-bottom: 2em; border-radius: 15px">
    			    	<img class="card-img-top" src="img/mandatrampo-login.png" style="border-radius: 15px 15px 0 0">
    			    	<div class="card-body">
    			      		<h5 class="card-title"><b>MandaTrampo</b></h5>
    				      	<h5 class="card-text">Desenvolvido em Node.js e React.</h5>
    			    	</div>
    			    	<div><a href="mandatrampo.php">
    			    		<button id="botaoContato" type="submit" class="btn btn-primary" style="border-radius: 15px; border-color: #B96E1F; border-style: solid;color: black;border-width: 2px;margin-bottom: 2em">SABER MAIS</button></a>
    			    	</div>
    			    	<div class="card-footer" style="vertical-align: center !important">
    			      		<small class="text-muted">
    				      		<?php
    				      			include 'contador3.php';
					      			echo "<h5>$a Pessoas visitaram esse Projeto.</h5>";
    							?>  
    			      		</small>
    			    	</div>
    			  	</div>
    		    </div>
			</div>
      	</div>
    </div>
  </section>

	<!-- RODAPÉ -->
  	<footer class="py-3">
    	<div class="container">
      		<p class="m-0 text-center text-white">Jair Lopes &copy; 2020</p>
    	</div>
  	</footer>

	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>