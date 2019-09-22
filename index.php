<!doctype html>
 
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Sistema de Visão Cognitivo - Obturadores</title>
	<style type="text/css">
		body { font-family: Helvetica, sans-serif; }
		h2, h3 { margin-top:0; }
		form { margin-top: 15px; }
		form > input { margin-right: 15px; }
		#results { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
	</style>
</head>
<body onkeydown="take_snapshot()"> 

<div id="results">Resultado do Teste</div>


	<h1>Teste de presença de obturadores</h1>
	<h3>Sistema de Visão Cognitivo</h3>
	
	<div id="my_camera"></div>
	
	

	<!-- First, include the Webcam.js JavaScript Library -->
	<script type="text/javascript" src="webcam.js"></script>
	
	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript">
		Webcam.set({
			width: 400,
			height: 400,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>
		
	<!-- A button for taking snaps -->
	
	 
		<input id="myBtn" type=button value="Tirar foto" onclick="take_snapshot()">

	
	
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
	
	
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				
		
					
				Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
		
				    
				    if( text === 'NOK') {
				    
					document.getElementById('results').innerHTML = 
					'<img src="https://artificialx.com.br/projetos/alliance/obtdash/images/no.png" width="550" height="550"/> REPROVADO </a>'
					
				    }
				    
				    
				    if( text === 'OK') {
				    
					document.getElementById('results').innerHTML = 
					'<img src="https://artificialx.com.br/projetos/alliance/obtdash/images/yes.png" width="550" height="550"/> APROVADO </a>'
					
				    }
				    
				    
				     if( text === 'KWID') {
				    
					document.getElementById('results').innerHTML = 
					'<img src="https://artificialx.com.br/projetos/alliance/obtdash/images/kwid.png" width="550" height="550"/> KWID </a>'
					
				    }
				    
				    
				} );	
			} );
		}
	</script>
	

	
</body>
</html>