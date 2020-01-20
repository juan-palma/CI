<?php

//Datos de formualirio portafolios
$data  =  array ( 
	'name' => 'portafolios[titulo]',
	'value' => @$portafoliosDB->titulo_general,
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => ''
); 
$data_video  =  array ( 
	'name' => 'portafolios[video]',
	'value' => @$portafoliosDB->video_general,
	'class' => 'validaciones vc form-control input-lg hl2',
	'autocomplete' => 'off',
	'placeholder' => ''
);
$data_video_portada =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-cloneinfo' => 'video_portada'
); 


$data_portafolio_foto  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-cloneinfo' => 'foto',
	'data-conteovalin' =>"portafolio",
	'data-conteovalfin' => "_foto",
	'data-conteoval' => "name"
);
$data_portafolio_titulo  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-conteovalin' =>"portafolios[portafolio][",
	'data-conteovalfin' => "][titulo]",
	'data-conteoval' => "name"
);

$data_portafolio_intro  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg hl2 conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-conteovalin' =>"portafolios[portafolio][",
	'data-conteovalfin' => "][texto]",
	'data-conteoval' => "name"
);

$data_portafolio_link  =  array ( 
	'name' => '',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg conteo',
	'autocomplete' => 'off',
	'placeholder' => '',
	'data-conteovalin' =>"portafolios[portafolio][",
	'data-conteovalfin' => "][enlace]",
	'data-conteoval' => "name"
);




?>



<div class="container area_scroll" data-page="<?php echo($actual); ?>">
	
	
<!-- 	elementos para clonar en el codigo -->
	<div class="hiden boxClones">
		<?php 
			echo form_upload( $data_video_portada );
			echo form_upload( $data_portafolio_foto );
			
			$data['classAdd'] = 'conteo';
			$data['propertyAdd'] = ' data-conteovalin="portafolio" data-conteovalfin="_icono" data-conteoval="name"';
			$this->load->view('admin/plantillas/img_block', $data);
		?>
									
		<div id="portafolio_base" class="registro" data-cloneinfo="formPortafolio">
			<div class="valHead">
				<h5>portafolio<span class="valNum conteo" data-conteovalin="" data-conteovalfin="" data-conteoval="text">1</span></h5>
				<div class="controlCloneRegistro">
					<div class="clone menos"><i class="far fa-trash-alt"></i></div>
				</div>
			</div>
			
			<div class="row">
				<div class="col -md-3">
					<div class="portafolio_foto">
						<label>Foto:</label>
						<div class="cleanBox" data-clonetype="foto">
							<?php echo form_upload( $data_portafolio_foto ); ?>
						</div>
					</div>
				</div>
				
				<div class="col -md-9">
					<div class="portafolio_titulo">
						<label>Titulo del portafolio:</label>
						<?php echo form_input( $data_portafolio_titulo ); ?>
					</div>
					<div class="portafolio_texto">
						<label>Introducción:</label>
						<?php echo form_textarea( $data_portafolio_intro ); ?>
					</div>
					<div class="portafolio_enlace">
						<label>Correo a donde dirigir la portafolio:</label>
						<?php echo form_input( $data_portafolio_link ); ?>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!-- 	Seccion de portafolios -->
	<div id="portafolios" class="row"><br/>
		<div class="card stacked-form col-md-12">
			<div class="card-header block">
				<h5 class="tituloBlock">portafolios:</h5>
				<hr class="colorgraph">
			</div>
			
			<div class="valueBox">
				<div class="contenedor">
					<div class="row">
						<div class="col-12">
							<label>Titulo de la sección:</label>
							<?php echo form_input( $data ); ?>
						</div>
						
						<div class="col-12 col-sm-6">
							<label>Video general:</label>
							<?php echo form_textarea( $data_video ); ?>
						</div>
				
						<div class="col-12 col-sm-6">
							<label>En caso de no colocar un video suba una portada:</label>
							<div class="video_portada cleanBox" data-clonetype="video_portada">
							<?php
								if(isset($portafoliosDB)){
									if(property_exists($portafoliosDB, "video_portada") && $portafoliosDB->video_portada !== ""){
										$data['img'] = base_url('assets/public/img/portafolios/'.$portafoliosDB->video_portada);
										$data['name'] = $portafoliosDB->video_portada;
										$data['hname'] = 'base0_video_portada';
										$this->load->view('admin/plantillas/img_block', $data);
									} else{
										$data_video_portada['name'] = 'base0_video_portada';
										echo form_upload( $data_video_portada );
									}
								} else{
									$data_video_portada['name'] = 'base0_video_portada';
									echo form_upload( $data_video_portada );
								}
							?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="boxRepeat">
					<div class="boxMainClone">Agregar un portafolio: <div id="portafolio_clonemas" class="clone mas"><i class="fas fa-plus-circle"></i></div></div>
					
					<?php
					if(property_exists($portafoliosDB, "portafolios") && count($portafoliosDB->portafolios) > 0 ){
						foreach ($portafoliosDB->portafolios as $i=>$v) {
							
							?>
							<div class="registro">
								<div class="valHead">
									<h5>portafolio <span class="valNum conteo" data-conteovalin="" data-conteovalfin="" data-conteoval="text"><?php echo($i+1); ?></span></h5>
									<div class="controlCloneRegistro">
										<div class="clone menos"><i class="far fa-trash-alt"></i></div>
									</div>
								</div>
								
								<div class="row">
									<div class="col -md-3">
										<div class="portafolio_foto">
											<label>Foto:</label>
											<div class="cleanBox"  data-clonetype="foto">
											<?php
												if(property_exists($v, "foto") && $v->foto !== ""){
													$data['img'] = base_url('assets/public/img/portafolios/'.$v->foto);
													$data['name'] = $v->foto;
													$data['hname'] = 'portafolio'.$i.'_foto';
													$data['classAdd'] = 'conteo';
													$data['propertyAdd'] = ' data-conteovalin="portafolio" data-conteovalfin="_foto" data-conteoval="name"';
													$this->load->view('admin/plantillas/img_block', $data);
												} else{
													$data_portafolio_foto['name'] = 'portafolio'.$i.'_foto';
													echo form_upload( $data_portafolio_foto );
												}
											?>
											</div>
										</div>
									</div>
									
									<div class="col -md-9">
										<div class="portafolio_titulo">
											<label>Titulo del portafolio:</label>
											<?php
												$data_portafolio_titulo['name'] = 'portafolios[portafolio]['.$i.'][titulo]';
												$data_portafolio_titulo['value'] = $v->titulo;
												echo form_input( $data_portafolio_titulo );
											?>
										</div>
										<div class="portafolio_texto">
											<label>Introducción:</label>
											<?php
												$data_portafolio_intro['name'] = 'portafolios[portafolio]['.$i.'][texto]';
												$data_portafolio_intro['value'] = $v->texto;
												echo form_textarea( $data_portafolio_intro );
											?>
										</div>
										<div class="portafolio_enlace">
											<label>Correo a donde dirigir la portafolio:</label>
											<?php
												$data_portafolio_link['name'] = 'portafolios[portafolio]['.$i.'][enlace]';
												$data_portafolio_link['value'] = $v->enlace;
												echo form_input( $data_portafolio_link );
											?>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					}
					?>
				</div>
				
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
</div>


</form>