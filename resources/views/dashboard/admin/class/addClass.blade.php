@extends('dashboard.admin.master')
@section('title')
ADD CALSSES
@endsection
@section('cssPlgin')

@endsection

@section('jsPlgin')
<!-- <script type="text/javascript">	
      $(function () {

        $('form').on('submit', function (e) {
        	console.log("i am hear");
          e.preventDefault();

         $.ajax({
            type: 'post',
            url: '{!!URL::to('add-class')!!}',
            data: $('form').serialize(),
            success: function (data) {
            	console.log("i am hear");
              //alert('form was submitted');
              console.log(data);
              	swal({
				  title: "success",
				  text: "Some Thing Wrong!",
				  icon: "success",
				  timer: 3000,
				});
            }
          });

        });

      });
</script> -->
@endsection

@section('mainBody')

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<h5 class="page-title"><i class="fa fa-sliders"></i>ALL CALSSES</h5>
			<div class="section-divider"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<div class="col-sm-4">
				<div class="dash-item first-dash-item">
					<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD CLASS</h6>
					<div class="inner-item">
						{!! Form::open(['route' => 'class.add','method'=>'post']) !!}
						<div class="dash-form">
							<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
							<input type="text" name="class_name" placeholder="5 STD" />
							<label><i class="fa fa-code"></i>CLASS CODE</label>
							<input type="text" name="class_code" placeholder="PTH05" />
							<label><i class="fa fa-user-secret"></i>CLASS TEACHER</label>
							<select name="teacher_id">
								<option>-- Select --</option>
								@foreach($teachers as $teacher)
								<option value="{{ $teacher->id }}">{{ $teacher->first_name.' '.$teacher->last_name }}</option>
								@endforeach
							</select>
							<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
							<textarea name="description" placeholder="Enter Description Here"></textarea>
							<div>
								<button type="submit"><i class="fa fa-paper-plane"></i> CREATE</button>
							</div>
						</div>
						{!! Form::close() !!}
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="dash-item first-dash-item">
					<h6 class="item-title"><i class="fa fa-sliders"></i>ALL CLASSES</h6>
					<div class="inner-item">
						<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th><i class="fa fa-book"></i>CLASS</th>
									<th><i class="fa fa-code"></i>CLASS CODE</th>
									<th><i class="fa fa-user-secret"></i>CLASS TEACHER</th>
									<th><i class="fa fa-info-circle"></i>DESCRIPTION</th>
									<th><i class="fa fa-sliders"></i>ACTION</th>
								</tr>
							</thead>
							<tbody>
								@foreach($allClasses as $class)
								<tr>
									<td>{{ $class->class_name }}</td>
									<td>{{ $class->class_code }}</td>
									<td>{{ $class->first_name.' '.$class->last_name }}</td>
									<td>{{ $class->description }}</td>
									<td class="action-link">
										<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal{{ $class->id }}"><i class="fa fa-edit"></i></a>
										<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal{{ $class->id }}"><i class="fa fa-remove"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			
	<!-- Delete Modal -->
	@foreach($allClasses as $class)
	<div id="deleteDetailModal{{ $class->id }}" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE CLASS</h4>
				</div>
				<div class="modal-body">
					<div class="table-action-box">
						<a href="#" class="save"><i class="fa fa-check"></i>YES</a>
						<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	
	<!--Edit details modal-->
	@foreach($allClasses as $class)
<div id="editDetailModal{{ $class->id }}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT CLASS DETAILS</h4>
			</div>
			{!! Form::open(['route' => 'class.update','method'=>'post']) !!}
			<div class="modal-body dash-form">
				<div class="col-sm-4">
					<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
					<input type="text" placeholder="CLASS" name="class_name" value="{{ $class->class_name }}" />
					<input type="hidden" name="id" value="{{ $class->id }}" />
				</div>
				<div class="col-sm-4">
					<label class="clear-top-margin"><i class="fa fa-code"></i>CLASS CODE</label>
					<input type="text" name="class_code" placeholder="CLASS CODE" value="{{ $class->class_code }}" />
				</div>
				<div class="col-sm-4">
					<label class="clear-top-margin"><i class="fa fa-user-secret"></i>CLASS TEACHER</label>
					<select name="teacher_id">
						<option>-- Select --</option>
						@foreach($teachers as $teacher)
						<option value="{{ $teacher->id }}"
						 @if($teacher->id == $class->teacher_id) selected @endif > {{ $teacher->first_name.' '.$teacher->last_name }}</option>
						@endforeach
					</select>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-12">
					<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
					<textarea placeholder="Enter Description Here" name="description" >{{ $class->description }}</textarea>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="modal-footer">
				<div class="table-action-box">
					<button type="submit"><i class="fa fa-check"></i>SAVE</a></button>
					<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endforeach
@endsection