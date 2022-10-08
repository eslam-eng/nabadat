<?php $__env->startSection('title', 'Validation Forms'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/main.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/datatable/style/style.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/datatable/style/jquery.dataTables.min.css')); ?>">


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
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
					<table id="" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Slug</th>
                                <th>Title</th>
                                <th>Currency</th>
                                <th>ISO Code</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($city->id); ?></td>
                                <td><?php echo e($city->slug); ?></td>
                                <td><?php echo e($city->title); ?></td>
                                <td><?php echo e($city->currency_id); ?></td>
                                <td><?php echo e($city->iso_code_2); ?></td>
                                <td>

                                <a href="<?php echo e(route('edit.city',['id' => $city->id])); ?>" >
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>

                                <a href="<?php echo e(route('show.city',['id' => $city->id])); ?>" >
                                    <i class="fa fa-eye"></i>
                                </a>
                                <form class="delete_form" id="myformarticle<?php echo e($city->id); ?>"  action="<?php echo e(route('delete.city',['id' => $city->id])); ?>" method="post">
                                    <?php echo e(csrf_field()); ?><input type="hidden" name="_method" value="DELETE" /><input type="hidden" name="action_type" value="delete" />
                                    <button type="submit" class="delete_btnn label btn btn-primary btn-xs" name="Delete"><i class="fa fa-trash"></i></button>

                                </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Slug</th>
                                <th>Title</th>
                                <th>Currency</th>
                                <th>ISO Code</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function () {
    $('table.display').DataTable();
});
</script>
<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/datatable/js/jquery-3.5.1.js')); ?>"></script>
<script src="<?php echo e(asset('assets/datatable/js/jquery.dataTables.min.js')); ?>"></script>

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">


    $(".delete_btnn").click(function (event) {
        var form_id = $( this ).parent().attr('id');
      event.preventDefault();
    swal.fire({
      title: "هل انت متاكد",
      text: "تريد حذف الرساله",
      icon: "warning",
      buttons: [
            'رفض',
            'نعم موافق'
          ],
      dangerMode: true,
    }).then(function(isConfirm) {
          if (isConfirm) {
          $("#" + form_id).submit();
          } else {
            swal("رفض", "تم الغاء طلب الحذف :)", "error");
          }
        });


    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /code/Nabadat/resources/views/locations/city/index.blade.php ENDPATH**/ ?>