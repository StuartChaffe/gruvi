<?php
$form = get_field('form_code');
?>
<?php if ($form): ?>
<div class="form animate">
	<div class="container">
		<?php echo $form; ?>
	</div>
</div>
<?php endif; ?>
