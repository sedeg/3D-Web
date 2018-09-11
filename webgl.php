<?php include_once 'partials/header.php'; ?>

	<div class="row row-distance">
		<div class="col-xs-4">
			<a href="index.php" class="btn btn-get btn-get-css">CSS</a>
		</div>
		<div class="col-xs-4">
			<a href="canvas.php" class="btn btn-get btn-get-canvas">Canvas</a>
		</div>
		<div class="col-xs-4">
			<a href="webgl.php" class="btn btn-get btn-get-webgl active">WebGL</a>
		</div>
	</div>
	<div id="cube-wrap">
		<div class="row">
			<div class="col-xs-8">
				<div class="well">
					<div class="template-wrap clear">
						<canvas style="box-shadow:none;" class="emscripten" id="canvas"
								oncontextmenu="event.preventDefault()" height="300" width="400"></canvas>
					</div>

					<script type='text/javascript'>
						var Module = {
							TOTAL_MEMORY: 268435456,
							errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
							compatibilitycheck: null,
							dataUrl: "Release/webglcube.data",
							codeUrl: "Release/webglcube.js",
							memUrl: "Release/webglcube.mem",
						};
					</script>
					<script src="Release/UnityLoader.js"></script>
				</div>
			</div>
			<div class="col-xs-4">
				<h2>WebGL Cube</h2>
				<div class="content-part">
					<h4>Prinzip</h4>
					<ul>
						<li>3D-Inhalte entweder programmieren oder mit 3D-Renderingtools definieren</li>
						<li>Grafiken werden innerhalb eines Canvas-Elements gerendert</li>
					</ul>
				</div>
				<div class="content-part">
					<table>
						<tr>
							<td><strong>Page Load</strong></td>
							<td>26,776s</td>
						</tr>
						<tr>
							<td><strong>CPU Auslastung</strong></td>
							<td>51,8%</td>
						</tr>
						<tr>
							<td><strong>Projektgröße</strong></td>
							<td>4,68KB</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php include_once 'partials/footer.php'; ?>