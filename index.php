<style type="text/css">

body{
	background: black;
}
	/* jQuery lightBox plugin - Gallery style */
	#cuadro_camara {
		background-color: #22485E;
		padding-left: 30px;
		padding-top:20px;
		border-radius: 5px;
	}
	/*#titulo_camara {
	background-color: #666;
	color:#FFF;
	padding-left: 30px;
	font-size: 14px;
	text-align:center;
	}*/
	.botones_cam {
		background-color:#FFF;
		color:#333;
		font-family: "Comic Sans MS", cursive;
		font-size:14px;
		margin-top:10px;
		width:100px;
		height:40px;
	}
	.formulario {
	/*	color: #FFF;*/
	}
	
/*BOTONES*/

.button {
    display: inline-block;
    position: relative;
    margin: 10px;
    padding: 0 20px;
    text-align: center;
    text-decoration: none;
    font: bold 12px/25px Arial, sans-serif;
 
    text-shadow: 1px 1px 1px rgba(255,255,255, .22);
 
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
 
    -webkit-box-shadow: 1px 1px 1px rgba(0,0,0, .29), inset 1px 1px 1px rgba(255,255,255, .44);
    -moz-box-shadow: 1px 1px 1px rgba(0,0,0, .29), inset 1px 1px 1px rgba(255,255,255, .44);
    box-shadow: 1px 1px 1px rgba(0,0,0, .29), inset 1px 1px 1px rgba(255,255,255, .44);
 
    -webkit-transition: all 0.15s ease;
    -moz-transition: all 0.15s ease;
    -o-transition: all 0.15s ease;
    -ms-transition: all 0.15s ease;
    transition: all 0.15s ease;
}


.button:hover {
    -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 0px 0px 2px rgba(0,0,0, .5);
    -moz-box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 0px 0px 2px rgba(0,0,0, .5);
    box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 0px 0px 2px rgba(0,0,0, .5);
}

.button:active {
    -webkit-box-shadow: inset 0px 0px 3px rgba(0,0,0, .8);
    -moz-box-shadow: inset 0px 0px 3px rgba(0,0,0, .8);
    box-shadow: inset 0px 0px 3px rgba(0,0,0, .8);
}
 
/* Gray Color */
 
.gray {
    color: #515151;
 
    background: #d3d3d3; /* Old browsers */
    background: -moz-linear-gradient(top,  #d3d3d3 0%, #8a8a8a 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d3d3d3), color-stop(100%,#8a8a8a)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #d3d3d3 0%,#8a8a8a 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #d3d3d3 0%,#8a8a8a 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #d3d3d3 0%,#8a8a8a 100%); /* IE10+ */
    background: linear-gradient(top,  #d3d3d3 0%,#8a8a8a 100%); /* W3C */
}

/* FORMULARIO*/
form.cleanForm {
    width:700px;
    margin:0 auto;
}

form.cleanForm p {
    margin-bottom:15px;
}

input[type="email"], input[type="password"], input[type="text"]  {
    font-family: Arial, Sans-Serif;
    font-size: 18px;
    color: #007FFF;
    padding: 10px;
    outline:none;   
    float:left;
    border: solid 1px #007FFF;
    width: 230px;
    transition: all 2s ease-in-out;
    -webkit-transition: all 2s ease-in-out;
    -moz-transition: all 2s ease-in-out;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    border-radius: 8px;
    -moz-box-shadow:inset 0 0 5px 5px #E6E6E6;
    -webkit-box-shadow:inset 0 0 5px 5px #E6E6E6;
    box-shadow:inset 0 0 5px 5px #E6E6E6;
    clear: right;
}

input[type="email"]:focus, input[type="email"]:hover, input[type="password"]:focus,
input[type="password"]:hover, input[type="text"]:focus, input[type="text"]:hover {
    border:1px solid #FF003F;   
} 
form.cleanForm em {
    font-size:12px;
}

/*GALERIA*/

	/* jQuery lightBox plugin - Gallery style */
	#gallery {
		background-color: #22485E;
		width: 100%;
		border-radius: 5px;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #3e3e3e;
		border-width: 5px 5px 5px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 5px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }

	</style>
<script type="text/javascript" src="jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript" src="webcam.js"></script>
    <script language="JavaScript">
		webcam.set_api_url( 'test.php' );//PHP adonde va a recibir la imagen y la va a guardar en el servidor
		webcam.set_quality( 90 ); // calidad de la imagen
		webcam.set_shutter_sound( true ); // Sonido de flash
	</script>
		<script language="JavaScript">
		webcam.set_hook( 'onComplete', 'my_completion_handler' );
		
		function do_upload() {
			// subir al servidor
			document.getElementById('upload_results').innerHTML = '<h1>Cargando al servidor...</h1>';
			webcam.upload();
		}
		
		function my_completion_handler(msg) {
			
			if (msg.match(/(http\:\/\/\S+)/)) {
				var image_url = RegExp.$1;//respuesta de text.php que contiene la direccion url de la imagen
				
				// Muestra la imagen en la pantalla
				document.getElementById('upload_results').innerHTML = 
					'<img src="' + image_url + '">'+
					'<form action="gestion_foto.php" method="post" class="cleanForm">'+
					'<input type="hidden" name="id_foto" id="id_foto" value="' + image_url + '"  /><br>'+
					'<input placeholder="Nombre" type="text" name="nombre_foto" id="nombre_foto"/>'+
					'<input placeholder="Descripcion" type="text" name="des" id="des"/>'+
				    '<input type="submit" name="button" id="button" value="Enviar" class="button big gray" /></form>'
					;
				// reset camera for another shot
				webcam.reset();
			}
			else alert("PHP Error: " + msg);
		}
	</script>
<div align="left" id="cuadro_camara">    

<table width="100%" height="144"><tr><td width="100" valign=top>
		<form>
		<input type=button value="Configurar" onClick="webcam.configure()" class="button big gray">
		&nbsp;&nbsp;
		<input type=button value="Tomar foto" onClick="webcam.freeze()" class="button big gray">
		&nbsp;&nbsp;
		<input type=button value="subir" onClick="do_upload()" class="button big gray">
		&nbsp;&nbsp;
		<input type=button value="Reset" onClick="webcam.reset()" class="button big gray">


	</form>
<style type="text/css">


</style>	





	</td>
    <td width="263" valign=top>
	<script language="JavaScript">
	document.write( webcam.get_html(320, 240) );//dimensiones de la camara
	</script>
    </td>
    <td width=411>
	    <div id="upload_results" class="formulario" > </div>
  </td></tr></table><br /><br />
</div>



<br />
<br />
<script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();//Galeria jquery
    });
    </script>



    
    <div id="gallery">
    <ul>
  <?php  
  
  include("clase_conexion.php");
  $consulta="select * from fotos order by id_foto desc";
  $busca_fotos=mysql_query($consulta,$c);
  while($ro=mysql_fetch_array($busca_fotos)){
   $url=$ro['id_foto'];  
   $nombre=$ro['nombre']; 
     $des=$ro['des'];
     echo "<li>
	 
            <a href=\"fotos/".$url.".jpg\" title=\"$nombre - $des\">

                <img src=\"fotos/".$url.".jpg\" width=\"150\" height=\"120\" alt=\"\" />

            </a>
        </li>";
  }
?>    
    </ul>
</div>