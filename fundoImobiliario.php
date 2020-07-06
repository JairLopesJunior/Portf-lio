<?php
include 'contador.php';
if (isset($_COOKIE['counte'])) {
$counte = $_COOKIE['counte'] + 1;
} else {
$counte = 1;
$a++;
}
header(setcookie('counte', "$counte", time()+5));
$arquivo = "contador.php";
$abre = fopen($arquivo,"w");
$ss ='<?php $a='.$a.'; ?>';
fwrite($abre, $ss);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Projeto - Fundo Imobiliário</title>
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
			    <a class="list-group-item list-group-item-action" id="list-introducao-list" data-toggle="list" href="#list-introducao" role="tab" aria-controls="profile">
			    	<p style="font-size: 1.5vw; padding-top: 0.5em">Introdução
			    		<i id="icons" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
			    <a class="list-group-item list-group-item-action" id="list-revisao-list" data-toggle="list" href="#list-revisao" role="tab" aria-controls="messages">
			    	<p style="font-size: 1.5vw; padding-top: 0.5em">Bibliográficas e Problematização
			    		<i id="icons2" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
			    <a class="list-group-item list-group-item-action" id="list-metodos-list" data-toggle="list" href="#list-metodos" role="tab" aria-controls="settings">
			    	<p style="font-size: 1.5vw; padding-top: 0.5em">Métodos e ferramentas
			    		<i id="icons" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
			    <a class="list-group-item list-group-item-action" id="list-relato-list" data-toggle="list" href="#list-relato" role="tab" aria-controls="settings">
			    	<p style="font-size: 1.5vw; padding-top: 0.5em">Relato do Processo
			    		<i id="icons" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
			    <a class="list-group-item list-group-item-action" id="list-resultado-list" data-toggle="list" href="#list-resultado" role="tab" aria-controls="settings">
			    	<p style="font-size: 1.5vw; padding-top: 0.5em">Resultados
			    		<i id="icons" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
			    <a class="list-group-item list-group-item-action" id="list-consideracao-list" data-toggle="list" href="#list-consideracao" role="tab" aria-controls="settings">
			    	<p style="font-size: 1.5vw; padding-top: 0.5em">Considerações
			    		<i id="icons" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
			    <a class="list-group-item list-group-item-action" id="list-imagem-list" data-toggle="list" href="#list-imagem" role="tab" aria-controls="settings">
			    	<p style="font-size: 1.5vw; padding-top: 0.5em">Imagens
			    		<i id="icons" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
			    <a class="list-group-item list-group-item-action" id="list-projeto-list" data-toggle="list" href="#list-projeto" role="tab" aria-controls="settings">
			    	<p style="font-size: 1.5vw; padding-top: 0.5em">Ver Projeto
			    		<i id="icons" class="fa fa-chevron-right" aria-hidden="true"></i>
			    	</p>
			    </a>
		    </div>
	 	</div>
		<div class="col-8"  id="formatarTexto">
	    	<div class="tab-content" id="nav-tabContent" style="margin-left: 6em; margin-right: 6em;">
		     	<div style="background-color: white !important;" class="tab-pane fade show active" id="list-resumo" role="tabpanel" aria-labelledby="list-resumo-list">
				    <h1 align="center">
				    	Resumo
					</h1> 
					<p>
						Uma das principais opções de investimento hoje em dia, é investir em Fundos Imobiliários (FII) . O FII nada mais é do que um grupo de pessoas que tem um objetivo em comum: investir em ativos imobiliários. O dinheiro que todos investiram no fundo, em forma de cotas, é administrado por um gestor, que é o responsável por encontrar e realizar os investimentos mais interessantes e garantir uma boa rentabilidade para o fundo. Com objetivo a melhor compreender essa modalidade de investimento financeiro e melhor compreender as ferramentas da linguagem JAVA, foi proposto um projeto que simula o funcionamento desse tipo de fundo. Este projeto deve conter um cadastro na corretora, realização de aporte, comprar e vender FII, e conter o retorno dos dividendos mensais.
					</p>
				</div>
			    <div style="background-color: white !important;" class="tab-pane fade" id="list-introducao" role="tabpanel" aria-labelledby="list-introducao-list">
				    <h1 align="center">
				    	Introdução
				    </h1>

				    <p>
				    	Hoje em dia existe bastante risco em relação à rentabilidade de um investimento. Isso significa que o investimento pode dar um retorno abaixo do esperado, de se perder tudo o que foi investido ou, em casos extremos, de a perda ultrapassar o valor do investimento original. Uma excelente alternativa de investimento são os Fundos de Investimento Imobiliários, conhecido pela sigla FII, está é uma forma de investir com pouco recurso de maneira rápida e eficiente. Os FII são uma ótima opção para quem deseja investir em negócios imobiliários, seja na construção de empreendimentos, em imóveis prontos ou em títulos financeiros imobiliários. 
				    </p>
				    <p>
						Na disciplina Tópicos Especiais em Sistemas para Internet I  como parte da missão foi proposto um projeto para desenvolver um Simulador de uma Corretora Especializada em Fundos, utilizando a linguagem JAVA, com intuito de demonstrar uma visão geral do funcionamento e das etapas para conseguir gerenciar o seus próprios Fundos.
					</p>
				</div>
			    <div style="background-color: white !important;" class="tab-pane fade" id="list-revisao" role="tabpanel" aria-labelledby="list-revisao-list">
				    <h1 align="center">
						Revisão Bibliográficas e Problematização
					</h1>
					<p>
				    	Tomando a perspectiva de aprendizagem baseada em projetos, o professor Orlando Saraiva propôs na disciplina Tópicos Especiais em Sistemas para Internet I que fosse desenvolvido um sistema Gerenciador de Fundos Imobiliários para colocar em prática o conteúdo ensinado em sala de aula. Para tanto,era necessário compreender o funcionamento de um FI para conseguir desenvolvê-lo. Buscando por informações a respeito obtive vários conceitos e cheguei a conclusão que um Fundo de Investimento Imobiliário (FII), nada mais é que um grupo de pessoas que têm um objetivo em comum investir em ativos imobiliários.
				    </p>
				    <p>
						O dinheiro que todos investiram no fundo, em forma de cotas, é administrado por um gestor, que é o responsável por encontrar e realizar os investimentos mais interessantes e garantir uma boa rentabilidade para o fundo, um dos objetivos de um fundo imobiliário é encontrar pessoas ou empresas interessadas em utilizar os imóveis adquiridos.
					</p>
						Em troca, o fundo recebe uma renda mensal de aluguel para ser distribuída a seus cotistas. Para começar a investir em Fundos Imobiliários, primeiro é necessário abrir uma conta em uma corretora.<br>
						Para abrir a conta em uma corretora de valores é preciso realizar um cadastro com informações pessoais, dados bancários e apresentar documentos como CPF e RG. Feito o cadastro, para realizar qualquer operação no mercado, quem investe precisa antes enviar seu dinheiro para a conta na corretora. Esta etapa é feito normalmente via TED bancário ou DOC.
					<p>
						Com o dinheiro na corretora, o investidor pode enviar uma ordem de compra para a cota do fundo a sua escolha. Cada fundo é conhecido por um código e um valor da cota. Para realizar a compra, é preciso digitar o código do fundo, a quantidade de cotas e o valor que você deseja pagar. A oferta segue para o mercado e se houver um participante do fundo disposto a vender suas cotas por aquele valor, o negócio é fechado. (QUINTANILHA, 2019).
					<p>
						Com o entendimento dessas operações foi possível desenvolver um projeto com eficácia e de forma concisa. 
						Um dos requisitos para esse projeto era a utilização da linguagem de programação Java uma linguagem de programação orientada a objetos desenvolvida na década de 90 por uma equipe de programadores chefiada por James Gosling, na empresa Sun Microsystems.
					</p>
					<p>
						Outra tarefa foi escolher as ferramentas que a linguagem JAVA possui como por exemplo os Ambientes de Desenvolvimento Integrado (IDE). O JAVA possui o Eclipse que é uma IDE para desenvolvimento Java, porém suporta várias outras linguagens. NetBeans é um IDE gratuito e de código aberto para desenvolvedores de software, que facilitam bastante a parte de programação com o auto complemento é um recurso das ferramentas de desenvolvimento de sistemas IDE que permite criar atalhos para os códigos ou completar os códigos dos programadores.
					</p>
				</div>
			    <div style="background-color: white !important;" class="tab-pane fade" id="list-metodos" role="tabpanel" aria-labelledby="list-metodos-list">
				    <h1 align="center">
				    	Métodos e ferramentas
				    </h1>
				    <p>
						O principal paradigma que foi utilizado no projeto foi a Programação Orientação a Objetos (POO). A  POO é um modelo de análise, projeto e programação de software baseado na composição e interação entre diversas unidades chamadas de 'objetos'.  Um objeto é algo distinguível que contém atributos (ou propriedades) e possui um comportamento. Cada objeto tem uma identidade e é distinguível de outro mesmo que seus atributos sejam idênticos. (SARAIVA, 2011).
					</p>
					<p>
						A POO é um dos 4 principais paradigmas de programação os outros paradigmas que existem são:
					</p>
					<p>
						<b>1.</b> Paradigma Imperativa que é um paradigma de programação que descreve a computação como ações, enunciados ou comandos que mudam o estado (variáveis) de um programa.
					</p>
					<p>
						<b>2.</b> Paradigma Funcional que  é um paradigma de programação que trata a computação como uma avaliação de funções matemáticas e que evita estados ou dados mutáveis.
					</p>
					<p>
						<b>3.</b> Paradigma Lógica que é um paradigma de programação que faz uso da lógica matemática.
					</p>
					<p>
						Tomando que nosso projeto adota o paradigma OO, As etapas seguidas ao longo do desenvolvimento do projeto foram separadas em quatro partes.
					</p>
					<p>
						<b>1.</b> Obter conhecimento em qualquer assunto relacionados a Fundos Imobiliários para ter um domínio e poder realizar a construção de um Software robusto que atenda todas as  exigências possíveis. 
					</p>
					<p>
						<b>2.</b> A segunda etapa  foi compreender melhor a POO, que foi essencial para construir um projeto com uma estrutura limpa e que atualmente é uma tecnologia muito utilizada pelas empresas.
					</p> 
					<p>
						<b>3.</b> A terceira etapa foi escolher as ferramentas para ser utilizadas no projeto. 
					</p>
					<p>
						<b>4.</b> A quarta etapa foi o desenvolvimento do projeto colocando em práticas estudos e competências adquiridos nas aulas ou em pesquisas.
					</p>
				</div>
			    <div style="background-color: white !important;" class="tab-pane fade" id="list-relato" role="tabpanel" aria-labelledby="list-relato-list">
				    <h1 align="center">
				    	Relato do Processo
					</h1>
					<p>
						Neste projeto foram encontrados vários obstáculos, um grande obstáculo foi entender como funciona um Fundo Imobiliário, foi preciso estudar bastante além da própria introdução do projeto, foi preciso buscar informações em sites externos a respeito do FII  e dialogar bastante com o professor também para adquirir conhecimento nesse assunto.
					</p>
					<p>
						Outro grande obstáculo foi a OO que basicamente significa abstrair a organização dos processos tal como eles ocorrem nos FII em uma coleção de objetos que incorporam estrutura de dados e um conjunto de operações que manipulam estes dados. O meu desafio foi compreender este novo tipo de programação que é bastante diferente da Programação Estruturada (PE) que é uma forma de programação, com ênfase no uso de subrotinas, laços de repetição, condicionais e estruturas em bloco. Nesta trajetória, o projeto foi realizado várias pesquisas em diferentes sites e também houve a necessidade de realizar um curso de Java Básico Orientado a Objetos que foi muito importante para conseguir concluir o projeto.
					</p>
				</div>
			    <div style="background-color: white !important;" class="tab-pane fade" id="list-resultado" role="tabpanel" aria-labelledby="list-resultado-list">
				    <h1 align="center">
				    	Resultados
				  	</h1>
				  	<p>
				      	Com este projeto que simula um fundo imobiliário foi alcançados os seguintes resultados: 
				    </p>
				   	<p>
						<b>&bull;</b> O software permite abrir uma conta em uma corretora informando os seus dados pessoais com intuito de validar e reconhecer cada usuário unicamente. 
					</p>
					<p>
						<b>&bull;</b> Também é possível realizar aporte, uma contribuição financeira que é utilizado para determinado fim, neste caso é para enviar o seu dinheiro para a corretora também é possível você resgatar o dinheiro, ou seja, enviar da sua conta na corretora para a sua conta no banco;
					</p>
					<p>
						<b>&bull;</b> O usuário do software também pode ver as cotações do dia que seria basicamente ver quais as cotas estão disponíveis de um determinado fundo, é claro também comprar e vender fundos Imobiliários;
					</p>
					<p>
						<b>&bull;</b> É possível obter a lista de dividendos dos fundos os dividendos são uma parcela do lucro apurado pelo organizador, ou seja, seria o aluguel dos seus fundos outra função do projeto é a leitura de um arquivo TXT as cotações do dia e se conter alguma alteração ele deve atualizar o saldo da conta na corretora.
					</p>
				</div>
			    <div style="background-color: white !important;" class="tab-pane fade" id="list-consideracao" role="tabpanel" aria-labelledby="list-consideracao-list">
				    <h1 align="center">
				    	Considerações
				    </h1>
				    <p>
						Durante a realização do projeto, foi assumido o desafio de buscar o envolvimento dos diversos assuntos relacionado a Fundos Imobiliários e Orientação a Objeto. Desta forma foram alcançados os resultados propostos pelo projeto da aula de Tópicos Especiais em Sistemas para Internet I. Neste projeto foi alcançado o conhecimento em assuntos relacionados a investimento e também como funciona um fundo imobiliário passo a passo, outro resultado alcançado foi o conhecimento em Orientação a Objetos que facilitou bastante para a conclusão do projeto, esses dois resultados foram essenciais para ter um projeto fácil de compreender e de utilizar, sendo bastante interessantes e intuitivos 
					</p>
				</div>
				<div style="background-color: white !important;" class="tab-pane fade" id="list-imagem" role="tabpanel" aria-labelledby="list-imagem-list">
					<h1 align="center">
				    	Imagens
				    </h1><br>
                    <div style="text-align: center; background-color: white !important">
                      <img style="border-radius: 5px" src="img/fundoImobiliario.png">
                    </div>
				</div>
				<div style="background-color: white !important;" class="tab-pane fade" id="list-projeto" role="tabpanel" aria-labelledby="list-projeto-list">
					<h1 align="center">
				    	Ver Projeto
				    </h1>
				    <p style="text-align: start !important">Link para testar: <a target="_blank" href="https://repl.it/@videosincriveis/PlushDimgrayBash?lite=true">https://repl.it/@videosincriveis/PlushDimgrayBash?lite=true</a></p> 
				   	<p style="text-align: start !important">Ver no GitHub: <a target="_blank" href="https://github.com/JairLopesJunior/Projeto-Fundo-Imobili-rio-em-JAVA.">https://github.com/JairLopesJunior/Projeto-Fundo-Imobili-rio-em-JAVA.</a></p> 
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
