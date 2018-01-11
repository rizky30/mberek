<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
         {{--  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> --}}
         <img src="{{ URL::to('/image/'.Auth::user()->gambar) }}" class="img-circle" alt="User Image"  />

        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
       
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
            <li class=""><a href="/admin/home"><i class="fa fa-circle-o"></i> Home</a></li>
            @can('posts.category',Auth::user())
            <li class=""><a href=""><i class="fa fa-circle-o"></i> Camera</a></li>
            @endcan
            @can('posts.tag',Auth::user())
            <li class=""><a href=""><i class="fa fa-circle-o"></i> Accecories</a></li>
            @endcan


 <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-camera"></i> <span>Camera</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="insertCamera"><i class="fa fa-circle-o"></i> insert Camera</a></li>
            <li><a href="viewCamera"><i class="fa fa-circle-o"></i> Lihat Camera</a></li>
          </ul>
        </li>


 <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-tasks"></i> <span>Aksesoris</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="insertAksesoris"><i class="fa fa-circle-o"></i> insert Aksesoris</a></li>
            <li><a href="viewAksesoris"><i class="fa fa-circle-o"></i> Lihat Aksesoris</a></li>
          </ul>
        </li>



 <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-facetime-video"></i> <span>lensa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="insertLensa"><i class="fa fa-circle-o"></i> insert Lesa</a></li>
            <li><a href="viewLensa"><i class="fa fa-circle-o"></i> Lihat Lensa</a></li>
          </ul>
        </li>


{{--          <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="insertUser"><i class="fa fa-circle-o"></i> insert User</a></li>
            <li><a href="viewUser"><i class="fa fa-circle-o"></i> Lihat User</a></li>
          </ul>
        </li>

                 <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-tags"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="insertTransaksi"><i class="fa fa-circle-o"></i> insert Transaksi</a></li>
            <li><a href="viewTransaksi"><i class="fa fa-circle-o"></i> Lihat Transaksi</a></li>
          </ul>
        </li> --}}



        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>