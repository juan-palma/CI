<!-- Pagina Servicios ARTICULO -->

<!-- Pagina Servicios TITULO -->
<div class="mainbox bl1" style="background-image: url(<?php echo(base_url( 'assets/public/img/servicios/registros/'.@$articuloDB->titulo_fondo )); ?> )">
	<h2 class="titulo">&nbsp;<?php echo(@$articuloDB->titulo_general); ?></h2>
	<h1 class="nombre">&nbsp;<?php echo(@$articuloDB->nombre); ?></h1>
</div>



<!-- Pagina Servicios INTRO -->
<div class="mainbox bl2">
	<p class="intro">&nbsp;<?php echo(@$articuloDB->intro); ?></p>
</div>




<!-- Pagina Servicios INTRO -->
<div class="mainbox bl3">
	<div class="galeria">
		<div class="slideMain">
			<main class="slideItems">
				<?php
				foreach ($articuloDB->galeria as $i=>$v) {
					?>
					<article class="slideLine" style="background-image: url(<?php echo( base_url('assets/public/img/portafolios/registros/'.$v->foto) ); ?>)">
	<!-- 					<img src="<?php echo( base_url('assets/public/img/portafolios/registros/'.$v->foto) ); ?>"></img> -->
					</article>
					<?php
				}
				?>
			</main>
		</div>
	</div>
	
	<div class="bloques">
		<?php
		if(count(@$articuloDB->bloques) > 0){
			foreach (@$articuloDB->bloques as $i=>$v) {
				?>
				<article class="item">
					<div class="info">
						<h4 class="servicioTitulo"><?php echo(@$v->titulo1); ?></h4>
						<p class="texto"><?php echo($v->texto1); ?></p>
					</div>
				</article>
				<?php
			}
		}
		?>
	</div>
</div>




<!-- Pagina Servicios INTRO -->
<div class="mainbox bl4">
	<p class="intro">&nbsp;<?php echo(@$articuloDB->pie); ?></p>
</div>