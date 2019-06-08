<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          @can('posts.post',Auth::guard('admin')->user())
            <li class=""><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i> Posts</a></li>
          @endcan
            @can('posts.category',Auth::guard('admin')->user())
            <li class=""><a href=""><i class="fa fa-circle-o"></i> Categories</a></li>
            @endcan
          @can('posts.adminaccount',Auth::guard('admin')->user())
            <li class=""><a href="{{ route('admin.index') }}"><i class="fa fa-circle-o"></i>Account Admin</a></li>
          @endcan
          @can('posts.role', Auth::guard('admin')->user())
            <li class=""><a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i> Roles</a></li>
          @endcan
          @can('posts.permission', Auth::guard('admin')->user())
            <li class=""><a href="{{ route('permission.index') }}"><i class="fa fa-circle-o"></i> Permissions</a></li>
          @endcan
        </li>
        
        
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>