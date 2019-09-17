<!DOCTYPE html>
<html>
	
	<head>
		
		<meta charset="UTF-8">
		<title>PoseNet example using p5.js</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.8.0/p5.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.8.0/addons/p5.dom.min.js"></script>
		<script src="https://unpkg.com/ml5@0.3.1/dist/ml5.min.js" type="text/javascript"></script>

		<style type="text/css">
			body{
				margin: 0;
				padding: 0;
				width: 100vw;
				height: 100vh;
				display: flex;
				justify-content: center;
				align-items: center;
			}

			canvas{
				position: absolute;
			}
		</style>

	</head>

	<body>
		
		<h1>PoseNet example using p5.js</h1>
		<p id='status'>Loading model...</p>
		<script src="body_parts_app.js"></script>

	</body>

</html>

