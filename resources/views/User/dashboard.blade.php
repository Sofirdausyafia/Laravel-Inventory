@extends('Layout.user_skeleton')
@section('content')
<div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
          </ol>

          <div class="col-md-3">
             <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                <li><a href="#"><i class="fa fa-filter"></i> Junk</a></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          </div>
          <div class="col-md-9">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
              </ol>

              <div class="carousel-inner">
                <div class="item active">
                  <img class="d-block w-100" style="margin-left: 36px;" src="{{asset('background/ss.jpg')}}" alt="First slide">
                </div>

                <div class="item">
                  <img class="d-block w-100" style="margin-left: 36px;" src="{{asset('background/E-commerce.png')}}" alt="Second slide">
                </div>

                <div class="item">
                  <img class="d-block w-100" style="margin-left: 36px;" src="{{asset('background/ol.jpg')}}" alt="Third slide">
                </div>
              </div>

              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left"></span>
              </a>

              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right"></span>
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="box box-solid bg-green-gradient">
                <div class="box-body no-padding">
                  <img src="{{asset('background/emon.jpg')}}">
                </div>
                <div class="box-footer">
                  <h5>Ini Boneka</h5>
                </div>
              </div>
            </div>
          </div>
          <div>
            <a href="{{url('checkout/create')}}" class="btn btn-primary">Go somewhere</a>
          </div>
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
@endsection