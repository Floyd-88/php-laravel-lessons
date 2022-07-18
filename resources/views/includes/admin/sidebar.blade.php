<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="{{ route('admin.hobbie.index') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Хобби
                <span class="badge badge-info right"><?php
                    if(isset($hobbie)){
                        echo $hobbie->total();  
                    } 
                    ?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.news.index') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Новости
                <span class="badge badge-info right"><?php
                    if(isset($news)){
                        echo $news->total();  
                    } 
                    ?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.work.index') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Работы
                <span class="badge badge-info right"><?php
                    if(isset($work)){
                        echo $work->total();  
                    } 
                    ?></span>
              </p>
            </a>
          </li>
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>