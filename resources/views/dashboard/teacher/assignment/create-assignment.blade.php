@extends('dashboard.teacher.master')
@section('title')
CREATE ASSIGNMENT
@endsection

@section('cssPlgin')

@endsection

@section('jsPlgin')

@endsection

@section('mainBody')

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<h5 class="page-title"><i class="fa fa-code"></i>CREATE ASSIGNMENT</h5>
			<div class="section-divider"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 clear-padding-xs">
			<div class="col-xs-12">
				<div class="dash-item first-dash-item">
					<h6 class="item-title"><i class="fa fa-edit"></i>CREATE NEW ASSIGNMENT</h6>
					<div class="inner-item">
						<div class="dash-form">
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>CLASS</label>
								<select>
									<option>5th STD</option>
									<option>6th STD</option>
									<option>7th STD</option>
									<option>8th STD</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>SECTION</label>
								<select>
									<option>PTH05A</option>
									<option>PTH05B</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-code"></i>COURSE</label>
								<select>
									<option>MTH101</option>
									<option>MTH102</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label class="clear-top-margin"><i class="fa fa-calendar"></i>SUBMIT BY</label>
								<input type="text" placeholder="MM/DD/YYYY" id="startDate" />
							</div>
							<div class="col-sm-12">
								<label><i class="fa fa-edit"></i>REMARKS</label>
								<textarea placeholder="REMARKS"></textarea>
							</div>
							<div class="col-sm-12">
								<label><i class="fa fa-file-code-o"></i>UPLOAD FILE</label>
								<input class="file-input" type="file" name="Upload File" />
							</div>
							<div class="col-sm-12">
								<a href="#"><i class="fa fa-paper-plane"></i> CREATE</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection