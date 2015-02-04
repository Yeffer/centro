<?php /* Smarty version 2.6.6, created on 2015-02-03 09:05:14
         compiled from registro_step1_precandidato.html */ ?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Description ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<title>Registro Centro Democrático</title>
	<!-- CSS -->
	<link rel="stylesheet" href="../css/vendor/normalize.css">
	<link rel="stylesheet" href="../css/vendor/foundation.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<!-- TOP SCRIPTS -->
	<script src="script/jquery_2.1.0_min.js"></script>
	<script src="script/modernizr.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- - - - - - -->
	<script></script>
	<style></style>

</head>
<body>
	<!-- - - - - - - -->
	<!-- INIT -->
	<header>
		<div class="logo">
			<img src="../images/logo.jpg" alt="">
		</div>
	</header>

	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="ContentForm">
				<div class="titlleBox">
					<h4>Registro Precandidatura</h4>
				</div>

				<div class="stepWrap2">
					<div class="step">
						<div class="stepNum active">
							<img src="../images/step.png" height="55" width="55" alt="">
						</div>
						<div class="stepTxt">Registro</div>
					</div>
					<div class="step">
						<div class="stepNum">
							<img src="../images/step.png" height="55" width="55" alt="">
						</div>
						<div class="stepTxt">Registro</div>
					</div>
					<div class="step">
						<div class="stepNum">
							<img src="../images/step.png" height="55" width="55" alt="">
						</div>
						<div class="stepTxt">Confirmación de datos</div>
					</div>
					
				</div>
				
				<div class="FormWrap">

					<div class="row">
						<div class="small-12 medium-10 large-10 medium-offset-1 large-offset-1 columns">
							<p>
								Bienvenido al sistema de preinscripción de candidaturas a las elecciones locales y regionales de 2015. 

								En los siguientes pasos encontrará el formulario de inscripción como precandidato y los requisitos que debe cumplir para participar como precandidato en las convenciones internas del Centro Democrático. 

								Cabe aclarar que toda la información suministrada será sujeta a verificación por parte de las directivas regionales y nacionales del Centro Democrático.

								No nos queda más que darle la bienvenida e invitarlo a leer con detenimiento el formulario y diligenciarlo en su totalidad.

							</p>
							<!-- INIT FORM -->
							<form action="">
								<!-- datos personales -->
								<div class="subTitleInput">
									<p>Datos personales*</p>
								</div>

								<div class="row">
									<div class="small-12 medium-6 large-6 columns">
										<input type="text" placeholder="Nombre*">
									</div>
									<div class="small-12 medium-6 large-6 columns">
										<input type="text" placeholder="Apellidos*">
									</div>
									<div class="small-12 medium-12 large-12 columns">
										<input type="text" placeholder="C.C.*">
									</div>
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-4 large-4 columns">
												<span>Género*</span>
											</div>
											<div class="small-12 medium-4 large-4 columns">
												<input type="radio" name="genero" value="hombre">
												<label for="">Hombre</label>
											</div>
											<div class="small-12 medium-4 large-4 columns">
												<input type="radio" name="genero" value="mujer">
												<label for="">Mujer</label>
											</div>
										</div>
									</div>
								</div>
								<!-- fecha nacimiento -->
								<div class="subTitleInput">
									<p>Fecha de Nacimiento*</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-4 large-4 columns">
												<select name="mes" id="">
													<option value="" disabled>Mes</option>
												</select>
											</div>
											<div class="small-12 medium-4 large-4 columns">
												<select name="dia" id="">
													<option value="" disabled>Día</option>
												</select>
											</div>
											<div class="small-12 medium-4 large-4 columns">
												<select name="ano" id="">
													<option value="" disabled>Año</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<!-- Lugar de Nacimiento -->
								<div class="subTitleInput">
									<p>Lugar de Nacimiento*</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-6 large-6 columns">
												<select name="pais" id="">
													<option value="" disabled>Pais</option>
												</select>
											</div>
											<div class="small-12 medium-6 large-6 columns">
												<select name="departamento" id="">
													<option value="" disabled>Departamento</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<!-- Libreta Militar -->
								<div class="subTitleInput">
									<p>Libreta Militar*</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
												<div class="row">
													
													<div class="small-12 medium-6 large-3 columns">
														<input type="radio" name="genero" value="hombre">
														<label for="">Primera clase</label>
													</div>
													<div class="small-12 medium-6 large-3 columns">
														<input type="radio" name="genero" value="mujer">
														<label for="">Segunda clase</label>
													</div>
													<div class="small-12 medium-6 large-3 columns">
														<input type="text" placeholder="Número:289320202">
													</div>
													<div class="small-12 medium-6 large-3 columns">
														<select name="dm" id="">
															<option value="" disabled>DM</option>
														</select>
													</div>
												</div>
										</div>
									</div>
								</div>
								<!-- Contacto -->
								<div class="subTitleInput">
									<p>Contacto*</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<input type="text" placeholder="Correo: andres@ejemplo.com*">
											</div>
											<div class="small-12 medium-12 large-12 columns">
												<input type="text" placeholder="Celular">
											</div>
											<div class="small-12 medium-12 large-12 columns">
												<input type="text" placeholder="Teléfono">
											</div>
										</div>
									</div>
								</div>
								<!-- Ubicación -->
								<div class="subTitleInput">
									<p>Correspondencia*</p>
								</div>

								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<div class="row">
											<div class="small-12 medium-4 large-4 columns">
												<select name="pais" id="">
													<option value="" disabled>Pais</option>
												</select>
											</div>
											<div class="small-12 medium-4 large-4 columns">
												<select name="departamento" id="">
													<option value="" disabled>Departamento</option>
												</select>
											</div>
											<div class="small-12 medium-4 large-4 columns">
												<select name="unicipio" id="">
													<option value="" disabled>Municipio</option>
												</select>
											</div>

											<div class="small-12 medium-12 large-12 columns">
												<input type="text" placeholder="Dirección">
											</div>
										</div>
									</div>
								</div>
								

								<div class="small-12 medium-2 large-2 columns" align="center">&nbsp;</div>
								<div class="small-12 medium-4 large-4 columns" align="center">
									<a href="#" class="button_01">Volver</a>
								</div>
								<div class="small-12 medium-4 large-4 columns" align="center">
									<a href="registro_step2_precandidato.html" class="button_02">Siguiente</a>
								</div>
								<div class="small-12 medium-2 large-2 columns" align="center">&nbsp;</div>


								<!-- * * * * * * * * * * * * * *  -->
							</form>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- FIN INIT -->
	<!-- - - - - - - -->

	<!-- BOTTOM SCRIPTS -->
	<script src="script/foundation.min.js"></script>
	<script src="js/main.js"></script>
	<script>$(document).foundation();</script>

</body>
</html>