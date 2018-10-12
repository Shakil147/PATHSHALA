@extends('dashboard.admin.master')
@section('title')
ALL TEACHER
@endsection
@section('cssPlgin')

@endsection

@section('jsPlgin')

@endsection

@section('mainBody')

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<h5 class="page-title"><i class="fa fa-user-secret"></i>ALL TEACHER</h5>
			<div class="section-divider"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<div class="col-lg-12">
				<div class="dash-item first-dash-item">
					<h6 class="item-title"><i class="fa fa-user"></i>TEACHERS</h6>
					<div class="inner-item">
						<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th><i class="fa fa-user"></i>NAME</th>
									<th><i class="fa fa-graduation-cap"></i>HIGHEST DEGREE</th>
									<th><i class="fa fa-building"></i>UNIVERSITY</th>
									<th><i class="fa fa-calendar"></i>YEAR PASSED</th>
									<th><i class="fa fa-puzzle-piece"></i>CGPA</th>
									<th><i class="fa fa-phone"></i>CONTACT #</th>
									<th><i class="fa fa-envelope-o"></i>EMAIL</th>
									<th><i class="fa fa-tasks"></i>ACTION</th>
								</tr>
							</thead>

							<tbody>
								@foreach($allTeacher as $teacher)
								<tr>
									<td>{{ $teacher->first_name.' '.$teacher->last_name }}</td>
									<td>{{ $teacher->degree }}</td>
									<td>{{ $teacher->university }}</td>
									<td>{{ $teacher->passing_year }}</td>									<td>{{ $teacher->cgpa }}</td>
									<td>{{ $teacher->phone }}</td>
									<td>{{ $teacher->email }}</td>
									<td class="action-link">
										<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal{{ $teacher->id }}"><i class="fa fa-edit"></i></a>
										<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal{{ $teacher->id }}"><i class="fa fa-remove"></i></a>
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
@foreach($allTeacher as $teacher)
<div id="deleteDetailModal{{ $teacher->id }}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE TEACHER</h4>
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
@foreach($allTeacher as $teacher)
<div id="editDetailModal{{ $teacher->id }}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT TEACHER DETAILS</h4>
			</div>
			<div class="modal-body dash-form">
				<div class="col-sm-3">
					<label class="clear-top-margin"><i class="fa fa-user"></i>FIRST NAME</label>
					<input readonly required name=""value="{{ $teacher->first_name }}" type="text" placeholder="First Name" value="John" />
				</div>
				<div class="col-sm-3">
					<label class="clear-top-margin"><i class="fa fa-user"></i>LAST NAME</label>
					<input readonly required name="last_name" value="{{ $teacher->last_name }}" type="text" placeholder="Last Name" value="Doe" />
				</div>
				<div class="col-sm-3">
					<label class="clear-top-margin"><i class="fa fa-book"></i>DEGREE</label>
					<input readonly required name="degree" value="{{ $teacher->degree }}" type="text" placeholder="Standard" value="5 STD" />
				</div>
				<div class="col-sm-3">
					<label><i class="fa fa-cogs"></i>UNIVERSITY</label>
					<input readonly required name="university" value="{{ $teacher->university }}" type="text" placeholder="Section" value="PTH05A" />
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-3">
					<label><i class="fa fa-puzzle-piece"></i>PASSING YEAR #</label>
					<input readonly required name="passing_year" value="{{ $teacher->passing_year }}" type="text" placeholder="Roll Number" value="Fidler" />
				</div>
				<div class="col-sm-3">
					<label><i class="fa fa-puzzle-piece"></i>ROLL #</label>
					<input readonly required name="cgpa" value={{ $teacher->cgpa }}" type="text" placeholder="Roll Number" value="Fidler" />
				</div>
				<div class="col-sm-3">
					<label><i class="fa fa-phone"></i>CONTACT #</label>
					<input readonly required name="phone" value="{{ $teacher->phone }}" type="text" placeholder="Contact Number" value="1234567890" />
				</div>
				<div class="col-sm-3">
					<label><i class="fa fa-envelope-o"></i>EMAIL</label>
					<input readonly required name="email" value="{{ $teacher->email }}" type="text" placeholder="Email" value="john@gmail.com" />
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="modal-footer">
				<div class="table-action-box">
					<a href="#" class="save"><i class="fa fa-check"></i>SAVE</a>
					<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach

@endsection