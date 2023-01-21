<?php $__env->startSection('content'); ?>
	<div class="container">
		<form action="<?php echo e(route('post.store')); ?>" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group has-feedback<?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
				<label for="">Title</label>
				<input type="text" class="form-control" name="title" placeholder="Post title" value="<?php echo e(old('title')); ?>">

				<?php if($errors->has('title')): ?>
					<span class="help-block">
						<p><?php echo e($errors->first('title')); ?></p>
					</span>
				<?php endif; ?>
			</div>

			<div class="form-group">
				<label for="">Category</label>
				<select name="category_id" id="" class="form-control">
					<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($category->id); ?>">
                       	<?php echo e($category->name); ?>

                       </option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>

			<div class="form-group has-feedback<?php echo e($errors->has('content') ? 'has-error' : ''); ?>">
				<label for="">Content</label>
				<textarea name="content" rows="5" class="form-control" placeholder="Post content" value="<?php echo e(old('content')); ?>"></textarea>
				<?php if($errors->has('content')): ?>
					<span class="help-block">
						<p><?php echo e($errors->first('content')); ?></p>
					</span>
				<?php endif; ?>
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>
		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>