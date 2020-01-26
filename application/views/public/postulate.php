<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Pagina POSTULATE -->
<?php
	$postulateDB = (object)[];
	$postulateDB->titulo_fondo = "postulate_fondo.jpg";
	$postulateDB->titulo_general = "Postúlate";
?>
<div class="mainbox bl1" style="background-image: url(<?php echo(base_url( 'assets/public/img/postulate/'.@$postulateDB->titulo_fondo )); ?> )">
	<h2 class="titulo">&nbsp;<?php echo(@$postulateDB->titulo_general); ?></h2>
</div>



<div class="mainbox bl2">
	<a href="<?php echo(base_url('postulate/modelo')); ?>"><div id="modelo" class="area <?php if($area === "modelo"){echo('activo');} ?>">MODELO</div></a>
	<a href="<?php echo(base_url('postulate/alianza')); ?>"><div id="alianza" class="area <?php if($area === "alianza"){echo('activo');} ?>">ALIANZA</div></a>
</div>



<div class="mainbox bl3">
	<?php 
	if($area === "modelo"){
	?>
		<h2>¿ERES MODELO?</h2>
		
		<form id="formularioUpload" class="ev" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8" data-send="<?php echo(base_url('postulate/do_upload')); ?>">
			<input type="hidden" name="pagina" value="<?php echo($area); ?>"></input>
			<input type="hidden" id="fotosTotal" name="fotosTotal" value=""></input>
			
			<div class="boxInput">
				<label>Nombre (s)*</label>
				<input type="text" name="nombre" value="" class="validaciones vc form-control input-lg" autocomplete="off" placeholder="" data-validar="texto" required>
			</div>
			<div class="boxInput">
				<label>Apellidos*</label>
				<input type="text" name="apellido" value="" class="validaciones vc form-control input-lg" autocomplete="off" placeholder="" data-validar="texto" required>
			</div>
			<div class="boxInput">
				<label>E-mail*</label>
				<input type="email" name="correo" value="" class="validaciones vc form-control input-lg" autocomplete="off" placeholder="" data-validar="correo" required>
			</div>
			<div class="boxInput">
				<label>Teléfono*</label>
				<input type="tel" name="telefono" value="" class="validaciones vc form-control input-lg" autocomplete="off" placeholder="" data-validar="telefono" required>
			</div>
			<div class="boxInput">
				<label>Enlace para compartir red social*</label>
				<input type="url" name="compartir" value="" class="validaciones vc form-control input-lg" autocomplete="off" placeholder="" data-validar="texto" required>
			</div>
			<div class="boxInput ida_boxInputContent unArchivo">
				<div class="ida_boxInput ida_boxInputLoadFile">
					<label>Identificación (Pasaporte, FM3)</label>
					<input type="file" class="ida_inputUpload" name="credencial" accept="image/*" style="display:none" onchange="handleFiles.call(this, this.files)" required>
					<div class="idaUnArchivoInfo"></div>
					<a href="javascript:void(0)" class="idaInputLoadFileA">Subir Archivo</a>
				</div>
			</div>
			<!-- Carga de archvios -->	
			<div class="boxInput span6 ida_boxInputContent DropSistem">
				<div class="ida_boxInput ida_boxInputLoadFile">
					<label>Compártenos tus fotos (mínimo 10 fotos)* </label>
					<input type="file" class="ida_inputUpload" multiple accept="image/*" style="display:none" onchange="handleFiles.call(this, this.files)" required>
					<a href="javascript:void(0)" class="idaInputLoadFileA">Subir Archivo</a>
				</div>
				<div class="ida_boxInput ida_boxInputLoadFileDrop">
					<div class="ida_areaDropUpload"></div>
					<div class="ida_areaDropUploadPreview"></div>
				</div>
			</div>
			
			<div class="recaptcha boxInput span6">
				<div class="g-recaptcha" data-sitekey="6LcFVNIUAAAAAL0ktNowPVPLU3p_TeD8IWHcd4ul" data-callback="bienRecaptcha" data-expired-callback="viejoRecaptcha" data-error-callback="malRecaptcha"></div>
			</div>
			
			<div class="boxInput span6 terminosCheck">
				<input type="checkbox" name="terminos" class="" id="terminosChek"> He leído y acepto los <a href="<?php echo(base_url('terminos-condiciones')); ?>" target="_blank" class="terminos" id="linkTerminos">términos y condiciones</a></input>
			</div>
			
			<div class="boxInput span6">
				<input type="submit" value="ENVIAR" id="ida_boxformBtnSend" />
			</div>
			
<!--
			<div id="footerBtnEnviar">
				<div class="celda">
					<span>ENVIAR</span>
				</div>
			</div>
-->
			
		</form>
	<?php
	} else{
	?>
		<h2>TRABAJA CON NOSOTROS</h2>
	<?php
	}
	?>



