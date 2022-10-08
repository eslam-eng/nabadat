@extends('layouts.simple.master')
@section('title', 'Validation Forms')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/main.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/datatable/style/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/datatable/style/jquery.dataTables.min.css')}}">


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('style')

@endsection

@section('breadcrumb-title')
<h3>governorate Form</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Form Controls</li>
<li class="breadcrumb-item active">governorate Form</li>
@endsection

@section('content')
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
                            @foreach ($nodes as $node)
                                @php $children = $node->children()->get(); @endphp
                                @foreach ($children as $child)
                                <tr>
                                    <td>{{$child->id}}</td>
                                    <td>{{$child->slug}}</td>
                                    <td>{{$child->title}}</td>
                                    <td>{{$child->currency_id}}</td>
                                    <td>{{$child->iso_code_2}}</td>
                                    <td>
                                    <a href="{{ route('edit.governorate',['id' => $child->id]) }}" >
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>

                                    <a href="{{ route('show.governorate',['id' => $child->id]) }}" >
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <form class="delete_form" id="myformarticle{{$child->id}}"  action="{{ route('delete.governorate',['id' => $child->id])}}" method="post">
                                        {{csrf_field()}}<input type="hidden" name="_method" value="DELETE" /><input type="hidden" name="action_type" value="delete" />
                                        <button type="submit" class="delete_btnn btn btn-primary btn-xs" name="Delete"><i class="fa fa-trash"></i></button>
                                    </form>

                                    </td>
                                </tr>
                                @endforeach
                            @endforeach
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
 </div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
    $('table.display').DataTable();
});
</script>
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/datatable/js/jquery-3.5.1.js')}}"></script>
<script src="{{asset('assets/datatable/js/jquery.dataTables.min.js')}}"></script>

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
@endsection
