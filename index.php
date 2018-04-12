<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

	<style>
		*{
			margin: 0;
			padding: 0;
			text-align: center;
			font-family: 'Roboto', sans-serif;
		}
		body{
			background: linear-gradient(to bottom right, #97D2F9, #2471A3);
			background-repeat: no-repeat;
			height: 100vh;
			width: 100vw;

		}

		#container{
			width: 100%;
			height: 100%;
/*			padding: 2em;
			margin: 2em;*/
		}
		.form{
			/*position: absolute;*/
			height: 40em;
			width: 40em;
			background-color: lightblue;
			opacity: .8;
			margin-left: auto;
			margin-right: auto;
			border-radius: 2px;
			margin-top: 2em;
		}
		.formCircle{
			border-radius: 50%; 
		}
		.formRect{
			border-radius: 2px;
			width: 80%;
		}
		button{
			width: 80%;
			height: 3em;
			margin: .5em
			border: none;
			border-radius: 8px;
			background-color: #2471A3;
			color: white;
			letter-spacing: .8em;
			margin-top: 2em;
		}
		input{
			width: 80%;
			height: 2em;
			margin: .5em;
			border-radius: 8px;
			border-style: none;
			letter-spacing: .8em;
		}
		h3{
			margin-top: .5em;
			font-size: 40px;
			letter-spacing: .5em;padding-top: 2em;
		}
		.checkBox{
			width: auto;
			margin: 2em;
		}
		h4{
			font-size: 2em;
		}
		.gender{
			margin-top: 1em;
		}
		fieldset{
			border: 0;
		}
		p{
			margin-top: 1em;
		}
		#drawing{
			float: right;
		}
	</style>
</head>
<body>
	<div id="container">
		<div class="form form3">
			<form action="" method="GET">
				<h3>SHAPE CALCULATOR</h3>
				<?php include 'php/dateTime.php';?>
				<p>Please choose a shape and I will calculate it like a boss (in millimeters)</p>
				<fieldset id="groupThree">
					Circle<input class="checkBox" type="radio" id="shape" name="shapeRadio" value="Circle">
					Square<input class="checkBox" type="radio" id="shape" name="shapeRadio" value="Square">
					Rectangle<input class="checkBox" type="radio" id="shape" name="shapeRadio" value="Rectangle">
					<div id="appendInput" ></div>
					<div id="formOutput">
						<?php include 'php/shape.php';?>
					</div>
					<button id="submit" name="submit" type="submit">SUBMIT</button>
				</fieldset>
			</form>
		</div>
		<div id="drawing"></div>
	</div> <!--  /container --> 
	
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/2.6.4/svg.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>