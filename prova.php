<!DOCTYPE html> 

<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title></title> 
        <link rel="stylesheet" href="aggiungi.css"> 
		<style type="text/css"> 
			#intestazione
			{ 
				 width:100%; 
				 height:100px; 
				 position:absolute; 
				 font-family: Comic Sans MS; 
				 top:0px; 
				 left:0px; 
				 text-align: center; 
			} 
			#divhr 
			{ 
				position:absolute; 
				top: 105px;     
				font-family:Comic Sans MS; 
			} 
			#footer 
			{
				position: fixed; 
				bottom: 0; 
				left: 0; 
				text-align: center; 
				background: white; 
				color: black; 
				font-family: Comic Sans MS; 
				font-size: 15px; 
				width: 100%; 
			   /* padding: 5px 0;*/ 
				opacity: 0.9; 
				-moz-opacity: 0.9; 
				filter: alpha(opacity=90); 
			} 

			/* Aggiungi*/ 

			.bottone 
			{ 
				-moz-border-radius: 8px; 
				-webkit-border-radius: 8px; 
				border-radius: 8px; 
				 
				-moz-box-shadow: inset 0 -1px 3px rgba(255,255,255,0.5), 0 2px 2px rgba(0,0,0,0.2); 
				-webkit-box-shadow: inset 0 -1px 3px rgba(255,255,255,0.5), 0 2px 2px rgba(0,0,0,0.2); 
				box-shadow: inset 0 -1px 3px rgba(255,255,255,0.5), 0 2px 2px rgba(0,0,0,0.2); 
				 
				border: 1px solid; 
				padding: 8px 12px; 
				 
				color: #fff; 
				font-family: "Myriad Pro", Arial, Tahoma, sans-serif; 
				font-size: 1.4em; 
				font-weight: bold; 
				text-shadow: -1px -1px rgba(0,0,0,0.1), 0 0 15px rgba(255,255,255,0.75); 
				white-space: nowrap; 
				 
				background: #777; 
				border-color: #777; 
				 
				text-decoration: none; 
				font-style: normal; 
				text-transform: none; 	 
			} 
			.bottone:hover, 
			.bottone:focus 
			{ 
				position: relative; 
				bottom: 1px; 

				-moz-box-shadow: inset 0 -1px 3px rgba(255,255,255,0.5), 0 3px 2px rgba(0,0,0,0.2); 
				-webkit-box-shadow: inset 0 -1px 3px rgba(255,255,255,0.5), 0 3px 2px rgba(0,0,0,0.2); 
				box-shadow: inset 0 -1px 3px rgba(255,255,255,0.5), 0 3px 2px rgba(0,0,0,0.2); 
			}     

			.ClasseDelDiv
			{ 
				display:inline; 
				margin : 0.5%; 
			} 

		</style> 
    </head> 
    <header>         
		<div id = "intestazione"> 
            <h1>Gestione iscrizione prova</h1> 
            <hr> 
        </div>   
    </header>  
	
	<footer> 
		<div id ="footer"> 
			<hr> 
				<h1>Questa è una prova del footer fondo pagina</h1> 
			</hr> 
		</div> 
	</footer> 
     
    <body>  
         
		<form action= 'aggiungi.php' method="POST"> 

			<div id ="divhr"> 
				<div id="container"> 
					<div class="divBottoni"> 
						<div align ="center">  
							<input type="button" onclick="location.href='aggiungi.php';" value="Aggiungi"/> 
						</div> 
					</div> 
				</div> 
			</div>  
		</form> 
			 
		<?php 
			require_once "connetti.php"; 
			require_once "data.php"; 
			echo "</hr>"; 
		?> 

	</body> 
</html> 


