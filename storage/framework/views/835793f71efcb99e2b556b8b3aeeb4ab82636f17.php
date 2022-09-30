<?php $__env->startSection('title', 'Sticky'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/sticky.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Sticky</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Bonus Ui</li>
<li class="breadcrumb-item active">Sticky</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row sticky-header-main">
	  <div class="col-sm-12">
	    <div class="card">
	      <div class="card-header">
	        <h5>Sticky Note <a class="btn btn-primary pull-right m-l-10" id="add_new" href="javascript:;">Add New Note</a></h5>
	      </div>
	      <div class="card-body">
	        <div class="sticky-note" id="board"></div>
	      </div>
	    </div>
	  </div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/jquery.ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sticky/sticky.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webiotspc/Desktop/hetvi/laravel/Cuba/resources/views/bonus-ui/sticky.blade.php ENDPATH**/ ?>