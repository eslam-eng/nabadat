<?php $__env->startSection('title', 'Validation Forms'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Validation Forms</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Form Controls</li>
<li class="breadcrumb-item active">Validation Forms</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>ADD COUNTRY</h5>
				</div>
				<div class="card-body">
					<form class="needs-validation" novalidate="" method="POST" action="/file/upload" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">File</label>
								<input name="file" class="form-control" id="validationCustom01" type="file" placeholder="Slug" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
							
							
						</div>
						
						
						<button class="btn btn-primary" type="submit">Submit form</button>
					</form>
                    <?php $fileName = 'xCiq4XdCg6yZA4YamntFxVivsZp7JUB5VmkVy5TB.jpg'; ?>
                    <form class="needs-validation" novalidate="" method="POST" action="<?php echo e(url('file/delete/')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">File</label>
								<input name="path" class="form-control" id="validationCustom01" type="text" placeholder="Slug" required="">
								<div class="valid-feedback">Looks good!</div>
                                <input name="fileName" class="form-control" id="validationCustom01" type="text" placeholder="Slug" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>

						<button class="btn btn-primary" type="submit">Submit form</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /code/Nabadat/resources/views/file.blade.php ENDPATH**/ ?>