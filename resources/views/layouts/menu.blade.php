<link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">

<li class="nav-item menu-open">
    {{-- <a href="#" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Dashboard
        <i class="right fas fa-angle-left"></i>
      </p>
    </a> --}}
    <ul class="nav nav-treeview">
      @role('Admin')
      <li class="nav-item">
        <a href="{{route('dashboardindex')}}" class="nav-link active">
          <i class="fas fa-tachometer-alt nav-icon"></i>
          <p>Dashboard </p>
        </a>
      </li>
      @endrole 
      
    </ul>
  </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Registration
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('farmerrecords_create')}}" class="nav-link">
                  <i class="fa-solid fa-wheat-awn"></i>                  <p>Farmer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('multiplierrecords_create')}}" class="nav-link">
                  <i class="fa-solid fa-briefcase"></i>
                  <p>Multiplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('serviceproviderrecords_create')}}" class="nav-link">
                  <i class="fa-brands fa-servicestack"></i>                  <p>Service Provider</p>
                </a>
              </li>
        
              </li>
            </ul>


          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Farm Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('gardenRegCreate')}}" class="nav-link">
                  <i class="fa-solid fa-file-waveform"></i>
                                    <p>Garden Registration</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{route('recordsmanagementindex')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Records Management</p>
                </a>
              </li> --}}

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-bug"></i>
              <p>
                Paste And Disease
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('asktheexpertindex')}}" class="nav-link">
                  <i class="fa-solid fa-question"></i>                  <p>Ask The Expert</p>
                </a>
              </li>
            
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-shop"></i>
              <p>
                Market Place
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('seedseller_create')}}" class="nav-link">
                  <i class="fa-solid fa-money-bill-wheat"></i>
                                    <p>Sellers of Seed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('seedmarket')}}" class="nav-link">
                  <i class="nav-icon fa fa-shopping-cart"></i>
                  <p>Seed Market</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('serviceseller_create')}}" class="nav-link">
                  <i class="fa-solid fa-money-bill-wheat"></i>
                                    <p>Sellers of Service</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('servicemarket')}}" class="nav-link">
                  <i class="nav-icon fa fa-shopping-cart"></i>
                  <p>Service Market</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{route('preOrder')}}" class="nav-link">
                  <i class="fa-brands fa-opencart"></i>
                                    <p>Pre Order</p>
                </a>
              </li>
            </ul>
            </li>

          {{-- @role('Admin') --}}
         <li class="nav-header">Others</li>
           {{-- <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right"></span>
              </p>
            </a> --}}
     
              <li class="nav-item">
                <a href="{{route('roles_index')}}" class="nav-link">
                  <i class="fa fa-bar-chart"></i>
                  <p>Roles Management</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{route('permission_index')}}" class="nav-link">
                  <i class="fa-solid fa-drum"></i>
                 <p>Permission Management</p>
                </a>
              </li> 
              {{-- @endrole  --}}
              
{{--          
             
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li> --}}
        </ul>
   