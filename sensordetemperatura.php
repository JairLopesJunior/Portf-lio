<?php
include 'contador1.php';
if (isset($_COOKIE['counte'])) {
$counte = $_COOKIE['counte'] + 1;
} else {
$counte = 1;
$a++;
}
header(setcookie('counte', "$counte", time()+5));
$arquivo = "contador1.php";
$abre = fopen($arquivo,"w");
$ss ='<?php $a='.$a.'; ?>';
fwrite($abre, $ss);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Projeto TermoSafe - Sensor de Temperatura</title>
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
		<div class="col-8" id="formatarTexto">
	    	<div class="tab-content" id="nav-tabContent" style="margin-left: 6em; margin-right: 6em">
		     	<div style="background-color: white !important" class="tab-pane fade show active" id="list-resumo" role="tabpanel" aria-labelledby="list-resumo-list">
				    <h1 align="center">
				    	Resumo
					</h1> 
					<p>
					    O presente artigo descreve as especificações técnicas do projeto TermoSafe, sensor para controle de temperatura em ambientes com Data Centers, no intuito de preservar tais equipamentos que são de extrema importância para as empresas. Sabe-se que é alto o volume de informações mantidas pelas empresas nesse tipo de equipamento computacionais, e que qualquer dano a esse tipo de máquina pode gerar grandes prejuízos às empresas. Considerando tais fatores, a construção do projeto objetivou-se na prevenção de problemas futuros ocasionados por temperaturas elevadas neste tipo de ambiente. No trabalho serão apresentados brevemente uma revisão bibliográfica do setor, descrição dos métodos utilizados, relato do processo de construção, resultados obtidos com o projeto e encerrando com as considerações finais.
					</p>
				</div>
			    <div style="background-color: white !important" class="tab-pane fade" id="list-introducao" role="tabpanel" aria-labelledby="list-introducao-list">
				    <h1 align="center">
				    	Introdução
				    </h1>

				    <p>
				    	Sabe-se que atualmente as empresas estão cada vez mais dependentes de equipamentos computacionais para manter seguras suas informações e de fácil acesso, contudo precisam se preocupar também com o espaço físico onde esses equipamentos estão localizados, evitando possíveis danos que possam atrapalhar o funcionamento da empresa.
                    </p>
                    <p>
                        Uma alternativa para este problema é o monitoramento da temperatura do ambiente em que eles estão, solução esta que pode evitar possíveis danos aos equipamentos que são de extrema importância, por conter dados da empresa e os preservar, já que muitas vezes se tratam de equipamentos de alto custo.
                    </p>
                    <p>
                        Levando em consideração todos estes problemas, o dispositivo desenvolvido para monitoramento da temperatura local, contém uma interface que somente a empresa tem acesso e também as funcionalidades de monitorar e alertar a temperatura do ambiente e com um custo baixo para desenvolver, com este dispositivo a empresa vai ficar pro ativa a futuros problemas relacionados ao ambiente dos aparelhos computacionais evitando que eles possam ser danificado pela temperatura ou não tenham um funcionamento correto e também evitando falhas nas atividades da empresa. A maioria dos dispositivos similares no mercado, possui um alto custo para se adquirir, e todos eles já contém um software que você precisa usar para ele funcionar, limitando a segurança dos seus dados neste software de terceiros, este é um ponto crítico porque muitas empresas são extremamente rígidas até pela questão da ISO (Organização Internacional de Normalização), em políticas de segurança e não aceitam software de terceiros e também muitas vezes contêm funcionalidades limitadas, não fornecendo alertas sonoro sobre a oscilação da temperatura. O propósito do projeto é construir um sensor de temperatura que abrange todos esses requisitos e de baixo custo e manuseio.
                    </p>
                    <p>
                        A proposta de criar um sensor de temperatura para monitoração de ambientes com Data Center, surgiu a partir da realização de pesquisas, para seleção das ferramentas mais adequadas para a construção do projeto, de maneira que suas necessidades fossem atendidas. O que nos permitiu iniciar a construção do ambiente gráfico utilizando HTML, CSS e JavaScript e as funcionalidades do dispositivo tendo como base um Arduino, um sensor TMP, led RGB e um buzzer.
                    </p>
                    <p>
                        Durante o projeto foi realizado teste com usuários que continham o perfil da nossa persona para obter feedbacks e melhorar o projeto com base nas informações coletadas. No final do projeto foi criado um protótipo com baixo custo e fácil manuseio, que contém a funcionalidade de medir a temperatura do ambiente e um alerta sonoro relatando que a temperatura está fora do intervalo que foi programado.
				    </p>
				</div>
			    <div style="background-color: white !important" class="tab-pane fade" id="list-revisao" role="tabpanel" aria-labelledby="list-revisao-list">
				    <h1 align="center">
						Revisão Bibliográficas e Problematização
					</h1>
					<p>
				    	Pesquisas sobre monitoramento de Data Centers, indicam que esse acompanhamento é algo essencial, e pode reduzir problemas caso não seja monitorado como por exemplo, o superaquecimento dos servidores que pode ocasionar a queda de sistemas importantes da empresa, gerando riscos de perda de dados e prejuízos operacionais, como o tempo de equipe parada, interrupção dos trabalhos das áreas financeira, de produção, desenvolvimento, marketing e vendas, também com o aumento descontrolado as salas podem resultar em ameaças físicas como emissão de gases corrosivos oriundos dos materiais utilizados na fabricação dos componentes de TI, além da real possibilidade de incêndio, que pode provocar danos sérios na infraestrutura predial, danificando o hardware e comprometendo os dados armazenados.
				    </p>
				</div>
			    <div style="background-color: white !important" class="tab-pane fade" id="list-metodos" role="tabpanel" aria-labelledby="list-metodos-list">
				    <h1 align="center">
				    	Métodos e ferramentas
				    </h1>
				    <p>
					    No começo foi realizado bastante pesquisas para escolher os melhores componentes para o projeto, em seguida foi utilizado o software de testes TinkerCad, é um programa online gratuito de modelagem em 3D que roda em um navegador da web, conhecido por sua interface simples e facilidade de uso, este software permitiu que construíssemos um projeto mesmo sem ter os nossos componentes. Depois de testado o projeto, foi decidido todos os componentes que iremos precisar no projeto, sendo eles, um Arduino UNO, um sensor TMP, um led RGB, um Buzzer e também um Case para o Arduino. Depois da escolha dos componentes foi efetuado a programação na IDE (Ambiente de desenvolvimento integrado) do arduino, e também realizado a criação da interface de monitoramento utilizando as linguagens HTML, CSS e JavaScript.
					</p>
				</div>
			    <div style="background-color: white !important" class="tab-pane fade" id="list-relato" role="tabpanel" aria-labelledby="list-relato-list">
				    <h1 align="center">
				    	Relato do Processo
					</h1>
					<p>
						Utilizado a IDE do Arduino com a linguagem C++ para realizar a programação das funcionalidades do Sensor de Temperatura, como por exemplo, a leitura da temperatura, a programação do led que muda de cor indicando uma alteração na temperatura e o buzzer que vai alertar com um som quando a temperatura ter fora dos padrões configurado no arduino. Na interface foi utilizado o framework BOOTSTRAP e a linguagen HTML para criar uma interface de fácil usabilidade e visualidade para o projeto, a linguagem CSS que tem a função de deixar o site mais bonito e com cores bem visíveis e também a linguagem JavaScript que faz a conexão com o Arduino e constrói um gráfico mostrando os valores da temperatura em tempo real. Depois desta etapa foi disponibilizado para a nossa PERSONA verificar o projeto e apontar o seu feedback a respeito de futuras alterações na nossa interface, e por fim obteve o resultado de um projeto funcional que permite monitorar a temperatura em tempo real, contém alertas de oscilação da temperatura agindo juntamente com o led e o buzzer, e uma interface avaliada pela nossa persona.
					</p>
				</div>
			    <div style="background-color: white !important" class="tab-pane fade" id="list-resultado" role="tabpanel" aria-labelledby="list-resultado-list">
				    <h1 align="center">
				    	Resultados
				  	</h1>
				  	<p>
				      	Ao longo do projeto foi agregado várias fases, sendo elas as pesquisas de um equipamento parecido no mercado para verificar se seria viável a criação de um similar, pesquisas a respeito dos riscos para as empresas da falta de um equipamento de monitoramento, a escolha dos componentes que seria utilizado neste projeto, a programação de um código funcional para atender o nosso problema, a criação de um layout utilizando frameworks, criado a nossa persona e efetuado uma entrevista para saber o feedback, com base nessas informações surgiu o projeto TermoSafe que teve um resultado satisfatório atingindo o nosso objetivo de criar um sensor de temperatura com baixo custo e manuseio.
				    </p>
				</div>
			    <div style="background-color: white !important" class="tab-pane fade" id="list-consideracao" role="tabpanel" aria-labelledby="list-consideracao-list">
				    <h1 align="center">
				    	Considerações
				    </h1>
				    <p>
					    Neste projeto foi criado um protótipo de baixo custo e fácil manuseio, com as funcionalidades de visualizar a temperatura em tempo real com alertas sonoros e visuais quando a temperatura ter fora dos padrões configurados. Em futuras melhorias no projeto pretende-se utilizar a linguagem PHP para realizar a conexão com o sensor de temperatura e criar várias opções de gráficos para que o usuário tenha opções de visualizações e a criação de um Banco de Dados para guardar as informações das temperaturas possibilitando para o usuário um histórico que ele poderá realizar o download dos dados através de um arquivo .pdf ou .doc.
					</p>
				</div>
				<div style="background-color: white !important" class="tab-pane fade" id="list-imagem" role="tabpanel" aria-labelledby="list-imagem-list">
					<h1 align="center">
				    	Imagens
				    </h1><br>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" align="center">
                        <div style="background-color: white !important" class="carousel-item active">
                          <img style="border-radius: 5px;" class="d-block w-50" src="img/arduino2.jpeg" alt="Primeiro Slide">
                        </div>
                        <div style="background-color: white !important" class="carousel-item">
                          <img style="border-radius: 5px" class="d-block w-50" src="img/arduino3.jpeg" alt="Segundo Slide">
                        </div>
                      </div>
                    </div>
				</div>
				<div style="background-color: white !important" class="tab-pane fade" id="list-projeto" role="tabpanel" aria-labelledby="list-projeto-list">
					<h1 align="center">
				    	Ver Projeto
				    </h1>
				   	<p style="text-align: start !important">Ver no GitHub: <a href="https://github.com/JairLopesJunior/Projeto-TermoSafe" target="_blank">https://github.com/JairLopesJunior/Projeto-TermoSafe.</a></p> 
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
