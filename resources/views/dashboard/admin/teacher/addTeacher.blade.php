@extends('dashboard.admin.master')
@section('title')
ADD TEACHER
@endsection
@section('cssPlgin')

<meta required name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('mainBody')

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<h5 class="page-title"><i class="fa fa-user-secret"></i>ADD TEACHER</h5>
			<div class="section-divider"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<div class="col-md-12">
				{!! Form::open(['route' => 'teacher.add','method'=>'post','enctype'=>'multipart/form-data',]) !!}
				<div class="dash-item first-dash-item">
					<h6 class="item-title"><i class="fa fa-user"></i>TEACHER INFO</h6>
					<div class="inner-item">
						<div class="dash-form">
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FIRST NAME</label>
								<input type="text" value="{{ Request::old('first_name') }}" required name="first_name" placeholder="JOHN" >
								<span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>LAST NAME</label>
								<input type="text" value="{{ Request::old('last_name') }}" required name="last_name" placeholder="DOE" />
								<span class="text-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-venus"></i>GENDER</label>
								<select required name="gender" >
									<option value="0" disabled>-- Select --</option>
									<option value="Male">Male</option>
									<option value="Male">Female</option>
								</select>
								<span class="text-danger">{{ $errors->has('gender') ? $errors->first('gender') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-calendar"></i>DATE OF BIRTH</label>
								<input type="text" value="{{ Request::old('birth_date') }}" required name="birth_date" id="studentDOB" placeholder="MM/DD/YYYY"  />
								<span class="text-danger">{{ $errors->has('birth_date') ? $errors->first('birth_date') : '' }}</span>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-3">
								<label><i class="fa fa-phone"></i>NID</label>
								<input type="text" value="{{ Request::old('nid') }}" required name="nid" min="10" max="15" placeholder="123 456 7890"  />
								<span class="text-danger">{{ $errors->has('nid') ? $errors->first('nid') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-phone"></i>PHONE #</label>
								<input type="phone" value="{{ Request::old('phone') }}" required name="phone" placeholder="+88 017 xxxxxxxx"  />
								<span class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class=""><i class="fa fa-phone"></i>ALTERNATE PHONE #</label>
								<input type="phone" value="{{ Request::old('alt_phone') }}"  required name="alt_phone" placeholder="+88 017 xxxxxxxx" />
								<span class="text-danger">{{ $errors->has('alt_phone') ? $errors->first('alt_phone') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-envelope-o"></i>EMAIL</label>
								<input type="email" value="{{ Request::old('email') }}" required name="email" placeholder="john@pathshala.com" />
								<span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-3">
								<label><i class="fa fa-bell-o"></i>RELIGION</label>
								<select required name="religion" >
									<option value="0">-- Select --</option>
									<option value="ISLAM" selected>ISLAM</option>
									<option value="Buddhism">Buddhism</option>
									<option value="Christian">Christian</option>
									<option value="Hinduism">Hinduism</option>
									<option value="Other">Other</option>
								</select>
								<span class="text-danger">{{ $errors->has('religion') ? $errors->first('religion') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
								<input type="file" value="{{ Request::old('avator') }}" required name="avator" placeholder="90890"  />
								<span class="text-danger">{{ $errors->has('avator') ? $errors->first('avator') : '' }}</span>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="dash-item">
					<h6 class="item-title"><i class="fa fa-home"></i>PERMANENT ADDRESS</h6>
					<div class="inner-item">
						<div class="dash-form">
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-flag"></i>COUNTRY</label>
								<select  required name="p_country" >
									<option value="0">-- Select --</option>
									<option value="Bangladesh" selected>Bangladesh</option>
								</select>
								<span class="text-danger">{{ $errors->has('p_country') ? $errors->first('p_country') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-id-card"></i>Division</label>
								<select  required name="p_division" id="p_division_dropdown" >
									<option value="0" disabled>-- Select --</option>
								@foreach($divisions as $division)
									<option value="{{ $division->id }}"  >
										{{ $division->division_name." ".$division->division_bn_name }}
									</option>
								@endforeach
								</select>
								<span class="text-danger">{{ $errors->has('p_division') ? $errors->first('p_division') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-id-card"></i>Zilla</label>
								<select  required name="p_zilla" id="p_zilla" >
									<option value="0" disabled>-- Select --</option>
								</select>
								<span class="text-danger">{{ $errors->has('p_zilla') ? $errors->first('p_zilla') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-id-card"></i>up_zilla</label>
								<select  required name="p_up_zilla" id="p_up_zilla" >
									<option value="0" disabled>-- Select --</option>
								</select>
								<span class="text-danger">{{ $errors->has('p_up_zilla') ? $errors->first('p_up_zilla') : '' }}</span>
							</div>							
							<div class="clearfix"></div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-code"></i>ZIP</label>
								<input type="text" value="{{ Request::old('p_zip') }}"  required name="p_zip" placeholder="90890"  />
								<span class="text-danger">{{ $errors->has('p_zip') ? $errors->first('p_zip') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 1</label>
								<input type="text" value="{{ Request::old('p_address_1') }}" required name="p_address_1" placeholder="H/N 42 Street# 10"  />
								<span class="text-danger">{{ $errors->has('p_address_1') ? $errors->first('p_address_1') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 2</label>
								<input type="text" value="{{ Request::old('p_address_1') }}" required name="p_address_2" placeholder="H/N 42 Street# 10"  />
								<span class="text-danger">{{ $errors->has('p_address_2') ? $errors->first('p_address_2') : '' }}</span>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="dash-item">
					<h6 class="item-title"><i class="fa fa-home"></i>PRESENT ADDRESS</h6>
					<div class="inner-item">
						<div class="dash-form">
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-flag"></i>COUNTRY</label>
								<select  required name="country" >
									<option value="0" disabled>-- Select --</option>
									<option value="Bangladesh" selected>Bangladesh</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-id-card"></i>Division</label>
								<select  required name="division" id="division_dropdown" >
									<option value="0" disabled>-- Select --</option>
								@foreach($divisions as $division)
									<option value="{{ $division->id }}"  >{{ $division->division_name." ".$division->division_bn_name }}</option>
								@endforeach
								</select>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-id-card"></i>Zilla</label>
								<select  required name="zilla" id="zilla" >
									<option value="0" disabled>-- Select --</option>
								</select>
								<span class="text-danger">{{ $errors->has('zilla') ? $errors->first('zilla') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-id-card"></i>up_zilla</label>
								<select  required name="up_zilla" id="up_zilla" >
									<option value="0" disabled>-- Select --</option>
								</select>
								<span class="text-danger">{{ $errors->has('up_zilla') ? $errors->first('up_zilla') : '' }}</span>
							</div>							
							<div class="clearfix"></div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-code"></i>ZIP</label>
								<input type="text" value="{{ Request::old('zip') }}"  required name="zip" placeholder="90890"  />
								<span class="text-danger">{{ $errors->has('zip') ? $errors->first('zip') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 1</label>
								<input type="text" value="{{ Request::old('address_1') }}" required name="address_1" placeholder="H/N 42 Street# 10"  /><span class="text-danger">{{ $errors->has('address_1') ? $errors->first('address_1') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 2</label>
								<input type="text" value="{{ Request::old('address_2') }}" required name="address_2" placeholder="H/N 42 Street# 10"  /><span class="text-danger">{{ $errors->has('address_2') ? $errors->first('address_2') : '' }}</span>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="dash-item">
					<h6 class="item-title"><i class="fa fa-book"></i>ACADEMIC INFO</h6>
					<div class="inner-item">
						<div class="dash-form">
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-graduation-cap"></i>HIGHEST DEGREE</label>
								<input type="text" value="{{ Request::old('h_degree') }}" required name="h_degree" placeholder="PhD"  />
								<span class="text-danger">{{ $errors->has('h_degree') ? $errors->first('h_degree') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-building"></i>UNIVERSITY/COLLEGE</label>
								<input type="text" value="{{ Request::old('h_university') }}" required name="h_university" placeholder="UNIVERSITY/COLLEGE"  /><span class="text-danger">{{ $errors->has('h_university') ? $errors->first('h_university') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-calaendar"></i>YEAR PASSED</label>
								<input type="text" value="{{ Request::old('h_passing_year') }}" required name="h_passing_year" placeholder="Passing Year"  /><span class="text-danger">{{ $errors->has('h_passing_year') ? $errors->first('h_passing_year') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-puzzle-piece"></i>CGPA</label>
								<input type="text" value="{{ Request::old('h_cgpa') }}" required name="h_cgpa" placeholder="08.65" />
							</div><span class="text-danger">{{ $errors->has('h_cgpa') ? $errors->first('h_cgpa') : '' }}</span>
							<div class="clearfix"></div>
							<div class="col-sm-3">
								<label><i class="fa fa-graduation-cap"></i>OTHER DEGREE</label>
								<input type="text" value="{{ Request::old('degree') }}" placeholder="MSc" required name="degree"  /><span class="text-danger">{{ $errors->has('degree') ? $errors->first('degree') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-building"></i>UNIVERSITY/COLLEGE</label>
								<input type="text" value="{{ Request::old('university') }}" required name="university" placeholder="UNIVERSITY/COLLEGE"  /><span class="text-danger">{{ $errors->has('university') ? $errors->first('university') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-calaendar"></i>YEAR PASSED</label>
								<input type="text" value="{{ Request::old('passing_year') }}" required name="passing_year" placeholder="Passing Year"  /><span class="text-danger">{{ $errors->has('passing_year') ? $errors->first('passing_year') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-puzzle-piece"></i>CGPA</label>
								<input type="text" value="{{ Request::old('cgpa') }}" required name="cgpa" placeholder="08.65"  /><span class="text-danger">{{ $errors->has('cgpa') ? $errors->first('cgpa') : '' }}</span>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-12">
								<button  id="newTeacher" class="btn btn-primary"><i class="fa fa-paper-plane"></i> SAVE</button>
								
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@section('jsPlgin')
<script type="text/javascript">	
        $(document).on('change','#p_division_dropdown',function(){        	
            //console.log("hmm its change with id");
           var division_id=$(this).val();
             //console.log(division_id);
             $.ajax({
                type:'get',
                url:'{!!URL::to('districts')!!}',
                data:{'id':division_id}, 
	           	success:function(data){
		          //console.log(data);
		          
		          $('#p_zilla').empty();
		          $('#p_zilla').append('<option value="0" disable="true" selected="true" disabled >=== Select Zilla ===</option>');

		          $.each(data, function(index, regenciesObj){
		            $('#p_zilla').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.zilla_name+' '+ regenciesObj.bn_diatricts_name +'</option>');
		          })
	    		}, 
		        error:function(){
		        	swal({
					//console.log("error");
		        	  title: "error",
					  text: "Some Thing Wrong!",
					  icon: "error",
					  timer: 3000,
					});
	        	}
	        });
        }); 	

        $(document).on('change','#p_zilla',function(){        	
            //console.log("hmm its change with id");
           var zilla_id=$(this).val();
             //console.log(zilla_id);
             $.ajax({
                type:'get',
                url:'{!!URL::to('Upazilas')!!}',
                data:{'id':zilla_id}, 
	           	success:function(data){
		          //console.log(data);

		          $('#p_up_zilla').empty();
		          $('#p_up_zilla').append('<option value="0" disable="true" selected="true"disabled >=== Select Up Zilla ===</option>');

		          $.each(data, function(index, regenciesObj){
		            $('#p_up_zilla').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.up_zilla_name+' '+ regenciesObj.bn_name_up +'</option>');
		          })
	    		}, 
		        error:function(){
		        	console.log("error");
	        	}
	        });
        });   	

        $(document).on('change','#division_dropdown',function(){        	
            //console.log("hmm its change with id");
           var division_id=$(this).val();
             //console.log(division_id);
             $.ajax({
                type:'get',
                url:'{!!URL::to('districts')!!}',
                data:{'id':division_id}, 
	           	success:function(data){
		         // console.log(data);

		          $('#zilla').empty();
		          $('#zilla').append('<option value="0" disable="true" selected="true" disabled>=== Select Zilla ===</option>');

		          $.each(data, function(index, regenciesObj){
		            $('#zilla').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.zilla_name+' '+ regenciesObj.bn_diatricts_name +'</option>');
		          })
	    		}, 
		        error:function(){
		        	console.log("error");
	        	}
	        });
        }); 	

        $(document).on('change','#zilla',function(){        	
            //console.log("hmm its change with id");
           var zilla_id=$(this).val();
             //console.log(zilla_id);
             $.ajax({
                type:'get',
                url:'{!!URL::to('Upazilas')!!}',
                data:{'id':zilla_id}, 
	           	success:function(data){
		          //console.log(data);

		          $('#up_zilla').empty();
		          $('#up_zilla').append('<option value="0" disable="true" selected="true" disabled >=== Select Up Zilla ===</option>');

		          $.each(data, function(index, regenciesObj){
		            $('#up_zilla').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.up_zilla_name+' '+ regenciesObj.bn_name_up +'</option>');
		          })
	    		}, 
		        error:function(){
		        	console.log("error");
	        	}
	        });
        });	
</script>
@endsection