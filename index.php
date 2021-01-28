<!DOCTYPE html>
<html>

<head>

  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title>Portfólio - Jair Lopes Junior</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">

	<!--Imagem Avatar-->
	<link rel="shortcut icon" ref="img/a.jpg"/>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/scrolling-nav.css" rel="stylesheet">

	<!--AWESOME ICON-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

	<!--CSS EXTERNO-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--PROTIP TOOTIP-->
	<link rel="stylesheet" href="//min.gitcdn.xyz/repo/wintercounter/Protip/master/protip.min.css">
	
	<!--Sweet Alert2-->
	<script src="sweetalert.js"></script>
	<style type="text/css">
	    ::-webkit-scrollbar {
    	    width:10px;
    	    height: 10px;
        }
        
        ::-webkit-scrollbar-track {
        	background:transparent;
        }
        
        ::-webkit-scrollbar-thumb {
        	background: #B96E1F;
        }
	
		.pointer {cursor: pointer;}
		#iconGithub{
			color: white;
			cursor: pointer;
		}
		#iconLinkedin{
			color: white;
			cursor: pointer;
		}
		#iconGitlab{
			color: white;
			cursor: pointer;
		}
		#iconGithub:hover{top:-4px}
		#iconLinkedin:hover{top:-4px}
		#iconGitlab:hover{top:-4px}
		#mainNav{
			z-index: 99999999999999999999999;

		}

		.chicaraCofe{
			margin-right: -2vw !important; 
			margin-bottom: -2vh !important;
		}

		@media (max-width: 450px) {
			.chicaraCofe{
				margin: 1vh -4.5vh 1vh -3vh !important;
				height: 6vh;
			}
			#quemsou{
				margin-top: 8vh !important;
			}
		}

	</style>

</head>

<body id="page-top">

	<!-- MENU -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  		<a id="itensNavCor" class="navbar-brand js-scroll-trigger" href="#home">JL</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    		<span class="navbar-toggler-icon"></span>
  		</button>
	  	<div class="collapse navbar-collapse"  id="navbarNavDropdown">
		    <ul class="navbar-nav ml-auto">
		       	<li>
		            <a id="itensNavCor" class="nav-link js-scroll-trigger" href="#quemsou">QUEM SOU</a>
		        </li>
		        <li class="nav-item">
		           	<a id="itensNavCor" class="nav-link js-scroll-trigger" href="#cv">CV</a>
		        </li>
		        <li class="nav-item">
		            <a id="itensNavCor" class="nav-link js-scroll-trigger" href="#portifolio">PORTFÓLIO</a>
		        </li>
		        <li class="nav-item">
		            <a id="itensNavCor" class="nav-link js-scroll-trigger" href="#contato">CONTATO</a>
		        </li>
		    </ul>
		</div>
	</nav>

	<main>

	<!--HOME-->
    <section id="home">
    	<!--Scroll Progress-->
		<div class="header">
			<div class="progress-container">
			    <div class="progress-barr" id="myBar"></div>
			</div>  
		</div>
    	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-attachment: fixed;position: absolute;height: 200px;top: 3.5em;background-image: url(img/imagem.jpg);width: 100% !important; background-size: cover;">
        </div>
