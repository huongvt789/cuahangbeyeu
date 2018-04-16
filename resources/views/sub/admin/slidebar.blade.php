<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active open">
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-user"></i>
					<span class="title">Quản lý admin</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('qladmin.index')}}">
							<i class="icon-list"></i>
							Danh sách admin</a>
						</li>
						<li>
							<a href="{{route('qladmin.add')}}">
							<i class="icon-plus"></i>
							Thêm tài khoản admin</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">Quản lý order</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('order.index')}}">
							<i class="glyphicon glyphicon-refresh"></i>
							Chờ duyệt</a>
						</li>
						<li>
							<a href="{{route('order.pass')}}">
							<i class="glyphicon glyphicon-ok"></i>
							Đã giao</a>
						</li>
						<li>
							<a href="{{route('order.destroy')}}">
							<i class="glyphicon glyphicon-remove"></i>
							Hủy</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="{{route('news.index')}}">
					<i class="fa fa-newspaper-o"></i>
					<span class="title">Tin tức</span>
					<span class="arrow "></span>
					</a>
				</li>
				<li>
					<a href="{{route('producer.index')}}">
					<i class="fa fa-home"></i>
					<span class="title">Nhà cung cấp</span>
					<span class="arrow "></span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-home"></i>
					<span class="title">Loại sản phẩm</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('category.index')}}">
							<i class="fa fa-list-alt"></i>
							Danh sách
							</a>
						</li>
						<li>
							<a href="{{ url('admin/category/them') }}">
							<i class="fa fa-plus-square"></i>
							Thêm
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-home"></i>
					<span class="title">Sản phẩm</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('product.index')}}">
							<i class="fa fa-list-alt"></i>
							Danh sách
							</a>
						</li>
						<li>
							<a href="{{ url('admin/product/them') }}">
							<i class="fa fa-plus-square"></i>
							Thêm
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>