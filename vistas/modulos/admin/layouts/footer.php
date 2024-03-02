
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vistas/dist/admin/vendor/global/global.min.js"></script>
	<script src="vistas/dist/admin/vendor/chart.vistas/dist/admin/js/Chart.bundle.min.js"></script>
	<script src="vistas/dist/admin/vendor/jquery-nice-select/vistas/dist/admin/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vistas/dist/admin/vendor/apexchart/apexchart.js"></script>
	
	<script src="vistas/dist/admin/vendor/chart.vistas/dist/admin/js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vistas/dist/admin/vendor/peity/jquery.peity.min.js"></script>

	<!-- Datatable -->
    <script src="vistas/dist/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vistas/dist/admin/js/plugins-init/datatables.init.js"></script>

	<!-- Dashboard 1 -->
	<script src="vistas/dist/admin/js/dashboard/dashboard-1.js"></script>
	
	<script src="vistas/dist/admin/vendor/owl-carousel/owl.carousel.js"></script>
	
    <script src="vistas/dist/admin/js/custom.min.js"></script>
	<script src="vistas/dist/admin/js/dlabnav-init.js"></script>
	<script src="vistas/dist/admin/js/demo.js"></script>
    <script src="vistas/dist/admin/js/styleSwitcher.js"></script>
	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		
	</script>

	<!-- SCRIPT DE MODULOS -->

	<script src="vistas/js/usuarios.js"></script>
	<script src="vistas/js/redes.sociales.js"></script>
	<script src="vistas/js/redes.contacto.js"></script>
	<script src="vistas/js/perfil.js"></script>

</body>
</html>