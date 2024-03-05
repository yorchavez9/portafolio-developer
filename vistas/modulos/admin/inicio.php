<?php
/* TOTAL DE MODULOS */
$item = null;
$valor = null;

$proyectos = ControladorProyecto::ctrMostrarProyecto($item, $valor);

$eduExpe = ControladorEduExpe::ctrMostrarEduExpe($item, $valor);

$contactoMensaje = ControladorRedesContacto::ctrMostrarRedesContacto($item, $valor);

$totalProyecto = count($proyectos);

$totalEducacion = 0;
foreach ($eduExpe as $key => $value) {
	if ($value["tipo"] == "educacion") {
		$totalEducacion++;
	}
}

$totalExperiencia = 0;
foreach ($eduExpe as $key => $value) {
	if ($value["tipo"] == "experiencia") {
		$totalExperiencia++;
	}
}

$totalMensajeContacto = count($contactoMensaje);



?>

<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="row">

					<div class="col-md-12">
						<div class="row">


							<div class="col-md-12">
								<div class="row">

									<!-- Total de proyectos -->
									<div class="col-md-3">
										<div class="card">
											<div class="card-body d-flex px-4 pb-0 justify-content-between">
												<div>
													<h4 class="fs-18 font-w600 mb-4 text-nowrap">Total proyectos</h4>
													<div class="d-flex align-items-center">
														<h2 class="fs-32 font-w700 mb-0"><?php echo $totalProyecto ?></h2>
														<span class="d-block ms-4">
															<svg width="21" height="11" viewbox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z" fill="#09BD3C"></path>
															</svg>
															<small class="d-block fs-16 font-w400 text-success">+0,2%</small>
														</span>
													</div>
												</div>
												<div id="columnChart"></div>
											</div>
										</div>
									</div>

									<!-- Total de educación -->
									<div class="col-md-3">
										<div class="card">
											<div class="card-body px-4 pb-0">
												<h4 class="fs-18 font-w600 mb-2 text-nowrap">Total Mensaje</h4>
												<div class="d-flex align-items-end mt-2 mb-2 justify-content-between">
													<h3 class="mb-0 fw-bold"><?php echo $totalMensajeContacto ?></h3>
												</div>
												<div class="progress default-progress">
													<div class="progress-bar bg-gradient1 progress-animated" style="width: 5%; height:10px;" role="progressbar">
														<span class="sr-only">5% Complete</span>
													</div>
												</div>

											</div>
										</div>
									</div>

									<!-- Total de experiencia -->
									<div class="col-md-3">
										<div class="card">
											<div class="card-body d-flex px-4  justify-content-between">
												<div>
													<div class="">
														<h2 class="fs-32 font-w700"><?php echo $totalEducacion ?></h2>
														<span class="fs-18 font-w500 d-block">Total educación</span>
														<span class="d-block fs-16 font-w400"><small class="text-danger">-2%</small></span>
													</div>
												</div>
												<div id="NewCustomers"></div>
											</div>
										</div>
									</div>

									<!-- Total de mensaje de contacto -->
									<div class="col-md-3">
										<div class="card">
											<div class="card-body d-flex px-4  justify-content-between">
												<div>
													<div class="">
														<h2 class="fs-32 font-w700"><?php echo $totalExperiencia ?></h2>
														<span class="fs-18 font-w500 d-block">Total experiencia</span>
														<span class="d-block fs-16 font-w400"><small class="text-success">-2%</small></span>
													</div>
												</div>
												<div id="NewCustomers1"></div>
											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title fw-bold">Visitas al portafolio</h4>
											</div>
											<div class="card-body">
												<canvas id="barChart_1"></canvas>
											</div>
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title fw-bold">Estadística del perfil</h4>
											</div>
											<div class="card-body">
												<div class="chart-point">
													<div class="check-point-area">
														<canvas id="doughnut_chart"></canvas>
													</div>
													<ul class="chart-point-list">
														<li><i class="fa fa-circle text-primary me-1"></i> 40% proyectos</li>
														<li><i class="fa fa-circle text-success me-1"></i> 35% experiencia</li>
														<li><i class="fa fa-circle text-warning me-1"></i> 25% educación</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>