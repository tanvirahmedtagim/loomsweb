<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      
      <span class="brand-text font-weight-light"> Looms dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
      @php
      $prefix = Request::route()->getPrefix();
      $route = Request::route()->getName();
      @endphp
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link active" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>


            </ul>
          </li>
          @if (Auth::user()->role == 'admin')
          <li class="nav-item">
            <a href="{{route('prefer.index')}}" class="nav-link {{$route == 'prefer.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Preferred Type
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('contact.index')}}" class="nav-link {{$route == 'contact.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Contact
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('logo.index')}}" class="nav-link {{$route == 'logo.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logo
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('about.index')}}" class="nav-link {{$route == 'about.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                About Us
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('all_designer')}}" class="nav-link {{$route == 'all_designer'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Designer
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link {{$route == 'category.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Category
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('product.all.index')}}" class="nav-link {{$route == 'product.all.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Product 
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('slider.index')}}" class="nav-link {{$route == 'slider.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Slider
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('partner.index')}}" class="nav-link {{$route == 'partner.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Partner
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('booking.index')}}" class="nav-link {{$route == 'booking.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Appointment 
                
              </p>
            </a>
          </li>
          @elseif(Auth::user()->role == 'designer')
          <li class="nav-item">
            <a href="{{route('designer.edit')}}" class="nav-link {{$route == 'designer.edit'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profile Picture
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('designer.info.edit')}}" class="nav-link {{$route == '  designer.info.edit'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Update information
                
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="{{route('product.index')}}" class="nav-link {{$route == 'product.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Products
                
              </p>
            </a>
          </li>
          @endif

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>