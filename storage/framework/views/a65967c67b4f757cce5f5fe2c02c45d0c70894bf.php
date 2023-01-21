<?php if(session('success')): ?>
	<div class="alert alert-success">
		<?php echo e(session('success')); ?>

	</div>
<?php endif; ?>

<?php if(session('info')): ?>
	<div class="alert alert-info">
		<?php echo e(session('info')); ?>

	</div>
<?php endif; ?>

<?php if(session('danger')): ?>
	<div class="alert alert-danger">
		<?php echo e(session('danger')); ?>

	</div>
<?php endif; ?>