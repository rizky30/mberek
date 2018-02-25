
@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  </section>

  <!-- Main content -->
  <section class="content">







     <div class="row">
        <div class="col-xs-12">
          <div class="container">
              <div class="jumbotron text-center" style="margin-right: 8rem; color: white; background-color: #222d32">
                  <h2>Selamat Datang, {{ Auth::user()->name }}</h2>
                  <p>Awali Harimu dengan Bismillah, selalu berfikir positif dan lakukan yang terbaik.</p>
                  <br>

    
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$users->count()}}</div>
                                    <div>Admins</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/viewAdmin">
                            <div class="panel-footer">
                                <span class="pull-left">view Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row"> 
                                <div class="col-xs-3">
                                    <i class="fa fa-camera fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$kameras->count()}}</div>
                                    <div>Kamera</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/viewCamera">
                            <div class="panel-footer">
                                <span class="pull-left">view Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-video-camera fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$lensa->count()}}</div>
                                    <div>Lensa</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/viewLensa">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$aksesoris->count()}}</div>
                                    <div>Aksesoris</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/viewAksesoris">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-heart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$wishlist->count()}}</div>
                                    <div>Wishlist!</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/viewWishlist">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$contacts->count()}}</div>
                                    <div>Masukkan</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/viewMasukkan">
                            <div class="panel-footer">
                                <span class="pull-left">view Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                



            </div>
              </div>
          </div>
        </div>
      </div>
<!-- 
      <div class="container" style="padding-right: 95px">
        <div class="row">
          <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-camera fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div style="font-size: 40px;"></div>
                      <div>Kamera</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="panel panel-green" style="">
                <div class="panel-heading" style="">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-video-camera fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div style="font-size: 40px;">da</div>
                      <div>Lensa</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
          </div>  

          <div class="col-lg-4 col-md-6">
              <div class="panel panel-yellow" style="">
                <div class="panel-heading" style="">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div style="font-size: 40px;"></div>
                      <div>Aksesoris</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
          </div>                 
        </div>
      </div> -->


      
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

