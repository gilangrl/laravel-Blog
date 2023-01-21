<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row" >
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
	                <div class="panel-heading">Edit Post</div>

	                <div class="panel-body">
	                    <form action="<?php echo e(route('post.update', $post)); ?>" method="post">
							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('PATCH')); ?>

							<div class="form-group">
								<label for="">Title</label>
								<input type="text" class="form-control" name="title" placeholder="Post title" value="<?php echo e($post->title); ?>">
							</div>

							<div class="form-group">
								<label for="">Category</label>
								<select name="category_id" id="" class="form-control">
									<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                       <option value="<?php echo e($category->id); ?>" 
				                       		<?php if($category->id === $post->category_id): ?>
				                       			selected
				                       		<?php endif; ?>
				                       	>
				                       	<?php echo e($category->name); ?>

				                       </option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>

							<div class="form-group">
								<label for="">Content</label>
								<textarea name="content" rows="5" class="form-control" placeholder="Post content"><?php echo e($post->content); ?>

								</textarea>
							</div>

							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Save">
							</div>
						</form>
	                </div>
	            </div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>