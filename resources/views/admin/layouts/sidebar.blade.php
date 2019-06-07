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
            <li class=""><a href=""><i class="fa fa-circle-o"></i> Posts</a></li>
{{--            @can('posts.category',Auth::user())--}}
            <li class=""><a href=""><i class="fa fa-circle-o"></i> Categories</a></li>
{{--            @endcan--}}
{{--            @can('posts.tag',Auth::user())--}}
            <li class=""><a href=""><i class="fa fa-circle-o"></i> Tags</a></li>
{{--            @endcan--}}
            <li class=""><a href=""><i class="fa fa-circle-o"></i> Users</a></li>
            <li class=""><a href=""><i class="fa fa-circle-o"></i> Roles</a></li>
            <li class=""><a href=""><i class="fa fa-circle-o"></i> Permissions</a></li>
        </li>
        
        
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>