<!-- 
       	<img width="100%" style="background-size: cover;background-attachment: fixed;position: absolute;background-color: #9A9A9A; height: 200px;top: 3.5em;" src="img/fundo.jpg"> -->
    	<div class="container" style="text-align: center; top: 2vh"> 
    	<div class="row">
        	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        		<img src="img/a.jpg" style="background-color: #ff9800;box-shadow:-2px 4px 4px rgba(0, 0, 0);filter: brightness(80%);" class="rounded-circle" alt="Jair Lopes Junior" width="220" height="220"> 
        	</div>
        </div>

        <div class="row">
        	<div style="text-align: center; margin-top: 1vh;font-family: 'Roboto Condensed', sans-serif;" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        		<h4>System<span style="color: #0029FF">.out.</span>println(<span style="color: #146FC3">"JAIR LOPES JUNIOR"</span>);</h4> 
        	</div>
        </div>

        <div class="row">
        	<div style="text-align: center; margin-top: 4vh; margin-bottom: -2vh;" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        		<h2 class="typewriter">BACK-END / DEVELOPER</h2>
        		<hr align="center" width="40%" style="border: 2px solid black; margin-top: 0vh">
        	</div>
        </div>	

        <div class="row">
        	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        		<h2 style="font-family: 'Roboto Condensed', sans-serif;">I TURN <svg class="chicaraCofe" width="94" height="94" viewBox="0 0 94 94" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<rect width="60" height="60" fill="url(#pattern0)"/>
			<defs>
			<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
			<use xlink:href="#image0" transform="scale(0.00195312)"/>
			</pattern>
			<image id="image0" width="512" height="512" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAgAElEQVR4Ae2du5rcxpZmxXPaaE84XntCP4FgjldobzzmeO1VypuxmP0ElecJWP0ElXoCprz2CvRmLELeeAWaYxHyui3OvylAApN5wSUARABrf99fgUtc9l6BxA4gi8XvvsMgAAEILINAtIwwiAIC0xD46zTDMAoEIACB0Qn8q0awRUAx+kgMAAEIQAACEICANwQSefJJ4k2AN1OCIxCAAAQgAIFpCHzWMB+mGYpRIAABCEAAAhDwhUAuR2wR8OiLQ/gBAQhAAAIQgMD4BA4awhYAplTCIACBCwT+cuE4hyEAAQiESKBoOP3U2GYTAhA4IcC/AjgBwi4EIBA8gW0Vgf0y4Cspq/YpIAABCEAAAhBYKIFYcdVfAdSlHcMgAAEIQAACEFg4gTrx1+XzwuMlPAhAAAIQgAAERKD+lwD1AsDKFDIQgAAEIAABCCybQKbwmsnftp+XHTLRQaA7Af4VQHdmtIAABPwmkJ1xL9UxEwYBCFQEWABwKUAAAmshsFtLoMQJAQhAAAIQWCOBrYI+/Qqg3o/XCISYIXCOAG8AzlHhGAQgEDKB4orz2yvnOAWBVRFgAbCq6SZYCKyewP3qCQAAAhCAAAQgsFAC9hcA61f+58rNQuMmLAh0IsAbgE64qAwBCARAoLzhIwuAG4A4DQEIQAACEAiVwLkn//rYp1CDwm8IQAACEIAABK4TqJP9pTK93pyzEFg+Ab4CWP4cEyEEIPAtAb4G+JYJRyAAAQhAAALBE7j05F8ffwk+QgKAAAQgAAEIQOAbApmO1Mn+Uhl904oDEFgRAb4CWNFkEyoEVkTg+xaxJi3qUAUCiyXAAmCxU0tgEFg1gTbJPV01IYJfPQEWAKu/BAAAgdUSaLNIWC0cAocABCAAAQiESODS9/7N4/w9gBBnFp+dEXjlrCc6ggAEIOAPAUv0bYx7YBtK1FkkAb4CWOS0EhQEINCSQNqyHtUgsDgCLAAWN6UEBIHVE0hXTwAAEGhBgAVAC0hUgQAEFkuAXwRc7NQS2C0CLABuEeI8BCAQGoG4g8NRh7pUhcCiCLAAWNR0EgwEICACcQcKLAA6wKLqsgiwAFjWfBINBCDw3XddXut3qQtbCCyKAAuARU0nwUAAAiLwAxQgAIHbBFgA3GZEDQhAICwCPNWHNV94OxMBFgAzgWdYCEBgFAIk/1Gw0ukSCbAAWOKsEhME1kuABcB6557IOxJgAdARGNUhAAGvCaRee4dzEPCIAAsAjyYDVyAAgcEE7gb3QAcQWAkBFgArmWjChMAKCMSK0dTFii6VqQuBJRFgAbCk2SQWCKybQNoj/KJHG5pAYBEEWAAsYhoJAgIQEIEUChCAQHsCLADas6ImBCDgNwG+//d7fvAOAhCAAAQg4JxArB4/91CqNhgEVkmANwCrnHaChsDiCOx6RlT2bEczCEAAAhCAAAQ8IPAiH/q8AfDAdVyAAAQgAAEIQKAPAfvrf32Sf95nMNpAYCkE+ApgKTNJHBBYL4Ftz9B5/d8THM0gAAEIQAACPhD4JCf6vAHY++A8PkAAAhCAAAQg0J3ARk36JH9rk3YfjhYQgAAEIAABCPhA4FlO9F0ARD4EgA8QgAAEIAABCHQjkKh63+SfdxuK2hBYHgF+CXB5c0pEEFgLgd2AQLMBbWkKAQhAAAIQgMBMBGKN2/fp39ptZvKbYSHgDQHeAHgzFTgCAQh0ILDtUPdcVb4COEeFYxCAAAQgAAGPCUTyre8//bOn/8Lj2HANApMR4A3AZKgZCAIQcETAvvu3RUBfO/ZtSDsIQAACEIAABOYhEGvYId/9W9tkHtcZFQIQgAAEIACBvgQOajhkAVD0HZh2EIAABCAAAQjMQyDVsEOSv7V9nMd1RoUABCAAAQhAoC+BZzUcugDg9X9f+rSDAAQgAAEIzEBgozGHJv9iBr8ZEgIQgAAEIACBngQitRvyz/7qhcO+5/g0gwAEIAABCEBgBgIHjVkn8SFlPIPvDAkBCEAAAhCAQA8CqdoMSfp120OPsWkCAQhAAAIQgMAMBOzV/4tUJ/EhZTqD/wwJAQhAAAIQgEAPAo9qMyTp123zHmPTBAIQgAAEIACBGQhsNGadwIeW2xn8Z0gIQAACEIAABDoSiFXfxW/928KhlCIJgwAEIAABCEDAcwLP8m/oU3/dfu95rLgHAQhAAAIQgIAI7KU6eQ8tefrnkoIABCAAAQgEQCCVj0OTfrP9PoCYcRECEIAABCCwagKxonf1vb8tAnj6X/XlRPAQgAAEIBACAfslvQ9S8+l96PY+hMDxEQIQgAAEILBmAu8U/NCE32zP0/+aryZihwAEIACBIAg8ystm8naxvQ0icpyEAAQgAAEIrJTAVnG7SPjNPvKVsiRsCEAAAhCAQBAENvKymbhdbadBRI+TEIAABCAAgRUSSBSzy9/4rxcPhxWyJGQIQAACEIBAEATGSv6loo+CIICTEIAABCAAgZURGCv52xuA3cpYEi4EIAABCEAgCAL2dO763/rXr/7zIAjgJAQgAAEIQGBlBMZM/rYISFbGk3AhAAEIQAAC3hMYO/nvvSeAgxCAAAQgAIGVEbAn8xepflXvusxXxpNwIQABCEAAAt4TsOQ/xj/1ay4ibAwMAhCAAAQgAAFPCEyR/PeexIobEIAABCAAAQiIwBTJP4c0BCAAAQhAAAL+EJgi+ZcKN/YnZDyBAAQgAAEIrJvAFMnfvv/frBsz0UMAAhCAAAT8ITBV8n/0J2Q8gQAEIAABCKybwFbhN38zf6ztfN2YiR4CEIAABCDgD4E3cmWshN/st9Q4sT9h4wkEIAABCEBgvQSeFHozSY+5vVkvZiKHAAQgAAEI+EEgkhtTJv+9H2HjBQQgAAEIQGC9BCz5j/U/+p17g3BYL2oihwAEIAABCPhBIJEbUyb/XOPZggODAAQgAAEIQGAmApb8x/67/s03AKXGi2eKlWEhAAEIQAACEBCBrTRl8reFgC04MAhAAAIQgAAEZiLwVuM2n8yn2N7OFCvDQgACEIAABFZPwL57fydNkfCbY2xXTx4AEIAABCAAgZkIxBr3g9RMzFNsHzQmBgEIQAACEIDADARSjTn19/22uDhIGAQgAAEIQAACMxDYaswpnvRPxzjOEOtShnytQPZSLGEQgAAEIACBzgSe1OI0MU+xn2tc+30DrB2BWNXupfr3M/bahp8gYBCAAAQg0I2AJY85vu+3xQXJv91cJar2cDJPmfbtOAYBCEAAAhDoTMASyItkyXhqlRozkrDzBGxu3kqn82PcduebcBQCEIAABCBwm8BWVaZO+vV4lsQswWFfEzAm55J+ze2o89HXTdiDAAQgAAEItCfwpKp1Upm6LDW2JTrsdwLG4lrSt/kppI2EQQACEIAABHoRiNRqru/7LZGVkiW8tZsxuJX064XZXnVt3jAIQAACEIBALwKpWn2S6sQydbn25G9J/I3UdgGWqa4tFDAIQAACEIBAbwKWeKZO+M3x1pz878X+XQf+xmonYRCAAAQgAIHeBCK1fJKayXjq7TUm/6Ti/qkj+6Pq25xhEIAABCAAgd4EYrVs+7p5rEXBmpK/JW570/IideVZqE0qYRCAAAQgAIFBBFK17vr02TVp3apfyIdEWrpZjE/SLR6Xzu/V1hYPGAQgAAEIQGAQgQe1vpRspjqey4elJ7V7xTjkDUum9rZ4wCAAAQhAAAKDCFjCfSdNleQvjbPk5B+L74M05O1KqfY7CYMABCAAAQgMJpCohyFPo5eSedfjmfyIBkfjXwepXHKxuDqqn1jCIAABCEAAAoMJbNXDkCfSrkn+Uv3D4Ej86+BeLr1Il2Jue7xQHxsJgwAEIAABCDgh8Fa9tE1CY9Y7OInGn07u5cqL5ILZo/pZ4lsRf2YLTyAAAQisiIAllGfJRYIa2sd2IdyN6YPk6m1Kob5SCYMABCAAAQg4IZColxdpaOJ20X7rJKJ5O3Gd+I3rft6QGB0CEIAABJZGYKuAXD2hDlkAlPIjlUK2WM4/SS555urPFmgYBCAAAQhAwBkBX77vt+QfcpKL5P+DNGQBdK7tXn1iEIAABCAAAWcELGG9k84lnamP5fLD/AnR6sTv8onf+GdSLGEQgAAEIAABZwQS9fRBmjrRnxvvID9CTf738t114jdGewmDAAQgAAEIOCWwUW9jJK1zyf3Wsb3TyKbrzBL/i3Qrvq7nc/VpizMMAhCAAAQg4JTAg3rrmpTGqF/Kj63TyKbpLNUwY7052U8TAqNAAAIQgMDaCDwp4DGSedc+LfmH9pQby+fnkfgV6jc0HnIZgwAEIAAB3wlEcnCsp9auyT+XL+ZPKGa+Pkhd42xb/1F9h8QjlHnDTwhAAAKrJxCLgC/J/yBfQkp2qfx9kdom8y71SvVr/WMQgAAEIAAB5wQS9cgv+3XHGqvJO6lLQu9SN1PfIS2E5C4GAQhAAAKhENjKUR+Svz3pbkKBJj8fRua2C4gFrkIAAhCAQGAE3sjfLk+kY9Ut5EcSCLtUfr5IsAhkwnATAhCAAAS+JvCk3bGSWJd+M/kRfe2al3vm41upS2xd6x7VfwgsvJwgnIIABCAAgesELME8S12T0xj1D9dd9eZsIk9epDEYWJ+ltJUwCEAAAhCAwCgELPl/kMZKZF363Y4SoftOH0bmVah/W2BgEIAABCAAgVEI+JL87Wl3M0qEbju1pDz2YinTGDYvGAQgAAEIQGAUApZkxk5mbZ7+S/lhidV3eyMH28QzpM6j7xDwDwIQgAAEwiZgCfeTNCRZuWiby4fIc5Sx/HuWXMR7qY9S/W8lDAIQgAAEIDAaAV+Sf6YIfU/+G/k49kKp0Bg2JxgEIAABCEBgNAK+JP/DaBG66/iturr0xO7qeKYxfF8EuSNKTxCAAAQgMAsBkn877JaQP0iukvylfg7t3KEWBCAAAQhAoD+BjZqO/Sr7UqJrHt/2D2GSllMtknaTRMMgEIAABCCwagKW1JpJeK7treezYP5NsUjynYPn04R7EIAABCDQhsBUT7S3FhXbNs7OWOdBY9+KYej5UmOkM8bI0BCAAAQgsBICJP92E/2kakOT+632lvxtPjAIQAACEIDAqARI/rfxRqryTrqVvIeezzUGyf/2fFADAhCAAAQGErDENsVvsd9KjNuBcYzZfCpGlvxtLAwCEIAABCAwKoGpEhvJ//abA5L/qJc6nUMAAhCAQJPAs3ZuJeexz2+bDnm2PdUCieTv2cTjDgQgAIElE3hScGMn91v9bz0GTPL3eHJwDQIQgAAE+hHYqdmt5Dz2+X0/1ydpRfKfBDODQAACEIDAlAQ2Gmzs5H6r/8OUAXcci+TfERjVIQABCEDAfwKxXJzir9ddWwAcPcf0JP+u+e/iXK4xbKGBQQACEIAABEYnMNWT7bUE6XvimyL5l5rpZPTZZgAIQAACEIBARWCK5HYt+Vviiz2eja18u+a/q3Mkf48vAlyDAAQgsDQCWwXkKoH17cfnxJdOxMfmAYMABCAAAQhMQiDWKHN/77+dJNJ+g8RqNgWfx37u0QoCEIAABCDQj8CzmvV9anfRzvfEN8WfQc77TR2tIAABCEAAAv0I7NTMRRLv24clvqif65O0epyAT6kx4kmiYRAIQAACEICACFjineLV9qXFgSW+xOOZSOXbJd9dHt94zADXIAABCEBggQQOisllIuva185jppF8m2JxdPSYAa5BAAIQgMACCaSKqWvCdlnf98T3bgI+pcawhQYGAQhAAAIQmIzAFL/YdmnB4HviSzULl3x3eXw32WwzEAQgAAEIQEAEtpLLRNa1LxvfZ3uRc11j6lo/9xkAvkEAAhCAwDIJPCusrgnLVf3Mc6T7idiknnPAPQhAAAIQWBiBVPG4SuZ9+ok95mm+TfGLf5nHDHANAhCAAAQWSuBZcfVJ3C7a7D1nepiITeo5B9yDAAQgAIGFEYgVj4tE3qePQmP7/BvvU7HJxAGDAAQgAAEITErgUaP1Sd4u2mwmjbT7YIeJ2Gy7u0YLCEAAAhCAwDACL2ruIpl37SMb5vborWON0DWmPvXL0SNhAAhAAAIQgMAJAXsC75O0XLRJT3zxbXeqNyMH3wLHHwhAAAIQWD6BqZLc6YIh8xxtJP+m+M1/45J6zgL3IAABCEBggQReFNNpcp5iP/Wc5XZCLp6jwD0IQAACEFgagVgBTZHsT8fIAgD5PBGbEFgEMF24CIH+BP7SvyktIRAsgWQmzw8zjdt22FgV07aVB9bLBranOQQgMJAAC4CBAGkeJIE5FgC/idTBc1qbCf3LJhyLoSAAgTMEWACcgcKhxRNIZ4jwMMOYXYeccgHQ1TfqQwACEIAABAYTyNTD6ffzY+/P8dahC6hoYiY2HgYBCEAAAhCYlMDYyf60/2LS6PoNZk//p36Pud/PS1pBAALOCPAVgDOUdASBiwSOF8/4cyL1xxU8gQAEpiDAAmAKyoyxdgJZAACSAHzERQhAwCGBVw77oisIhELAXm1PaSF8zmAy5RXBWBDwgABvADyYBFyYlMDUT7rvJ42u32BTM+nnJa0gAAGnBFgAOMVJZwEQyCf2MZt4vD7DxX0aDWyTDmxPcwhAYCABFgADAdIcAjcIZDfO+3B6jjcAkQ+B4wME1kyABcCaZ5/YpyBQTDHIwDHmSMZzLDoGYqI5BJZFgAXAsuaTaNoRsD/LO5UVUw00YJw5kvEcYw5ARFMILI8AC4DlzSkR3SaQ367ipEYIvwDoJNAendz1aEMTCEDAIQEWAA5h0hUETgiUJ/vs/kkg0iZvAf7kwRYEJifAAmBy5AzoAYFsIh+metMwUTjOh9k475EOIQCB1gRYALRGRcUFESAxfz2Z0de7k+29nmwkBoIABL4hwALgGyQcWAGBYqIYpxpnaDjl0A56tk/UzoRBAAIzEGABMAN0hpydQD6RB8VE44Q8zDZk5/EdAiETYAEQ8uzh+xAC/Ib+EHru2t6rq8hdd/QEAQi0JcACoC0p6i2NwFRvAULgVszopCX/3YzjMzQEVkuABcBqp371gR9XT+BPAMWfm7NsvdGothDAIACBCQmwAJgQNkN5RSCTN1P+RUCvgvfMGUv+G898wh0ILJ4AC4DFTzEBXiEw9luA5MrYPp0qPXDmQT5EHviBCxBYDQEWAKuZagI9QyA7c8zloVASWu4y6J59xWq369mWZhCAAAQgAIFOBCxBfx5R+07ezFt5TA5t+/4kBPG8GBgdAushwBuA9cw1kX5LoNShn7897OxI4qyn8Tv6dfwhbo5gC7L9zVpUgAAEnBBgAeAEI50ETOAwou+W0EKx3BNH7+VHSAsnT7DhBgS6E2AB0J0ZLZZFIFM4H0cK6ceR+h2j22KMTnv2+dSzHc0gAAEIQAACnQjsVLvt99Rd64XyFiAdkUFXZlbf5gSDAAQgAAEIjErAknQp9UlUt9qko3rutvNbsUx5nl8IdDu39AaBbwjwFcA3SDiwQgKW/B9Hijsdqd8xuv1ljE579mmLsqeebWkGAQhAAAIQaE3AEo4tBFw/5WatPZi/4lYuuI5/aH+7+bHgAQQgAAEILJ3AXgEOTVin7e1Vdihmi6BT/+fe56uAUK4e/IQABCAQMIGx3gJsAmKSy9e5k/7p+M8B8cNVCARD4K/BeIqjEBifwH9qiH+UUsdD/T/19x+O+xyrO4v/v4/Vec9+Y7Wz/7jpf/dsTzMIQAACEIDATQL2FqCQTp9Ch+y/3BzVnwqx49iHcDttm/iDCU8gAAEIQGCJBLYK6jT5DN0PKXkdR4h/KD9r/0GyBRoGAQhAAAIQGI1App5dJK26j8NonrrvOFWXtd++lY/uw6VHCEAAAhCAwJ8EUm26TH722+whPb0WjuN3yTKVbxgEIAABCEBgNAIH9ewyce1G89R9x+ary9hd9hXaYsr97NAjBCAAAQiMSsCe2EvJVfJ6GdVbt527jt0Vw7qfd27DpTcIQAACEIDA1wQ22q2Tjosy/bp7r/cO8s5FzGP1sfOaHs5BAAIQgEDwBDJF4CqJHQKiEctXl29AXDGs+7GvApKAeOIqBCAAAQgERiCWvy4TofUXiu3laJ1wfSw/hAISPyHgGwH+EqBvM4I/PhKw5G9/JdDVX8izv2qXSSFYLif/l2R/IdBH+yc59UrKfHQOnyAAAQhAYBkEMoXh4in4JTAce0dxu2B3qQ++CgjsosJdCEAAAiERiOSsvQ24lIS6HN8HFLjLuLsw6lKXrwICuqBwFQIQgECIBDZyuktiulTXfoHNEmsotpOjl2Lx5fg+FJj4CQEIQAACYRJ4lNsukt4+sPBzR3G7YHepjyQwprgLAQhAAAIBEYjkq4tkGNpbgFRxX0q8vhznq4CAPki4CgEIQCBEAvakWUpDE98hsOAfHcQ8lNmt9rvAmOIuBCAAAQgERmArf28lozbn44DijuSri4VPGy5964T2ZiWg6cfVJRHg7wAsaTaJZWoCuQb8m/TfBg5sfRwH9jFVc/t7CP9X+tepBuwxjv3Ngv+Ssh5taQIBCEAAAhBoTcAWAn2fVut2SevR/KhoC5badx9L3gL4cZ3gBQQgAIFFE4gUXSkNSYTPgRFyEfMQXm3a7gNjirsQgAAEIBAggUQ+t0lK1+rsAos7dRDzNR5Dz9lbAAwCEIAABCAwOoGtRhiStEJ8bf04MOYhvNq03Yw+6wwAAQhAAAIQEIG91CYxXarzLkCK+cCYL7FwcfwYIE9chgAEIACBQAkc5PeQ5JUGFncif8uBMQ/hdattFBhP3IUABCAAgUAJWMLJpVuJ6dL5F7UNLWltB8R7iYOr4+YbBgEIQAACEJiEgCXwQuqbxPZqG5o9yuG+8Y7ZzvzCIAABCEAAApMRSDRSKfVNbtY+NMvkcN94x2pnPmEQgAAEIACBSQkMWQR8mNRTN4NF6qaQxkrmfft1Ex29QAACEIAABDoQ2Kpu38S17zCOL1WHLHr6crrVLsS3Kb7MJ35AAAIQgMAAAlu1vZWkLp0PMXltBsR7icOQ46n8wSAAAQhAAAKzEHjUqH2SWIhfBRjgbc94+zC61WZnDmEQgMCfBPjfAP9kwRYExibwHxrgn6WuT/T/pDavpEwKyXI52yfeMWL8P+o0G6Nj+oQABCAAAQi0JXBQxVtPrOfOp20H8KyeLQTOxTPlsb1nTHAHAhCAAARWSiBT3F0T4IvaRAHyiuVzKXWN12X9vcbHIACBBoG/NLbZhAAEpiOw0VC/dhwuVv19xzY+VC/kxNYHR/ABAhCAAAQg4AMBe5rPpa5PuqkPzvfw4dgj1q5sLtXf9/CXJhCAAAQgAIHRCPRZBIT43wYbQIu1lC4l6TGP7zUuBgEIQAACEPCKQJ9FQIj/bbBB30ljJvpLfW9tcAwCEIAABCDgG4E+iwBLpiFaIacvJeqxjqchgsJnCEAAAhBYB4GuiwD7KiAOEE0qn8dK9Jf6NbYYBCAAAQhAwFsCXRcBof6VwEIzcClZuz5eejvbOAYBCEAAAhBoEOi6CNg32oayuZWjrhP9pf6OoUDBTwhAAAIQgEDXRUASILJCPl9K2i6P7wJkg8sQgAAEILBiAl0WASF+FfCouXWZ6C/1FeLiaMWXPaFDAAIQgIAR6LII2AeGzBLzpaTt6ngRGBPchQAEIAABCPxBoMsiIP2jVRgbhdx0lezP9bMLAwNeQgACEIAABM4TaLsIeFFzqxuKHeToucTt6lgcCgj8hAAEIAABCFwi0HYR8HipAw+P7+STq2R/2s/Bw3hxCQIQgAAEINCLQNtFQNqr9+kbJRryNHG72o+nD4cRIQABCEAAAuMRaLMIeNHwVi8Ec5Xwm/0cQggcHyEAAQhAAAJdCbRZBDx27XSm+s3E7Wo7nikWhoUABCAAAQhMQuCgUa4lzWQSL4YNkt2I4Vp8584dhrlDawhAAAIQgEAYBA5y81witGMh/IGg7Ir/l+K6dLxUX7GEQQACEIAABFZB4KAoLyXFnecEsiu+X4rp0nHfY/V8KnAPAhCAAARCJGDJ71xitP82OPI4oOyC3+diuXbM+sEgAAEIQAACqySwVdTnkuQ7j2mc87frsVLxxR7HiGsQgAAEIACB0QlsNcK5BJqOPnK/Ac752vUYr/77sacVBCAAAQgsjMBG8dhTcTORvngaY9PHPtu5p3HhFgQgAAEIQGAWAolGPV0E7Gfx5PKgqU71Sfp1G4svutw9ZyAAAQhAAALrJHC6CPDtFwJ3mpY6mfcpLT4MAhCAAAQgAIEzBOwJOZfqBLs/U2euQwcNXPvVtdzO5TTjQgACEIAABEIh0FwE+PQW4EUAuyZ+q38IBTx+QgACEIAABOYmYIuAg2QJdC/NbbEcIPnPPQv9x79T03OK+3dJyykJ/MOUgzEWBCAwK4FSo28rD96oPEiFNJdtegz8q9rserSjSXcCsZr8KCWSbTel3VaWq1YpWVlU5XuVGAQgAAEIzERgr3EPM41dD/tBG13eAFgSierGlM4J2NP8g/QsdZmXPnVtjLdSImEQgAAEIDAxga3Giycesx7Oxu2SOEj+NTl3pS2m7qV3Upe5cF33k8Z/klIJgwAEIACBiQjM9US9V3xtEwnJ3+3FEKs7e/q2xNt2Dqaq9yKf7qW5rksNvR57tZ5QiRQCXwjE+vnDFRYfda64cp5TwwnYzd1u9G1u8vadfyqVEjaMgPF+kHbDupmktc33o/Tvkm1jIxBgATACVLqclECs0SyhR1IimcWVbNuO2blr9l4nj1Im5RI2LoGdurcn0Fv2iypspfJWRc7fJLBRjScpulnTrwo2948SC4ER5oUFwAhQ6dI5Abtp/SjFlZJGqc3O9lEtMulYlaVKbDoC9vQf3xjuZ53f3qjD6XYEbLG1u1DV3rDkDVk12z/9TCQ6FkmxZNumO2kqKzTQT1ImYRCAwEIJxIrrtfQgPUufpM8OlKmPnWQ3Lmw+AjYHt+bzcZkmvikAACAASURBVD73FjfyuxPemfb3Uiq5sI06OUildGteXZy3xUwkYRCAQOAEYvk/RrK3G00hHSS7QXHDEAQPzObh1oJu64GfS3HhUYFk0l5KpbHNPmuZ5CLRX+vjRWMkEgYBCAREwBLAvfQk2Yf4s2Nl6m8ncXMQBA/tUT5dmvNS55g3Dyeth0ux2hykS3Pt4rgtJLcSBgEIeEogkl/2hP9W+iC5+OA3+7CkcZC2ko2F+UvAkntz7prbuc4xf/7OXV/PUjXMpOZcu962ewsGAQh4QsBu9A/SGAnfbh6FdJA2EhYOgUvXw2M4IeBpTwI7tSsl18m/7u+pp180gwAEHBB4rT5sJf4i1R9Kl2Whfi1RJBIWHgGbu9PrwRLCJrxQ8LgngVjtcun0OnC1/9TTL5pBAAIdCUSqfy/Zh+6T5OpD3OzHEsRBSiQsXAIbud6cV9vOpFjC1kfgoJBPrwdX+0/rw0nEEJiOgD3pv5NcfWDP9XNQ/5Y0sPAJRArhdIG4Dz8sIhhIYKf25z77Lo5Z3xgEIOCIQKJ+nqTTG7mLD2vdR67+7YMbSdgyCNhcfpCac5wsIzSicEBgqz7qa8N1mTrwjy4gsFoCsSJ/K71Irj+cdX+l+j5IJAVBWKC9U0z1XO8XGB8hDSewVRf1NeKytIcVW4BiEIBABwL3qtt8anP5oaz7KjTGXuIDKggLtSfFZfOdSyzwFjrJjsLaq5/63uCytAUoBgEI3CAQ6/xbyVbNLj+Ap31ZMthK2LIJ2LVkc79fdphE55DAQX2d3i9c7G8c+khXEFgUgXtF8yy5+KBd66PQGKmELZ/Ak0IspXT5oRKhQwKR+iqka/eRPude1Kf1jUEAAiJgH4YHaeynffuwWiLYStg6CDwpzIPEDXcd8+06ylQd2n3DtfbqE4PAqgnEit5u0K4/XJf622ssEoEgrMRsrpnvlUz2iGEe1Pele0rf4/aww7U54qTRtb8EErn2JPX98HRtV2qsVMIgAAEIdCVgidruIV3vO7fq77s6Qn0IhEwglfPP0q0PhsvzhcaLJQwCEHBPwBbzd1LsvmuvetzLG5f3JevrxasIcQYCIxGI1e+z5PoD1KY/u0FhEIBAfwL2BHwn3UsP0rP0QfosHaRYWroZA4vXtTZLB0d86yVgH5r6n1+5/uC06W+3XvREDoHOBBK1uJMepCfpWTr3i7mljh+kWFqTHRTsZ8c6rgkgsa6HwEahnrt5uP4AXesvWg9uIoVAKwL2mbiT7qUH6Vmqn+Y/a/uaSp3fS2v9XG1u8LnG7tI5u0diEFgUgTeK5tIFP+XxZFFUCQYC7QjEqnYn2efwQXonPUt9P3trT/xC94cZi74cL7VL/+idDQgETuBJ/l+60Kc+bjc+DAJLJHCnoEwP0lvpWfogfXYoEr9gnthB+y4ZW1+PJ2OwC4EgCVjCdf3hGNrfU5AkcXrtBCIBuJPupQfJruNn6ZP0eQIdNEYsYV8T2GrXNf/s6yHYewWC4Aik8thuUD5aLqf+Tcp8dA6fVkkgUdTfS3ElS/h2rC61OYv9rFH3UiFh3xKwObI3LS6tVGd/c9lh6H39Q+gBrND/1OOY7UNri5NCOkh2kyskDAJjELDr7Vxyt7FS++Gh/SqfdlLmoW8+uZSP4EykPk3lCH0H2SVvAMKbtqNcfh2Q27l8NZ9/kWwbg8AtApEq/FhVilWa7FgimaVffob14ze5u5cew3J7Vm8Ljf6DYw/+Rf1ljvsMtjveAIQ3dXbxhrQAsJu2aS+VUi5llexpyI5hyyYQK7z6Rm7bJrNISr5sfb1dHVpM8bMi2Ulc692mtFD1+rrp1pLarQi8alWLSj4RsJtmIdmrzyWY3RTzSvW2lSwO/JzduxO3Eu1H1bFL2ydNVrP7XpHupUzCuhPI1OT0euvey9ctftLu4etD693jDUB4c2/JMZWO0hJWx5Y8LB7TObN48+qElbZvln35+fuPjyqKxj6bXxOItXt6rUQ6lnxd7TurZ6rtXJ36HOVlAvZ110E6Xq7CmZkIxDON6+WwLAC8nJabTuWqYTfvgxTS1wFyt7NZEkqrVnVZ7V4tSp01Tk07d8zOZ81KPbZPFyBDn1pi+WC6ZLFOmM5Zeu4gx0YlYN/vZ5UOKu06wyDgPQEWAN5P0UUH7SazkXbSXlrKVwIKxYlF6iU905MxwyAwhIAt+HIpq2TbGASCI8ACILgp+8bhRx05SLtKLAQEAoOAIwJ1sq8TvpWlo77pZnoCxfRD+jviK39dw7MeBCK12Ug76cce7WkCgTUTsFf5uZRVsu1SwuYh8EHDJo6H/hf1lznuM9juWAAEO3U3HY9VYyelEosBQcAg0CBgT/aFlEmW6E2FhPlD4PMIrvyz+ixG6DfILlkABDltnZ2O1WIjpZX4mkAgsFUQaCb6QhGbMgnzm0Aq954du2hveCLHfQbdHQuAoKevt/OJWqYNsSDojZKGnhAg0XsyEY7c2KqfJ0d91d2810Za71B+9x2/BLjOq8Bed5oeq/BtQdDU0H/GVnVLAQGnBOokb9duKdVl5nQUOvOBQDqCE9kIfQbdJQuAoKfPmfN2IzU1LdGOKZbSqvxBJQaBMQnYU1op2fVYl4W2Tdh6CIzxEGLXFNYg8KqxzSYE2hBIVSmSEiluiMWBYGBXCVhyN7MbcVnJts2yLz/5AYHf7y32LwBc29/UoV13WEWANwBcCl0JZFWD45mGiY5FUlzJtu2Y2Rgr+t975uecBD5q8KJyoFSZV9tW2n5RSQUGgVYE0la1ulX6RdXtesQaBFgANGCwOZhAffO/1lGkk0lVIVZpMmset30WDEZhWmsmcxvZ5rOsXGhuFzpmwiAwBoH7ETo9jtBn8F2+Cj4CAlgDgVhBmmpLtBHVO1UZqzQ1zeos+W8g1H+4phlzvZ1ro6x3qm071rSsucM2BDwgkMgHXv9PNBG8AZgINMMMIlCotam2rN7oWaYd2sWqa3JtlpxPE/KlMaye1ccgsHQCuxEC5PX/CFDpEgIQgAAEIOCKQKSOPkmfHStVfxgEIAABCEAAAp4S2Msv18k/8zRW3IIABCAAAQhAQATGevrfQBcCEIAABCAAAX8J7OWa66f/wt9w8QwCEIAABCAAgVgIxvjun6d/ri0IQAACEICAxwTeyTfXT/+Zx/HiGgQgAAEIQGD1BFIRcJ38S/UZSxgEIAABCEAAAh4SsF/8e5FcLwD2HsaKSxCAAAQgAAEIVAQeVbpO/jl0IQABCEAAAhDwl0Aq11wnf3v1n/gbMp5BAAIQgAAE1k0gUvhj/Nb/dt1YiR4CEIAABCDgN4EPcs/10//B75DxDgIQgAAEILBuAo8K33Xyz9WnvVXAIACBFRBIFeOTlKwgVkKEwFIIbBWI6+RfqE+SvyBgEFgygVjBvZVeJLuJbCUMAhAIg8BWbrpO/qX65CEgjPnHSwj0InCvVs9S8+ax69UTjSAAgTkIWJIe45f+SP5zzCZjQmBkArH6f5DO3TQOOo5BAAJhEBgr+W/DCB8vIQCBtgTsZvFOaj7tN7fzth1RDwIQmJ1ALA/OLeKbn+mu26X6tPsEBgEILIRArDiepGs3A/vgWz0MAhDwn0AkFz9I1z7TXc+R/P2fdzyEQGsCsWreSvz1TWLfulcqQgACcxKwJ3SS/5wzwNgQ8JzAg/yrk3ub0p4oMAhAwG8Clvx57e/3HOEdBGYj0OfpIJvNWwaGAATaEhgj+ecaPGrrAPUgAAF/CXR96q/fDDz6GxKeQQACIjBG8s/UL8mfywsCgROwm8OQ7wRZAAR+AeD+oglsFJ3r1/67RRMjOAishIAl/6E3h2wlrAgTAqER2Mrh+k2di7JQf3bPwCAAgcAJuEj+9U0lDZwF7kNgaQSeFFD9+XRRHtVftDRIxAOBNRKwD/LQJ//mTcW+QuDmsMYrabyY79T1vfQgPUsv0mfpScIuE7DPofEyVq60uzwcZyAAgdAIuL5B2I2GRUBoV4Ef/iZy47X0IL2TXiS7nq7pWedZcArCicXat8/hNXZdzuXqy+YHgwAEFkIgVRxdbgJd6n5S3/cL4UQYbglYIrmTHiRL9EMTlbUnOQlCZRuV9vnr8nm9VLdUP7uqXwoIQGBBBI6K5dIH39XxF43xRooWxI1QbhOw+b6T7qUH6Vkamug/q49LsoSXSmu3twJwiVHX45n6iiUMAhBYIIExb8jnbjbvxPCNFC+Q5VpDShT4a+lBepKepXNzP9Wxtxp/jYvNWHF/cMS+VD8bCfOEwCtP/MCNZRGwm/JcVmjgvFKm8qNUSJhfBGK584NkpcmSa1Jt276PVsipn6RMWoNZsn6SbG6G2s/qYCeVQzuivTsCr9x1RU8Q+IPAnAuAP5w42ci1bzefopKKLwsFO/ZbtW3HMDcEEnXzvWRlJMUn0m6w9ijP/y6VwUZw3XGbrwdpd71aq7PvVWsvZRLmGQEWAJ5NyELcOSiO+0BjKeS3ySz78vP3H7mK+oa/xgWDJYUfGzzSxnaibTtv1tz+/cgyfxYKay/9LC3JUgVjT/2xNMQ+qvFWyiTMUwIsADydmMDdSuX/c+AxdHE/a1QutZ039uvNrN5olL9q2+pPYZEGaSbwesy03qjKRKXVNYsr2TZ2nkCmw3+XrAzd7Kl/PzAIS/zWx0HCPCfAAsDzCQrYvUy+3wXsv4+uG9NTaybs03PsT0cg01A/SYUUmtk1ZE/9VvY1eyv2KO37dkA7CEBgOQQihVJInxEMVnQNWCKNpRDMPqMP0pDPaKH2e8n6wiAAAQj8QSDRVikNucHQFn4hXgNPuu5TyVdL5diL1JdtobZbCYMABCBwkYAtAnKp742GdrAL+Ro46tqPLn46pj9hvryT+jK1z/JWwiAAAQi0ImA3nUep702HdrAL6RqwJLmXEsknu5czn6Q+LI9ql0oYBCAAgV4EUrUqpD43INrAzddrwK7pg7SRIsk3S+XQB6krv1Jt9lIsYRCAAAScENipF7u5dL0hUR9mPlwDdu0eJbuOE8lXi+TYk9SVWaY2WwmDAAQgMAoBuzltpULqeoOiPsymvAZKXaNHaSclUgj2ICe7vO63GB+lWMIgAAEITEZgq5FyacqbOmPB+9I1YMnwKO2kRArJNnL2RboUW/N4qXoHydpgEIAABGYlYDfbg2Q3puaNim14jHkNZLreHiVLhLEUoqVy+llqw+moehYrBgEIQMBLAnaDOkil1OamRh04tbkGCl1PB2knpVLoFiuAJ+lW7EfV2UqRhEHgC4FXcICA5wTshpVKm6r8QSUGgTYE7P9ayKVCyiTbLqUlWKQgHqTdhWDsT/MeK2UqlxK3QsFcEWAB4Iok/UxFINFAaUPfTzUw43hN4L28yysVKjNpqWafAXvqt7JpH7VzrJQ1T7ANgXMEWACco8KxkAjYTTCV6pI3BCHNXjdf7ak2r1SqzKSikopV2FZRvpUiyXhklY4qCwmDQGsCLABao6JiIATsxphIaVXaNosCQQjI7NV9KeVSUZW2bcfWbFsFb8qko2RMMAj0JsACoDc6GgZEIJKviZRKcUMsDARjJnuvcUvJklhdFto2YecJRDpsrDAIOCHAAsAJRjoJmEAi3+3GmlZlvf+j9rF+BOon+ELNTZa0csks+/KTHxCAwOwEWADMPgU44DGBWL6ZzOqFQVRt27FYWstbhI+KtZDMLJmXX7a+TuhZdYwCAhAIgAALgAAmCReDIFAvEGpn03qjKpsLh/pUrI0xFhD1L8vV45yWhQ6YmpY1d7RtCT4/OcYuBCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABNZE4K9rCpZYV0vgtSL/n9J/SYWEQQACEIAABCCwUAL3iuud9En6LG0lDAIQgAAEIACBBRJIFNOTVCd9S/wk/wVONCFBAAIQgAAEIiF4I71IdcJvllsdxyAAAQhAAAIQWAgBS/wP0unTfjP5ZwuJlTAgAAEIQAACqyfQJvHXi4DN6mkBAAIQgAAEILAAAqlieJHqBH+rtPoYBCAAAQhAAAKBErCn/rfSrYR/ep43AIFOOG5DAAIQgAAEUiF4kU6Te5v9D2pniwcMAhCAAAQgAIGACGzla5tEf63Ok/pgERDQpOMqBCAAAQism8BW4V9L7F3O2ZuAZN04Fx/9nSK8lx6kWMIgAAEIQCBAApasr/3zvi7Jv1n3Sf3GAfLA5T8J2LXxWrJE/yy9SJ/P6K2O8eZHEDAIQAACIRGwG/u5m7qrY/ZG4I3EWwF/rwqbmzvpQXqSbM66zv+nqr0KDAIQOCXw6vQA+xCYmUCq8Z8n9KHUWJmUV+WvKu0YNg0BS/Q/SFaa4qpU4cwK9bSXfpYwCECgIsACgEvBNwKPcsiezue0QoObMsksl0rpo1RIWDcClti/l6yMpLQqbX9KyzTY3yUrMQisngALgNVfAt4ByOTRnXdefe1QoV1TKeWSWfbl53ff/aayPlYdWnwRKcIfJSsTKT6Rdr2yTN6wEPBqSnBmDgIsAOagzpjXCGQ66fsC4Jr/zXOFdkxmtigov2z9uViodr97X294VtbzUCd2cy+uZNuW7O1cqJbJcRYCoc4efg8mwAJgMEI6cEwgU3914nHcdTDdGYOm5dopmwccbFviTk76sX07vjbLFDALgbXNOvFCAALeEdjJo88IBjNcA88aM5UwCKyCAG8AVjHNQQVpT6CFZL80hkFgDgKFBt1LP0sYBBZL4K+LjYzAQiXwn3L8H6U01ADwO3gCtgjdSFuplOyfhmIQWBwB3gAsbkoXE1CuSOw3yzEIzE3AFgGPkr0RKCQMAosgwAJgEdO4yCASRZVJfBWwyOkNNqiDPLeFQCZhEIAABCAwEgFbBNjTF78UCAPfroEPui7vR7ru6RYCkxD4yySjMAgE+hHI1SyV+A62Hz9ajUfgn9W1KR5vCHqGAAQgAIFICI6Sb0+B+LO+Ocl0HW4lDAIQgAAEJiSw0VilROKFwZTXgF1zj1IsYRCAAAQgMBOBSOPazXjKBMBY6+Sd6TrbShgEIAABCHhEIJEvmURyhoHLa6DQNcXTviBgEIAABHwnkMrBTHKZBOhrXTwLXT+W9G1RiUEAAhCAQGAEUvl7kEjeMGhzDRS6Vkj6goBBAAIQWAqBWIHspVJqkwiosx5Oua6JnRRLGARWT+DV6gkAYMkEtgpuI71ecpDEdpHAbzqTVTqqLCQMAhCoCLAA4FJYA4FIQW4r8f8LLHvG3yu8TLKEn0sYBCBwgQALgAtgOLxYArEi20ipxJsBQQjc7K9EZpIlfCsxCECgJQEWAC1BUW2RBCJFlVayRcEPEuY3gfoJP5ebmVT67S7eQcBfAiwA/J2bOT2LNfi5ZPhRxwtpqRYrsLRSopKvCwRhRquf7i3Z15rRHYaGwLIIsABY1nzeiiZSBUtqaVUxVmkyiyvZ9i0rVMGUVXqvcolmvBIprWTb30uYewIf1WUm5ZVsG4MABEYk8GrEvul6XgKWrCzZx1Iq2X4kjWGlOj1Kf5cKackWKzhj2dS5tyVLZjAktvdqbNdLXsm2MwmDAAQmJsACYGLgIw0Xqd87Ka2UqJzC7GZeW1ZtHFQW1faailTB2jwY+7qMtb3GxUF9XeSKv5Dq0rYxCEDAEwIsADyZiB5uWMLfSKmUSGOZfQ9b38CtLKt9K7F2BBJVi6S4koov82ZlLIW0SGgmd7sGikq2nUsYBCAQCAEWAIFMlNxMpGbSH8Nzu7lnUiHZzZwbuiBMaDbHUWO80307Z8dcWq7OykaHhbZNtZ2er49TQqAPgUiNUunYpzFtILAmAomCfSu9SJ8dq1R/9iHcS6mEQQACEJiCwFaDPEuphEEAAg0Cr7X9JI2R9Av1+yilEgYBCEBgLgKZBraHGnvAiSQMAqslkChyS/qfJPtQuFSu/nZSLGEQgAAEfCCQyon6PveibbsHYhBYDYFYkT5IdvHXHwRXJUlfUDEIQMBrAoW8q+959vDDIsDr6cI5FwTsFf87qb7wXZWl+jxIfIgEAYMABLwn8CgPm/c/FgHeTxkO9iEQqdGD9CI1L3gX27n63Eo2BgYBCEAgFAJ7OXp6D7R7JPeyUGYQP68SSHT2STq9yF3sZ+o3lTAIQAACIRLYyulz98JdiMHgMwRqAqk2nqVzF/fQYwf1awsLDAIQgEDIBPZy/tz9MAs5KHxfL4FUoY+Z+OP1oiVyCEBgYQReFM+5BYAdwyAQDAF7Ih8r8efqOw2GBI5CAAIQuE1goyqXkj8LgNv8qOEBgUg+PEnXLuQh5x49iBEXIAABCLgkkKgz+43/S/fGwuVg9AWBMQjcq9NrF/Gli7vt8e0YTtMnBCAAgRkJ2EPTrfvmbkb/GBoCVwnEOvsstU3kfept1T8GAQhAYEkE7Mn/g3TtnljqvC0SMAh4R2Ajj26tXq9d3G3O7b2LGocgAAEIDCOQqnmbe+du2DC0hsA4BJ7UbZsEPqQOq99x5o5eIQCBeQjY0/xbqc198TiPi4wKgcsE7AK+9dqqzcXdps7hshucgQAEIBAUgY28fZHa3Pty1bN7LQYBbwgk8qTtBdzmIr9VJ/MmchyBAAQg0I/AazV7lm7d7+rzJP9+nGk1IgFL/m2+s6ovYleljYtBAAIQCIlAJGfvpRepy73woPoYBLwiEMubOZK/fXDs6wb7MGEQgAAEfCdgT/tPUtf7Zak2WwmDgHcEnuVRl1Ws67r2YUq9o4JDEIAABH7/v0jeCsSL1Ofed1Q7HnK4krwksJVXfS7qMdo8y5dUwiAAAQjMRcCStT3pD0n6dn8spFTCIOAtgRd5NkYyH9Kn+fRGYtXs7WWDYxBYFIE7RWMJ/4M05N5lbUtpL2EQ8JrAVt4NvdjHbv9OPt5LLAYEAYMABAYTqJ/wH9TTs+TqHlYnfu5Vg6eIDqYgsNcgri7+KfphMTDFVcEYEFgWgUTh3EtPkosn/NN7HYl/WdfLaqI5KtLTizmU/Wf5/iDZhxuDAAQgYATqZP9W23aP+CSNdU8r1PdWwiAQJIFMXo/14ZiyX/uQP0n3UiRhEIDAsgnY5/xOeiPZZ/9Z+jyRjhpnI2EQCJrATt5P9aGZcpwXxfUk3UuJhEEAAmESiOT2nWSJ/q30LNmC//PEKjXeoxRLoZjd+/ahODuFn6+mGCSgMWL5mkvfB+RzH1ftw5tJFquVv0p2DIMABOYnEMmFH6W4UqLSjqXS3PaLHDhKh7kd6Ti+MbTF0k+S+Y+JAAuAby+DrQ49fXt48UdKRZhLWVV+rEoVGAQg4JjAXdVf2igjbSfVvk+FPSAcpKNUSKGZMbXkb3z/JpUSJgIsAM5fBlsdXuMi4ByNXAcLqS5t+72EQQAC5wnEOvyDZAknaZTa9OIp3vy4ZfYAcKhUqAzVNnLc7uU2F7aQsfnAKgIsAC5fCnbhHKSlfx1wmcD1M6VO51JdFto22Y3DSgwCSyQQKSh7PW+Wfvn5Z5KPtW8K1UJ/0j/l/lYHdo2DP2n70Nhf/SYLgOuXgH3Yj9Ld9WqcPUOg0DFTKeWSWfblJ79zUGGg8IBAIh/qRX6sbZNZXOl02/aXZL8oGLvHZVIhLcFiBfFOsrmt7TdtxFJZH6DkK4C210Cqio9SvfJv24561wkUOm2yD2UumTW3bf+9/cAg0IJApDrNz2jaaNPcTnTc6q7R7Ck/k45VqWJRtlE09Sv/ZmB/186+eYBtFgBdrwG7uLbS664Nqe+EQKFeTLVl9YbKolJ9yG50Zb1D6T2BSB42k7c5nNqPhiXatnq1xdowYZcJfNSprNJRZSkt0WIFZYk/lU7Nnv7t2ilOT6x9/9XaAfSMP1a7jbSVTm9aOoR5SiCXX6c3wOyMr+eOWTW7kVgfa7VYgf9wIfhEx6MO52LVNWFuCTQTfqauC7fde9nbg7zaSZeuv3/TuUcvPZ/ZKRYAwyfALrqNlFa6dIPUaWwFBHLFWPaMM+vZzprFlWx7iNn1nAzpgLaTEniv0eyay6qyULkWu1egeymWLpnxSS+dXPvxV2sHMEL8sfpMJbuJWskbAkHAIACBwQQ+qodmss8G9xhmB6ncfpJi6Zrx6v8aHZ1jAXADkKPTqfqJJFsUmGKJhYEgYBCAwFkC9ddNmc5a0jcV0prNnvi3Uiq1sf+hSsc2FddahwXAvDNfLwasrLdZGMw7J4wOgakJfNSA+YmKqZ3wdLxIfr2W9lIstbWfVPHQtvJa67EA8HPmY7llSiX7ANSLA36/QDAwCARKoH6qr5N9oTiyQGMZ2+1YA7yRtpLdA7vYz6q87dJgrXVZAIQ387YYsA9EWpW2H0ssDgQBg4AnBH6VH4WUS5lUVFKBXSHQ9TX/aVf/rgO704PsnyfAAuA8l1CP2mIgktKqrPf5WkFAMAg4JvBR/RVSLpVSJhWVVGAtCdh9qk78Ucs256r9pIOHcyc4dp4AC4DzXJZ41D5Y9kE7V7JAWOKME5MrAu/VUSnllWw7k7D+BGI1te/2t1IiDTH7amUnHYZ0ssa2LADWOOvnY450uP4gplUV27fjscRXDIKALZKAva4vpfxCucigZwjK7iWW9DeVXLjwserL5g7rSIAFQEdgVP/jn+AkYmEf6LiSCv7TJIOAeUfgfeVRVpWWLEqpLqvDFCMQsHuE66Rfu/mLNraSzSXWgwALgB7QaHKTgH3ok6pWrNJkZsfsnNnd7wU/IdCbQP3kXqqHvOrFSts3y7785MfUBGINaEk/lTaSa7NX/lvp6LrjtfXHAmBtM+5fvJFcShpupY3tWNsmM6v345ctfiyVgN3YtSoedAAABQxJREFU80Zwtl1W+1lVFipNmF8EErljv8iXSrY9lvHU75AsCwCHMOlqUgLpyWin+3YTihp1Ym3zewwNICNuvj/pu9C+yayU8i9bv/+wbTuGhUUglrv2Fi+VNlIkjWkf1flWyiTMEQEWAI5A0k2QBBJ5fe7GlV6I5tLx0+q+fr1RvzI/9be5n2unbB5obGeN7Xrz3LH6HOVyCNjnpE74qbaTiUKzt0I76TDReAwDAQhAAAIQWD0BS/gP0rP0eWIVGs8Svy08MAhAAAIQgAAERiJgidZ+cW+uhF8vMAr5sJUwCEAAAhCAAARGIBCrz3vprfRBqhPwXGUhH7YSBgEIQAACEICAIwL2dH8nPUjP0idprkR/Ou5RvmwkbAYC/BLgDNAZEgIQgMBIBCzZ/yglUlqVsUqfzH6x71E6SIWEzUSABcBM4BkWAhCAwEACsdrXyd4SvsmO+Wrv5dihkq8+rsovFgCrmm6ChQAEAiVwJ79jqU70VkaS72b/9PQgHaVCwjwiwALAo8nAFQhAYPUE6kQfi0QqWWkKyT7KWUv4BymXME8JsADwdGJwCwIQWCyBWJH9ICWSbdelbYdq9qSfSQeJpC8IIRgLgBBmaT4fIw29kexmlUn2yzt8uAUBg8ANAvbZse/n40qJSjuWSkuxXxRIJh2lQsICI8ACILAJm8ndrcbdS7YQMCsq5SpLKZNYHAgCtioCsaK1z4Ql9kSKK9m2HVuafVRAmXSsylIlFjABFgABT94Mrm815l6qFwLa/MYKHTHlkt0gMonFgSBgQRFI5O33UlwpUmnHzNIvP5f/o074mUI1FRK2IAIsABY0mROGstFYW+l1xzFL1c+rNlbaflFJxXfv7QcGgZEJ3FX9JyojKa5k23ZsrUbCX9nMswBY2YQ7DtdumJtKqUp7YnJhhToxlVIumVlp+7xNMBpYk0CsnfqtVKTtpHEyrbZjlSbsTwLvtZlJ9tmy0j5f2IoIsABY0WRPEGqqMTaSlfYLUGOb3bDs5lWbbdsxs9Nzv1bHvpzkh7cEEnlWLyRjbZvMIsnO1ZbWG5StCFiyz0/UqiGVlkuABcBy53buyOyGnTY0xYKgbcylKtrNsLbT/fp4Vm80ShYSDRjajKX66bt5Jm3uVNt2TSQnx88dO6nCbgcC9RuyXG2a6tAFVddCgAXAWmZ6/jhjuZBKlgBq1U96OhS0FfLedMlKnbCbsQsr1InJLK5k230tUkObj1vWtt6tfjjvjoAtRgvJrq1MKiqpwCBwmwALgNuMqDEegVhdW/IxpVIsnXua1GEMAqsk8FFRF5Il+VLKqtL2MQgMIsACYBA+Go9AIFKfiZRK9bbtL+VtgULBIPAVAZL8VzjYmYoAC4CpSDOOCwKpOokr2aLAFgj1P+nSJgYBLwnUvzeSy7tSKk6kXQwC0xNgATA9c0Z0T8AWAknVbXpSskCogFCMQqBO7pbY82oEK+t9KzEIeEmABYCX04JTIxBI1GckxZVUfFk02DEzFgq/c+Dn139rwhJ4XkGx0vabx6pTFBAIjwALgPDmDI/HJRCp+6QxRNrYjrVtqs3q8bsJNQ0/y49yq2i4ljW2c22X1X6h0oRBYDUEWACsZqoJdAICscYwNc0WCVHzgLbjSieHv+yu/U3EacJuMsqaO9q25J2fHMtO9tmFAAQuEGABcAEMhyHgIYG0hU+22Eha1HNd5VwyvjRGl7qX+uA4BCAwkMD/B7CjSMwmX1fNAAAAAElFTkSuQmCC"/>
			</defs>
			</svg>INTO {CODE;}</h2>
        	</div>
        </div>	

        <div id="iconsHome" class="row" style="margin: 0;position: absolute;left: 50%;margin-right: -50%;transform: translate(-50%, -50%);bottom: -14vh;">
        	<a target="_blank" href="https://github.com/JairLopesJunior">
	        	<span class="fa-stack fa-2x" >
	        			<i class="fa fa-circle fa-stack-2x icon-background"></i>
	        			<i id="iconGithub" class="fa fa-github fa-stack-1x"></i>
				</span>
			</a>
			<a target="_blank" href="https://www.linkedin.com/in/jair-lopes-1a73211a2">
	        	<span class="fa-stack fa-2x">
				  <i class="fa fa-circle fa-stack-2x icon-background"></i>
				  <i id="iconLinkedin" class="fa fa-linkedin fa-stack-1x"></i>
				</span>
			</a>
			<a target="_blank" href="https://gitlab.com/JairLopesJunior">
				<span class="fa-stack fa-2x">
				  <i class="fa fa-circle fa-stack-2x icon-background"></i>
				  <i id="iconGitlab" class="fa fa-gitlab fa-stack-1x"></i>
				</span>
			</a>
        </div>	
      </div>
    </div>
  </section>

 	<!-- QUEM SOU -->
  	<section id="quemsou">
    	<div class="container">
      		<div class="row justify-content-center">
      			<div >
	        		<div style="text-align: center; margin-top: -10vh">
		        		<div>
		        			<h2 id="eventoTitulos">QUEM SOU</h2>
		        		</div>
	        		</div>
        		</div>
        	</div>
        <div class="row justify-content-center">
        		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
        			<div style="margin-bottom: 2em">
	        			<h3>OLÁ EU SOU O JAIR.</h3>
						<h5 id="formatarTexto">
                            Fascinado pela área de Tecnologia, escolhi transformar uma inspiração em minha profissão.
                            Finalizando o curso superior de Sistemas para Internet na Faculdade de – Tecnologia de ARARAS, tenho tido a oportunidade de aplicar os conhecimentos teóricos na área de TI estagiando em uma empresa do segmento desde 2018.
                            Tenho praticado a linguagem JAVA, mas possuo conhecimentos em outras linguagens as quais pretendo me aperfeiçoar, estudando sempre.
                            Estou iniciando minha trajetoria profissional e tenho buscado aprender constantemente, através da troca de expertises com meus colegas de profissão.</h5>  
        			</div>
        		</div>
        		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
        			<h3>HABILIDADES</h3>
        			<div>
	        			<h5 style="margin-bottom: 0">JAVA</h5>
	        			<div class="progress" style="border-radius: 20em;">
							<div class="protip" data-pt-border="" data-pt-size="tiny" data-pt-scheme="blue" data-pt-trigger="sticky" data-pt-position="top-right-corner" style="width: 56%; background-color: #B96E1F;"></div>
						</div>
					</div>
					<h5 style="margin-bottom: 0; margin-top: 0.8em">PHP</h5>
					<div class="progress" style="border-radius: 20em;">
						<div class="protip" data-pt-size="tiny" data-pt-scheme="blue" data-pt-trigger="sticky" data-pt-position="top-right-corner" style="width: 35%; background-color: #B96E1F" ></div>
					</div>
					<h5 style="margin-bottom: 0; margin-top: 0.8em">BANCO DE DADOS</h5>
					<div class="progress" style="border-radius: 20em;">
						<div class="protip" data-pt-size="tiny" data-pt-scheme="blue" data-pt-trigger="sticky" data-pt-position="top-right-corner" style="width: 40%; background-color: #B96E1F" ></div>
					</div>
					<h5 style="margin-bottom: 0; margin-top: 0.8em">LINUX</h5>
					<div class="progress" style="border-radius: 20em;">
						<div class="protip" data-pt-size="tiny" data-pt-border-color="black" data-pt-scheme="blue" data-pt-trigger="sticky" data-pt-position="top-right-corner" style="width: 53%; background-color: #B96E1F;"></div>
					</div>
					<h5 style="margin-bottom: 0; margin-top: 0.8em">HTML & CSS</h5>
					<div class="progress" style="border-radius: 20em;">
						<div class="protip" data-pt-size="tiny" data-pt-border-color="black" data-pt-scheme="blue" data-pt-trigger="sticky" data-pt-position="top-right-corner" style="width: 58%; background-color: #B96E1F;"></div>
					</div>
					<h5 style="margin-bottom: 0; margin-top: 0.8em">BOOTSTRAP</h5>
					<div class="progress" style="border-radius: 20em;">
						<div class="protip" data-pt-size="tiny" data-pt-scheme="blue" data-pt-trigger="sticky" data-pt-position="top-right-corner" style="width: 62%; background-color: #B96E1F"></div>
						<!-- data-pt-title="65%" --> 
					</div>
        		</div>
      		</div>
    	</div>
  	</section>

  <!-- CURRÍCULO -->
  <section id="cv" class="bg-light">
    <div class="container">
      	<div class="row justify-content-center">
        	<div style="text-align: center; margin-top: -10vh">
          		<h2 id="eventoTitulos">CURRÍCULO</h2>
        	</div>
      	</div>
		<div class="row">
		    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
		    	<h5 align="center"><b>EDUCAÇÃO</b></h5><hr>
					<div class="card-group">
					  	<div class="card" style="margin: 0 2em 0 2em; margin-bottom: 1em; border-radius: 15px" id="CentralizarCard"> 
						  	<div class="card-header">
								<h5 align="center" style="margin: -0.8vw 0 -1vw 0">2017 - 2020</h5>    
							</div>
						    <div class="card-body">
						    	<h6><i style="margin-right: 0.4em" class="fa fa-graduation-cap fa-1x"></i>Sistemas para Internet</h6>
								<h6><i style="margin-right: 0.5em" class="fa fa-university fa-1x"></i>FATEC - Araras</h6>
							    <h6 style="margin-top: 1.5em; margin-bottom: -1em" class="card-text">Estou concluindo minha graduação com esta prestigiada instituição. Eu vou completar todo o curso e adquirir o meu diploma e muita experiência com as aulas cursadas.</h6>
						    </div>
					  	</div>
		      	</div>
					<div class="card-group">
						<div class="card" style="margin: 0 2em 0 2em; margin-bottom: 1em; border-radius: 15px"> 
							<div class="card-header">
								<h5 align="center" style="margin: -0.8vw 0 -1vw 0">2016 - 2017</h5>     
							</div>
							<div class="card-body">
							    <h6><i style="margin-right: 0.4em" class="fa fa-graduation-cap fa-1x"></i>Informática para Internet</h6>
								<h6><i style="margin-right: 0.5em" class="fa fa-university fa-1x"></i>ETEC - Araras</h6>
								<h6 style="margin-top: 1.5em; margin-bottom: -1em" class="card-text">Eu completei este diploma com esta prestigiada instituição. Eu completei todo o curso e adquiri o meu diploma e muita experiência com as aulas cursadas.</h6>
							</div>
						</div>
		      	</div>
		    </div>
	    	<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
	  			<h5 align="center"><b>EXPERIÊNCIA</b></h5><hr>
					<div class="card-group">
					  	<div class="card" style="margin: 0 2em 0 2em; margin-bottom: 1em; border-radius: 15px"> 
						  	<div class="card-header">
								<h5 align="center" style="margin: -0.8vw 0 -1vw 0">2018 - 2020</h5>     
							</div>
						    <div class="card-body">
						    	<h6><i style="margin-right: 0.4em" class="fa fa-building"></i>Varitus Brasil</h6>
								<h6><i style="margin-right: 0.6em" class="fa fa-id-card"></i>Estágiario</h6>
							    <h6 style="margin-top: 1.5em; margin-bottom: -1em" class="card-text">A VARITUS Brasil é uma Empresa, que trabalha com tecnologia da informação, ela é responsável por um dos sistemas de Emissão de Documentos Fiscais.</h6>
						    </div>
						</div>
	  			</div>
	  			<div align="center">
					<h5>
						Baixar Currículo?
					</h5>
					<a href="Curriculo/JairLopesJunior.pdf" download>
						<i class="material-icons">file_upload</i>
					</a>
				</div>
			</div>
		</div>
  	</section>

  <!-- PORTFÓLIO -->
  <section id="portifolio">
    <div class="container">
      	<div class="row justify-content-center">
       		<div style="text-align: center; margin-top: -10vh">
          		<h2 id="eventoTitulos">PORTFÓLIO</h2>
        	</div>
      	</div>
    	<div class="row" align="center" style="position: relative;align-items: center;"> 
			<div class="card-group">
			  	<div  class="card">
			    	<img class="card-img-top" src="img/fundoImobiliario.jpg" style="border-radius: 15px 15px 0 0">
			    	<div style="position: relative;vertical-align: middle !important;">
				    	<div class="card-body">
				      		<h5 class="card-title"><b>Fundo Imobiliário</b></h5>
					      	<h5 class="card-text">Desenvolvido na linguagem JAVA.</h5>
				    	</div>
				    	<div style="padding-bottom: 1em">
				    		<a href="fundoImobiliario.php">
				    			<button id="botaoContato" type="submit" class="btn btn-primary">SAIBA MAIS</button>
				    		</a>
				    	</div>
				    	<div class="card-footer" style="vertical-align: center !important">
				      		<small class="text-muted">
					      		<?php
					      			include 'contador.php';
					      			echo "<h5>$a Pessoas visitaram esse Projeto.</h5>";
								?>  
				      		</small>
			    		</div>
				    </div>
			  	</div>
			  	<div class="card">
			    	<img class="card-img-top" src="img/arduino3.jpeg" style="border-radius: 15px 15px 0 0">
			    	<div style="position: relative;vertical-align: middle !important;">
				    	<div class="card-body">
				      		<h5 class="card-title"><b>TermoSafe</b></h5>
					      	<h5 class="card-text">Sensor de Temperatura em HTML/CSS/JavaScript.</h5>
				    	</div>
				    	<div style="padding-bottom: 1em">
				    		<a href="sensordetemperatura.php">
				    			<button id="botaoContato" type="submit" class="btn btn-primary">SAIBA MAIS</button>
				    		</a>
				    	</div>
				    	<div class="card-footer">
				      		<small class="text-muted">
					      		<?php
					      			include 'contador1.php';
					      			echo "<h5>$a Pessoas visitaram esse Projeto.</h5>";
								?>  
				      		</small>
			    		</div>
				    </div>
			  	</div>
			  	<div  class="card">
			    	<img class="card-img-top" src="img/sistemaBiblioteca.png" style="border-radius: 15px 15px 0 0">
			    	<div style="position: relative;vertical-align: middle !important;">
				    	<div class="card-body">
				      		<h5 class="card-title"><b>Sitema Bibliotecário</b></h5>
					      	<h5 class="card-text">Desenvolvido em Java com JSF e MySQL.</h5>
				    	</div>
				    	<div style="padding-bottom: 1em">
				    		<a href="sistemabibliotecario.php">
				    			<button id="botaoContato" type="submit" class="btn btn-primary">SAIBA MAIS</button>
				    		</a>
				    	</div>
				    	<div class="card-footer" style="vertical-align: middle !important;">
				      		<small class="text-muted">
					      		<?php
					      			include 'contador2.php';
					      			echo "<h5>$a Pessoas visitaram esse Projeto.</h5>";
								?>  
				      		</small>
			    		</div>
				    </div>
			  	</div>
			  <!-- 	<div class="card" style="margin: 0 2em 0 2em; margin-bottom: 2em; border-radius: 15px">
			  		<a target="_blank" href="Projetos.html">
			  		<div class="pointer" id="hoverSaberMais" style="height: 60vh" class="card-body">
			  			<i id="iconPluse" class="fa fa-plus fa-5x"></i>
			  		</div>
			  		</a>
			  	</div> -->
			</div>
      	</div>
    	<div class="row" align="center"> 
    		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="font-family: 'Montserrat'">
				<div align="center">
					<h5>
						Ver mais Projetos?
					</h5>
					<a href="Projetos.php" target="_blank">
						<i class="material-icons">add</i>
					</a>
				</div>
			</div>
    	</div>
    </div>
  </section>

 <!-- CONTATO -->
  <section id="contato">
    <div class="container">
      	<div class="row justify-content-center">
        	<div style="text-align: center; margin-top: -10vh">
          	<h2 id="eventoTitulos">CONTATO</h2>
        	</div>
      	</div>
            <div class="row">
	        	<div class="col-sm-7 col-md-7 col-lg-6 col-xl-6" style="font-family: 'Montserrat'">
	        		<div class="row" style="margin-bottom: 2em;margin-top:2em">
	        			<span class="fa-stack fa-2x">
						  <i class="fa fa-phone fa-stack-1x"></i>
						</span>
						<h5 id="textoContato" style="margin-top: 0.3em;margin-left: 0.5em">TELEFONE<br>(19) 9 9661 - 0104</h5>
	        		</div>
	        		<div class="row" style="margin-bottom: 2em;">
	        			<span class="fa-stack fa-2x">
						  <i class="fa fa-envelope fa-stack-1x"></i>
						</span>
						<h5 id="textoContato" style="margin-top: 0.3em;margin-left: 0.5em">E-MAIL<br>JAIR.LOPES@FATEC.SP.GOV.BR</h5>
	        		</div>
	        		<div class="row">
						<span class="fa-stack fa-2x">
						  <i class="fa fa-map-marker fa-stack-1x"></i>
						</span>
						<h5 id="textoContato" style="margin-top: 0.3em;margin-left: 0.5em">LOCALIZAÇÃO<br>LEME - SP</h5>
	        		</div>
	        	</div>
	        	<div class="col-sm-12 col-md-5 col-lg-6 col-xl-6">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="cadastre" style="font-family: 'Montserrat'">
						<div class="form-row">
						  <div class="form-group col-md-6">
						    <label for="exampleInputName2" class="bmd-label-floating" style="color: black">Nome *</label>
						    <input id="tirarBorda" type="text" name="name" class="form-control" id="exampleInputName2">
						  </div>
						  <div class="form-group col-md-6">
						    <label for="exampleInputEmail2" class="bmd-label-floating" style="color: black;">E-mail *</label>
						    <input id="tirarBorda" type="email" name="email" class="form-control" id="exampleInputEmail2">
						  </div>
						</div>
						<div class="form-group bmd-form-group">
						    <label for="formGroupExampleInput2" style="color: black;" class="bmd-label-floating">Assunto</label>
						    <input id="tirarBorda" type="text" name="assunto" class="form-control" id="formGroupExampleInput2">
						</div>
						<div class="form-group">
						    <label for="exampleTextarea" class="bmd-label-floating" style="color: black;">Mensagem</label>
						    <textarea id="tirarBorda" name="mensagem" class="form-control" id="exampleTextarea" rows="3"></textarea>
						</div>
						<div align="center">
							<button id="botaoContato" name="cadastre" type="submit" class="btn btn-primary">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php

		if(isset($_POST['cadastre'])){
			$assunto       = utf8_decode($_POST['assunto']);
			$destinatario  = 'jair.lopes@fatec.sp.gov.br';
			$nome 	       = utf8_decode($_POST['name']);
			$email 		   = utf8_decode($_POST['email']);
			$mensagem	   = utf8_decode($_POST['mensagem']);

			$corpo         = "
				Nome:      ".$nome."
				E-mail:    ".$email."
				Mensagem:  ".$mensagem."";

			if($nome != null && $email != null && $mensagem != null && $assunto != null){
				mail($destinatario, $assunto, $corpo, $email);
				echo "
    			<script>
    			function alerta(){
    			Swal.fire({
    			  type: 'success',
    			  icon: 'success',
    			  text: 'E-mail enviado com sucesso!!',
    			  showConfirmButton: false,
    			  timer: 2500
    			});
    			}
    			alerta();
    			</script>";
			}else{
				echo "
    			<script>
    			function alerta(){
    			Swal.fire({
    			  type: 'error',
    			  icon: 'error',
    			  text: 'Falha ao enviar E-mail!!',
    			  showConfirmButton: false,
    			  timer: 2500
    			});
    			}
    			alerta();
    			</script>";
    		
			}
		}
	?>

	</main>

  	<!-- RODAPÉ -->
  	<footer class="py-4">
    	<div class="container">
      		<p class="m-0 text-center text-white">Jair Lopes &copy; 2021</p>
    	</div>
  	</footer>

  	<!--Botão Voltar ao Topo-->
	<div class="smoothscroll-top">
	    <span class="scroll-top-inner">
	        <i class="fa fa-2x fa-arrow-circle-up"></i>
	    </span>
	</div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

	<script>
		// When the user scrolls the page, execute myFunction 
		window.onscroll = function() {myFunction()};

		function myFunction() {
		  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
		  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		  var scrolled = (winScroll / height) * 100;
		  document.getElementById("myBar").style.width = scrolled + "%";
		}
	</script>

	<!--Botão Voltar ao Topo-->
	<script type="text/javascript">
		$(function(){
		    $(document).on( 'scroll', function(){
		        if ($(window).scrollTop() > 100) {
		            $('.smoothscroll-top').addClass('show');
		        } else {
		            $('.smoothscroll-top').removeClass('show');
		        }
		    });
		    $('.smoothscroll-top').on('click', scrollToTop);
		});
 
		function scrollToTop() {
		    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
		    element = $('body');
		    offset = element.offset();
		    offsetTop = offset.top;
		    $('html, body').animate({scrollTop: offsetTop}, 600, 'linear').animate({scrollTop:25},200).animate({scrollTop:0},150) .animate({scrollTop:0},50);
		}
	</script>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

    <!--TippyScript-->
	<script src="https://unpkg.com/popper.js@1"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>

	<!--Escrever nome no Site-->
	<script type="text/javascript">
		function typewriter(element) {
			let letters = element.innerHTML.split('');
		  	element.innerHTML = ''; 
		  
		  	letters.forEach(( letter, index, letters ) => {
		    	setTimeout(() => element.innerHTML += letter, 300 * index);
		  	});
		}

		const text = document.querySelector('.typewriter');
		typewriter(text);
	</script>

	<!--TippyScript-->
	<!--Icone Shutdown-->
	<script type="text/javascript">
		tippy('#tipePowerOf', {
		content: "Desligar",
		arrow: true,
		placement: 'right-start',
		delay: 10,
		interactive: true,
	})
	</script>

	<!--Icone Configuraçôes-->
	<script type="text/javascript">
		tippy('#configuracoes', {
		content: "Configurações",
		arrow: true,
		delay: 10,
	})
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$.protip({
			});
		});
	</script>

	<!--PROTIP.JS-->
	<script src="//gitcdn.link/repo/wintercounter/Protip/master/protip.min.js"></script>

</body>

</html>
