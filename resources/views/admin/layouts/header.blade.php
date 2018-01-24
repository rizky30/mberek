<header class="main-header">
    <!-- Logo -->
    <a href="/admin/home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sumber Rejeki</b> <small>Panel</small></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ URL::to('/image/'.Auth::user()->gambar) }}" class="img-circle" alt="User Image" width="35" height="35"  />
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                 <img src="{{ URL::to('/image/'.Auth::user()->gambar) }}" class="img-circle" alt="User Image"   />

                <p>
                  {{ Auth::user()->name }} - Web Developer
                  <small>Member since {{ Auth::user()->created_at->toFormattedDateString() }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" onclick="profile();" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="btn btn-default pull-right">
                      <a href="{{'/logout'}}" 
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="/admin/logout" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Sweet Alert -->
  <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">

  <script>
    function profile() {
      swal({
        html:
          '<div class="panel-header"><img src="{{ URL::to('/image/'.Auth::user()->gambar) }}" class="img-circle" alt="User Image" style="width:15rem"  /></div>' +
          '<div style="text-align:center;"><h2>{{ Auth::user()->name }}</h2>' +
          '<h4 style="color:rgb(48, 133, 214);">{{ Auth::user()->email }}</h4>' +
          '<h4>{{ Auth::user()->tel }}</div></h4>',
          showCloseButton: true,
      })
    }
  </script>