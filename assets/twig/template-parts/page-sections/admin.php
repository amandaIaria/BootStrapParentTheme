<?php
	$layoutColorClasses;
?>
<div class="admin-layout <?php echo $layoutColorClasses; ?>">
	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<?php get_sidebar( 'admin' ); ?>
			</div>
			<div class="col-8">
			content
			</div>
		</div>
	</div>
</div>