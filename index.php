<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="utf-8">
<title>GeoSQL</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href="lib/bootstrap3/css/bootstrap.css" rel="stylesheet">
<link href="lib/bootstrap3/css/bootstrap-theme.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/highlight.js/8.4/styles/default.min.css">

<!-- <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script> -->
<script type="text/javascript" src="./lib/jquery/jquery-2.1.4.js"></script>
<!-- <script type="text/javascript" src="./lib/jquery/dist/jquery.min.js"></script> -->
<script type="text/javascript" src="./lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="./lib/jspdf/dist/jspdf.min.js"></script>


<script type="text/javascript" src="./lib/bootstrap3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./bancoDados/ajax.js"></script>
<script type="text/javascript" src="./saves/save.js"></script>
<script type="text/javascript" src="./efeitos/efeitos.js"></script>

<script type="text/javascript" src="./lib/tableExport.jquery.plugin/tableExport.js"></script>
<script type="text/javascript" src="./lib/tableExport.jquery.plugin/jquery.base64.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ol3/3.5.0/ol.css" type="text/css"> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ol3/3.5.0/ol.js"></script> -->

<script type="text/javascript" src="./lib/open3/ol.js"></script>
<link href="./lib/open3/ol.css" rel="stylesheet">

<script src="./lib/jquery-ui-custom/jquery-ui.js"></script>
<link href="./visualizacao/geovis.css" rel="stylesheet">
<!--  <link href="css/especifico.css" rel="stylesheet">-->

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- Fav and touch icons -->
</head>

<body>

	<div class="mainSpace">
		<div class="logo">
			<img src="imagens/logoGeosqlplus210x56.png"
				class="img-rounded img-responsive"></img>
		</div>

		<!-- Aqui entra as tabs para visualização dos resultados -->
		<div id="tabs">
			<ul class="nav nav-tabs" id="mytab">
			
				<!-- Tab para visualização do esquema -->
				<li class=" active"><a href="#tab0" data-toggle="tab"> <i
						class="icon-search glyphicon glyphicon-th-large"></i> ESQUEMA
				</a></li>
				
				<!-- Tab para visulização do esquema -->
				<li class=""><a href="#tab1" data-toggle="tab"> <i
						class="glyphicon glyphicon-list"></i> DADOS
				</a></li>

				<!-- Tab para visualização dos mapas -->
				<li class="" id="navtab2"><a href="#tab2" data-toggle="tab"> <i
						class="icon-search glyphicon glyphicon-globe"></i> MAPA
				</a></li>
			</ul>
		</div>
		
		<!-- Aqui temos o que ira conter dentro de cada tab -->
		<div class="tab-content">
				<div class="tab-pane active" id="tab0">
					<?php include('tab_esquema.php'); ?>
    			</div>

				<div class="tab-pane" id="tab1">
    				<?php include('tab_results.php'); ?>
    			</div>
    			
				<div class="tab-pane" id="tab2">
				<div id = "mapa">
				<!-- <iframe id = "postgref" src = "./visualizacao/geovis.html"></iframe> -->
				 <?php include ('tab_map.php');?>
				 </div>
			
    			</div>
		</div>
		
		<script type="text/javascript">
		$( "#navtab2" ).click(function() {
			//var agor = document.getElementsByClassName('ol-unselectable');
			//console.log (agor);
			});
		</script>

	</div>
</body>
</html>
