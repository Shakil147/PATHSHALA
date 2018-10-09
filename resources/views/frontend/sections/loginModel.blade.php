

<div class="modal fade" id="loginModal" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content login-modal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-sign-in"></i>LOGIN</h4>
			</div>
			<div class="modal-body">
				<div>
					<label><i class="fa fa-user"></i>USERNAME/EMAIL</label>
					<input class="form-control" type="text" placeholder="Username/Email">
				</div>
				<div>
					<label><i class="fa fa-key"></i>PASSWORD</label>
					<input class="form-control" type="password" placeholder="Password">
				</div>
				<a href="#" class="forgot-link">FORGOT PASSWORD?</a>
				<a href="#" class="login-link"><i class="fa fa-sign-in"></i>LOGIN</a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="loginModalTeacher" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content login-modal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-sign-in"></i>LOGIN AS TEACHER</h4>
			</div>
			{!! Form::open(['route' => 'teacher.login','method'=>'post']) !!}
			<div class="modal-body">
				<div>
					<label><i class="fa fa-user"></i>USERNAME/EMAIL</label>
					<input name="email" class="form-control" type="text" placeholder="Username/Email">
				</div>
				<div>
					<label><i class="fa fa-key"></i>PASSWORD</label>
					<input name="password" class="form-control" type="password" placeholder="Password">
				</div>
				<a href="#" class="forgot-link">FORGOT PASSWORD?</a>
				<button class="login-link">
					<i class="fa fa-sign-in"></i>LOGIN
				</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

<div class="modal fade" id="loginModalStudent" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content login-modal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-sign-in"></i>LOGIN AS STUDENT</h4>
			</div>
			{!! Form::open(['route' => 'student.login','method'=>'post']) !!}
			<div class="modal-body">
				<div>
					<label><i class="fa fa-user"></i>USERNAME/EMAIL</label>
					<input name="email" class="form-control" type="text" placeholder="Username/Email">
				</div>
				<div>
					<label><i class="fa fa-key"></i>PASSWORD</label>
					<input name="password" class="form-control" type="password" placeholder="Password">
				</div>
				<a href="#" class="forgot-link">FORGOT PASSWORD?</a>
				<button class="login-link">
					<i class="fa fa-sign-in"></i>LOGIN
				</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
