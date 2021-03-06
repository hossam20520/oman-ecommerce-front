<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box vx" data-title="Welcome!" data-intro="Hello World! 👋" >
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-boxes"></i></span>

        <div class="info-box-content iva" >
          <span class="info-box-text">{{ trans('dash.dash.inventory') }}</span>
          <span class="info-box-number">
          {{ $inverntory }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3 total_users">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.Total_Users') }}</span>
          <span class="info-box-number">{{ $clientcount }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3 sales">
        <span class="info-box-icon  elevation-1" style="background-color: #FFD700; color:white"><i class="fas fa-shopping-cart"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.Sales') }}</span>
          <span class="info-box-number">{{ $sales }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3 new_members">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.nmw') }}</span>
          <span class="info-box-number">{{ $NewUsers }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>