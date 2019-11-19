<div class="sidebar-design col-lg-3 col-md-4 col-sm-4 col-xs-12">
	<?php 

	if(!is_active_sidebar('sidebar-1')){
		return ;
	}

	dynamic_sidebar('sidebar-1') ;

	?>
</div>