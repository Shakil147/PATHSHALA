@extends('dashboard.admin.master')
@section('title')
ALL PAPER
@endsection
@section('cssPlgin')

@endsection

@section('jsPlgin')
<script type="text/javascript">	
       $(document).on('change','#label',function(){        	
			//console.log("hmm its change with id");
           var label_id=$(this).val();
             //console.log(label_id);
             $.ajax({
                type:'get',
                url:'{!!URL::to('subjects')!!}',
                data:{'id':label_id}, 
	           	success:function(data){
		          //console.log(data);

		          $('#subjects').empty();
		          $('#subjects').append('<option value="0" disable="true" selected="true" disabled >=== Select ===</option>');

		          $.each(data, function(index, regenciesObj){
		            $('#subjects').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.subject_code+' '+ regenciesObj.subject_name +'</option>');
		          })
	    		}, 
		        error:function(){
		        	console.log("error");
	        	}
	        });
        });	
	<?php $e = 1; ?>
	@foreach($allPapers as $paper)
	<?php $e = $e+1; ?>

       $(document).on('change','#label_paper_form{{ $e }}',function(){        	
			//console.log("hmm its change with id");
           var label_id=$(this).val();
             //console.log(label_id);
             $.ajax({
                type:'get',
                url:'{!!URL::to('subjects')!!}',
                data:{'id':label_id}, 
	           	success:function(data){
		          //console.log(data);

		          $('#sudject_paper_form{{ $e }}').empty();
		          $('#sudject_paper_form{{ $e }}').append('<option value="0" disable="true" selected="true" disabled >=== Select ===</option>');

		          $.each(data, function(index, regenciesObj){
		          	if (regenciesObj.id == {{ $paper->subject_id }}) {
		          		//console.log('match');
		          		$('#sudject_paper_form{{ $e }}').append('<option value="'+ regenciesObj.id +'" selected="true" >'+ regenciesObj.subject_code+' '+ regenciesObj.subject_name +'</option>');
		          	} else{
		          		//console.log('no match');
		          		$('#sudject_paper_form{{ $e }}').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.subject_code+' '+ regenciesObj.subject_name +'</option>');
		          	}
		            
		          })
	    		}, 
		        error:function(){
		        	console.log("error");
	        	}
	        });
        });	
       @endforeach
</script>
@endsection

@section('mainBody')
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-cogs"></i>ALL PAPER</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<div class="col-sm-4">
					<div class="dash-item first-dash-item">
						<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD PAPER</h6>
						<div class="inner-item">
							{!! Form::open(['route' => 'paper.add','method'=>'post']) !!}
							<div class="dash-form">

								<label class="clear-top-margin"><i class="fa fa-code"></i>CLASS</label>
								<select name="label_id" required id="label">
									<option disabled>-- Select --</option>
									@foreach($allClasses as $class)
									<option value="{{ $class->id }}">{{ $class->class_name }}</option>
									@endforeach
								</select>

								<label><i class="fa fa-code"></i>SUBJECT</label>
								<select name="subject_id" required id="subjects">
									<option disabled>-- Select --</option>
									@foreach($allSubjects as $subject)
									<option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
									@endforeach
								</select>
								<label><i class="fa fa-book"></i>PAPER NAME</label>
								<input type="text" name="paper_name" placeholder="Basic Mathematics" required />

								<label><i class="fa fa-code"></i>PAPER CODE</label>
								<input type="text" name="paper_code" placeholder="MTH101" required />		

								<label><i class="fa fa-code"></i>TEACHER</label>
								<select name="teacher_id" required >
									<option disabled>-- Select --</option>
									@foreach($teachers as $teacher)
									<option value="{{ $teacher->id }}">
										{{ $teacher->first_name.' '.$teacher->last_name }}
									</option>
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
						<h6 class="item-title"><i class="fa fa-sliders"></i>ALL PAPERS</h6>
						<div class="inner-item">
							<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th><i class="fa fa-book"></i>NAME</th>
										<th><i class="fa fa-book"></i>SUBJECT</th>
										<th><i class="fa fa-code"></i>CODE</th>
										<th><i class="fa fa-cogs"></i>CLASS</th>
										<th><i class="fa fa-user-secret"></i>TEACHER</th>
										<th><i class="fa fa-info-circle"></i>DESCRIPTION</th>
										<th><i class="fa fa-sliders"></i>ACTION</th>
									</tr>
								</thead>
								<tbody>
									@foreach($allPapers as $paper)
									<tr>
										<td>{{ $paper->paper_name }}</td>
										<td>{{ $paper->subject_name }}</td>
										<td>{{ $paper->paper_code }}</td>
										<td>{{ $paper->class_code }}</td>
										<td>{{ $paper->first_name.' '.$paper->last_name }}</td>
										<td>{{ $paper->description }}</td>
										<td class="action-link">
											<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal{{ $paper->id }}"><i class="fa fa-edit"></i></a>
											<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal{{ $paper->id }}"><i class="fa fa-remove"></i></a>
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
	@foreach($allPapers as $paper)
	<div id="deleteDetailModal{{ $subject->id }}" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE PAPER</h4>
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
	<?php $e = 1; ?>
	@foreach($allPapers as $paper)
	<?php $e = $e+1; ?>
	<div id="editDetailModal{{ $paper->id }}" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT SUBJECT DETAILS</h4>
				</div>
				<div class="modal-body dash-form">
					{!! Form::open(['route' => 'paper.update','method'=>'post','name'=>'editpaperForm'.$e]) !!}
					<div class="col-sm-3">
						<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
						<select name="label_id" id="label_paper_form{{ $e }}">
							<option>-- Select --</option>
							@foreach($allClasses as $class)
							<option value="{{ $class->id }}" @if($class->id == $paper->label_id)
							 selected @endif> {{ $class->class_name }} </option>
							@endforeach
						</select>
					</div>
					
					<div class="col-sm-4">
						<label class="clear-top-margin"><i class="fa fa-book"></i>SUBJECT</label>
						<select name="subject_id" required id="sudject_paper_form{{ $e }}">
							<option disabled>-- Select --</option>
							@foreach($allSubjects as $subject)
							<option value="{{ $subject->id }}" @if($subject->id == $paper->subject_id)selected @endif >{{ $subject->subject_name }}</option>
							@endforeach
						</select>
					</div>


					<div class="col-sm-4">
						<label class="clear-top-margin"><i class="fa fa-book"></i>NAME</label>
						<input type="text" name="paper_name" placeholder="Name" value="{{ $paper->paper_name }}" />
						<input type="hidden" name="id" value="{{ $paper->id }}" />
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-3">
						<label class="clear-top-margin"><i class="fa fa-code"></i>CODE</label>
						<input type="text" name="paper_code" placeholder="Code" value="{{ $paper->paper_code }}" />
					</div>
					<div class="col-sm-4">
						<label class="clear-top-margin"><i class="fa fa-user-secret"></i>TEACHER</label>
						<select name="teacher_id">
							<option>-- Select --</option>
							@foreach($teachers as $teacher)
							<option value="{{ $teacher->id }}"
							 @if($teacher->id == $paper->paper_teacher_id) selected @endif > {{ $teacher->first_name.' '.$teacher->last_name }}</option>
							@endforeach
						</select>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-12">
						<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
						<textarea name="description" placeholder="Enter Description Here">{{ $paper->description }}</textarea>
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
