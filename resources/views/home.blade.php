

 @extends('layouts.app')

@section('content')

{{--
 <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              Dashboard
            </a>
          </li>
          <li   aria-labelledby="ordersDropdown">
            <a class="nav-link dropdown-toggle" href="#">
              Registration
            </a>
            <div class="dropdown-menu" aria-labelledby="Registration">
              <a class="dropdown-item" href="{{('farmerRecords.farmerRecords') }}">Farmers</a>
              <a class="dropdown-item" href="#">Multipliers</a>
              <a class="dropdown-item" href="#">ServiceProviders</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Farm Management
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Paste And Disease
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
               Market Place
            </a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
             Ask The Expert
          </a>
        </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-10 ml-sm-auto">


    </main>
  </div>
  
</div> --}}


 

{{-- <div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ _('Ground Nut') }}</a>
            <a href="#" class="simple-text logo-normal">{{ _('White Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ _('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel"></i>
                    <span class="nav-link-text">{{ ('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('user.profile') }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ ('User Profile') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.management') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ ('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ ('Icons') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ ('Maps') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ ('Notifications') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ ('Table List') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ ('Typography') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ ('RTL Support') }}</p>
                </a>
            </li>
            <li class="bg-info">
                <a href="{{ route('upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ ('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
 --}}

@endsection

