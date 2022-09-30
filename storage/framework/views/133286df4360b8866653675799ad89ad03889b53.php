<?php $__env->startSection('title', 'Time Picker'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/timepicker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Time Picker</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Form Widgets</li>
<li class="breadcrumb-item active">Time Picker</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5>Default:</h5>
				</div>
				<div class="card-body">
					<form class="theme-form">
						<div class="mb-3 mb-0">
							<div class="input-group clockpicker">
								<input class="form-control" type="text" value="09:30"><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5>Align the arrow to top, auto close:</h5>
				</div>
				<div class="card-body">
					<form class="theme-form">
						<div class="mb-3 mb-0">
							<div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true">
								<input class="form-control" type="text" value="13:14"><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5>Set options in javascript, instead of data-* :</h5>
				</div>
				<div class="card-body">
					<form class="theme-form">
						<div class="mb-3 mb-0">
							<div class="input-group clockpicker" data-placement="top" data-align="left" data-donetext="Done">
								<input class="form-control" type="text" value="18:00"><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5>Set default value, input without addon:</h5>
				</div>
				<div class="card-body">
					<div class="clearfix">
						<form class="theme-form">
							<div class="mb-3 mb-0">
								<input class="form-control" id="single-input" type="text" value="" placeholder="Addon">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/time-picker/jquery-clockpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/time-picker/highlight.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/time-picker/clockpicker.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webiotspc/Desktop/hetvi/laravel/Cuba/resources/views/forms/time-picker.blade.php ENDPATH**/ ?>