<?php $__env->startSection('title', 'Product Page'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/rating.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Product Page</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Country</li>
<li class="breadcrumb-item active">Coiuntry Details</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div>
      <div class="row product-page-main p-0">

         <div>
            <div class="card">
               <div class="card-body">
                  <div class="product-page-details">
                     <h3><?php echo e($country->slug); ?></h3>
                  </div>
                  <ul class="product-color">
                     <li class="bg-primary"></li>
                     <li class="bg-secondary"></li>
                     <li class="bg-success"></li>
                     <li class="bg-info"></li>
                     <li class="bg-warning"></li>
                  </ul>
                  <hr>
                  <p>Description</p>
                  <hr>
                  <div>
                     <table class="product-page-width">
                        <tbody>
                           <tr>
                              <td> <b>Slug &nbsp;&nbsp;&nbsp;:</b></td>
                              <td><?php echo e($country->slug); ?></td>
                           </tr>
                           <tr>
                              <td> <b>Title &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                              <td class="txt-success"><?php echo e($country->title); ?></td>
                           </tr>
                           <tr>
                              <td> <b>ISO-Code-2 &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                              <td><?php echo e($country->iso_code_2); ?></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-md-6">
                        <h6 class="product-title">share it</h6>
                     </div>
                     <div class="col-md-6">
                        <div class="product-icon">
                           <ul class="product-social">
                              <li class="d-inline-block"><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li class="d-inline-block"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li class="d-inline-block"><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li class="d-inline-block"><a href="#"><i class="fa fa-instagram"></i></a></li>
                              <li class="d-inline-block"><a href="#"><i class="fa fa-rss"></i></a></li>
                           </ul>
                           <form class="d-inline-block f-right"></form>
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="m-t-15">
                     <button class="btn btn-primary m-r-10" type="button" title=""> <i class="fa fa-shopping-basket me-1"></i>Add To Cart</button>
                     <button class="btn btn-success m-r-10" type="button" title=""> <i class="fa fa-shopping-cart me-1"></i>Buy Now</button><a class="btn btn-secondary" href="#"> <i class="fa fa-heart me-1"></i>Add To WishList</a>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/ecommerce.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /code/Nabadat/resources/views/locations/country/show.blade.php ENDPATH**/ ?>