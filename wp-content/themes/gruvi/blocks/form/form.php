<?php
$form = get_field('form_code');
?>
<?php if ($form): ?>
<div class="form animate">
	<div class="container">
		<?php echo $form; ?>
		<?php if ( is_admin() ) { echo '<div class="form-admin">Form will show here</div>';} ?>
	</div>
</div>
<?php endif; ?>
