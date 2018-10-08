<div class="sidebar-nav-wrapper" id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li>
			<a href="{{ url('/home') }}"><i class="fa fa-home menu-icon"></i> HOME</a>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-users menu-icon"></i> STUDENTS <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li>							
					<a href="{{ url('/add-student') }}"><i class="fa fa-caret-right"></i>ADD</a>
				</li>
				<li>
					<a href="{{ url('/student-list') }}"><i class="fa fa-caret-right"></i>ALL STUDENT  </a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user-secret menu-icon"></i> TEACHERS <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li>							
					<a href="{{ url('/add-teacher') }}"><i class="fa fa-caret-right"></i>ADD</a>
				</li>
				<li>
					<a href="{{ url('/teacher-list') }}"><i class="fa fa-caret-right"></i>ALL TEACHER</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</li>
		<li>
			<a href="{{ url('/message') }}"><i class="fa fa-envelope menu-icon"></i> MY MESSAGES</a>
		</li>
		<li>
			<a href="{{ url('/announcement') }}"><i class="fa fa-bullhorn menu-icon"></i> ANNOUNCEMENTS</a>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-file-o menu-icon"></i> CLASSES <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li>							
					<a href="{{ url('/class') }}"><i class="fa fa-caret-right"></i>ADD CLASS</a>
				</li>
				<li>
					<a href="{{ url('/section') }}"><i class="fa fa-caret-right"></i>ADD SECTION</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-book menu-icon"></i> SUBJECTS <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li>							
					<a href="{{ url('/subject') }}"><i class="fa fa-caret-right"></i>SUBJECTS</a>
				</li>
				<li>
					<a href="{{ url('/paper') }}"><i class="fa fa-caret-right"></i>PAPER</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-calendar menu-icon"></i> TIMETABLE <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li>							
					<a href="{{ url('/create-timetable') }}"><i class="fa fa-caret-right"></i>CREATE</a>
				</li>
				<li>
					<a href="{{ url('/class-timetable') }}"><i class="fa fa-caret-right"></i>VIEW</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-address-card menu-icon"></i> REPORTS <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li>							
					<a href="{{ url('/teacher-attendence-report') }}"><i class="fa fa-caret-right"></i>ATTENDENCE</a>
				</li>
				<li>
					<a href="{{ url('/teacher-marks-report') }}"><i class="fa fa-caret-right"></i>MARKS</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</li>
	</ul>
</div>