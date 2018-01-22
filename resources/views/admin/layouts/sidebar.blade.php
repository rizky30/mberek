<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="margin-top: 10px">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
         {{--  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> --}}
         <img src="{{ URL::to('/image/'.Auth::user()->gambar) }}" class="img-circle" alt="User Image"  />

        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <p style="color: #2e9ad0">Sumber Rejeki Corp.</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
       
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        {{--<li class="active treeview">--}}
            {{--<li class=""><a href="/admin/home"><i class="fa fa-home"></i> Home</a></li>--}}
            {{--@can('posts.category',Auth::user())--}}
            {{--<li class=""><a href=""><i class="fa fa-circle-o"></i> Camera</a></li>--}}
            {{--@endcan--}}
            {{--@can('posts.tag',Auth::user())--}}
            {{--<li class=""><a href=""><i class="fa fa-circle-o"></i> Accecories</a></li>--}}
            {{--@endcan--}}

          <li class="treeview">
              <a href="/admin/home">
                  <i class="glyphicon glyphicon-home"></i> <span>Home</span>
              </a>
          </li>


        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-camera"></i> <span>Kamera</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/insertCamera"><i class="fa fa-plus"></i> Insert Camera</a></li>
            <li><a href="/admin/viewCamera"><i class="fa fa-search"></i> Lihat Camera</a></li>
          </ul>
        </li>


          <li class="treeview">
              <a href="#">
                  <i class="glyphicon glyphicon-facetime-video"></i> <span>Lensa</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="/admin/insertLensa"><i class="fa fa-plus"></i> Insert Lesa</a></li>
                  <li><a href="/admin/viewLensa"><i class="fa fa-search"></i> Lihat Lensa</a></li>
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
            <li><a href="/admin/insertAksesoris"><i class="fa fa-plus"></i> Insert Aksesoris</a></li>
            <li><a href="/admin/viewAksesoris"><i class="fa fa-search"></i> Lihat Aksesoris</a></li>
          </ul>
        </li>



          <li class="treeview">
              <a href="#">
                  <i class="fa fa-heart"></i> <span>Wishlist</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="/admin/viewWishlist"><i class="fa fa-eye"></i> Lihat Whistlist</a></li>
              </ul>
          </li>


          <li class="treeview">
              <a href="#">
                  <i class="glyphicon glyphicon-comment"></i> <span>Masukkan</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="/admin/viewMasukkan"><i class="fa fa-eye"></i> Lihat Masukkan</a></li>
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