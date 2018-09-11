<?php include_once 'partials/header.php'; ?>

<div class="row row-distance">
	<div class="col-xs-4">
		<a href="index.php" class="btn btn-get btn-get-css active">CSS</a>
	</div>
	<div class="col-xs-4">
		<a href="canvas.php" class="btn btn-get btn-get-canvas">Canvas</a>
	</div>
	<div class="col-xs-4">
		<a href="webgl.php" class="btn btn-get btn-get-webgl">WebGL</a>
	</div>
</div>
<div id="cube-wrap">
	<div class="row">
		<div class="col-xs-8">
			<div class="well">
				<div class="scene">
					<div class="shape cuboid-1 cub-1">
						<div class="face ft"></div>
						<div class="face bk"></div>
						<div class="face rt"></div>
						<div class="face lt"></div>
						<div class="face bm"></div>
						<div class="face tp"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<h2>CSS Cube</h2>
			<div class="content-part">
				<h4>Prinzip</h4>
				<ul>
					<li>HTML-Elemente im DOM anglegen</li>
					<li>mittels CSS um Achsen rotieren</li>
					<li>komplexe Objekte durch Verschiebung</li>
				</ul>
			</div>
			<div class="content-part">
				<table>
					<tr>
						<td><strong>Page Load</strong></td>
						<td>0,632s</td>
					</tr>
					<tr>
						<td><strong>CPU Auslastung</strong></td>
						<td>45,2%</td>
					</tr>
					<tr>
						<td><strong>Projektgröße</strong></td>
						<td>9,96KB</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>


<?php include_once 'partials/footer.php'; ?>
