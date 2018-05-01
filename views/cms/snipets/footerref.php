<!-- jQuery 2.2.3 -->
<script src="<?php echo URL; ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo URL; ?>public/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo URL; ?>public/plugins/select2/select2.full.min.js"></script>



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





</body>
</html>

