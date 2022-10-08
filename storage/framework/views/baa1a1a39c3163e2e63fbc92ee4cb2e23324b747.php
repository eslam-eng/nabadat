<?php $__env->startSection('title', 'Validation Forms'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>City Form</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Form Controls</li>
<li class="breadcrumb-item active">City Form</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>ADD City</h5>
				</div>
				<div class="card-body">
					<form class="needs-validation" novalidate="" method="POST" action="/store/city" >
                        <?php echo csrf_field(); ?>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Slug</label>
								<input name="slug" class="form-control" id="validationCustom01" type="text" placeholder="Slug" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationCustom02"> Title</label>
								<input name="title" class="form-control" id="validationCustom02" type="text" placeholder="Title" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
                            <div class="col-md-4 mb-3">
								<label for="validationCustom01">ISO Code</label>
								<input name="iso_code_2" class="form-control" id="validationCustom01" type="text" placeholder="ISO-Code" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
                            
                            <div class="mb-2">
                                <div class="col-form-label">Choose Governorate</div>
                                <select name="parent_id" class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
                                    <?php $__currentLoopData = $governates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $governate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($governate->id); ?>"><?php echo e($governate->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
						<button class="btn btn-primary" type="submit">ADD City</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /code/Nabadat/resources/views/locations/city/form.blade.php ENDPATH**/ ?>