@extends('dashboard.admin.master')
@section('title')
ALL SUBJECTS
@endsection
@section('cssPlgin')

@endsection

@section('jsPlgin')

@endsection

@section('mainBody')
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-cogs"></i>ALL SUBJECTS</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<div class="col-sm-4">
					<div class="dash-item first-dash-item">
						<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD SUBJECT</h6>
						<div class="inner-item">
							{!! Form::open(['route' => 'subject.add','method'=>'post']) !!}
							<div class="dash-form">
								<label class="clear-top-margin"><i class="fa fa-book"></i>NAME</label>
								<input type="text" name="subject_name" placeholder="Basic Mathematics" required />

								<label><i class="fa fa-code"></i>SUBJECT CODE</label>
								<input type="text" name="subject_code" placeholder="MTH101" required />

								<label><i class="fa fa-code"></i>CLASS</label>
								<select name="label_id" required>
									<option disabled>-- Select --</option>
									@foreach($allClasses as $class)
									<option value="{{ $class->id }}">{{ $class->class_name }}</option>
									@endforeach
								</select>
								<label><i class="fa fa-code"></i>SUBJECT TYPE</label>								
								<select name="type">
									<option>-- Select --</option>
									<option value="COMMON">COMMON</option>
									<option value="COMPULSORY">COMPULSORY</option>
									<option value="OPTONAL">OPTONAL</option>
								</select>
								<label><i class="fa fa-code"></i>FOR HOW?</label>								
								<select name="group">
									<option>-- Select --</option>
									<option value="ALL">ALL</option>
									<option value="SCINCE">SCINCE</option>
									<option value="ARTS">ARTS</option>
									<option value="COMMARTS">COMMARTS</option>
								</select>
								<label><i class="fa fa-code"></i>TEACHER</label>
								<select name="teacher_id" required >
									<option disabled>-- Select --</option>
									@foreach($teachers as $teacher)
									<option value="{{ $teacher->id }}">{{ $teacher->first_name.' '.$teacher->last_name }}</option>
									@endforeach
								</select>
								<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
								<textarea  name="description" placeholder="Enter Description Here"></textarea>
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
						<h6 class="item-title"><i class="fa fa-sliders"></i>ALL SUBJECTS</h6>
						<div class="inner-item">
							<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th><i class="fa fa-book"></i>NAME</th>
										<th><i class="fa fa-code"></i>CODE</th>
										<th><i class="fa fa-cogs"></i>CLASS</th>
										<th><i class="fa fa-user-secret"></i>TEACHER</th>
										<th><i class="fa fa-info-circle"></i>DESCRIPTION</th>
										<th><i class="fa fa-sliders"></i>ACTION</th>
									</tr>
								</thead>
								<tbody>
									@foreach($allSubjects as $subject)
									<tr>
										<td>{{ $subject->subject_name }}</td>
										<td>{{ $subject->subject_code }}</td>
										<td>{{ $subject->class_code }}</td>
										<td>{{ $subject->first_name.' '.$subject->last_name }}</td>
										<td>{{ $subject->description }}</td>
										<td class="action-link">
											<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal{{ $subject->id }}"><i class="fa fa-edit"></i></a>
											<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal{{ $subject->id }}"><i class="fa fa-remove"></i></a>
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
	@foreach($allSubjects as $subject)
	<div id="deleteDetailModal{{ $subject->id }}" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE SUBJECT</h4>
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
	<?php $e=1; ?>
	@foreach($allSubjects as $subject)
	<?php $e=$e+1; ?>
	<div id="editDetailModal{{ $subject->id }}" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT SUBJECT DETAILS</h4>
				</div>
				<div class="modal-body dash-form">
					{!! Form::open(['route' => 'subject.update','method'=>'post','name'=>'editSubjectForm'.$e]) !!}
					<div class="col-sm-3">
						<label class="clear-top-margin"><i class="fa fa-book"></i>NAME</label>
						<input type="text" name="subject_name" placeholder="Name" value="{{ $subject->subject_name }}" />
						<input type="hidden" name="id" value="{{ $subject->id }}" />
					</div>
					<div class="col-sm-3">
						<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
						<select name="label_id">
							<option>-- Select --</option>
							@foreach($allClasses as $class)
							<option value="{{ $class->id }}" @if($class->id == $subject->label_id)
							 selected @endif> {{ $class->class_name }} </option>
							@endforeach
						</select>
					</div>
					<div class="col-sm-3">
						<label class="clear-top-margin"><i class="fa fa-code"></i>CODE</label>
						<input type="text" name="subject_code" placeholder="Code" value="{{ $subject->subject_code }}" />
					</div>
					<div class="col-sm-3">
						<label class="clear-top-margin"><i class="fa fa-book"></i>TYPE</label>
						<select name="type">
							<option>-- Select --</option>
							<option value="COMMON">COMMON</option>
							<option value="COMPULSORY">COMPULSORY</option>
							<option value="OPTONAL">OPTONAL</option>
						</select>
					</div>
					<div class="col-sm-3">
						<label class="clear-top-margin"><i class="fa fa-book"></i>FOR</label>
						<select name="group">
							<option>-- Select --</option>
							<option value="ALL">ALL</option>
							<option value="SCINCE">SCINCE</option>
							<option value="ARTS">ARTS</option>
							<option value="COMMARTS">COMMARTS</option>
						</select>
					</div>
					<div class="col-sm-3">
						<label class="clear-top-margin"><i class="fa fa-user-secret"></i>TEACHER</label>
						<select name="teacher_id">
							<option>-- Select --</option>
							@foreach($teachers as $teacher)
							<option value="{{ $teacher->id }}"
							 @if($teacher->id == $subject->subject_teacher_id) selected @endif > {{ $teacher->first_name.' '.$teacher->last_name }}</option>
							@endforeach
						</select>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-12">
						<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
						<textarea name="description" placeholder="Enter Description Here">{{ $subject->description }}</textarea>
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
	<script>
        document.forms['editSubjectForm{{ $e }}'].elements['group'].value = '{{ $subject->group }}';
        document.forms['editSubjectForm{{ $e }}'].elements['type'].value = '{{ $subject->type }}';
    </script>
	@endforeach
@endsection