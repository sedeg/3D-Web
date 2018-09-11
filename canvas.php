<?php include_once 'partials/header.php';?>

<div class="row row-distance">
	<div class="col-xs-4">
		<a href="index.php" class="btn btn-get btn-get-css">CSS</a>
	</div>
	<div class="col-xs-4">
		<a href="canvas.php" class="btn btn-get btn-get-canvas active">Canvas</a>
	</div>
	<div class="col-xs-4">
		<a href="webgl.php" class="btn btn-get btn-get-webgl">WebGL</a>
	</div>
</div>
<div id="cube-wrap">
	<div class="row">
		<div class="col-xs-8">
			<div class="well">
				<canvas id="thecanvas" width="400" height="300">
					Your browser does not support the HTML5 canvas element. <a href=#>Click here</a> to watch the video.
				</canvas>
			</div>
		</div>
		<div class="col-xs-4">
			<h2>Canvas Cube</h2>
			<div class="content-part">
				<h4>Prinzip</h4>
				<ul>
					<li>Canvas im DOM anglegen</li>
					<li>Punkte im Raum definieren und zu Pfaden verbinden</li>
					<li>Pfade zu komplexen Objekten zusammensetzen</li>
				</ul>
			</div>
			<div class="content-part">
				<table>
					<tr>
						<td><strong>Page Load</strong></td>
						<td>0,751s</td>
					</tr>
					<tr>
						<td><strong>CPU Auslastung</strong></td>
						<td>17,6%</td>
					</tr>
					<tr>
						<td><strong>Projektgröße</strong></td>
						<td>13,99KB</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include_once 'partials/footer.php'; ?>