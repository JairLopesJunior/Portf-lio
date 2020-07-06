<?php
include 'contador2.php';
if (isset($_COOKIE['counte'])) {
$counte = $_COOKIE['counte'] + 1;
} else {
$counte = 1;
$a++;
}
header(setcookie('counte', "$counte", time()+5));
$arquivo = "contador2.php";
$abre = fopen($arquivo,"w");
$ss ='<?php $a='.$a.'; ?>';
fwrite($abre, $ss);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Projeto - Sitema Bibliotecário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!--AWESOME ICON-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--CSS EXTERNO-->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style>
  body {
    position: relative;
  }

  #icons{
    float: right;
    padding-top: 0.4em;
  }
  #icons2{
    float: right;
    padding-top: 0em;
  }
  .row{
  	margin: 10px 10px 00;
  }

  #icons:hover{
  	color: white;
  }
  #icons2:hover{
  	color: white;
  }
  footer{
    bottom: 0;
  	position: fixed;
  	width: 100%;
  	z-index:100;
  }
  
  .active{
      background-color:#B96E1F !important;
      border-style: solid !important;
        border-color: #B96E1F !important;
  }
  #fundoTexto{
      background-color: white !important;
  }
  img:hover{
      transform: scale(1.5);
  }
  @media (max-width: 574px) {
  	.tab-content{
		margin: 0 !Important; 
	}
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
	  		<ul class="navbar-nav ml-auto">
			    <li style="color: white; padding-top: 1.5vh;">  
			        <?php
						echo "<h5>$a Pessoas visitaram esse Projeto.</h5>";
					?>
			    </li>
			 </ul>
		</div>
	</nav>

	<div style="margin-top: 15vh; margin-bottom: 6vh" class="row">
	  	<div class="col-4">
		    <div class="list-group" id="list-tab" role="tablist">
		        <a class="list-group-item list-group-item-action active" id="list-resumo-list" data-toggle="list" href="#list-resumo" role="tab" aria-controls="home">
			    	<p style="font-size: 1.5vw; padding-top: 1.4vh">Resumo
			    		<i id="icons" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
		        <a class="list-group-item list-group-item-action" id="list-projeto-list" data-toggle="list" href="#list-projeto" role="tab" aria-controls="settings">
			    	<p style="font-size: 1.5vw; padding-top: 0.5em">Ver Projeto
			    		<i id="icons" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
			    <a class="list-group-item list-group-item-action" id="list-imagem-list" data-toggle="list" href="#list-imagem" role="tab" aria-controls="settings">
			    	<p style="font-size: 1.5vw; padding-top: 0.5em">Imagens
			    		<i id="icons" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
		    </div>
	 	</div>
		<div class="col-8" id="formatarTexto">
	    	<div class="tab-content" id="nav-tabContent" style="margin-left: 6em; margin-right: 6em">
	    	    <div style="background-color: white !important;" class="tab-pane fade show active" id="list-resumo" role="tabpanel" aria-labelledby="list-resumo-list">
				    <h1 align="center">
				    	Resumo
					</h1> 
					<p>
						O projeto Sistema Bibliotecário tem como objetivo o cadastro de livros para melhor organizar o estoque. O sistema basicamente tem as opções de preencher o Título, Autor, Editora e Ano de Publicação dos livros. Depois de cadastrado também é possível alterar e excluir os livros através dos ícones na opção Ações.
					</p>
					<p>
					    Este projeto foi apresentado na aula Tópicos Especias II, o tema e a linguagem de  programação eram livres, apesar do framework <a href="https://pt.wikipedia.org/wiki/JavaServer_Faces" target="_blank">JavaServer Faces (JSF)</a> não ser tanto utilizado atualmente, eu o escolhi porque a empresa que eu trabalho possui um Software com essa Tecnologia. Serviu para obter experiência para uma futura usabilidade.
					</p>
				</div>
	    	    <div style="background-color: white !important" class="tab-pane fade" id="list-projeto" role="tabpanel" aria-labelledby="list-projeto-list">
					<h1 align="center">
				    	Ver Projeto
				    </h1>
				   	<p style="text-align: start !important">Ver no GitHub: <a href="https://github.com/JairLopesJunior/Projeto-CRUD-em-JAVA-com-PRIMEFACES" target="_blank">https://github.com/JairLopesJunior/Projeto-CRUD-em-JAVA-com-PRIMEFACES</a></p> 
				</div>
				<div style="background-color: white !important;" class="tab-pane fade" id="list-imagem" role="tabpanel" aria-labelledby="list-imagem-list">
					<h1 align="center">
				    	Imagens
				    </h1><br>
                    <div style="text-align: center; background-color: white !important">
                      <img style="border-radius: 5px; max-width:550px !important; max-height:550px !important; width: auto; height: auto;" src="img/sistemaBiblioteca.png">
                    </div>
				</div>
	    	</div>
	  	</div>
	</div>
	<!-- RODAPÉ -->
  	<footer class="py-1">
    	<div class="container">
      		<p class="m-1 text-center text-white">Jair Lopes &copy; 2020</p>
    	</div>
  	</footer>
</body>
</html>
