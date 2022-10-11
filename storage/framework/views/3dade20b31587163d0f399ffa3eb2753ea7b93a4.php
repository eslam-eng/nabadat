<?php $__env->startSection('title', 'Validation Forms'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Country Form</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Form Controls</li>
<li class="breadcrumb-item active">Country Form</li>
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
					<form class="needs-validation" novalidate="" method="POST" action="<?php echo e(route('store.country')); ?>" >
                        <?php echo csrf_field(); ?>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01">Slug</label>
								<input name="slug" class="form-control" id="validationCustom01" type="text" placeholder="Slug" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
                            <div class="col-md-6 mb-4">
                                <label for="validationCustom01">ISO Code</label>
                                <input name="iso_code_2" class="form-control" id="validationCustom01" type="text" placeholder="ISO-Code" required="">
                                <div class="valid-feedback">Looks good!</div>
                            </div>
							<div class="col-md-6 mb-3">
								<label for="validationCustom02"> <?php echo e(__("arabic_title")); ?></label>
								<input name="title_ar" class="form-control" id="validationCustom02" type="text" placeholder="Arabic Title" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationCustom02"><?php echo e(__("english_title")); ?></label>
								<input name="title_en" class="form-control" id="validationCustom02" type="text" placeholder="English Title" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
                            <div class="mb-2">
                                <div class="col-form-label">Choose Currency</div>
                                <select name="currency_id" class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
                                    
                                    <option value="1">£EGP</option>
                                    <option value="2">$US</option>
                                    <option value="3">€EUR</option>
                                    <option value="4">﷼SAR</option>
                                    
                                </select>
                            </div>
						</div>
						<button class="btn btn-primary" type="submit">ADD Country</button>
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /code/Nabadat/resources/views/locations/country/form.blade.php ENDPATH**/ ?>