<a href="<?php echo e(route('show.city',['id' => $location->id])); ?>" >
    <i class="fa fa-eye"></i>
</a>

<a href="<?php echo e(route('edit.city',['id' => $location->id])); ?>" >
    <i class="fa fa-pencil-square-o"></i>
</a>


<form class="delete_form" id="myformarticle<?php echo e($location->id); ?>"  action="<?php echo e(route('delete.city',['id' => $location->id])); ?>" method="post">
    <?php echo e(csrf_field()); ?><input type="hidden" name="_method" value="DELETE" /><input type="hidden" name="action_type" value="delete" />
    <a type="submit" class="delete_btnn" name="Delete">
        <i class="fa fa-trash"></i>
    </a>
</form>



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
<?php /**PATH /code/Nabadat/resources/views/locations/city/action.blade.php ENDPATH**/ ?>