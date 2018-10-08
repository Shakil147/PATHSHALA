<div class="sidebar-nav-wrapper" id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<li>
						<a href="{{ url('/teacher-home') }}"><i class="fa fa-home menu-icon"></i> HOME</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-file-code-o menu-icon"></i> ASSIGNMENTS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="{{ url('/create-assignment') }}"><i class="fa fa-caret-right"></i>CREATE</a>
							</li>
							<li>
								<a href="{{ url('/assignment-download') }}"><i class="fa fa-caret-right"></i>DOWNLOAD</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bar-chart menu-icon"></i> ATTENDENCE <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="{{ url('/mark-student-attendence') }}"><i class="fa fa-caret-right"></i>MARK</a>
							</li>
							<li>
								<a href="{{ url('/view-student-attendence') }}"><i class="fa fa-caret-right"></i>VIEW</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li>
						<a href="{{ url('/teacher-message') }}"><i class="fa fa-envelope menu-icon"></i> MY MESSAGES</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-address-card menu-icon"></i> MARKS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="{{ url('/add-marks') }}"><i class="fa fa-caret-right"></i>CREATE</a>
							</li>
							<li>
								<a href="{{ url('/view-student-marks') }}"><i class="fa fa-caret-right"></i>VIEW</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li>
						<a href="{{ url('/t-timetable') }}"><i class="fa fa-calendar menu-icon"></i> TIME TABLE</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-address-card menu-icon"></i> REPORTS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="{{ url('/attendence-report') }}"><i class="fa fa-caret-right"></i>ATTENDENCE</a>
							</li>
							<li>
								<a href="{{ url('/t-marks-report') }}"><i class="fa fa-caret-right"></i>MARKS</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
				</ul>
			</div>