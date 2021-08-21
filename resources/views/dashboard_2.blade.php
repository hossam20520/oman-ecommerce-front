<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box rejected_orders">
        <span class="info-box-icon bg-danger  elevation-1"><i class="fas fa-times-circle"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.rjo') }}</span>
          <span class="info-box-number">
           {{ $rejected }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->


    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3 accepted_orders">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-clipboard-check"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.aco') }}</span>
          <span class="info-box-number">{{ $accepted }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>


    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3 pending_orders">
        <span class="info-box-icon  elevation-1" style="background-color: #c341c2; color:white"><i class="fas fa-clock"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.pndo') }}</span>
          <span class="info-box-number">{{ $pending }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3 delivered">
        <span class="info-box-icon  elevation-1" style="background-color: #4850e0!important; color:white"><i class="fa fa-archive"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.dvor') }}</span>
          <span class="info-box-number">{{ $deliverd }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
 
    <!-- /.col -->
  </div>