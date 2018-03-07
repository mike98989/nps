    

    <!--   Core JS Files   -->
    <script src="<?php echo URL;?>public/js/hr_js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo URL;?>public/js/hr_js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo URL;?>public/js/hr_js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo URL;?>public/js/hr_js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo URL;?>public/js/hr_js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo URL;?>public/js/hr_js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo URL;?>public/js/hr_js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>NPS - Recruitment Dashboard</b> - a beautiful User Interface for your easy process flow."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>


<!----LIBRARIES-->
<script src="<?php echo URL; ?>public/angular/angular.js"></script>
<script src="<?php echo URL; ?>public/angular/angular-route.js"></script>
<script src="<?php echo URL; ?>public/js/dirPagination.js"></script>
<script src="<?php echo URL; ?>public/angular/angular-sanitize.js"></script>
<script src="<?php echo URL; ?>public/angular/angular-cookies.js"></script>

<!----MODULE-->
<script src="<?php echo URL.'public/js/controllers/module.js';?>"></script>

<!--- CONTROLLERS---->
<?php if(isset($js)){foreach($js as $jsfile){
echo "<script src=".URL.$jsfile."></script>";
}
}
?>
<script src="<?php echo URL.'public/js/controllers/directives.js';?>"></script>

</html>
