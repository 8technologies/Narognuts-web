
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app1.css')}}"/>



 <!-- Favicons -->
 <link href="{{asset('admin-assets/img/favicon.png')}}" rel="icon">
 <link href="{{asset('admin-assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin-assets/css/style1.css')}}" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    <!--<script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
    </script>-->



</head>
<body>
<!--Header-->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between" id="app">
            <a class="logo d-flex align-items-center" href="{{ url('/') }}">
                <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block"> {{ config('app.name', 'Laravel') }}</span>
              </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->

            <div class="search-bar">
                <form class="search-form d-flex align-items-center" method="POST" action="#">
                  <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                  <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End Search Bar -->


              <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                  <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                      <i class="bi bi-search"></i>
                    </a>
                  </li><!-- End Search Icon-->



                   <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                      </a><!-- End Notification Icon -->

                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                          You have 4 new notifications
                          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                          <i class="bi bi-exclamation-circle text-warning"></i>
                          <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                          </div>
                        </li>

                        <li>
                          <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                          <i class="bi bi-x-circle text-danger"></i>
                          <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                          </div>
                        </li>

                        <li>
                          <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                          <i class="bi bi-check-circle text-success"></i>
                          <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                          </div>
                        </li>

                        <li>
                          <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                          <i class="bi bi-info-circle text-primary"></i>
                          <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                          </div>
                        </li>

                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                          <a href="#">Show all notifications</a>
                        </li>

                      </ul><!-- End Notification Dropdown Items -->

                    </li><!-- End Notification Nav -->

                    <li class="nav-item dropdown">

                      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                      </a><!-- End Messages Icon -->

                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                          You have 3 new messages
                          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                              <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                              <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                              </div>
                            </a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li class="message-item">
                            <a href="#">
                              <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                              <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                              </div>
                            </a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>


                          <li class="message-item">
                            <a href="#">
                              <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                              <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                              </div>
                            </a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>

                          <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                          </li>

                        </ul><!-- End Messages Dropdown Items -->

                      </li><!-- End Messages Nav -->


                      <li class="nav-item dropdown pe-3">

                        <a id="navbarDropdown" class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          <span class="d-none d-md-block dropdown-toggle ps-2"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> </span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                              <h6></h6>
                              <span>Web Designer</span>
                            </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                  <i class="bi bi-person"></i>
                                  <span>My Profile</span>
                                </a>
                              </li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>

                              <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                  <i class="bi bi-gear"></i>
                                  <span>Account Settings</span>
                                </a>
                              </li>

                              <li>
                                <hr class="dropdown-divider">
                              </li>

                              <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('home')}}">
                                  <i class="bi bi-question-circle"></i>
                                  <span>Need Help?</span>
                                </a>
                              </li>

                              <li>
                                <hr class="dropdown-divider">
                              </li>

                              <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}>
                                  <i class="bi bi-box-arrow-right"></i>
                                  <span>Log Out</span>
                                </a>
                              </li>
                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                      </ul>
                    </nav><!-- End Icons Navigation -->

                  </header><!-- End Header -->


<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="{{ route('home')}}">
        <li class="nav-item">
            <a class="nav-link " href="index.html">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->

        <li class="nav-item">

            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{ route('home')}}" >
                <i class="bi bi-menu-button-wide"></i><span>Registration</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav" aria-labelledby="navbarDropdown">
                  <li>
                   <a href="{{ route('farmer')}}" >
                    <i class="bi bi-circle"></i><span>Farmer</span></a>
                  </li>
           <li >
            <a href="{{ route('agrodealer')}}" >
                <i class="bi bi-circle"></i><span>Agro Dealer</span>
            </a>
        </li>
        <li>

            <a href="{{ route('home')}}" >
                <i class="bi bi-circle"></i><span>Multipliers of Seeds</span>
            </a>
        </li>
     </ul>
        </li>


        <li class="nav-item">

            <a  class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="{{ route('home')}}" >
            <i class="bi bi-journal-text"></i><span>Farm Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        </li>
        <li class="nav-item">
           <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="{{ route('home')}}" >
            <i class="bi bi-layout-text-window-reverse"></i><span>Pest and Diseases</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
        </li>
        <li class="nav-item">

            <a  class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="{{ route('home')}}"  aria-expanded="false">
                <i class="bi bi-bar-chart"></i><span>Marketplace</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
            <ul class="nav-content collapse " data-bs-parent="#sidebar-nav" aria-labelledby="navbarDropdown">
                <li>
                 <a href="{{ route('home')}}" >
                <i class="bi bi-circle"></i><span>Sell</span>
               </a>
               </li>
               <li >
             <a href="{{ route('home')}}" >
                <i class="bi bi-circle"></i><span>Order</span>
            </a>
            </li>
           <li >

            <a href="{{ route('home')}}" >
                <i class="bi bi-circle"></i><span>Pre-Order</span>
            </a>
           </li>
               </ul>
        </li>

        <li class="nav-item">

            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse"  href="{{ route('home')}}" >
                <i class="bi bi-question-circle"></i><span>Ask the Expert</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
        </li>

    </ul>
</aside>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

<!--<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->

</div>
</section>
</main><!-- End #main -->

</body>
</html>
