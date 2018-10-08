@extends('dashboard.admin.master')
@section('title')
ALL STUDENT
@endsection
@section('cssPlgin')

@endsection

@section('jsPlgin')

@endsection

@section('mainBody')



<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<h5 class="page-title"><i class="fa fa-users"></i>ALL STUDENT</h5>
			<div class="section-divider"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<div class="col-lg-12">
				<div class="dash-item first-dash-item">
					<h6 class="item-title"><i class="fa fa-user"></i>STUDENTS</h6>
					<div class="inner-item">
						<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th><i class="fa fa-user"></i>NAME</th>
									<th><i class="fa fa-id-card"></i>REG #</th>
									<th><i class="fa fa-book"></i>CLASS</th>
									<th><i class="fa fa-cogs"></i>SECTION</th>
									<th><i class="fa fa-puzzle-piece"></i>ROLL #</th>
									<th><i class="fa fa-phone"></i>CONTACT #</th>
									<th><i class="fa fa-envelope-o"></i>EMAIL</th>
									
									<th><i class="fa fa-tasks"></i>ACTION</th>
								</tr>
							</thead>
							<tbody>
							@foreach($allStudentS as $student)
								<tr>
									<td>{{ $student->first_name.' '.$student->last_name }}</td>
									<td>{{ $student->registration }}</td>
									<td>{{ $student->class_name }}</td>
									<td>{{ $student->section_name }}</td>
									<td>{{ $student->roll }}</td>
									<td>{{ $student->phone }}</td>
									<td>{{ $student->email }}</td>
									<td class="action-link">
										<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal{{ $student->id }}"><i class="fa fa-edit"></i></a>
										<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal{{ $student->id }}"><i class="fa fa-remove"></i></a>
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

@foreach($allStudentS as $student)
<div id="deleteDetailModal{{ $student->id }}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE STUDENT</h4>
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
@foreach($allStudentS as $student)
<div id="editDetailModal{{ $student->id }}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT STUDENT DETAILS</h4>
			</div>
			<div class="modal-body dash-form">
				<div class="col-sm-3">
					<label class="clear-top-margin"><i class="fa fa-user"></i>FIRST NAME</label>
					<input type="text" name="first_name" placeholder="First Name" value="{{ $student->first_name }}" readonly />
				</div>
				<div class="col-sm-3">
					<label class="clear-top-margin"><i class="fa fa-user"></i>LAST NAME</label>
					<input type="text" name="last_name" placeholder="Last Name" value="{{ $student->last_name }}" readonly />
				</div>
				<div class="col-sm-3">
					<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
					<input type="text" placeholder="Standard" value="{{ $student->class_name }}" readonly />
				</div>
				<div class="col-sm-3">
					<label><i class="fa fa-cogs"></i>SECTION</label>
					<input type="text" placeholder="Section" value="{{ $student->section_name }}" readonly />
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-3">
					<label><i class="fa fa-puzzle-piece"></i>REGISTRATION #</label>
					<input type="text" placeholder="Roll Number" value="{{ $student->registration }}" readonly />
				</div>
				<div class="col-sm-3">
					<label><i class="fa fa-puzzle-piece"></i>ROLL #</label>
					<input type="text" placeholder="Roll Number" value="{{ $student->roll }}" readonly />
				</div>
				<div class="col-sm-3">
					<label><i class="fa fa-phone"></i>CONTACT #</label>
					<input type="text" name="phone" placeholder="Contact Number" value="{{ $student->phone }}" readonly />
				</div>
				<div class="col-sm-3">
					<label><i class="fa fa-envelope-o"></i>EMAIL</label>
					<input type="text" name="email" placeholder="Email" value="{{ $student->email }}" readonly />
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="modal-footer">
				<div class="table-action-box">
					<a href="#" class="save"><i class="fa fa-edit"></i>EDIT</a>
					<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection