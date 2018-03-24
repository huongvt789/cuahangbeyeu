
<!-- BEGIN TOP NAVIGATION MENU -->
	<div class="top-menu">
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			<li class="dropdown dropdown-user">
				<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="{{asset('assets/admin/layout/img/avatar3_small.jpg')}}"/>
					<span class="username username-hide-on-mobile">
					Nick </span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-default">
					<!-- <li>
						<a href="extra_profile.html">
						<i class="icon-user"></i> My Profile </a>
					</li>
					<li>
						<a href="page_calendar.html">
						<i class="icon-calendar"></i> My Calendar </a>
					</li>
					<li>
						<a href="inbox.html">
						<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
						3 </span>
						</a>
					</li>
					<li>
						<a href="page_todo.html">
						<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
						7 </span>
						</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="extra_lock.html">
						<i class="icon-lock"></i> Lock Screen </a>
					</li> -->
					<li>
						<a href="{{route('logout')}}">
						<i class="icon-key"></i> Log Out </a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
			<!-- BEGIN QUICK SIDEBAR TOGGLER -->
			<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			<li class="dropdown dropdown-quick-sidebar-toggler">
				<a href="{{route('logout')}}" class="dropdown-toggle">
				<i class="icon-logout"></i>
				</a>
			</li>
			<!-- END QUICK SIDEBAR TOGGLER -->
		</ul>
	</div>
<!-- END TOP NAVIGATION MENU -->