<?php $__env->startSection('title', 'Login-two'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <div class="col-xl-5"><img class="bg-img-cover bg-center" src="<?php echo e(asset('assets/images/login/3.jpg')); ?>" alt="looginpage"></div>
      <div class="col-xl-7 p-0">
         <div class="login-card">
            <div>
               <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/login.png')); ?>" alt="looginpage"><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt="looginpage"></a></div>
               <div class="login-main">
                  <form class="theme-form">
                     <h4><?php echo e(__('lang.Sign_in_to_account')); ?></h4>
                     <p><?php echo e(__('lang.enter_your_credential')); ?></p>
                     <div class="form-group">
                        <label class="col-form-label"><?php echo e(__('lang.email_or_phone')); ?></label>
                        <input class="form-control" name="email" type="email" required="" placeholder="Test@gmail.com">
                     </div>
                     <div class="form-group">
                        <label class="col-form-label"><?php echo e(__('lang.password')); ?></label>
                        <input class="form-control" type="password" name="password" required="" placeholder="*********">
                        <div class="show-hide"><span class="show"></span></div>
                     </div>
                     <div class="form-group mb-0">
                        <div class="checkbox p-0">
                           <input id="checkbox1" type="checkbox">
                           <label class="text-muted" for="checkbox1"><?php echo e(__('lang.remember_password')); ?></label>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit"><?php echo e(__('lang.sign_in')); ?></button>
                     </div>
                     <p class="mt-4 mb-0"><?php echo e(__('lang.create_account')); ?><a class="ms-2" href="<?php echo e(route('sign-up')); ?>"><?php echo e(__('lang.create_account')); ?></a></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.authentication.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Nabadat\resources\views/authentication/login.blade.php ENDPATH**/ ?>