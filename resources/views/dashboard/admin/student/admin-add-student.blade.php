@extends('dashboard.admin.master')

@section('title')
ADD STUDENT
@endsection

@section('cssPlgin')
<!-- <meta   required name="csrf-token" content="{{ csrf_token() }}" /> -->
@endsection

@section('mainBody')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<h5 class="page-title"><i class="fa fa-user"></i>ADD STUDENT</h5>
			@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
			<div class="section-divider"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<div class="col-md-12">
					{!! Form::open(['route' => 'student.add','method'=>'post','enctype'=>'multipart/form-data',]) !!}
				<div class="dash-item first-dash-item">
					<h6 class="item-title"><i class="fa fa-user"></i>STUDENT INFO </h6>
					<div class="inner-item">
						<div class="dash-form">
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FIRST NAME</label>
								<input type="text" value="{{ Request::old('first_name') }}"   required name="first_name" placeholder="JOHN" >
								<span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : '' }}</span>
							</div>							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>LAST NAME</label>
								<input type="text" value="{{ Request::old('last_name') }}"   required name="last_name" placeholder="DOE" />
								<span class="text-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-venus"></i>GENDER</label>
								<select   required name="gender" >
									<option value="0" disabled>-- Select --</option>
									<option value="Male" >Male</option>
									<option value="Female">Female</option>
								</select>
								<span class="text-danger">{{ $errors->has('gender') ? $errors->first('gender') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-calendar"></i>DATE OF BIRTH</label>
								<input type="text" value="{{ Request::old('birth_date') }}"   required name="birth_date" id="studentDOB" placeholder="MM/DD/YYYY"  />
								<span class="text-danger">{{ $errors->has('birth_date') ? $errors->first('birth_date') : '' }}</span>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-3">
								<label><i class="fa fa-phone"></i>NID</label>
								<input type="text" value="{{ Request::old('nid') }}"   required name="nid" min="10" max="15" placeholder="123 456 7890"  />
								<span class="text-danger">{{ $errors->has('nid') ? $errors->first('nid') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-phone"></i>PHONE #</label>
								<input type="text" value="{{ Request::old('phone') }}"   required name="phone" placeholder="+88 017 xxxxxxxx"  />
								<span class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-envelope-o"></i>EMAIL</label>
								<input type="text" value="{{ Request::old('email') }}"   required name="email" placeholder="john@pathshala.com" />
								<span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-bell-o"></i>RELIGION</label>
								<select   required name="religion" >
									<option value="0" disabled >-- Select --</option>
									<option value="ISLAM" selected>ISLAM</option>
									<option value="Buddhism">Buddhism</option>
									<option value="Christian">Christian</option>
									<option value="Hinduism">Hinduism</option>
									<option value="Other">Other</option>
								</select>
								<span class="text-danger">{{ $errors->has('religion') ? $errors->first('religion') : '' }}</span>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-3">
								<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
								<input type="file" value="{{ Request::old('avator') }}"   required name="avator" placeholder="90890"  />
								<span class="text-danger">{{ $errors->has('avator') ? $errors->first('avator') : '' }}</span>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="dash-item">
					<h6 class="item-title"><i class="fa fa-user-secret"></i>PARENT INFO</h6>
					<div class="inner-item">
						<div class="dash-form">
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FATHER NAME</label>
								<input  required name="father_name" value="{{ Request::old('father_name') }}" type="text" placeholder="JOHN" />
								<span class="text-danger">{{ $errors->has('father_name') ? $errors->first('father_name') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>MOTHER NAME</label>
								<input  required name="mother_name" value="{{ Request::old('mother_name') }}" type="text" placeholder="LENNORE" />
								<span class="text-danger">{{ $errors->has('mother_name') ? $errors->first('mother_name') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>GUARDIANS NID</label>
								<input  required name="guardians_nid" value="{{ Request::old('guardians_nid') }}" type="text" placeholder="123 456 789" />
								<span class="text-danger">{{ $errors->has('guardians_nid') ? $errors->first('guardians_nid') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-briefcase"></i>OCCUPATION</label>
								<input  required name="occupation" value="{{ Request::old('occupation') }}" type="text" placeholder="TEACHER" />
								<span class="text-danger">{{ $errors->has('occupation') ? $errors->first('occupation') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-phone"></i>CONTACT #</label>
								<input  required name="gurdians_phone" value="{{ Request::old('gurdians_phone') }}" type="text" placeholder="1234567890" />
								<span class="text-danger">{{ $errors->has('gurdians_phone') ? $errors->first('gurdians_phone') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-phone"></i>ALTERNATE CONTACT #</label>
								<input  required name="gurdians_phone_alt" value="{{ Request::old('gurdians_phone_alt') }}" type="text" placeholder="1234567890" />
								<span class="text-danger">{{ $errors->has('gurdians_phone_alt') ? $errors->first('gurdians_phone_alt') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-envelope-o"></i>EMAIL</label>
								<input  required name="gurdians_email" value="{{ Request::old('gurdians_email') }}" type="text" placeholder="john@pathshala.com" />
								<span class="text-danger">{{ $errors->has('gurdians_email') ? $errors->first('gurdians_email') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-bell-o"></i>RELIGION</label>
								<select  required name="gurdians_religion">
									<option value="0" disabled>-- Select --</option>
									<option value="ISLAM" selected>ISLAM</option>
									<option value="Buddhism">Buddhism</option>
									<option value="Christian">Christian</option>
									<option value="Hinduism">Hinduism</option>
									<option value="Other">Other</option>
								</select>
								<span class="text-danger">{{ $errors->has('gurdians_religion') ? $errors->first('gurdians_religion') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-flag"></i>NATIONALITY</label>
								<select  required name="nationality" >
									<option>-- Select --</option>
									<option value="BANGLADESHI" selected>BANGLADESHI</option>
									<option value="OTHER">OTHER</option>
								</select>
								<span class="text-danger">{{ $errors->has('nationality') ? $errors->first('nationality') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-flag"></i>COUNTRY</label>
								<select  required name="country"  >
									<option value="0" disabled selected="true">-- Select --</option>
									<option value="Bangladesh" selected>Bangladesh</option>
								</select>
								<span class="text-danger">{{ $errors->has('country') ? $errors->first('country') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-id-card"></i>Division</label>
								<select    required name="division_id" id="division_dropdown" >
									<option value="0" disabled selected="true">-- Select --</option>
								@foreach($divisions as $division)
									<option value="{{ $division->id }}"  >{{ $division->division_name." ".$division->division_bn_name }}</option>
								@endforeach
								</select>
								<span class="text-danger">{{ $errors->has('division') ? $errors->first('division') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-id-card"></i>Zilla</label>
								<select    required name="districts_id"  id="zilla" >
									<option value="0" disabled>-- Select --</option>
								</select>
								<span class="text-danger">{{ $errors->has('zilla') ? $errors->first('zilla') : '' }}</span>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-id-card"></i>UP ZILLA</label>
								<select    required name="upzilla_id" id="up_zilla" >
									<option value="0" disabled>-- Select --</option>
								</select>
								<span class="text-danger">{{ $errors->has('up_zilla') ? $errors->first('up_zilla') : '' }}</span>
							</div>		
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-code"></i>ZIP</label>
								<input type="text" value="{{ Request::old('zip') }}"    required name="zip" placeholder="90890"  />
								<span class="text-danger">{{ $errors->has('zip') ? $errors->first('zip') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 1</label>
								<input type="text" value="{{ Request::old('address_1') }}"   required name="address_1" placeholder="H/N 42 Street# 10"  /><span class="text-danger">{{ $errors->has('address_1') ? $errors->first('address_1') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 2</label>
								<input type="text" value="{{ Request::old('address_2') }}"   required name="address_2" placeholder="H/N 42 Street# 10"  /><span class="text-danger">{{ $errors->has('address_2') ? $errors->first('address_2') : '' }}</span>
							</div>
							<div class="clearfix"></div>
							<div class="clearfix"></div>
							<div class="col-sm-3">
								<label><i class="fa fa-file-picture-o"></i>FATHER PHOTO</label>
								<input  required name="father_photo" value="{{ Request::old('father_photo') }}" type="file" placeholder="90890" />
								<span class="text-danger">{{ $errors->has('father_photo') ? $errors->first('father_photo') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-file-picture-o"></i>MOTHER PHOTO</label>
								<input  required name="mother_photo" value="{{ Request::old('mother_photo') }}" type="file" placeholder="90890" />
								<span class="text-danger">{{ $errors->has('mother_photo') ? $errors->first('mother_photo') : '' }}</span>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="dash-item">
					<h6 class="item-title"><i class="fa fa-book"></i>ACADEMIC INFO</h6>
					<div class="inner-item">
						<div class="dash-form">
							<!-- <div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-id-card"></i>REGISTRATION #</label>
								<input  required name="registration"
								 value="{{ $registration->registration +1 }}" readonly type="text" placeholder="PTH2017001" />
								<span class="text-danger">{{ $errors->has('registration') ? $errors->first('registration') : '' }}</span>
							</div> -->
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
								<select  required name="label_id" id="label">
									<option value="0" disabled>-- Select --</option>
									@foreach($labels as $label)
									<option value="{{ $label->id }}">{{ $label->class_code.' - '.$label->class_name }}</option>
									@endforeach
								</select>
								<span class="text-danger">{{ $errors->has('label_id') ? $errors->first('label_id') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-cogs"></i>SECTION</label>
								<select  required name="section_id" id="section">
									<option value="0" disabled>-- Select --</option>
								</select>
								<span class="text-danger">{{ $errors->has('section_id') ? $errors->first('section_id') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-puzzle-piece"></i>ROLL #</label>
								<input  required name="roll" value="{{ Request::old('roll') }}" type="text" placeholder="PTH05A01" />
								<span class="text-danger">{{ $errors->has('roll') ? $errors->first('roll') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-puzzle-piece"></i>GROUP #</label>
								<select name="group">
									<option>-- Select --</option>
									<option value="GENERAL">GENERAL</option>
									<option value="SCINCE">SCINCE</option>
									<option value="ARTS">ARTS</option>
									<option value="COMMARTS">COMMARTS</option>
								</select>
								<span class="text-danger">{{ $errors->has('GROUP') ? $errors->first('GROUP') : '' }}</span>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-3">
								<label><i class="fa fa-graduation-cap"></i>LAST SCHOOL</label>
								<input  required name="last_school" value="{{ Request::old('last_school') }}" type="text" placeholder="ABC SCHOOL" />
								<span class="text-danger">{{ $errors->has('last_school') ? $errors->first('last_school') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-star"></i>LAST STD</label>
								<input  required name="Last_standerd" value="{{ Request::old('Last_standerd') }}" type="text" placeholder="4 STD" />
								<span class="text-danger">{{ $errors->has('Last_standerd') ? $errors->first('Last_standerd') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-code"></i>MARKS OBTAINED</label>
								<input  required name="last_marks" value="{{ Request::old('last_marks') }}" type="text" placeholder="76%" />
								<span class="text-danger">{{ $errors->has('last_marks') ? $errors->first('last_marks') : '' }}</span>
							</div>
							<div class="col-sm-3">
								<label><i class="fa fa-futbol-o"></i>SPORTS</label>
								<select  required name="sports" >
									<option value="0" disabled>-- Select --</option>
									<option  value="Cricket" selected>Cricket</option>
									<option value="Football" >Football</option>
									<option value="Tenis" >Tenis</option>
								</select>
								<span class="text-danger">{{ $errors->has('sports') ? $errors->first('sports') : '' }}</span>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-12">
								<button type="submit"><i class="fa fa-paper-plane"></i> SAVE</button>
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
		          $('#zilla').append('<option value="0" disabled disable="true" selected="true">=== Select Zilla ===</option>');

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
		          $('#up_zilla').append('<option value="0" disabled disable="true" selected="true">=== Select Up Zilla ===</option>');

		          $.each(data, function(index, regenciesObj){
		            $('#up_zilla').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.up_zilla_name+' '+ regenciesObj.bn_name_up +'</option>');
		          })
	    		}, 
		        error:function(){
		        	console.log("error");
	        	}
	        });
        });	

        $(document).on('change','#label',function(){        	
            //console.log("hmm its change with id");
           var label_id=$(this).val();
             //console.log(label_id);
             $.ajax({
                type:'get',
                url:'{!!URL::to('sections')!!}',
                data:{'id':label_id}, 
	           	success:function(data){
		          //console.log(data);

		          $('#section').empty();
		          $('#section').append('<option value="0" disabled disable="true" selected="true">=== Select Section ===</option>');

		          $.each(data, function(index, regenciesObj){
		            $('#section').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.section_name+'</option>');
		          })
	    		}, 
		        error:function(){
		        	console.log("error");
	        	}
	        });
        });	
</script>
@endsection